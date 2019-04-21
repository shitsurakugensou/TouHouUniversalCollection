<?php

namespace App\Console\Commands\Test;

use Colors\Color;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;

class initTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:initTest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init the testing env for the PhpUnit test';

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


        is_dir(public_path("resources/games")) == false ? mkdir(public_path("resources/games")) : true;

        file_put_contents(public_path("resources/games/qwq.zip"), "test file");

        DB::table("games")->insert([
            "name" => "qwq",
            "description" => "test game",
            "file_size" => "1",
            "game_logo" => "images/touhou.png",
            "file_path" => public_path("resources/games/qwq.zip")
        ]);

        echo $color("init the games\n")->apply("light_green");


        is_dir(public_path("resources/tools")) == false ? mkdir(public_path("resources/tools")) : true;

        file_put_contents(public_path("resources/tools/awa.zip"), "test file");

        DB::table("tools")->insert([
            "name" => "awa",
            "description" => "test tools",
            "file_size" => "1",
            "format" => "zip",
            "file_path" => public_path("resources/tools/awa.zip")
        ]);

        echo $color("init the tools\n")->apply("light_green");


        is_dir(public_path("resources/lanCraft")) == false ? mkdir(public_path("resources/lanCraft")) : true;

        file_put_contents(public_path("resources/lanCraft/qwq.zip"), "test file");

        DB::table("lanCraft")->insert([
            "name" => "qwq",
            "description" => "test lanCraft",
            "file_size" => "1",
            "format" => "zip",
            "file_path" => public_path("resources/lanCraft/qwq.zip")
        ]);

        echo $color("init the lanCraft\n")->apply("light_green");


        is_dir(public_path("resources/tutorial")) == false ? mkdir(public_path("resources/tutorial")) : true;

        file_put_contents(public_path("resources/tutorial/qwq.pdf"), "test file");

        DB::table("tutorial")->insert([
            "name" => "qwq",
            "description" => "test tutorials",
            "file_size" => "1",
            "format" => "zip",
            "file_path" => public_path("resources/tutorial/qwq.pdf")
        ]);

        echo $color("init the lanCraft\n")->apply("light_green");
        echo $color("\nFinish init!\n")->apply("light_green");

        return true;
    }

}
