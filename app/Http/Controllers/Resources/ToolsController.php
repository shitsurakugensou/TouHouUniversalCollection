<?php

namespace App\Http\Controllers\Resources;

use App\Tools;
use App\Http\Controllers\Controller;

class ToolsController extends Controller{

    public function show(){
        return view("pages.tools", [
            "list" => (new Tools())->gameList()
        ]);
    }

    public function download($id){
        $model = new Tools();

        $tools_info = $model->getTools($id);
        $model->addDownloadTimes($id);

        if($tools_info->external_connection != null && env("DOWNLOAD_EXTERNAL_CONNECTION") == true){
            return redirect($tools_info->external_connection);
        }

        return \response()->download($tools_info->file_path,$tools_info->name.".".$tools_info->format);
    }

}
