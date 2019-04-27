<?php

namespace App\Http\Controllers\Resources;

use App\LanCraft;
use App\Http\Controllers\Controller;

class LanCraftController extends Controller{

    public function show(){
        return view("pages.lanCraft", [
            "list" => (new LanCraft())->lanCraftList()
        ]);
    }

    public function download($id){
        $model = new LanCraft();

        $info = $model->getLanCraft($id);
        $model->addDownloadTimes($id);

        return \response()->download($info->file_path, basename($info->file_path));
    }

}
