<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Tutorials extends Model{

    public function tutorialsList(){
        return DB::table("tutorial")->get();
    }

    public function getTutorials($id){
        return DB::table("tutorial")->where("id",$id)->get()->get(0);
    }

    public function addDownloadTimes($id){
        $times = DB::table("tutorial")->where("id", $id)->select([
            "download_times"
        ])->get("download_times")->all()[0]->download_times;

        if ($times == null){
            $times = 0;
        }

        $times++;

        DB::table("tutorial")->where("id", $id)->update([
            "download_times" => $times
        ]);

        return true;
    }

}
