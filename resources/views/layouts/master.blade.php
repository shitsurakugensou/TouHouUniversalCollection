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

        <link href="{{ asset("/favicon.ico") }}" rel="icon">

        <meta name="viewport" content="width=device-width"><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

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

        @yield("header")
    </head>

    <body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-pink mdui-theme-layout-dark">
        <header class="mdui-appbar mdui-appbar-fixed">
            <div class="mdui-toolbar" style="position: fixed; left: 0; background-color: #212121!important;">
                <button class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#index', swipe: true}"><i class="mdui-icon material-icons">menu</i></button>
                <span class="mdui-typo-title">{{ env("APP_NAME") }}</span>

                <div class="mdui-toolbar-spacer" style="padding-right: 16px;">
                    <button class="mdui-btn mdui-btn-icon mdui-float-right" mdui-tooltip="{content: '设置主题'}" mdui-dialog="{target: '#layouts'}"><i class="mdui-icon material-icons">&#xe3b7;</i></button>
                </div>

            </div>
        </header>


        <div class="mdui-drawer mdui-drawer-open" style="color: white;" id="index">
            <ul class="mdui-list">
                <li class="mdui-list-item mdui-ripple" onclick="window.location.href='/'">
                    <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-light-blue-a700">&#xe88a;</i>
                    <div class="mdui-list-item-content">主页</div>
                </li>
                <li class="mdui-list-item mdui-ripple" onclick="window.location.href='/view/resources/games'">
                    <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-yellow-a400">&#xe021;</i>
                    <div class="mdui-list-item-content">正作游戏</div>
                </li>
                <li class="mdui-list-item mdui-ripple" onclick="window.location.href='/view/resources/tools'">
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

        <div class="mdui-dialog" id="layouts">
            <div class="mdui-dialog-title" style="padding-bottom: 6px; font-size: 22px;">切换主题</div>
            <div class="mdui-dialog-content">
                <p style="margin: 0; padding-bottom: 10px;">本操作将会更改当前的主题~</p>

                <p class="mdui-text-color-theme" style="margin: 0; padding-top: 12px; padding-bottom: 8px; color: #ababab; font-size: 20px;">主题设置</p>
                <div class="mdui-row main-layouts">
                    <div class="mdui-col-xs-6">
                        <label class="mdui-radio">
                            <input type="radio" value="light" name="theme-type"/>
                            <i class="mdui-radio-icon"></i>
                            明亮
                        </label>
                    </div>

                    <div class="mdui-col-xs-6">
                        <label class="mdui-radio">
                            <input type="radio" value="dark" name="theme-type" checked/>
                            <i class="mdui-radio-icon"></i>
                            暗黑
                        </label>
                    </div>
                </div>

                <p class="mdui-text-color-theme" style="margin: 0; padding-top: 12px; padding-bottom: 8px; color: #ababab; font-size: 20px;">主色</p>
                <div class="mdui-row main-layouts">
                    <div class="mdui-col-xs-6 mdui-text-color-pink">
                        <label class="mdui-radio">
                            <input type="radio" value="pink" name="main-color" checked/>
                            <i class="mdui-radio-icon"></i>
                            Pink
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-blue">
                        <label class="mdui-radio">
                            <input type="radio" value="blue" name="main-color"/>
                            <i class="mdui-radio-icon"></i>
                            Blue
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-brown">
                        <label class="mdui-radio">
                            <input type="radio" value="brown" name="main-color"/>
                            <i class="mdui-radio-icon"></i>
                            Brown
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-deep-purple">
                        <label class="mdui-radio">
                            <input type="radio" value="deep-purple" name="main-color"/>
                            <i class="mdui-radio-icon"></i>
                            Deep Purple
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-purple">
                        <label class="mdui-radio">
                            <input type="radio" value="purple" name="main-color"/>
                            <i class="mdui-radio-icon"></i>
                            Purple
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-red">
                        <label class="mdui-radio">
                            <input type="radio" value="red" name="main-color"/>
                            <i class="mdui-radio-icon"></i>
                            Red
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-teal">
                        <label class="mdui-radio">
                            <input type="radio" value="teal" name="main-color"/>
                            <i class="mdui-radio-icon"></i>
                            Teal
                        </label>
                    </div>
                </div>

            </div>
            <div class="mdui-dialog-actions">
                <button class="mdui-btn mdui-ripple mdui-float-left">恢复默认</button>
                <button class="mdui-btn mdui-ripple" onclick='setTheme()'>确定</button>
            </div>
        </div>

        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>

        <script>
            function parsingCookie(cookies){
                var cookie_arr = cookies.split(";");
                var parser = new Array();

                for (var i = 0; i <cookie_arr.length; i++ ){
                    var key = cookie_arr[i].split("=")[0];
                    var value = cookie_arr[i].split("=")[1];

                    parser[key] = value;
                }

                return parser;
            }

            // 设置 cookie
            var setCookie = function (key, value) {
                // cookie 有效期为 1 年
                var date = new Date();
                date.setTime(date.getTime() + 365*24*3600*1000);
                document.cookie = key + '=' + value + '; expires=' + date.toGMTString() + '; path=/';
            };

            $(document).ready(function () {
                var cookies = parsingCookie(document.cookie);

                if (cookies['web-theme'] !== undefined) {
                    $("body").removeClass("mdui-theme-layout-dark");
                    $("body").addClass("mdui-theme-layout-" + cookies['web-theme']);

                    console.log(cookies);
                }

                if (cookies['web-primary-color'] !== undefined) {
                    $("body").removeClass(" mdui-theme-primary-pink");
                    $("body").addClass(" mdui-theme-primary-" + cookies['web-primary-color']);
                }
            });

            function setTheme(){
                var main_color = $("input[name=\"main-color\"]:checked").val();
                var theme_style = $("input[name=\"theme-type\"]:checked").val();

                setCookie("web-theme",theme_style);
                setCookie("web-primary-color",main_color);

                document.location.reload();
            }
        </script>

        <div class="frame" style="height: 100%">
            @yield("content")

            <footer>
                <div class="page-footer" style="border-top: rgba(183,181,177,0.94) 1px solid; margin-top: 20px;">
                    <div class="page-footer-contant mdui-valign">
                        <div class="mdui-valign">
                            <p class="copyright" style="padding-left: 4px;">Copyright © 2019 - {{ date("Y",time()) }} <a href="https://github.com/SaigyoujiYuyuko233">SaigyoujiYuyuko[3558168775]</a> . All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </body>
</html>
