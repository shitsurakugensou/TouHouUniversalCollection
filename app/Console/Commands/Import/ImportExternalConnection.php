<?php

namespace App\Console\Commands\Import;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class ImportExternalConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:ec';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Input the external downloading url';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){

        /*
         * Get the config
         */
        $stdin = fopen('php://stdin', 'r');

        echo "Input the config file: ";
        $config = fread($stdin, 1000);
        $config = str_replace("\\","/",$config);
        $config = str_replace(PHP_EOL,"",$config);

        // check the file
        if (is_file($config) == false){
            echo "That is not a dir. Check it again!\n";
            return false;
        }


        fclose($stdin);

        $start = microtime(true);

        // parse the config
        $config = file_get_contents($config);
        $config = json_decode($config,true);

        echo "\nConfig name: ".$config['name'];
        echo "\nConfig description:".$config['description']."\n";

        echo "\nReady to input the config...\n\n";

        for ($i = 0; $i < count($config['data']); $i++){

            $name = $config['data'][$i]['name'];
            $url = $config['data'][$i]['url'];

            if (DB::table("games")->where("name",$name)->count() == 1){
                DB::table("games")->where("name",$name)->update([
                    "external_connection" => $url
                ]);

                echo "$name - Updated\n";
            }else{
                echo "Cannot find: $name in database - Skipping\n";
            }

        }

        echo "\nFinish the ExternalConnection import. Time used: ".round(microtime(true) - $start,4)."ms\n\n";

    }
}
