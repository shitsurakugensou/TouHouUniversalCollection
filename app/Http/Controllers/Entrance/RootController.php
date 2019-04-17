<?php

namespace App\Http\Controllers\Entrance;

use App\Http\Controllers\Controller;

class RootController extends Controller{

    public function show(){
        return view("pages.home");
    }
}
