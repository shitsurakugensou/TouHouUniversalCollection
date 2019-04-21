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

        echo "Input the ex_connection base url (https://xxx.xx.xx/xx/xx/): ";
        $url = fread($stdin, 1000);

        fclose($stdin);

        $start = microtime(true);

        // get the number of game
        $games = DB::table("games")->get()->all();

        echo "\nReady to update the data...\n\n";

        for ($i = 0; $i < count($games); $i++){
            $game_name = $games[$i]->name;
            $game_path = $games[$i]->file_path;

            DB::table("games")->where(["name" => $game_name])->update([
                "external_connection" => str_replace("\n","",$url . rawurlencode(basename($game_path)))
            ]);

            echo $game_name . " -- Updated\n";
        }

        echo "\nFinish the ExternalConnection import. Time used: ".round(microtime(true) - $start,4)."ms\n\n";

        return true;
    }
}
