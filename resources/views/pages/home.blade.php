<?php
/**
 * ProjectName: TouHouUniversalCollection.
 * Author: SaigyoujiYuyuko
 * QQ: 3558168775
 * Date: 2019/4/6
 * Time: 15:42
 *
 * Copyright © 2019 SaigyoujiYuyuko. All rights reserved.
 */
?>

@extends("layouts.master")

@section("action") 主页 @endsection

@section("content")

    <div style="padding-left: 24px; margin-top: 20px;">
        <div class="title mdui-text-color-theme">
            <p style="font-size: 30px;">{{ env("APP_NAME") }}</p>
        </div>

        <div class="mdui-text-color-theme-text">
            <p>呐，这里是一个专门为各位东方众建立的资源站。找资源很辛苦，网上乱七八糟的啥都找不到。找到了又捆绑下载啥都不干净。然后..咱就弄个下载站方便一下各位呐。。 </p><p></p>
            <p>由于现在还是在内测阶段，这个下载站的服务器就放到一个位于深圳的小水管上面，到时候内测结束了放到快一点的服务器呐~</p>
            <p>嘛.. 我们这个资源站纯公益的，不要相信任何人向您索要的 "收费" 服务呢... </p>
            <hr>
            <p>这个资源站现在提供: 正作游戏 辅助工具 教程攻略 联机工具 的下载。 </p>
            <p>我们暂时不提供Steam已上架的游戏的下载呐=w=。(尽快入正吧 虽然我也没有[因为我是真的穷]</p>
            <p>这个站是全公益的呐，服务器维护 网站更新都是由我一个人负责的。。 所以有时候鸽一小下也请大家原谅qaq</p>
            <p>(这个界面真的很难看)</p>
        </div>

    </div>

    <div style="padding-left: 24px; margin-top: 40px;">
        <div class="title mdui-text-color-theme">
            <p style="font-size: 30px;">公告</p>
        </div>

        <div class="mdui-typo">
            <p>BUG反馈: <a class="mdui-text-color-theme-accent" href="https://www.wenjuan.com/s/vqEZFb/">点我点我~</a></p>
            <p>每月问卷: <a class="mdui-text-color-theme-accent" href="https://www.wenjuan.com/s/qaUzI3b/">点我点我~</a></p>
        </div>

    </div>

    <div style="padding-left: 24px; margin-top: 40px;">
        <div class="title mdui-text-color-theme">
            <p style="font-size: 30px;">最后</p>
        </div>

        <p>呐.. 各位有什么对于本站的 建议|资源提交|吐槽 都可以发到我邮箱↓</p>
        <p>本站每月初开放调查问卷哦~ (没有的话记得提醒我!!!</p>
        <p>我们暂时不提供Steam已上架的游戏的下载呐=w=。(尽快入正吧 虽然我也没有[因为我是真的穷]</p>
        <p>我的邮箱: <a style="display: inline-block;" class="mdui-text-color-theme-accent">HGK-SaigyoujiYuyuko@outlook.com | SaigyoujiYuyuko@hakugyokukon.cn</a></p>
        <p>各位玩的愉快呐~</p>
    </div>

    <div style="padding-left: 24px; margin-top: 40px;">
        <div class="title mdui-text-color-theme">
            <p style="font-size: 30px;">后记</p>
        </div>

        <p>嗯.. 本着也是想给东方做一点贡献。。然后就开了这个资源站。。</p>
        <p>这个过程是辛苦的... 我是真的怕做了没人用然后又浪费了.. (我很多项目都是这样子的</p>
        <p>在其他圈子吧.. 要做什么东西第一就是被别人喷呐.. 但是，我在决定要做这个资源站的时候我看到了各位东方众的心意，让我感觉到了东方这个圈子真的是很友好，我很感动..</p>
        <p>或许我语文比较差。。真的是写不出那种感受... </p>
        <p>嗯.. 就这样子吧！ 各位再见呐!</p>

        <div class="mdui-center">
            <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=86 src="//music.163.com/outchain/player?type=2&id=28732484&auto=0&height=66"></iframe>
        </div>
    </div>



    <div style="padding-left: 24px; margin-top: 40px; margin-bottom: 20px;">
        <div class="title mdui-text-color-theme">
            <p style="font-size: 30px;">调查数据 - 东方资源站意见征求</p>
        </div>

        <p class="mdui-text-color-theme-accent">
            <a href="{{ asset("/resources/东方资源站意见征求.docx") }}">
                <i class="mdui-icon material-icons">&#xe226;</i> 东方资源站意见征求.docx
            </a>
        </p>

    </div>

    <div class="image" style="margin-top: 20px; margin-bottom: 30px;">
        <img class="mdui-center" width="44%" style="padding-left: 24px;" src="{{ asset("/images/no-design.png") }}">
    </div>


@endsection
