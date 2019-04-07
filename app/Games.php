<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Games extends Model{

    public function gameList(){
        return DB::table("games")->get();
    }

    public function getGame($id){
        return DB::table("games")->where("id",$id)->get()->get(0);
    }

}
