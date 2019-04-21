<?php

namespace Tests\Feature\Variable;

use Colors\Color;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GamesTest extends TestCase{


    // for the var: $announcement - Array
    public function testAnnouncementsCheck(){

        $color = new Color();

        $response = $this->get('/');

        $response->assertSee("Test #0")
            ->assertViewIs('pages.home');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/RootTest] ");
        echo $color->apply("light_green","Successfully to see var - [announcement] √\n");

    }

}
