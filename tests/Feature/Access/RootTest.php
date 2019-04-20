<?php

namespace Tests\Feature\Access;

use JakubOnderka\PhpConsoleColor\ConsoleColor;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RootTest extends TestCase{

    public function testHttpCode(){
        $color = new ConsoleColor();

        $response = $this->get('/');
        $response->assertStatus(200);

        echo $color->apply("color_39","\n[Testing]");
        echo $color->apply("color_13","[Access/RootTest] ");
        echo $color->apply("color_40","Successfully to access '/' -- 200 √\n");
    }


}
