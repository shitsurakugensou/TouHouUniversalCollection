<?php

namespace App\Http\Middleware\Information;

use Closure;
use UxWeb\SweetAlert\SweetAlert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;


class AnnouncementCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        $announcement = DB::table("information")->select("Announcement")->get('Announcement')[0]->Announcement;

        // 判断是否带有通知cookie | false: 显示通知
        if($announcement != null && Cookie::has("announcement") == false){
            SweetAlert::message($announcement);
            Cookie::queue("announcement", $announcement, time() + 30*24*3600, "/");
        }

        // 判断是否显示最新通知
        if(Cookie::has("announcement") == true){
            if(Cookie::get("announcement") != $announcement){
                SweetAlert::message($announcement);
                Cookie::queue("announcement", $announcement, time() + 30*24*3600, "/");
            }
        }

        return $next($request);
    }
}
