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
        <div class="title">
            <p style="font-size: 30px;">{{ env("APP_NAME") }}</p>
        </div>

        <p>呐，这里是一个专门为各位东方众建立的资源站。找资源很辛苦，网上乱七八糟的啥都找不到。找到了又捆绑下载啥都不干净。然后..咱就弄个下载站方便一下各位呐。。 </p><p></p>
        <p>由于现在还是在内测阶段，这个下载站的服务器就放到一个位于深圳的小水管上面，到时候内测结束了放到快一点的服务器呐~</p>
        <p>嘛.. 我们这个资源站纯公益的，不要相信任何人向您索要的 "收费" 服务呢... </p>
    </div>

    <div style="padding-left: 24px;">
        <div class="title">
            <p style="font-size: 30px;">简单介绍</p>
        </div>

        <p>嘛.. 这个资源站现在提供: 正作游戏 辅助工具 教程攻略 联机工具 的下载。 </p>
        <p>我们暂时不提供Steam已上架的游戏的下载呐=w=。(尽快入正吧 虽然我也没有[因为我是真的穷]</p>
        <p>这个站是全公益的呐，服务器维护 网站更新都是由我一个人负责的。。 所以有时候鸽一小下也请大家原谅qaq</p>
        <p>(这个界面真的很难看)</p>
    </div>

    <div style="padding-left: 24px; margin-top: 40px;">
        <div class="title">
            <p style="font-size: 30px;">其他</p>
        </div>

        <p>嘛... 你说我这个封面弄的这么随意干嘛.. 我真的太懒了(请尽情骂我)然后我肚子又饿就真的懒得弄什么CSS之类的了(反正也加快加载速度对不对qwq</p>
        <p>看这界面多么清爽 不像其他的这么麻烦花俏对不对=w=</p>
        <p>你说我这东西写的这么不正式..因为咱觉得这个站不用做的这么正式呐=w=</p>
        <p>(我真的除了卖萌什么都不会了qwq...)</p>
    </div>

    <div style="padding-left: 24px; margin-top: 40px;">
        <div class="title">
            <p style="font-size: 30px;">最后</p>
        </div>

        <p>呐.. 各位有什么对于本站的 建议|资源提交|吐槽 都可以发到我邮箱↓</p>
        <p>本站每月初开放调查问卷哦~ (没有的话记得提醒我!!!</p>
        <p>我们暂时不提供Steam已上架的游戏的下载呐=w=。(尽快入正吧 虽然我也没有[因为我是真的穷]</p>
        <p>我的邮箱: HGK-SaigyoujiYuyuko@outlook.com | SaigyoujiYuyuko@hakugyokukon.cn</p>
        <p>各位玩的愉快呐~</p>

        <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=86 src="//music.163.com/outchain/player?type=2&id=34367899&auto=0&height=66"></iframe>
        <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=86 src="//music.163.com/outchain/player?type=2&id=28732466&auto=0&height=66"></iframe>
        <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=86 src="//music.163.com/outchain/player?type=2&id=41647266&auto=0&height=66"></iframe>
    </div>

    <div style="padding-left: 24px; margin-top: 40px;">
        <div class="title">
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
        <div class="title">
            <p style="font-size: 30px;">调查数据 - 东方资源站意见征求</p>
        </div>


        <table class="mdui-table" style="width: 90%; margin-bottom: 30px;">
            <thead>
                <tr>
                    <td>问题</td>
                    <td>答案 #0</td>
                    <td>答案 #1</td>
                    <td>回答人数</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>各位对东方资源站有需要吗</td>
                    <td>有的      	36</td>
                    <td>暂时没有呢	11</td>
                    <td>47</td>
                </tr>

                <tr>
                    <td>各位觉得此资源站偏重什么资源较好</td>
                    <td>正作游戏	28&nbsp;&nbsp;|&nbsp;&nbsp;教程/攻略	22</td>
                    <td>工具	    22&nbsp;&nbsp;|&nbsp;&nbsp;联机工具	    20</td>
                    <td>35</td>
                </tr>

                <tr>
                    <td>如果我开了个资源站各位会用吗=w=</td>
                    <td>会的	 35</td>
                    <td>不会	 0</td>
                    <td>35</td>
                </tr>
            </tbody>
        </table>


        <table class="mdui-table" style="width: 90%">
            <thead>
                <tr>
                    <td>唔.. 各位有什么建议吗</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>你什么时候女装</td>
                </tr>

                <tr>
                    <td class="mdui-text-color-red-500">★★★ 中文版，这个很重要，要正作的中文版</td>
                </tr>

                <tr>
                    <td>ennnnnnn慢慢改进吧。</td>
                </tr>

                <tr>
                    <td class="mdui-text-color-red-500">★★★ 尽量不要提供已在steam上架的任何东方正作游戏的资源</td>
                </tr>

                <tr>
                    <td>干巴爹</td>
                </tr>

                <tr>
                    <td>手动滑稽</td>
                </tr>

                <tr>
                    <td class="mdui-text-color-red-500">★★★ 不是土豆服务器就行，解决疑问的话尽量快一点</td>
                </tr>

                <tr>
                    <td>快做(๑¬_¬)୨</td>
                </tr>

                <tr>
                    <td>感觉工作量挺大的，加油</td>
                </tr>

                <tr>
                    <td>干巴爹</td>
                </tr>

                <tr>
                    <td>(ಡωಡ)</td>
                </tr>

                <tr>
                    <td class="mdui-text-color-red-500">★★★ 做好被别有用心的人用“道义”，“打击盗版”等名义打击的准备，还要做好长时间投入精力维护的准备（down站倒了的一部分原因是他们懒得维护了）</td>
                </tr>

                <tr>
                    <td>哦吼</td>
                </tr>

                <tr>
                    <td>好好做</td>
                </tr>
            </tbody>
        </table>

    </div>

    <img width="88%" style="padding-left: 24px; margin-bottom: 30px;" src="{{ asset("/images/no-design.png") }}">

@endsection