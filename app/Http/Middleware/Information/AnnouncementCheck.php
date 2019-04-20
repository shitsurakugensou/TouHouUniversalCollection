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
        $announcement = DB::table("information")->select("Announcement")->get('Announcement')[0];
        $announcement = $announcement->Announcement != null ? $announcement->Announcement : null;

        // 如果公告 == null
        if ($announcement != null){
            $announcement = 'swal({title: "公告", html: \'' . $announcement . '\', confirmButtonText: "知道了", type: "info"});';
        }

        // 判断是否带有通知cookie | false: 显示通知
        if($announcement != null && Cookie::has("announcement") == false){
            view()->share(["announcement" => $announcement]);
            Cookie::queue("announcement", $announcement, time() + 30*24*3600, "/");
        }

        // 判断是否显示最新通知
        if(Cookie::has("announcement") == true){
            if(Cookie::get("announcement") != $announcement){
                view()->share(["announcement" => $announcement]);
                Cookie::queue("announcement", $announcement, time() + 30*24*3600, "/");
            }
        }

        return $next($request);
    }
}
