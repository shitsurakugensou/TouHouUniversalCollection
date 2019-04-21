<?php

namespace Tests\Feature\Variable;

use Colors\Color;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToolsTest extends TestCase
{

    // for the var: $list - Array
    public function testToolsCheck(){

        $color = new Color();

        $response = $this->get('/view/resources/tools');

        $response->assertSee("awa")
            ->assertViewIs('pages.tools');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/ToolsTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->name] √\n");


        $response->assertSee("test tools")
            ->assertViewIs('pages.tools');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/ToolsTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->description] √\n");


        $response->assertSee("0")
            ->assertViewIs('pages.tools');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/ToolsTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->download_times] √\n");

        $response->assertSee("10000")
            ->assertViewIs('pages.tools');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/ToolsTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->id] √\n");

        $response->assertSee("zip")
            ->assertViewIs('pages.tools');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/ToolsTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->format] √\n");

    }

}
