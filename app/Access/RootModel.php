<?php

namespace App\Access;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class RootModel extends Model{

    /*
     * get all the announcement
     */

    public function getAnnouncement(){
        $sql = DB::table("announcement")->get()->all();

        return $sql;
    }

}
