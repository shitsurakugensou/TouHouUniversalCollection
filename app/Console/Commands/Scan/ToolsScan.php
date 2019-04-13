<?php

namespace App\Console\Commands\Scan;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class ToolsScan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scan:tools';

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

        echo "Input the tools path: ";
        $tools_path = fread($stdin, 1000);
        $tools_path = str_replace("\\","/",$tools_path);
        $tools_path = str_replace(PHP_EOL,"",$tools_path);
        $tools_path = str_replace("\n","",$tools_path);

        // check the dir
        if (is_dir($tools_path) == false){
            echo "That is not a dir. Check it again!\n";
            return false;
        }


        /*
         * get filtering rule
         */

        echo "Input the filtering rule of tools' name [Use '|' to division] default: .rar|+|.zip|.7z|.exe: ";
        $filtering_rule = fread($stdin, 1000);
        $filtering_rule = str_replace(PHP_EOL,"",$filtering_rule);

        if ($filtering_rule == "" || isset($filtering_rule) == false){
            $filtering_rule = ".rar|+|.zip|.7z|.exe";
        }

        $filtering_rule = explode("|",$filtering_rule);

        // close
        fclose($stdin);

        $start = microtime(true);

        echo "\nScanning the dir...\n\n";

        $dir = scandir($tools_path);

        for ($i = 2; $i < count($dir); $i++){
            /*
             * get file info
             */

            // filename
            $tools_name = $dir[$i];
            $filename = $dir[$i];
            $format = pathinfo($filename, PATHINFO_EXTENSION);

            for ($j = 0; $j < count($filtering_rule); $j++){
                $tools_name = str_replace($filtering_rule[$j],"",$tools_name);
            }

            // Size
            $filesize = filesize($tools_path."/".$filename);


            // mysql
            $check = DB::table("games")->where("name", $tools_name)->get();

            // if there is a game that has already had, we jump it
            if ($check->count() >= 1){
                echo "$filename | ".round($filesize/1024/1024,2)."MB - Skipped[already-loaded]\n";
                continue;
            }

            DB::table("tools")->insert([
                "name" => $tools_name,
                "file_size" => round($filesize/1024/1024,2),
                "file_path" => $tools_path."/".$filename,
                "format" => $format
            ]);

            echo "$filename | ".round($filesize/1024/1024,2)."MB - Loaded\n";
        }

        echo "\nFinish the games import. Time used: ".round(microtime(true) - $start,4)."ms\n\n";

        return true;
    }
}
