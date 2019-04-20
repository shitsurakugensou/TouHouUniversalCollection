<?php

namespace Tests\Feature\Access;

use Colors\Color;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RootTest extends TestCase{

    // check the http code
    public function testHttpCode(){

        $color = new Color();

        $response = $this->get('/');
        $response->assertStatus(200);

        echo $color->apply("magenta","\n[Testing]");
        echo $color->apply("light_blue","[Access/RootTest] ");
        echo $color->apply("light_green","Successfully to access '/' - 200 √\n");

        //$color("qwq")

    }

}
