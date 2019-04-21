<?php

namespace Tests\Feature\Variable;

use Colors\Color;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LanCraftTest extends TestCase
{

    // for the var: $list - Array
    public function testLanCraftCheck(){

        $color = new Color();

        $response = $this->get('/view/resources/lanCraft');

        $response->assertSee("qwq")
            ->assertViewIs('pages.lanCraft');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/LanCraftTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->name] √\n");


        $response->assertSee("test lanCraft")
            ->assertViewIs('pages.lanCraft');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/LanCraftTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->description] √\n");


        $response->assertSee("0")
            ->assertViewIs('pages.lanCraft');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/LanCraftTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->download_times] √\n");

        $response->assertSee("10000")
            ->assertViewIs('pages.lanCraft');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/LanCraftTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->id] √\n");

        $response->assertSee("zip")
            ->assertViewIs('pages.lanCraft');

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Variable/LanCraftTest] ");
        echo $color->apply("light_green","Successfully to see var - [list->format] √\n");

    }

}
