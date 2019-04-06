<?php

namespace App\Console\Commands;

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
            echo $game_path."\n";
            echo "That is not a dir. Check it again!\n";
            return;
        }


        /*
         * get filtering rule
         */

        echo "Input the filtering rule of games' name [Use '|' to division] default: (|)|汉化版|+|日文版|模拟器|.rar|完整: ";
        $filtering_rule = fread($stdin, 1000);
        $filtering_rule = str_replace(PHP_EOL,"",$filtering_rule);

        if ($filtering_rule == "" || isset($filtering_rule) == false){
            $filtering_rule = "(|)|汉化版|+|日文版|模拟器|.rar|完整";
        }

        $filtering_rule = explode("|",$filtering_rule);

        // close
        fclose($stdin);


        echo "Scanning the dir...\n";

        $dir = scandir($game_path);

        for ($i = 2; $i < count($dir); $i++){
            // get file info
            $filename = $dir[$i];
            for ($j = 0; $j < count($filtering_rule); $j++){
                $filename = str_replace($filtering_rule[$j],"",$filename);
            }

            echo $filename."\n";
        }


    }
}
