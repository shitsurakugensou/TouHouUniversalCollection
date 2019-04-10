<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Tools extends Model{

    public function gameList(){
        return DB::table("tools")->get();
    }

    public function getGame($id){
        return DB::table("tools")->where("id",$id)->get()->get(0);
    }

    public function addDownloadTimes($id){
        $times = DB::table("tools")->where("id", $id)->select([
            "download_times"
        ])->get("download_times")->all()[0]->download_times;

        if ($times == null){
            $times = 0;
        }

        $times++;

        DB::table("tools")->where("id", $id)->update([
            "download_times" => $times
        ]);

        return true;
    }

}
