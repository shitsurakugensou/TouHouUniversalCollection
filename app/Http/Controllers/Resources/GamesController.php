<?php

namespace App\Http\Controllers\Resources;

use App\Games;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class GamesController extends Controller{

    public function show(){
        return view("pages.games", [
            "list" => (new Games())->gameList()
        ]);
    }

    public function download($id){
        $model = new Games();

        $game_info = $model->getGame($id);
        $model->addDownloadTimes($id);

        return \response()->download($game_info->file_path);
    }

    public function ecDownload($id){
        $model = new Games();

        $game_info = $model->getGame($id);
        $model->addDownloadTimes($id);

        if($game_info->external_connection != null){
            return redirect(str_replace("\n","",$game_info->external_connection));
        }

        return \response()->download($game_info->file_path, basename($game_info->file_path));
    }

}
