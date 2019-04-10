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

@section("action") 辅助工具 @endsection

@section("header")
    <style>
        body{
            background-color: #f1f1f1;
        }
    </style>
@endsection

@section("content")

    <div class="tools-container mdui-container" style="padding-top: 20px;">
        <table class="mdui-table">
            <thead>
                <tr>
                    <td>资源ID</td>
                    <td>名称</td>
                    <td>简介</td>
                    <td>下载次数</td>
                    <td>文件大小</td>
                    <td>文件格式</td>
                </tr>
            </thead>

            <tbody>
                @for($i = 0; $i < $list->count(); $i++)
                    <tr class="mdui-hoverable">
                        <td>{{ $list->get($i)->id }}</td>
                        <td>{{ $list->get($i)->name }}</td>
                        <td>{{ $list->get($i)->description }}</td>
                        <td>{{ $list->get($i)->download_times }}</td>
                        <td>{{ $list->get($i)->file_size }}MB</td>
                        <td>{{ $list->get($i)->format }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>

    </div>
@endsection
