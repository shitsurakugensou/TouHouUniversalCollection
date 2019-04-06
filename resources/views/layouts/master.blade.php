<?php
/**
 * ProjectName: TouHouUniversalCollection.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/4/6
 * Time: 15:19
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */
?>


<html lang="zh-cn">
    <head>
        <title> {{ env("APP_NAME") }} - @yield("action")</title>

        <link href="https://cdn.bootcss.com/mdui/0.4.2/css/mdui.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:300|Raleway:300" rel="stylesheet">

        <style>
            body{
                font-family: 'Noto Sans SC', sans-serif;
            }

            ::-webkit-scrollbar{
                width: 4px;
            }

            ::-webkit-scrollbar-thumb{
                background: #1396FF;
            }
        </style>
    </head>

    <body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-pink mdui-theme-accent-red">

        <header class="mdui-appbar mdui-appbar-fixed">
            <div class="mdui-toolbar mdui-color-pink-600" style="position: fixed; left: 0;">
                <button class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#index', swipe: true}"><i class="mdui-icon material-icons">menu</i></button>
                <span class="mdui-typo-title">{{ env("APP_NAME") }}</span>
                <div class="mdui-toolbar-spacer"></div>
            </div>
        </header>


        <div class="mdui-drawer mdui-drawer-open mdui-color-pink-a200" style="color: white; top: 64px;" id="index">
            <ul class="mdui-list">
                <li class="mdui-list-item mdui-ripple" onclick="window.location.href='/'">
                    <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-light-blue-a700">&#xe88a;</i>
                    <div class="mdui-list-item-content">主页</div>
                </li>
                <li class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-yellow-a400">&#xe021;</i>
                    <div class="mdui-list-item-content">正作游戏</div>
                </li>
                <li class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-teal-a200">&#xe869;</i>
                    <div class="mdui-list-item-content">辅助工具</div>
                </li>
                <li class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-green-a700">&#xe431;</i>
                    <div class="mdui-list-item-content">教程攻略</div>
                </li>
                <li class="mdui-list-item mdui-ripple">
                    <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-orange-a400">&#xe8be;</i>
                    <div class="mdui-list-item-content">联机工具</div>
                </li>
            </ul>
        </div>

        <div class="frame" style="padding-top: 4px; padding-left: 4px;">
            @yield("content")

            <div class="page-footer" style="border-top: rgba(183,181,177,0.94) 1px solid;">
                <div class="page-footer-contant mdui-valign">
                    <div class="mdui-valign">
                        <p class="copyright">Copyright © 2019 - {{ date("Y",time()) }} <a href="https://github.com/SaigyoujiYuyuko233">SaigyoujiYuyuko</a> . All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>
    </body>
</html>
