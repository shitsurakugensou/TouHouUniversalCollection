<?php

namespace App\Console\Commands\Scan;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class TutorialScan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scan:tutorials';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scan all the tools in one dir and add them to database';

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
         * Get the game's path
         */
        $stdin = fopen('php://stdin', 'r');

        echo "Input the tutorials path: ";
        $tutorials_path = fread($stdin, 1000);
        $tutorials_path = str_replace("\\","/",$tutorials_path);
        $tutorials_path = str_replace(PHP_EOL,"",$tutorials_path);
        $tutorials_path = str_replace("\n","",$tutorials_path);

        // check the dir
        if (is_dir($tutorials_path) == false){
            echo "That is not a dir. Check it again!\n";
            return false;
        }


        /*
         * get filtering rule
         */

        echo "Input the filtering rule of tools' name [Use '|' to division] default: .pdf|+|.txt|.docx|.zip|.7z|.xlsx|.rar|.htm|.html: ";
        $filtering_rule = fread($stdin, 1000);
        $filtering_rule = str_replace(PHP_EOL,"",$filtering_rule);

        if ($filtering_rule == "" || isset($filtering_rule) == false){
            $filtering_rule = ".pdf|+|.txt|.docx|.zip|.7z|.xlsx|.rar|.htm|.html";
        }

        $filtering_rule = explode("|",$filtering_rule);

        // close
        fclose($stdin);

        $start = microtime(true);

        echo "\nScanning the dir...\n\n";

        $dir = scandir($tutorials_path);

        for ($i = 2; $i < count($dir); $i++){
            /*
             * get file info
             */

            // filename
            $tutorials_name = $dir[$i];
            $filename = $dir[$i];
            $format = pathinfo($filename, PATHINFO_EXTENSION);

            for ($j = 0; $j < count($filtering_rule); $j++){
                $tutorials_name = str_replace($filtering_rule[$j],"",$tutorials_name);
            }

            // Size
            $filesize = filesize($tutorials_path."/".$filename);


            // mysql
            $check = DB::table("tutorial")->where("name", $tutorials_name)->get();

            // if there is a game that has already had, we jump it
            if ($check->count() >= 1){
                echo "$filename | ".round($filesize/1024/1024,2)."MB - Skipped[already-loaded]\n";
                continue;
            }

            DB::table("tutorial")->insert([
                "name" => $tutorials_name,
                "file_size" => round($filesize/1024/1024,2),
                "file_path" => $tutorials_path."/".$filename,
                "format" => $format
            ]);

            echo "$filename | ".round($filesize/1024/1024,2)."MB - Loaded\n";
        }

        echo "\nFinish the tutorials import. Time used: ".round(microtime(true) - $start,4)."ms\n\n";

        return true;
    }
}
