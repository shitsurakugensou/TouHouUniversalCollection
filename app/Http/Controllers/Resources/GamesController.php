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

        if($game_info->external_connection != null && env("DOWNLOAD_EXTERNAL_CONNECTION") == true){
            return redirect($game_info->external_connection);
        }

        return \response()->download($game_info->file_path, basename($game_info->file_path));
    }

}
