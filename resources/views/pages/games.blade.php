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
                <div class="mdui-col-md-4 mdui-col-sm-12" style="margin-bottom: 30px; padding-left: 15px; padding-right: 15px;">
                    <div class="mdui-grid-tile mdui-hoverable" style="border-radius: 4px;" onclick="window.location.href='/download/resources/games/{{ $list->get($i)->id }}'">
                        <a href="javascript:;"><img src="{{ asset($list->get($i)->game_logo) }}"/></a>
                        <div class="mdui-grid-tile-actions">
                            <div class="mdui-grid-tile-text">
                                <div class="mdui-grid-tile-title">{{ $list->get($i)->name }}</div>
                                <div class="mdui-grid-tile-subtitle">{{ $list->get($i)->description }} | 大小: {{ $list->get($i)->file_size }}MB</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>
@endsection
