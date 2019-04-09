<?php
/**
 * ProjectName: TouHouUniversalCollection.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/4/7
 * Time: 8:32
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */
?>

@extends("layouts.master")

@section("action") 正作游戏 @endsection

@section("header")
    <style>
        body{
            background-color: #f1f1f1;
        }
    </style>
@endsection

@section("content")

    <div class="game-container mdui-container" style="padding-top: 60px;">
        <div class="mdui-row">

            @for($i = 0; $i < $list->count(); $i++)
                <div class="mdui-col-lg-3 mdui-col-md-6 mdui-col-sm-12" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
                    <div class="mdui-grid-tile mdui-hoverable" style="border: #e0e0e0 1px solid; border-radius: 6px;" onclick="window.location.href='/download/resources/games/{{ $list->get($i)->id }}'">
                        <a href="javascript:;"><img src="{{ asset($list->get($i)->game_logo) }}"/></a>

                        <div class="mdui-card-primary" style="background-color: #ebebeb; padding-top: 8px;">
                            <div class="mdui-card-primary-title" style="font-size: 22px;">{{ $list->get($i)->name }}</div>
                            <div class="mdui-card-primary-subtitle">{{ $list->get($i)->description }}</div>
                        </div>

                        <div class="mdui-card-content" style="padding-top: 8px; padding-bottom: 8px;">
                            <p style="margin: 0;">下载次数: {{ $list->get($i)->download_times }}</p>
                        </div>

                    </div>
                </div>
            @endfor

        </div>
    </div>
@endsection
