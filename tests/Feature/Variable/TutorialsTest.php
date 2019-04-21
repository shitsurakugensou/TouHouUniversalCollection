<?php

namespace Tests\Feature\Variable;

use Colors\Color;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TutorialsTest extends TestCase
{

    // for the var: $list - Array
    public function testToolsCheck(){

        $color = new Color();

        $response = $this->get('/view/resources/tutorials');

        $response->assertSee("qwq")
            ->assertViewIs('pages.tutorials');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/TutorialTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->name] √\n");


        $response->assertSee("test tutorials")
            ->assertViewIs('pages.tutorials');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/TutorialTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->description] √\n");


        $response->assertSee("0")
            ->assertViewIs('pages.tutorials');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/TutorialTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->download_times] √\n");

        $response->assertSee("10000")
            ->assertViewIs('pages.tutorials');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/TutorialTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->id] √\n");

        $response->assertSee("zip")
            ->assertViewIs('pages.tutorials');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/TutorialTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->format] √\n");

    }

}
