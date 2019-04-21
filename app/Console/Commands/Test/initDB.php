<?php

namespace App\Console\Commands\Test;

use Colors\Color;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class initDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:initDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init the DB for the PhpUnit test';

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

        $color = new Color();

        DB::table("announcement")->insert([
            "summary" => "Test #0",
            "content" => "Testing announcement #0: 祝一切顺利啦~"
        ]);

        echo $color("init the Announcement\n")->apply("light_green");


        file_put_contents(public_path("resources/games/qwq.zip"), "test file");

        DB::table("games")->insert([
            "name" => "qwq",
            "description" => "test game",
            "file_size" => "1",
            "game_logo" => "images/touhou.png",
            "file_path" => app_path("resources/games/qwq.zip")
        ]);

        echo $color("init the games\n")->apply("light_green");


        file_put_contents(public_path("resources/tools/awa.zip"), "test file");

        DB::table("tools")->insert([
            "name" => "qwq",
            "description" => "test tools",
            "file_size" => "1",
            "format" => "zip",
            "file_path" => public_path("resources/tools/qwq.zip")
        ]);

        echo $color("init the tools\n")->apply("light_green");


        file_put_contents(public_path("resources/lanCraft/qwq.zip"), "test file");

        DB::table("lanCraft")->insert([
            "name" => "qwq",
            "description" => "test lanCraft",
            "file_size" => "1",
            "format" => "zip",
            "file_path" => public_path("resources/lanCraft/qwq.zip")
        ]);

        echo $color("init the lanCraft\n")->apply("light_green");
        echo $color("\nFinish init!\n")->apply("light_green");

        return true;
    }

}
