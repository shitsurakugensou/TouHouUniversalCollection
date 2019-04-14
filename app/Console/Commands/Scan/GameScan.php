<?php

namespace App\Console\Commands\Scan;

use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class GameScan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scan:games';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scan all the game in one dir and add them to database';

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

        echo "Input the game path: ";
        $game_path = fread($stdin, 1000);
        $game_path = str_replace("\\","/",$game_path);
        $game_path = str_replace(PHP_EOL,"",$game_path);
        $game_path = str_replace("\n","",$game_path);

        // check the dir
        if (is_dir($game_path) == false){
            echo "That is not a dir. Check it again!\n";
            return false;
        }


        /*
         * get filtering rule
         */

        echo "Input the filtering rule of games' name [Use '|' to division] default: (|)|汉化版|+|日文版|模拟器|.rar|完整|[空格]: ";
        $filtering_rule = fread($stdin, 1000);
        $filtering_rule = str_replace(PHP_EOL,"",$filtering_rule);

        if ($filtering_rule == "" || isset($filtering_rule) == false){
            $filtering_rule = "(|)|汉化版|+|日文版|模拟器|.rar|完整| ";
        }

        $filtering_rule = explode("|",$filtering_rule);

        // close
        fclose($stdin);

        $start = microtime(true);

        echo "\nScanning the dir...\n\n";

        $dir = scandir($game_path);

        for ($i = 2; $i < count($dir); $i++){
            /*
             * get file info
             */

            // filename
            $game_name = $dir[$i];
            $filename = $dir[$i];

            for ($j = 0; $j < count($filtering_rule); $j++){
                $game_name = str_replace($filtering_rule[$j],"",$game_name);
            }

            // Size
            $filesize = filesize($game_path."/".$filename);


            // mysql
            $check = DB::table("games")->where("name", $game_name)->get();

            // if there is a game that has already had, we jump it
            if ($check->count() >= 1){
                echo "$filename | ".round($filesize/1024/1024,2)."MB - Skipped[already-loaded]\n";
                continue;
            }

            DB::table("games")->insert([
                "name" => $game_name,
                "file_size" => round($filesize/1024/1024,2),
                "file_path" => $game_path."/".$filename,
                "game_logo" => "/images/touhou.png" // base on '/public'
            ]);

            echo "$filename | ".round($filesize/1024/1024,2)."MB - Loaded\n";
        }

        echo "\nFinish the games import. Time used: ".round(microtime(true) - $start,4)."ms\n\n";

        return true;
    }
}
