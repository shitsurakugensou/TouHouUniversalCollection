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
        $game_info = (new Games())->getGame($id);

        return \response()->download($game_info->file_path,$game_info->name);
    }

}
