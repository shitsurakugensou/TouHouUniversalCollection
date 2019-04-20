<?php

namespace Tests\Feature\Access;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RootTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample(){
        $response = $this->get('/');
        $response->assertStatus(200);

        echo "[Testing]";
    }
}
