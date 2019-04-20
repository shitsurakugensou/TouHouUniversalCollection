<?php

namespace App\Http\Controllers\Access;

use App\Access\RootModel;
use App\Http\Controllers\Controller;

class RootController extends Controller{

    public function show(){
        $model = new RootModel();

        $announcement = $model->getAnnouncement();

        view()->share([
            "announcement" => $announcement
        ]);

        return view("pages.home");
    }
}
