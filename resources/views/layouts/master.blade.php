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

            a{
                text-decoration: none;
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

    <body class="mdui-drawer-body-left mdui-appbar-with-toolbar">
        <header class="mdui-appbar mdui-appbar-fixed">
            <div class="mdui-toolbar mdui-color-theme-600" style="position: fixed; left: 0;">
                <button class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#index', swipe: true}"><i class="mdui-icon material-icons">menu</i></button>
                <span class="mdui-typo-title">{{ env("APP_NAME") }}</span>

                <div class="mdui-toolbar-spacer" style="padding-right: 16px;">
                    <button class="mdui-btn mdui-btn-icon mdui-float-right" mdui-tooltip="{content: '设置主题'}" onclick="applyTheme(document.cookie)" mdui-dialog="{target: '#layouts'}"><i class="mdui-icon material-icons">&#xe3b7;</i></button>
                </div>

            </div>
        </header>


        <div class="mdui-drawer mdui-drawer-open" id="index">
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
                            <input type="radio" value="light" name="theme-layout"/>
                            <i class="mdui-radio-icon"></i>
                            明亮
                        </label>
                    </div>

                    <div class="mdui-col-xs-6">
                        <label class="mdui-radio">
                            <input type="radio" value="dark" name="theme-layout"/>
                            <i class="mdui-radio-icon"></i>
                            暗黑
                        </label>
                    </div>
                </div>

                <p class="mdui-text-color-theme" style="margin: 0; padding-top: 12px; padding-bottom: 8px; color: #ababab; font-size: 20px;">主色</p>
                <div class="mdui-row main-layouts">
                    <div class="mdui-col-xs-6 mdui-text-color-pink">
                        <label class="mdui-radio">
                            <input type="radio" value="pink" name="theme-color"/>
                            <i class="mdui-radio-icon"></i>
                            Pink
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-blue">
                        <label class="mdui-radio">
                            <input type="radio" value="blue" name="theme-color"/>
                            <i class="mdui-radio-icon"></i>
                            Blue
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-brown">
                        <label class="mdui-radio">
                            <input type="radio" value="brown" name="theme-color"/>
                            <i class="mdui-radio-icon"></i>
                            Brown
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-deep-purple">
                        <label class="mdui-radio">
                            <input type="radio" value="deep-purple" name="theme-color"/>
                            <i class="mdui-radio-icon"></i>
                            Deep Purple
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-purple">
                        <label class="mdui-radio">
                            <input type="radio" value="purple" name="theme-color"/>
                            <i class="mdui-radio-icon"></i>
                            Purple
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-red">
                        <label class="mdui-radio">
                            <input type="radio" value="red" name="theme-color"/>
                            <i class="mdui-radio-icon"></i>
                            Red
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-teal">
                        <label class="mdui-radio">
                            <input type="radio" value="teal" name="theme-color"/>
                            <i class="mdui-radio-icon"></i>
                            Teal
                        </label>
                    </div>
                </div>

                <p class="mdui-text-color-theme" style="margin: 0; padding-top: 12px; padding-bottom: 8px; color: #ababab; font-size: 20px;">强调色</p>
                <div class="mdui-row main-layouts">
                    <div class="mdui-col-xs-6 mdui-text-color-pink">
                        <label class="mdui-radio">
                            <input type="radio" value="pink" name="accent-color"/>
                            <i class="mdui-radio-icon"></i>
                            Pink
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-blue">
                        <label class="mdui-radio">
                            <input type="radio" value="blue" name="accent-color"/>
                            <i class="mdui-radio-icon"></i>
                            Blue
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-brown">
                        <label class="mdui-radio">
                            <input type="radio" value="brown" name="accent-color"/>
                            <i class="mdui-radio-icon"></i>
                            Brown
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-deep-purple">
                        <label class="mdui-radio">
                            <input type="radio" value="deep-purple" name="accent-color"/>
                            <i class="mdui-radio-icon"></i>
                            Deep Purple
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-purple">
                        <label class="mdui-radio">
                            <input type="radio" value="purple" name="accent-color"/>
                            <i class="mdui-radio-icon"></i>
                            Purple
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-red">
                        <label class="mdui-radio">
                            <input type="radio" value="red" name="accent-color"/>
                            <i class="mdui-radio-icon"></i>
                            Red
                        </label>
                    </div>

                    <div class="mdui-col-xs-6 mdui-text-color-teal">
                        <label class="mdui-radio">
                            <input type="radio" value="teal" name="accent-color"/>
                            <i class="mdui-radio-icon"></i>
                            Teal
                        </label>
                    </div>
                </div>

            </div>

            <div class="mdui-dialog-actions">
                <button class="mdui-btn mdui-ripple mdui-float-left" onclick="setDef()">恢复默认</button>
                <button class="mdui-btn mdui-ripple" onclick='setTheme()'>确定</button>
            </div>
        </div>

        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/mdui/0.4.2/js/mdui.min.js"></script>

        <script>
            const def_theme_layout = "dark";
            const def_theme_primary = "pink";
            const def_theme_accent = "red";

            function parsingCookie(cookies){
                var cookie_arr = cookies.split(";");
                var parser = new Array();

                for (var i = 0; i <cookie_arr.length; i++ ){
                    var key = cookie_arr[i].split("=")[0];
                    var value = cookie_arr[i].split("=")[1];

                    parser[key.replace(" ","")] = value;
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

            var setTheme = function (){
                $("input[name=\"theme-color\"]:checked").checked = false;
                $("input[name=\"accent-color\"]:checked").checked = false;

                var main_color = $("input[name=\"theme-color\"]:checked").val();
                var theme_style = $("input[name=\"theme-layout\"]:checked").val();
                var theme_accent = $("input[name=\"accent-color\"]:checked").val();

                setCookie("web-theme-layout",theme_style);
                setCookie("web-theme-color",main_color);
                setCookie("web-theme-accent",theme_accent);

                var cookies = parsingCookie(document.cookie);
                applyTheme(cookies);
            };

            var setDef = function (){
                setCookie("web-theme-layout",def_theme_layout);
                setCookie("web-theme-color",def_theme_primary);
                setCookie("web-theme-accent",def_theme_accent);

                var cookies = parsingCookie(document.cookie);
                applyTheme(cookies);
            };

            $(document).ready(function () {
                var cookies = parsingCookie(document.cookie);
                applyTheme(cookies);

                console.log(cookies);
            });

            var applyTheme = function (cookies){
                var classStr = $("body").attr('class');
                var classs = classStr.split(' ');

                for (i = 0, len = classs.length; i < len; i++) {
                    if (classs[i].indexOf('mdui-theme-layout-') === 0) {
                        $("body").removeClass(classs[i])
                    }
                }

                for (i = 0, len = classs.length; i < len; i++) {
                    if (classs[i].indexOf('mdui-theme-primary-') === 0) {
                        $("body").removeClass(classs[i])
                    }
                }

                for (i = 0, len = classs.length; i < len; i++) {
                    if (classs[i].indexOf('mdui-theme-accent-') === 0) {
                        $("body").removeClass(classs[i])
                    }
                }

                // 切换主题
                if (cookies['web-theme-layout'] !== undefined) {
                    $("body").addClass("mdui-theme-layout-" + cookies['web-theme-layout']);

                    $("input[value=\""+ cookies['web-theme-layout'] +"\"]").prop("checked", true);
                }else{
                    $("body").addClass("mdui-theme-layout-" + def_theme_layout);
                    $("input[value=\""+ def_theme_layout +"\"]").prop("checked", true);
                }

                if (cookies['web-theme-color'] !== undefined) {
                    $("body").addClass("mdui-theme-primary-" + cookies['web-theme-color']);

                    $("input[value=\""+ cookies['web-theme-color'] +"\"][name=\"theme-color\"]").prop("checked", true);
                }else{
                    $("body").addClass("mdui-theme-primary-" + def_theme_primary);
                    $("input[value=\""+ def_theme_primary +"\"][name=\"theme-color\"]").prop("checked", true);
                }

                if (cookies['web-theme-accent'] !== undefined){
                    $("body").addClass("mdui-theme-accent-" + cookies['web-theme-accent']);

                    $("input[value=\""+ cookies['web-theme-accent'] +"\"][name=\"accent-color\"]").prop("checked", true);
                }else{
                    $("body").addClass("mdui-theme-accent-" + def_theme_accent);
                    $("input[value=\""+ def_theme_accent +"\"][name=\"accent-color\"]").prop("checked", true);
                }

            }
        </script>

        <div class="frame" style="height: 100%">
            @yield("content")

            <footer>
                <div class="page-footer" style="border-top: rgba(183,181,177,0.94) 1px solid; margin-top: 20px;">
                    <div class="page-footer-contant mdui-valign">
                        <div class="mdui-valign mdui-typo">
                            <p class="copyright" style="padding-left: 4px;">Copyright © 2019 - {{ date("Y",time()) }} <a href="https://github.com/SaigyoujiYuyuko233">SaigyoujiYuyuko[3558168775]</a> . All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </body>
</html>
