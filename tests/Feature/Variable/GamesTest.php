<?php

namespace Tests\Feature\Variable;

use Colors\Color;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GamesTest extends TestCase{


    // for the var: $list - Array
    public function testGamesCheck(){

        $color = new Color();

        $response = $this->get('/view/resources/games');

        $response->assertSee("qwq")
            ->assertViewIs('pages.games');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/GamesTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->gamename] √\n");


        $response->assertSee("test game")
            ->assertViewIs('pages.games');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/GamesTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->description] √\n");


        $response->assertSee("0")
            ->assertViewIs('pages.games');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/GamesTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->download_times] √\n");

        $response->assertSee("/images/touhou.png")
            ->assertViewIs('pages.games');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/GamesTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->game_logo] √\n");

    }

}
