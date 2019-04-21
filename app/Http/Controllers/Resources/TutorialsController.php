<?php

namespace App\Http\Controllers\Resources;

use App\Tutorials;
use App\Http\Controllers\Controller;
class TutorialsController extends Controller{

    public function show(){
        return view("pages.tutorials", [
            "list" => (new Tutorials())->tutorialsList()
        ]);
    }

    public function download($id){
        $model = new Tutorials();

        $tutorial_info = $model->getTutorials($id);
        $model->addDownloadTimes($id);

        return \response()->download($tutorial_info->file_path, basename($tutorial_info->file_path));
    }

}
