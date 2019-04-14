<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class LanCraft extends Model{

    public function lanCraftList(){
        return DB::table("lanCraft")->get();
    }

    public function getLanCraft($id){
        return DB::table("lanCraft")->where("id",$id)->get()->get(0);
    }

    public function addDownloadTimes($id){
        $times = DB::table("lanCraft")->where("id", $id)->select([
            "download_times"
        ])->get("download_times")->all()[0]->download_times;

        if ($times == null){
            $times = 0;
        }

        $times++;

        DB::table("lanCraft")->where("id", $id)->update([
            "download_times" => $times
        ]);

        return true;
    }

}
