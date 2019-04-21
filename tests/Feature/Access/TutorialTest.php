<?php

namespace Tests\Feature\Access;

use Colors\Color;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TutorialTest extends TestCase
{

    // test for Http code
    public function testHttpCode(){

        $color = new Color();

        $response = $this->get('/view/resources/tutorials');
        $response->assertStatus(200);

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Access/TutorialTest] ");
        echo $color->apply("light_green","Successfully to access '/view/resources/tutorials' - 200 √\n");

    }

}
