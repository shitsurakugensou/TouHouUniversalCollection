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

        $game_info = $model->getGame($id);
        $model->addDownloadTimes($id);

        if($game_info->external_connection != null && env("DOWNLOAD_EXTERNAL_CONNECTION") == true){
            return redirect($game_info->external_connection);
        }

        return \response()->download($game_info->file_path,$game_info->name);
    }

}
