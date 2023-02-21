<?php
include('password.php');
?><!DOCTYPE html>

<!-- MEMOS API -->
<!-- https://memos.toyqiu.cc:999/api/memo?openId=b06ebfa2-5df4-4881-9555-2a40019563a4 -->

<html lang="zh">


<!-- Mirrored from wanrenmi8.com/cn/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 07:18:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3, minimum-scale=0.5" >
    <meta name="author" content="司徒嘉胤" />
    <title>Toyqiuwu DSM</title>
    <meta name="keywords" content="司徒嘉胤 NAVI 导航">
    <meta name="description" content="司徒嘉胤 NAVI 导航">
    <link rel="shortcut icon" href="../ico/favcion.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="../assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="../usr/themes/WebStack20190119/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/xenon-core.css">
    <link rel="stylesheet" href="../assets/css/xenon-components.css">
    <link rel="stylesheet" href="../assets/css/xenon-skins.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <link rel="stylesheet" href="../assets/css/search.css">
    <script src="../assets/js/jquery-1.11.1.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://navi.toyqiu.cc:999">
    <meta property="og:title" content="司徒嘉胤 NAVI">
    <meta property="og:description" content="司徒嘉胤 NAVI 导航">
    <meta property="og:site_name" content="司徒嘉胤 NAVI 导航">
</head>

<body class="page-body">
    <!-- skin-white -->
    <div class="page-container">
        <div class="sidebar-menu toggle-others fixed">
            <div class="sidebar-menu-inner">
                <header class="logo-env">
                    <!-- logo -->
    </br>
                    <div class="logo">
                        <a href="#top" class="btn">
<!-- 英语艺术字体在线生成  http://www.ziti66.com/zitiinfo/9-275/ -->						
                            <img src="img/navi.png" width="100%" height="141" alt="toyqiuwudsm" />			
                        </a>
                    </div>
                    <div class="mobile-menu-toggle visible-xs">
                        <a href="#" data-toggle="mobile-menu">
                            <i class="fa-bars"></i>
                        </a>
                    </div>
                </header>

<!--  侧边栏图标 linecons 详细用途配置字段在 ./assets/css/fonts/linecons/css/linecons.css -->
				
                <ul id="main-menu" class="main-menu">
                    <li>
                        <a href="#Search" class="smooth">
                            <i class="linecons-search"></i>
                            <span class="title">Search</span>
                        </a>
                    </li>
                    <li>
                        <a href="#Synology" class="smooth">
                            <i class="linecons-heart"></i>
                            <span class="title">Synology</span>
                        </a>
                    </li>
                    <li>
                        <a href="#Docker" class="smooth">
                            <i class="linecons-star"></i>
                            <span class="title">Docker</span>
                        </a>
                      <ul>
                        <li>
                          <a href="#影音中心" class="smooth">
                            <i class="linecons-videocam"></i>
                            <span class="title">影音中心</span>
                          </a>
                        </li>
                        <li>
                        <a href="#远程终端" class="smooth">
                            <i class="linecons-params"></i>
                            <span class="title">远程终端</span>
                        </a>
                        </li>
                        <li>
                          <a href="#阅读、辅助もろもろ" class="smooth">
                            <i class="linecons-pencil"></i>
                            <span class="title">阅读、辅助もろもろ</span>
                          </a>
                        </li>
                      </ul>						
                    </li>
                    <li>
                        <a href="#常用网站" class="smooth">
                            <i class="linecons-doc"></i>
                            <span class="title">常用网站</span>
                        </a>
                      <ul>
                        <li>
                          <a href="#资讯获取" class="smooth">
                            <i class="linecons-lightbulb"></i>
                            <span class="title">资讯获取</span>
                          </a>
                        </li>
                        <li>
                        <a href="#影音娱乐" class="smooth">
                            <i class="linecons-tv"></i>
                            <span class="title">影音娱乐</span>
                        </a>
                        </li>
                        <li>
                        <a href="#AV" class="smooth">
                            <i class="linecons-eye"></i>
                            <span class="title">AV</span>
                        </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                        <a href="https://wanrenmi8.com/cn/index.html" target="_blank">
                            <i class="linecons-cloud"></i>
                            <span class="title">阿里云资源合集</span>
                        </a>
                    </li>
                    <li>
                        <a href="#快捷远程连接" class="smooth">
                            <i class="linecons-desktop"></i>
                            <span class="title">快捷远程连接</span>
                        </a>
                    </li>
                    <li>
                        <a href="#拼多多快捷链接" class="smooth">
                            <i class="linecons-shop"></i>
                            <span class="title">拼多多快捷链接</span>
                        </a>
                    </li>
                    <li>
                        <a href="./password.php?action=logout" target="_self">
                            <i class="linecons-user"></i>
                            <span class="title">退出登录</span>
                        </a>
                    </li>

                </ul>
    </br>
    </br>
    <!--时钟-->
    <div align="center">
        <canvas id="clock" height="180px" width="180px"></canvas>
        <script type="text/javascript" src="assets/js/clock.js"></script>
    </div>				
            </div>
        </div>
        
        <div class="main-content">
            <nav class="navbar user-info-navbar" role="navigation">
                <!-- User Info, Notifications and Menu Bar -->
                <!-- Left links for user info navbar -->
                <ul class="user-info-menu left-links list-inline list-unstyled">
                    <li class="hidden-sm hidden-xs">
                        <a href="#" data-toggle="sidebar">
                            <i class="fa-bars"></i>
                        </a>
                    </li>
                </ul>
             
            </nav>
<h4 class="text-gray"><i class="linecons-search" style="margin-left: 7px;" id="Search"></i>Search</h4>
            <div class="row">

    <div id="search" class="s-search"><div id="search-list" class="hide-type-list"><div class="s-type"><span></span><div class="s-type-list animated fadeInUp">

        <label for="type-Shaarli"><span class="tile-lg bg-blue"><i class="fa fa-desktop fa-2x m-t-sm"></i></span>知识百科</label>

        <label for="type-search"><span class="tile-lg bg-lightblue"><i class="fa fa-search fa-2x m-t-sm"></i></span>搜索</label>

        <label for="type-APKPURE"><span class="tile-lg bg-huise"><i class="fa fa-cloud fa-2x m-t-sm"></i></span>阿里云搜索</label>

        <label for="type-qunar"><span class="tile-lg bg-red"><i class="fa fa-book fa-2x m-t-sm"></i></span>Dictionary</label>
		
        <label for="type-wechat"><span class="tile-lg bg-orange"><i class="fa fa-users fa-2x m-t-sm"></i></span>社交</label>

        <label for="type-mdouban"><span class="tile-lg bg-yellow"><i class="fa fa-video-camera fa-2x m-t-sm"></i></span>视频</label>
		
        <label for="type-Add2Shaarli"><span class="tile-lg bg-green"><i class="fa fa-gears fa-2x m-t-sm"></i></span>工具</label>

        <label for="type-youdao"><span class="tile-lg bg-purple"><i class="fa fa-search fa-2x m-t-sm"></i></span>辞典</label>

        <label for="type-bookdouban"><span class="tile-lg bg-kaqise"><i class="fa fa-star-half-full fa-2x m-t-sm"></i></span>电子书</label>

        <label for="type-mantouav"><span class="tile-lg bg-pink"><i class="fa fa-users fa-2x m-t-sm"></i></span>AV</label>
		
        <label for="type-gimage"><span class="tile-lg bg-avlook"><i class="fa fa-youtube-play fa-2x m-t-sm"></i></span>AV视图</label>
		
        <label for="type-taobao1"><span class="tile-lg bg-cyan"><i class="fa fa-shopping-cart fa-2x m-t-sm"></i></span>购物</label>
			</div></div>

			<div class="search-group group-a"><span class="type-text">常用</span><ul class="search-type">

        <li><input checked hidden type="radio" name="type" id="type-Shaarli" value="https://shaarli.toyqiu.cc:999/?searchterm=" data-placeholder="　　搜索　Shaarli 书签"><label for="type-Shaarli"><span style="color:#1B926C">Shaarli</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-midao" value="https://dokuwiki.toyqiu.cc:999/doku.php?do=search&id=start&q=" data-placeholder="　　搜索　Dokuwiki"><label for="type-midao"><span style="color:#5F6EE8">Do</span><span style="color:#FB3E3E">ku</span><span style="color:#FE9200">wi</span><span style="color:#68CCCA">ki</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-3000" value="https://wallabag.toyqiu.cc:999/search?currentRoute=unread&search_entry%5Bterm%5D=" data-placeholder="　　搜索　Wallabag"><label for="type-3000"><span style="color:#000000">Wallabag</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-zhihu" value="https://www.zhihu.com/search?q=" data-placeholder="　　搜索　知乎"><label for="type-zhihu"><span style="color:#2932E1">知乎</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-quora" value="https://memos.toyqiu.cc:999/?text=" data-placeholder="　　搜索　Memos"><label for="type-quora"><span style="color:#DD1100">Memos</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-Wolframalpha" value="https://www.wolframalpha.com/input/?i=" data-placeholder="　　搜索　Wolframalpha"><label for="type-Wolframalpha"><span style="color:#DD1100">Wolfram</span><span style="color:#FFDEBF">Alpha</span></label></li>

        <li><input hidden type="radio" name="type" id="type-baike" value="https://baike.baidu.com/item/" data-placeholder="　　搜索　百度百科"><label for="type-baike"><span style="color:#2932E1">百度百科</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-toyqiuwiki" value="https://wiki.toyqiu.cc:999/wikipedia_en_all_maxi/A/" data-placeholder="　　搜索　Wikipedia"><label for="type-toyqiuwiki"><span style="color:#00005">Wikipedia</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-toyqiuwikicn" value="https://wiki.toyqiu.cc:999/wikipedia_zh_all_maxi/A/" data-placeholder="　　搜索　维基百科"><label for="type-toyqiuwikicn"><span style="color:#660000">维基百科</span></label></li>

		<li><input checked hidden type="radio" name="type" id="type-toyqiuwikijp" value="https://wiki.toyqiu.cc:999/wikipedia_ja_all_maxi/A/" data-placeholder="　　搜索　ウィキペディアへ"><label for="type-toyqiuwikijp"><span style="color:#9966FF">ウィキペディアへ</span></label>
		
		</li></li></ul></div>

			<div class="search-group group-b"><span class="type-text">阿里云</span><ul class="search-type">

        <li><input checked hidden type="radio" name="type" id="type-APKPURE" value="https://yiso.fun/info?searchKey=" data-placeholder="　　搜索　易搜"><label for="type-APKPURE"><span style="color:#2DC88B">易</span><span style="color:#5CCF4B">搜</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-bshouji" value="https://www.upyunso.com/search.html?page=1&keyword=" data-placeholder="　　搜索　UP云搜"><label for="type-bshouji"><span style="color:#CE40B7">UP</span><span style="color:#FFB62D">云</span><span style="color:#30BAB6">搜</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-APKmirror" value="https://www.alipansou.com/search?k=" data-placeholder="　　搜索　猫狸盘搜"><label for="type-APKmirror"><span style="color:#FF8B14">猫狸盘搜</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-163" value="https://zhaoziyuan.la/so?filename=" data-placeholder="　　搜索　找资源啦"><label for="type-163"><span style="color:#E60026">找资源啦</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-qqmusic" value="https://kankanso.com/#/main/common?q=" data-placeholder="　　搜索　优聚搜"><label for="type-qqmusic"><span style="color:#FFDC00">优聚</span><span style="color:#16C7A7">搜</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-mantoumu" value="https://www.niceso.fun/search/?q=" data-placeholder="　　搜索　奈斯搜索"><label for="type-mantoumu"><span style="color:#F6CA60">奈斯</span><span style="color:#2100E0">搜索</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-subhd" value="https://subhd.tv/search0/" data-placeholder="　　搜索　字幕站"><label for="type-subhd"><span style="color:#3A5795">字幕站</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-assrt" value="https://assrt.net/sub/?searchword=" data-placeholder="　　搜索　射手字幕"><label for="type-assrt"><span style="color:#C0392B">射手</span><span style="color:#090907">字幕</span></label></li>

		</li></li></ul></div>

			<div class="search-group group-c"><span class="type-text">Dict</span><ul class="search-type">

        <li><input hidden type="radio" name="type" id="type-qunar" value="https://dictionary.toyqiu.cc:999/18BFDEAF-89FA-32A1-AEAE-E663F2548235/query/" data-placeholder="　　搜索　21世紀電腦英漢漢英雙向辭典"><label for="type-qunar"><span style="color:#00afc7">21世紀</span></label></li>
	
        <li><input checked hidden type="radio" name="type" id="type-tripadvisor" value="https://dictionary.toyqiu.cc:999/uuid_B9650B07-0324-303E-AEE9-714EF4B78D6D/query/" data-placeholder="　　搜索　牛津高阶英汉双解词典(第9版)"><label for="type-tripadvisor"><span style="color:#000A12">牛</span><span style="color:#F8C40F">津</span><span style="color:#00AF87">高阶</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-qyer" value="https://dictionary.toyqiu.cc:999/979D6BDA-DF97-3A0C-830F-C7FCB7CAA28A/query/" data-placeholder="　　搜索　现代汉语学习词典2010"><label for="type-qyer"><span style="color:#00D6C6">现代汉语学习词典</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-mafengwo" value="https://dictionary.toyqiu.cc:999/uuid_0266B785-3058-3EB5-9266-9CB273D9AFE4/query/" data-placeholder="　　搜索　千篇汉语词典2021"><label for="type-mafengwo"><span style="color:#3C3D3D">千篇</span><span style="color:#FF9D00">汉语词典</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-dacihai" value="https://dictionary.toyqiu.cc:999/F816E8C1-C099-3360-80CD-CCB2D437F996/query/" data-placeholder="　　搜索　大辭海2020.3.31"><label for="type-dacihai"><span style="color:#3C3D3D">大</span><span style="color:#FF9D00">辭</span><span style="color:#00D6C6">海</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-sanshoudou" value="https://dictionary.toyqiu.cc:999/uuid_9F0BF6F6-8B8F-3423-90DB-7591AEDB3E5E/query/" data-placeholder="　　搜索　三省堂"><label for="type-sanshoudou"><span style="color:#3C3D3D">三省堂</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-daijisen" value="https://dictionary.toyqiu.cc:999/uuid_B46E4B35-0F32-334F-923E-5064C4E94572/query/" data-placeholder="　　搜索　大辞泉"><label for="type-daijisen"><span style="color:#d8201d">大</span><span style="color:#000000">辞</span><span style="color:#132fff">泉</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-NHK" value="https://dictionary.toyqiu.cc:999/uuid_8E8FDFB8-8C40-3B88-8AAD-7C3F1A6236EF/query/" data-placeholder="　　搜索　NHK日本語発音アクセント辞書"><label for="type-NHK"><span style="color:#00a34e">NHK</span><span style="color:#f1e800">発</span><span style="color:#00a34e">音</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-hanyudacidian" value="https://dictionary.toyqiu.cc:999/uuid_8B1499E2-7F87-34A4-8933-E39681FA6A92/query/" data-placeholder="　　搜索　 漢語大詞典"><label for="type-hanyudacidian"><span style="color:#031dda"> 漢語大詞典</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-handian" value="https://dictionary.toyqiu.cc:999/uuid_CA1E6E68-0CD1-35A1-A069-EE2EFB44031C/query/" data-placeholder="　　搜索　 漢典"><label for="type-handian"><span style="color:#9e1924"> 漢典</span></label></li>

		</li></li></ul></div>

			<div class="search-group group-d"><span class="type-text">AV视图</span><ul class="search-type">

        <li><input checked hidden type="radio" name="type" id="type-Youtube" value="https://blogjav.net/?s=" data-placeholder="　　搜索　影片截图"><label for="type-Youtube"><span style="color:#FF0000">　AV</span><span style="color:#282828">Blog</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-gimage" value="https://jable.tv/search/" data-placeholder="　　搜索　Jable.tv 最后自己加 /"><label for="type-gimage"><span style="color:#3B83FA">J</span><span style="color:#F3442C">a</span><span style="color:#FFC300">b</span><span style="color:#4696F8">l</span><span style="color:#2CAB4E">e</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-gMaps" value="https://javhub.net/search/" data-placeholder="　　搜索　JavHub 翻阅老旧AV"><label for="type-gMaps"><span style="color:#3B83FA">J</span><span style="color:#F3442C">a</span><span style="color:#FFC300">v</span><span style="color:#4696F8">hub</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-gmail" value="https://missav.com/ja/search/" data-placeholder="　　搜索　MissAV"><label for="type-gmail"><span style="color:#CA483A">MissAV</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-supjav" value="https://supjav.com/?s=" data-placeholder="　　搜索　SupJav"><label for="type-supjav"><span style="color:#d8201d">SupJav</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-gDrive" value="https://javmix.tv/?s=" data-placeholder="　　搜索　JavMix"><label for="type-gDrive"><span style="color:#3B83FA">J</span><span style="color:#F3442C">a</span><span style="color:#FFC300">v</span><span style="color:#4696F8">mi</span><span style="color:#2CAB4E">x</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-Chrome" value="https://javfan.one/?s=" data-placeholder="　　搜索　JavFun"><label for="type-Chrome"><span style="color:#3B83FA">J</span><span style="color:#F3442C">a</span><span style="color:#FFC300">v</span><span style="color:#4696F8">f</span><span style="color:#2CAB4E">u</span><span style="color:#282828">n</span</label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-crx4Chrome" value="https://netflav.com/search?type=title&keyword=" data-placeholder="　　搜索　NetFlav"><label for="type-crx4Chrome"><span style="color:#FFC300">N</span><span style="color:#4696F8">e</span><span style="color:#2CAB4E">t</span><span style="color:#311B0E">F</span><span style="color:#3B83FA">l</span><span style="color:#F3442C">a</span><span style="color:#FFC300">r</span><span style="color:#4696F8">v</span></label></li>

		</li></li></ul></div>

			<div class="search-group group-e"><span class="type-text">搜索</span><ul class="search-type">

        <li><input hidden type="radio" name="type" id="type-search" value="https://www.baidu.com/s?wd=" data-placeholder="　　百度一下"><label for="type-search"><span style="color:#2319dc">百度</span></label></li>

        <li><input hidden type="radio" name="type" id="type-google1" value="https://www.google.com/search?q=" data-placeholder="　　谷歌两下"><label for="type-google1"><span style="color:#3B83FA">G</span><span style="color:#F3442C">o</span><span style="color:#FFC300">o</span><span style="color:#4696F8">g</span><span style="color:#2CAB4E">l</span><span style="color:#F54231">e</span></label></li>

        <li><input hidden type="radio" name="type" id="type-360" value="https://www.so.com/s?q=" data-placeholder="　　360好搜"><label for="type-360"><span style="color:#19b955">360</span></label></li>

        <li><input hidden type="radio" name="type" id="type-sogo" value="https://www.sogou.com/web?query=" data-placeholder="　　搜狗搜索"><label for="type-sogo"><span style="color:#ff5943">搜狗</span></label></li>

        <li><input hidden type="radio" name="type" id="type-bing" value="https://cn.bing.com/search?q=" data-placeholder="　　微软Bing搜索"><label for="type-bing"><span style="color:#007daa">Bing</span></label></li>
<!--
        <li><input hidden type="radio" name="type" id="type-sm" value="https://yz.m.sm.cn/s?q=" data-placeholder="　　UC移动端搜索"><label for="type-sm"><span style="color:#ff8608">神马</span></label>
		
        <li><input checked hidden type="radio" name="type" id="type-DuckDuckGo" value="https://duckduckgo.com/?q=" data-placeholder="　　搜索　DuckDuckGo"><label for="type-DuckDuckGo"><span style="color:#DE5833">Duck</span><span style="color:#FDD20A">Duck</span><span style="color:#DE5833">Go</span></label></li>
			
        <li><input checked hidden type="radio" name="type" id="type-Yahoo" value="https://www.search.yahoo.com/search?p=" data-placeholder="　　搜索　Yahoo"><label for="type-Yahoo"><span style="color:#6001D2">Yahoo</span></label></li>
			
        <li><input checked hidden type="radio" name="type" id="type-yahoojp" value="https://search.yahoo.co.jp/search;_ylt=A2RA0DzmJxVdAy8APOSJBtF7?p=" data-placeholder="　　搜索　Yahoo! Japan"><label for="type-yahoojp"><span style="color:#FF0033">Yahoo! Japan</span></label></li>
			
        <li><input checked hidden type="radio" name="type" id="type-Yahootw" value="https://tw.search.yahoo.com/search?fr=yfp-search-sb&p=" data-placeholder="　　搜索　Yahoo！奇摩"><label for="type-Yahootw"><span style="color:#6001D2">Yahoo!奇摩</span></label></li>
-->		
        <li><input hidden type="radio" name="type" id="type-baiduimage" value="https://image.baidu.com/search/index?tn=baiduimage&ps=1&ct=201326592&lm=-1&cl=2&nc=1&ie=utf-8&dyTabStr=MCwyLDMsMSw0LDUsNyw4LDYsOQ%3D%3D&word=" data-placeholder="　　搜索百度图片"><label for="type-baiduimage"><span style="color:#2319dc">百度图片</span></label></li>

        <li><input hidden type="radio" name="type" id="type-iconfont" value="https://www.iconfont.cn/search/index?searchType=icon&q=" data-placeholder="　　搜索　阿里巴巴矢量图库"><label for="type-iconfont"><span style="color:#922500">iconfont</span></label></li>

        <li><input hidden type="radio" name="type" id="type-qcc" value="https://www.qcc.com/web/search?key=" data-placeholder="　　搜索　企查查"><label for="type-qcc"><span style="color:#0066ff">企查查</span></label></li>

        <li><input hidden type="radio" name="type" id="type-tianyancha" value="https://www.tianyancha.com/search?key=" data-placeholder="　　搜索　天眼查"><label for="type-tianyancha"><span style="color:#003079">天眼查</span></label></li>
		
		
		</li></ul></div>

			<div class="search-group group-f"><span class="type-text">辞典</span><ul class="search-type">

        <li><input checked hidden type="radio" name="type" id="type-wiki" value="https://en.wikipedia.org/wiki/Special:Search/" data-placeholder="　　搜索　Wikipedia"><label for="type-wiki"><span style="color:#00005">Wikipedia</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-wikicn" value="https://zh.wikipedia.org/wiki/" data-placeholder="　　搜索　维基百科"><label for="type-wikicn"><span style="color:#660000">维基百科</span></label></li>

		<li><input checked hidden type="radio" name="type" id="type-wikijp" value="https://ja.wikipedia.org/wiki/" data-placeholder="　　搜索　ウィキペディアへ"><label for="type-wikijp"><span style="color:#9966FF">ウィキペディアへ</span></label></li>
		        
        <li><input checked hidden type="radio" name="type" id="type-zdic" value="https://www.zdic.net/hans/" data-placeholder="　　搜索　汉典"><label for="type-zdic"><span style="color:#8E281B">汉典</span></label></li>
		
		<li><input checked hidden type="radio" name="type" id="type-youdao" value="http://dict.youdao.com/w/eng/" data-placeholder="　　搜索　有道词典"><label for="type-youdao"><span style="color:#E50E37">有道</span><span style="color:#807E7E">词典</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-sanseido" value="https://www.sanseido.biz/User/Dic/Index.aspx?TWords={query}&st=0&DORDER=&DailyJJ=checkbox&DailyEJ=checkbox&DailyJE=checkbox" data-placeholder="　　搜索　三省堂 Web Dictionary"><label for="type-sanseido"><span style="color:#A9CEE8">三省堂</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-goo" value="https://dictionary.goo.ne.jp/srch/all/{query}/m0u/" data-placeholder="　　搜索　GOO辞書"><label for="type-goo"><span style="color:#9C4836">GOO辞書</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-kotobank" value="https://kotobank.jp/gs/?q=" data-placeholder="　　搜索　コトバンク"><label for="type-kotobank"><span style="color:#1A1A1A">コトバンク</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-weblio" value="https://www.weblio.jp/content/" data-placeholder="　　搜索　weblio国語辞典"><label for="type-weblio"><span style="color:#1F4795">W</span><span style="color:#131313">eblio辞典</span></label></li>
		
		</li></ul></div>

			<div class="search-group group-g"><span class="type-text">AV</span><ul class="search-type">

        <li><input checked hidden type="radio" name="type" id="type-Jable" value="https://jable.tv/search/" data-placeholder="　　搜索　Jable　　【关键词后手动加 / 】输入番号、名字、标签"><label for="type-Jable"><span style="color:#007AFF">Jable</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-blogjav" value="https://blogjav.net/?s=" data-placeholder="　　搜索　视频截图　　输入番号、名字、标签"><label for="type-blogjav"><span style="color:#F32C8E">Blogjav</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-avgle" value="https://avgle.com/search/videos?search_query=" data-placeholder="　　搜索　AVgle　　输入番号、名字、标签"><label for="type-avgle"><span style="color:#E94336">A</span><span style="color:#FBBC05">V</span><span style="color:#4184F2">g</span><span style="color:#32A752">l</span><span style="color:#E94336">e</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-javbus" value="https://www.javbus.com/search/" data-placeholder="　　搜索　JavBus　　输入番号"><label for="type-javbus"><span style="color:#CC0000">Jav</span><span style="color:#FEBF03">Bus</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-mgsav" value="https://www.mgstage.com/product/product_detail/" data-placeholder="　　搜索　小厂无名AV、MGS Prestige　　输入番号、名字、标签"><label for="type-mgsav"><span style="color:#FF0A6E">无名AV</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-mantouav" value="https://kp.m-team.cc/adult.php?incldead=1&spstate=0&inclbookmarked=0&search=" data-placeholder="　　搜索　馒头AV　　输入番号、名字、标签"><label for="type-mantouav"><span style="color:#FD9500">馒头</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-jav" value="http://javtorrent.re/?s=" data-placeholder="　　搜索　JAV　　输入番号、名字、标签"><label for="type-jav"><span style="color:#555555">JAV</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-jav101" value="https://jav101.com/search/" data-placeholder="　　搜索　啪啪啪研习所　　输入番号、名字、标签"><label for="type-jav101"><span style="color:#F32C8E">啪啪啪研习所</span></label></li>
		

        <li><input checked hidden type="radio" name="type" id="type-yama" value="http://yamachan01.com/?q=" data-placeholder="　　搜索　みんなのエロ画像　　输入番号、名字、标签"><label for="type-yama"><span style="color:#00A4DE">みんなのエロ画像</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-minnano" value="http://www.minnano-av.com/search_result.php?search_scope=actress&search_word=" data-placeholder="　　搜索　みんなのAV　　输入番号、名字、标签"><label for="type-minnano"><span style="color:#0096DB">みんなのAV</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-minnanavo" value="https://avwikich.com/?s=" data-placeholder="　　搜索　AV女優名wikiちゃんねる　　输入番号、片名、标签"><label for="type-minnanavo"><span style="color:#111111">女優名wiki</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-avwiki" value="https://av-wiki.net/?s=" data-placeholder="　　搜索　AV女優の名前が知りたい　　输入番号、片名、标签"><label for="type-avwiki"><span style="color:#AC8332">AV女優の名前が知りたい</span></label></li>
		</li></ul></div>

			<div class="search-group group-h"><span class="type-text">工具</span><ul class="search-type">

        <li><input checked hidden type="radio" name="type" id="type-Add2Shaarli" value="https://shaarli.toyqiu.cc:999/?post=" data-placeholder="Add to Shaarli 书签"><label for="type-Add2Shaarli"><span style="color:#1B926C">+ Shaarli</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-shaarlinote" value="https://shaarli.toyqiu.cc:999/?post=" data-placeholder="　　快速新建笔记"><label for="type-shaarlinote"><span style="color:#1b926c" onclick="window.open('https://shaarli.toyqiu.cc:999/?post=','_blank')">Shaarli</span><span style="color:#34a6e7">Note</span></label></li>
		
        <li><input hidden type="radio" name="type" id="type-dalipan" value="https://wallabag.toyqiu.cc:999/bookmarklet?url=" data-placeholder="Clipper to Wallabag 剪藏"><label for="type-dalipan"><span style="color:#000000">+ Wallabag</span></label></li>
			
        <li><input checked hidden type="radio" name="type" id="type-baidupanso" value="http://pan.xingtuhua.com/search?keyword=" data-placeholder="　　搜索　百度网盘"><label for="type-baidupanso"><span style="color:#F3442C">百</span><span style="color:#FFC300">度</span><span style="color:#4696F8">网盘</span></label></li>

        <li><input hidden type="radio" name="type" id="type-documents" value="http://www.html22.com/d/?url=" data-placeholder="收费文档破解"><label for="type-documents"><span style="color:#07f">百度文档</span></label></li>

        <li><input hidden type="radio" name="type" id="type-podcasta" value="https://podcastaddict.com/?q=" data-placeholder="Podcast Adict"><label for="type-podcasta"><span style="color:#930">Podcast Adict</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-Github" value="https://github.com/search?q=" data-placeholder="　　搜索　Github"><label for="type-Github"><span style="color:#24292E">Github</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-Docker" value="https://hub.Docker.com/search?q=" data-placeholder="　　搜索　DockerHub"><label for="type-Docker"><span style="color:#254356">Docker</span><span style="color:#099CEC">Hub</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-thepiratebay" value="https://www.thepiratebay.org/search/" data-placeholder="　　搜索　The Pirate Bay"><label for="type-thepiratebay"><span style="color:#A2724C">The</span><span style="color:#986D4B">Pirate</span><span style="color:#311B0E">Bay</span></label></li>
		
		</ul></div>

			<div class="search-group group-i"><span class="type-text">社交</span><ul class="search-type">

        <li><input checked hidden type="radio" name="type" id="type-wechat" value="https://weixin.sogou.com/weixin?p=01030402&query=" data-placeholder="　　搜索　微信公众号"><label for="type-wechat"><span style="color:#00A06A">微信公众号</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-twitter" value="https://twitter.com/search?q=" data-placeholder="　　搜索　Twitter"><label for="type-twitter"><span style="color:#1DA1F2">twitter</span></label></li>
				
        <li><input checked hidden type="radio" name="type" id="type-Facebook" value="https://www.facebook.com/search/top/?q=" data-placeholder="　　搜索　Facebook"><label for="type-Facebook"><span style="color:#4267B2">Facebook</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-weibo" value="https://s.weibo.com/weibo/" data-placeholder="　　搜索　微博"><label for="type-weibo"><span style="color:#FF9933">微博</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-douban" value="https://www.douban.com/search?q=" data-placeholder="　　搜索　豆瓣"><label for="type-douban"><span style="color:#00B51D">豆瓣</span></label></li>

        <li><input hidden type="radio" name="type" id="type-why" value="https://ask.seowhy.com/search/?q=" data-placeholder="SEO问答社区"><label for="type-why"><span style="color:#428bca">搜外问答</span></label></li></ul></div>

			<div class="search-group group-j"><span class="type-text">购物</span><ul class="search-type">

        <li><input hidden type="radio" name="type" id="type-taobao1" value="https://s.taobao.com/search?q=" data-placeholder="淘宝"><label for="type-taobao1"><span style="color:#f40">淘宝</span></label></li>

        <li><input hidden type="radio" name="type" id="type-jd" value="https://search.jd.com/Search?keyword=" data-placeholder="京东"><label for="type-jd"><span style="color:#c91623">京东</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-Amazon" value="http://www.amazon.com/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=" data-placeholder="　　搜索　Amazon"><label for="type-Amazon"><span style="color:#232F3E">Amazon</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-Amazoncn" value="https://www.amazon.cn/s?k=" data-placeholder="　　搜索　亚马逊"><label for="type-Amazoncn"><span style="color:#48A3C6">亚马逊</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-baidu" value="https://www.amazon.co.jp/s?k=" data-placeholder="　　搜索　アマゾン"><label for="type-baidu"><span style="color:#FE9800">アマゾン</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-tmall" value="https://list.tmall.com/search_product.htm?q=" data-placeholder="　　搜索　天猫"><label for="type-tmall"><span style="color:#FF0037">天猫</span></label></li>
		
</li></ul></div>

			<div class="search-group group-k"><span class="type-text">视频</span><ul class="search-type">

        <li><input checked hidden type="radio" name="type" id="type-mdouban" value="https://movie.douban.com/subject_search?search_text=" data-placeholder="　　搜索　豆瓣电影"><label for="type-mdouban"><span style="color:#4BA0D4">豆瓣</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-bilibili" value="https://search.bilibili.com/all?keyword=" data-placeholder="　　搜索　哔哩哔哩"><label for="type-bilibili"><span style="color:#FB7299">哔</span><span style="color:#00A1D6">哩</span><span style="color:#FB7299">哔</span><span style="color:#00A1D6">哩</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-mikan" value="https://mikanani.me/Home/Search?searchstr=" data-placeholder="　　搜索　蜜柑计划RSS订阅下载动漫"><label for="type-mikan"><span style="color:#FAAA3B" onclick="window.open('https://mikanani.me','_blank')">蜜柑计划</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-skysnow" value="https://skyeysnow.com/search.php?mod=forum&adv=yes&srchtxt=" data-placeholder="　　搜索　天雪SkyeySnow动漫PT站"><label for="type-skysnow"><span style="color:#2873C2">天雪动漫</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-dmhy" value="http://www.zzzfun.com/vod-search.html?wd=" data-placeholder="　　搜索　zzzfun"><label for="type-dmhy"><span style="color:#29477D">zzzfun</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-fengche" value="http://www.fengchedm.com/common/search.aspx?key=" data-placeholder="　　搜索　风车动漫"><label for="type-fengche"><span style="color:#F2C90A">风</span><span style="color:#55AC35">车</span><span style="color:#008FD2">动</span><span style="color:#DC382F">漫</span></label></li>
				
        <li><input checked hidden type="radio" name="type" id="type-riju" value="https://www.o8tv.com/vodsearch/-------------.html?wd=" data-placeholder="　　搜索　555电影"><label for="type-riju"><span style="color:#121212">555</span><span style="color:#F5C518">电</span><span style="color:#121212">影</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-nfmovies" value="https://www.nfmovies.com/search.php?searchword=" data-placeholder="　　搜索　奈菲影视"><label for="type-nfmovies"><span style="color:#奈菲影视">奈菲</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-91meiju" value="https://91mjw.com/?s=" data-placeholder="　　搜索　91美剧网"><label for="type-91meiju"><span style="color:#E5A61A">91美剧</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-mantoumov" value="https://kp.m-team.cc/movie.php?incldead=1&spstate=0&inclbookmarked=0&search=" data-placeholder="　　搜索　馒头电影"><label for="type-mantoumov"><span style="color:#F6CA60">馒头</span><span style="color:#4BA0D4">电影</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-mantoutv" value="https://kp.m-team.cc/torrents.php?cat403=1&cat402=1&cat435=1&cat438=1&incldead=1&spstate=0&inclbookmarked=0&search=" data-placeholder="　　搜索　馒头电视"><label for="type-mantoutv"><span style="color:#F6CA60">馒头</span><span style="color:#587993">电视</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-poxiaotv" value="http://www.poxiaotv.com/vodsearch/-------------.html?wd=" data-placeholder="　　搜索　破晓电影"><label for="type-poxiaotv"><span style="color:#ED1E79">破晓电影</span></label></li>
		
		


</li></ul></div>

			<div class="search-group group-l"><span class="type-text">读书</span><ul class="search-type">

        <li><input checked hidden type="radio" name="type" id="type-bookdouban" value="https://search.douban.com/book/subject_search?search_text=" data-placeholder="　　搜索　豆瓣读书"><label for="type-bookdouban"><span style="color:#563D24">豆瓣读书</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-goodreads" value="https://www.goodreads.com/search?q=" data-placeholder="　　搜索　Goodreads"><label for="type-goodreads"><span style="color:#299439">Good</span><span style="color:#463020">reads</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-booklog" value="https://booklog.jp/search?service_id=1&index=Books&keyword=" data-placeholder="　　搜索　ブクログ - web本棚"><label for="type-booklog"><span style="color:#4EA6CC">ブクログ</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-Calibre" value="https://books.toyqiu.cc:999/search/stored/?query=" data-placeholder="　　搜索　Calibre-web"><label for="type-Calibre"><span style="color:#B78119">Calibre</span><span style="color:#39A9CF">web</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-ebookcool" value="https://www.iamtxt.com/noresult.html?key=" data-placeholder="　　搜索　IamTXT"><label for="type-ebookcool"><span style="color:#711078" onclick="window.open('https://www.iamtxt.com','_blank')">Iam</span><span style="color:#F89D34">T</span><span style="color:#449A41">XT</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-epubee" value="http://www.ferebook.com/files.aspx?skeyinput=" data-placeholder="　　搜索　ePUBee"><label for="type-epubee"><span style="color:#80B51D">e</span><span style="color:#313030">PUB</span><span style="color:#80B51D">ee</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-sobooks" value="https://sobooks.cc/search/" data-placeholder="　　搜索　SoBooks.cc"><label for="type-sobooks"><span style="color:#424242">SoBooks</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-ladouban" value="http://ladouban.com/search?keyword=" data-placeholder="　　搜索　辣豆瓣"><label for="type-ladouban"><span style="color:#BE3001">辣豆瓣</span></label></li>

        <li><input checked hidden type="radio" name="type" id="type-qukuailian" value="https://ebook2.lorefree.com/site/index?s=" data-placeholder="　　搜索　LoreFree - 去中心化免费电子书共享社区"><label for="type-qukuailian"><span style="color:#C14566">Lore</span><span style="color:#398277">Free</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-libgen" value="https://libgen.is/search.php?req=" data-placeholder="　　搜索　LibGen"><label for="type-libgen"><span style="color:#A00000">LibGen</span></label></li>
		
        <li><input checked hidden type="radio" name="type" id="type-ZLibrary" value="https://b-ok.cc/s/?q=" data-placeholder="　　搜索　ZLibrary"><label for="type-ZLibrary"><span style="color:#49AFD0">Z</span><span style="color:#8ECD51">Libra</span><span style="color:#90A5A8">ry</span></label></li>

		
		</ul></div></div><form action="https://web.geekji.cn/search/" method="get" target="_blank" id="super-search-fm"><input type="text" id="search-text" placeholder="输入关键字搜索" style="outline:0"><button type="submit"><i class="fa fa-search "></i></button></form><div class="set-check hidden-xs"><input type="checkbox" id="set-search-blank" class="bubble-3" autocomplete="off"></div></div>

<!-- 搜索框各部分定义说明

搜索框长宽高
#search{max-width:980px;margin:20px auto 14px}

搜索框整个位置
#search form{position:relative}

搜索框内部外部长宽高字体曲率背景色
#search form{position:relative}#search-text{padding:0pt;width:100%;height:50px;font-size:1pc; border: 1.5px dashed gray; border-radius:20px;background-color:#e0efff}

搜索按钮长宽高字体曲率背景色
#search button{position:absolute;top:0;right:0;background:#313437;border:0;width:50px;height:36px;margin:7px 9pt 0;line-height:36px;border-radius:20px}	

不明
#search button:hover{background:#000;cursor:pointer}

搜索框右边的按钮内搜索图标颜色、大小
#search button i{color:#fff;font-size:18px}

搜索栏上排搜索组离左边距离
.search-group{display:none;padding-left:75px}

不明
.s-current .search-type{padding-left:0;display:block}

不明
.s-current{display:block}

定义搜索组显示位置
#search-list{position:relative}

定义鼠标在搜索栏上面一行的什么位置激活搜索组显示
.s-type{position:absolute;top:0;left:0;z-index:13;width:75px}

不明
.s-type:hover{height:auto}

定义鼠标在任意位置激活搜索组显示
.s-type>span{display:block;height:31px;width:75px}

定义搜索组出现位置距离上部空间、底下留白空间、图标之间横向距离、背景色、边框粗度、边框样式、框框曲率、不明
.s-type-list{display:none;position:absolute;top:31px;padding:9pt 0;width:18pc;background:#fff;border: 1.5px dashed gray;border-radius:20px;box-shadow:1 0 6px rgba(0,0,0,.16)}

定义激活搜索组最上面几乎看不见的小三角形
.s-type-list:before{position:absolute;top:-1pc;left:10px;content:' ';display:block;width:0;height:0;border:10px solid transparent;border-bottom-color:#fff}

激活后搜索组图标下，字体大小、行间距、居中与否、宽度
.s-type-list label{display:block;font-size:1pc;line-height:2pc;text-align:center;width:33%;float:left}

搜索组内图标格内图标颜色、占用宽度高度、大小，行间距、图标格曲率
.s-type-list .tile-lg{color:#fff;width:3pc;height:3pc;font-size:1.25rem;line-height:3rem;border-radius:.3rem;display:block;margin:auto}			

定义颜色名字对应的颜色值
				.bg-blue{background-color:#0179a8!important}
				.bg-purple{background-color:#5f4b8b!important}		
				.bg-pink{background-color:#fa8aa7!important}
				.bg-red{background-color:#ea6759!important}
				.bg-orange{background-color:#ec935e!important}
				.bg-yellow{background-color:#f7c46c!important}
				.bg-green{background-color:#a7c796!important}
				.bg-teal{background-color:#00a28a!important}
				.bg-cyan{background-color:#3686a0!important}
				.bg-huise{background-color:#7d7f83!important}
				.bg-avlook{background-color:#fb000e!important}
				.bg-lightblue{background-color:#7ebcff!important}
				.bg-kaqise{background-color:#e0cebb!important}


展开搜索组后鼠标选中图标后文字变色颜色\选定后整个背景色块颜色\背景色块曲率定义
.s-type-list label:hover{color:#000;background-color:#e0efff;border-radius:20px;}

展开搜索组后上部留白空间
.s-type:hover .s-type-list{display:block;padding-top:22px}

定义行开头大类组名文字大小、位置、行高				
.type-text{position:absolute;left:0;width:75px;padding-left:9pt;font-size:1pc;line-height:31px}

行开头大类组名旁边的小箭头对应的位置			
.type-text:after{content:"\f105";font-family:FontAwesome;margin:0 0 0 15px}

不明
.search-type{white-space:nowrap;margin:0}

不明
.search-type label{margin:0}

不明
.search-type li{display:inline-block}

最上面整行文字定义：标签间间隔、字体大小、行间距、标签四个角曲率
.search-type li label{display:inline-block;padding:0 11px;font-size:15px;line-height:31px;border-radius:20px 20px 0 0;cursor:pointer}

选中标签背景色/选中标签边框上边左边右边灰色虚线
.search-type input:checked+label,.search-type input:hover+label{background-color:#e0efff; border-top:1.5px dashed gray; border-left:1.5px dashed gray; border-right:1.5px dashed gray}

整个搜索部分距离下部的留白空间
.set-check{margin-top:3px;font-size:9pt}

不明
.set-check label{margin-left:3px}

不明
.set-check label{opacity:0;transition:all .3s ease}
				
				
				
				
				
 -->		
				<style type="text/css">
				#search{max-width:980px;margin:20px auto 14px}
				#search form{position:relative}#search-text{padding:0pt;width:100%;height:50px;font-size:1pc; border: 1.5px dashed gray; border-radius:20px;background-color:#e0efff}
				#search button{position:absolute;top:0;right:0;background:#313437;border:0;width:50px;height:36px;margin:7px 9pt 0;line-height:36px;border-radius:20px}
				#search button:hover{background:#000;cursor:pointer}
				#search button i{color:#fff;font-size:18px}
					.search-group{display:none;padding-left:75px}
					.s-current.search-type{padding-left:0;display:block}.s-current{display:block}
				#search-list{position:relative}
				.s-type{position:absolute;top:0;left:0;z-index:13;width:75px}
				.s-type:hover{height:auto}.s-type>span{display:block;height:31px;width:75px}
				.s-type-list{display:none;position:absolute;top:31px;padding:9pt 0;width:18pc;background:#fff;border: 1.5px dashed gray;border-radius:20px;box-shadow:1 0 6px rgba(0,0,0,.16)}
				.s-type-list:before{position:absolute;top:-1pc;left:10px;content:' ';display:block;width:0;height:0;border:10px solid transparent;border-bottom-color:#fff}
				.s-type-list label{display:block;font-size:1pc;line-height:2pc;text-align:center;width:33%;float:left}
				.s-type-list .tile-lg{color:#fff;width:3pc;height:3pc;font-size:1.7rem;line-height:0rem;border-radius:2rem;display:block;margin:auto}				.bg-blue{background-color:#0179a8!important}
				.bg-purple{background-color:#5f4b8b!important}		
				.bg-pink{background-color:#fa8aa7!important}
				.bg-red{background-color:#ea6759!important}
				.bg-orange{background-color:#ec935e!important}
				.bg-yellow{background-color:#f7c46c!important}
				.bg-green{background-color:#a7c796!important}
				.bg-teal{background-color:#00a28a!important}
				.bg-cyan{background-color:#3686a0!important}
				.bg-huise{background-color:#7d7f83!important}
				.bg-avlook{background-color:#fb000e!important}
				.bg-lightblue{background-color:#7ebcff!important}
				.bg-kaqise{background-color:#e0cebb!important}
				.s-type-list label:hover{color:#000;background-color:#e0efff;border-radius:20px;}
				.s-type:hover .s-type-list{display:block;padding-top:22px}
				.type-text{position:absolute;left:0;width:75px;padding-left:9pt;font-size:1.15pc;line-height:31px}
				.type-text:after{content:"\f105";font-family:FontAwesome;margin:0 0 0 4px}
				.search-type{white-space:nowrap;margin:0}
				.search-type label{margin:0}
				.search-type li{display:inline-block}
				.search-type li label{display:inline-block;padding:0 11px;font-size:15px;line-height:31px;border-radius:20px 20px 0 0;cursor:pointer}
				.search-type input:checked+label,.search-type input:hover+label{background-color:#e0efff; border-top:1.5px dashed gray; border-left:1.5px dashed gray; border-right:1.5px dashed gray}
				.set-check{margin-top:3px;font-size:9pt}
				.set-check label{margin-left:3px}
				.set-check input,
				.set-check label{opacity:0;transition:all .3s ease}
				.search-type li{list-style:none;display:inline-block}@media screen and (max-width:767px){#search{margin:25px auto 15px}
				.search-type{overflow:scroll}
				.search-list{height:30px;overflow-y:hidden;overflow-x:scroll;white-space:nowrap}}@media screen and (max-width:768px){#search{margin:25px auto 15px}
				.search-type{overflow:scroll}
				.search-list{height:30px;overflow-y:hidden;overflow-x:scroll;white-space:nowrap}}.fa-2x{padding-top: 15px;font-size: 1.5em;}
</style>
				<script type="text/javascript">
				var __encode ='seogo.me', _0xb483=["\x5F\x64\x65\x63\x6F\x64\x65","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x73\x6F\x6A\x73\x6F\x6E\x2E\x63\x6F\x6D\x2F\x6A\x61\x76\x61\x73\x63\x72\x69\x70\x74\x6F\x62\x66\x75\x73\x63\x61\x74\x6F\x72\x2E\x68\x74\x6D\x6C"];(function(_0xd642x1){_0xd642x1[_0xb483[0]]= _0xb483[1]})(window);var __Ox1467e=["\x63\x68\x65\x63\x6B\x65\x64","\x69\x6E\x70\x75\x74\x5B\x6E\x61\x6D\x65\x3D\x22\x74\x79\x70\x65\x22\x5D\x5B\x76\x61\x6C\x75\x65\x3D\x22","\x22\x5D","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72","\x6C\x65\x6E\x67\x74\x68","\x73\x2D\x63\x75\x72\x72\x65\x6E\x74","\x72\x65\x6D\x6F\x76\x65","\x63\x6C\x61\x73\x73\x4C\x69\x73\x74","\x61\x64\x64","\x70\x61\x72\x65\x6E\x74\x4E\x6F\x64\x65","\x73\x75\x70\x65\x72\x53\x65\x61\x72\x63\x68","\x73\x65\x74\x49\x74\x65\x6D","\x6C\x6F\x63\x61\x6C\x53\x74\x6F\x72\x61\x67\x65","\x67\x65\x74\x49\x74\x65\x6D","\x74\x61\x72\x67\x65\x74","\x76\x61\x6C\x75\x65","\x74\x79\x70\x65","\x66\x6F\x63\x75\x73","\x6E\x65\x77\x57\x69\x6E\x64\x6F\x77","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","","\x61\x63\x74\x69\x6F\x6E","\x6F\x70\x65\x6E","\x68\x72\x65\x66","\x69\x6E\x70\x75\x74\x5B\x6E\x61\x6D\x65\x3D\x22\x74\x79\x70\x65\x22\x5D\x3A\x63\x68\x65\x63\x6B\x65\x64","\x64\x61\x74\x61\x2D\x70\x6C\x61\x63\x65\x68\x6F\x6C\x64\x65\x72","\x67\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x70\x6C\x61\x63\x65\x68\x6F\x6C\x64\x65\x72","\x73\x65\x74\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x5F\x62\x6C\x61\x6E\x6B","\x72\x65\x6D\x6F\x76\x65\x41\x74\x74\x72\x69\x62\x75\x74\x65","\x69\x6E\x70\x75\x74\x5B\x6E\x61\x6D\x65\x3D\x22\x74\x79\x70\x65\x22\x5D","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72\x41\x6C\x6C","\x23\x73\x75\x70\x65\x72\x2D\x73\x65\x61\x72\x63\x68\x2D\x66\x6D","\x23\x73\x65\x61\x72\x63\x68\x2D\x74\x65\x78\x74","\x23\x73\x65\x74\x2D\x73\x65\x61\x72\x63\x68\x2D\x62\x6C\x61\x6E\x6B","\x2E\x73\x65\x61\x72\x63\x68\x2D\x67\x72\x6F\x75\x70","\x63\x68\x61\x6E\x67\x65","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72","\x73\x75\x62\x6D\x69\x74"];!function(){function _0x3bccx1(){_0x3bccx2(),_0x3bccx3(),_0x3bccx5(),_0x3bccx6()}function _0x3bccx2(){_0x3bccx17[__Ox1467e[0]]= _0x3bccxf()}function _0x3bccx3(){var _0x3bccx4=document[__Ox1467e[3]](__Ox1467e[1]+ _0x3bccxc()+ __Ox1467e[2]);_0x3bccx4&& (_0x3bccx4[__Ox1467e[0]]= !0,_0x3bccx7(_0x3bccx4))}function _0x3bccx5(){_0x3bccx12(_0x3bccx11())}function _0x3bccx6(){_0x3bccx13(_0x3bccx10())}function _0x3bccx7(_0x3bccx4){for(var _0x3bccx8=0;_0x3bccx8< _0x3bccx18[__Ox1467e[4]];_0x3bccx8++){_0x3bccx18[_0x3bccx8][__Ox1467e[7]][__Ox1467e[6]](__Ox1467e[5])};_0x3bccx4[__Ox1467e[9]][__Ox1467e[9]][__Ox1467e[9]][__Ox1467e[7]][__Ox1467e[8]](__Ox1467e[5])}function _0x3bccx9(_0x3bccx4,_0x3bccx8){window[__Ox1467e[12]][__Ox1467e[11]](__Ox1467e[10]+ _0x3bccx4,_0x3bccx8)}function _0x3bccxa(_0x3bccx4){return window[__Ox1467e[12]][__Ox1467e[13]](__Ox1467e[10]+ _0x3bccx4)}function _0x3bccxb(_0x3bccx4){_0x3bccx19= _0x3bccx4[__Ox1467e[14]],_0x3bccx12(_0x3bccx11()),_0x3bccx13(_0x3bccx4[__Ox1467e[14]][__Ox1467e[15]]),_0x3bccx9(__Ox1467e[16],_0x3bccx4[__Ox1467e[14]][__Ox1467e[15]]),_0x3bccx16[__Ox1467e[17]](),_0x3bccx7(_0x3bccx4[__Ox1467e[14]])}function _0x3bccxc(){var _0x3bccx8=_0x3bccxa(__Ox1467e[16]);return _0x3bccx8|| _0x3bccx4[0][__Ox1467e[15]]}function _0x3bccxd(_0x3bccx4){_0x3bccx9(__Ox1467e[18],_0x3bccx4[__Ox1467e[14]][__Ox1467e[0]]?1:-1),_0x3bccx14(_0x3bccx4[__Ox1467e[14]][__Ox1467e[0]])}function _0x3bccxe(_0x3bccx4){return _0x3bccx4[__Ox1467e[19]](),__Ox1467e[20]== _0x3bccx16[__Ox1467e[15]]?(_0x3bccx16[__Ox1467e[17]](),!1):(_0x3bccx13(_0x3bccx10()+ _0x3bccx16[__Ox1467e[15]]),_0x3bccx14(_0x3bccxf()),_0x3bccxf()?window[__Ox1467e[22]](_0x3bccx8[__Ox1467e[21]],+ new Date):location[__Ox1467e[23]]= _0x3bccx8[__Ox1467e[21]],void(0))}function _0x3bccxf(){var _0x3bccx4=_0x3bccxa(__Ox1467e[18]);return _0x3bccx4?1== _0x3bccx4:!0}function _0x3bccx10(){return document[__Ox1467e[3]](__Ox1467e[24])[__Ox1467e[15]]}function _0x3bccx11(){return document[__Ox1467e[3]](__Ox1467e[24])[__Ox1467e[26]](__Ox1467e[25])}function _0x3bccx12(_0x3bccx4){_0x3bccx16[__Ox1467e[28]](__Ox1467e[27],_0x3bccx4)}function _0x3bccx13(_0x3bccx4){_0x3bccx8[__Ox1467e[21]]= _0x3bccx4}function _0x3bccx14(_0x3bccx4){_0x3bccx4?_0x3bccx8[__Ox1467e[14]]= __Ox1467e[29]:_0x3bccx8[__Ox1467e[30]](__Ox1467e[14])}var _0x3bccx15,_0x3bccx4=document[__Ox1467e[32]](__Ox1467e[31]),_0x3bccx8=document[__Ox1467e[3]](__Ox1467e[33]),_0x3bccx16=document[__Ox1467e[3]](__Ox1467e[34]),_0x3bccx17=document[__Ox1467e[3]](__Ox1467e[35]),_0x3bccx18=document[__Ox1467e[32]](__Ox1467e[36]),_0x3bccx19=_0x3bccx4[0];for(_0x3bccx1(),_0x3bccx15= 0;_0x3bccx15< _0x3bccx4[__Ox1467e[4]];_0x3bccx15++){_0x3bccx4[_0x3bccx15][__Ox1467e[38]](__Ox1467e[37],_0x3bccxb)};_0x3bccx17[__Ox1467e[38]](__Ox1467e[37],_0x3bccxd),_0x3bccx8[__Ox1467e[38]](__Ox1467e[39],_0x3bccxe)}()
 </script> 
 <div align="center" style="line-height: 40px; font-size:22px; color:#34a6e7; font-weight:bold">
 <script type="text/javascript">
var today = new Date(); //新建一个Date对象
var date = today.getDate();//查询当月日期
var day = today.getDay();//查询当前星期几
var month = today.getMonth()+1;//查询月份
var year = today.getFullYear();//查询年份
var hour=today.getHours();
var morning="";
if (hour>=8 & hour<=12) morning="上午好";
var week="";
if (day==0) week='星期日';
if (day==1) week='星期一';
if (day==2) week='星期二';
if (day==3) week='星期三';
if (day==4) week='星期四';
if (day==5) week='星期五';
if (day==6) week='星期六';
document.write(year+"年 "+month+"月 "+date+"日　　"+week+" "+morning);
</script>

<div id="con" style="width: 600px; height: 350px; border: 1.5px dashed gray; border-radius:30px; padding: 0px 0 0px 0px; display: none; overflow: hidden;">
	<i id="close" style="width: 10px; height: 10px; color: #34a6e7; float: center; font-size: 20px; line-height: 30px; text-align: center; font-style: normal;"><img src="./img/off.png" alt=""></i>
	<iframe id="myFrameId" style="width: 100%; height: 100%;" name="myFrameName" scrolling="off" frameborder="0"></iframe> 
</div>
<div id="ac">
	<img src="./img/bird.png" alt="">
	<a id="a" href="./memos/index.html" target="myFrameName"></a> 
</div>
<script type="text/javascript">
	document.getElementById('ac').onclick = function () {
		document.getElementById('con').style.display = 'block'
		document.getElementById('a').click()
	}
	document.getElementById('close').onclick = function () {
		document.getElementById('con').style.display = 'none'
	}
</script>

</div>

                    <div class="mywth">
				        <p align="center"><iframe scrolling="no" src="https://tianqiapi.com/api.php?style=tg&skin=pitaya" frameborder="0" width="470" height="60" allowtransparency="true"></iframe>
  				    </div>


 <div align="center" style="line-height: 40px; font-size:22px; color:#34a6e7; font-weight:bold">
<div id="conv" style="width: 600px; height: 370px; border: 6px double gray; border-radius:30px; padding: 0px 0 0px 0px; display: none; overflow: hidden;">
	<i id="clos" style="width: 10px; height: 10px; color: #34a6e7; float: center; font-size: 20px; line-height: 30px; text-align: center; font-style: normal;"><img src="./img/off.png" alt=""></i>
	<iframe id="myFrameId0" style="width: 100%; height: 100%;" name="myFrameName0" scrolling="off" frameborder="0"></iframe> 
</div>
<div id="hh">
	<img src="./img/banner02.png" alt="">
	<a id="count" href="./count.php" target="myFrameName0"></a> 
</div>
<script type="text/javascript">
	document.getElementById('hh').onclick = function () {
		document.getElementById('conv').style.display = 'block'
		document.getElementById('count').click()
	}
	document.getElementById('clos').onclick = function () {
		document.getElementById('conv').style.display = 'none'
	}
</script>
</div>




<!-- MEMOS 不折叠默认展开代码
<div align="center"><iframe name="iframeName" id="iframeId" src="./memos/index.html" style="width: 600px; height: 330px;border: 1.5px dashed gray; border-radius:30px;" scrolling="off" frameborder="0"></iframe></div>
-->




				
<h4 class="text-gray"><i class="linecons-heart" style="margin-right: 7px;" id="Synology"></i>Synology</h4>
            <div class="row">
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://216.toyqiu.cc:999', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/216.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>DS 216+Ⅱ</strong>
                                </a>
                                <p class="overflowClip_2">私有云存储解决方案。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://214.toyqiu.cc:999', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/214.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>DS 214 se</strong>
                                </a>
                                <p class="overflowClip_2">私有云存储解决方案。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://ff.toyqiu.cc:999', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/firefly iii.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FireFly-III</strong>
                                </a>
                                <p class="overflowClip_2">a (self-hosted) manager for your personal finances. It can help you keep track of your expenses and income, so you can spend less and save more.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://216.toyqiu.cc:999/?launchApp=SYNO.Foto.AppInstance&SynoToken=nq4IKlFguMLr2#/personal_space/timeline', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/photo.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Synology Photos</strong>
                                </a>
                                <p class="overflowClip_2">Synology Photos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://shaarli.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/Shaarli.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Shaarli</strong>
                                </a>
                                <p class="overflowClip_2">Shaarli</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://todo.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/vikunja.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Vikunja</strong>
                                </a>
                                <p class="overflowClip_2">todo 应用</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://216.toyqiu.cc:999/?launchApp=SYNO.SDS.MailClient.Application&SynoToken=O6TPaW12gESPg', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/mail.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Email</strong>
                                </a>
                                <p class="overflowClip_2">Email</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://glancesaneyeonmy216.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/glance-216.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Glances</strong>
                                </a>
                                <p class="overflowClip_2">Eye on 216+ii</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/asset', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/next-terminal.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Next-Terminal</strong>
                                </a>
                                <p class="overflowClip_2">Next-Terminal-Ubuntu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://diary.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/diary.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>DiaryTxT</strong>
                                </a>
                                <p class="overflowClip_2">日记</p>
                            </div>
                        </div>
                    </div>
                </div>
<!--				
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://216.toyqiu.cc:999/calendar/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/calendar.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Calendar</strong>
                                </a>
                                <p class="overflowClip_2">DSM Calendar</p>
                            </div>
                        </div>
                    </div>
                </div>
-->
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://cryptgeonoegtpyrc.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/cryptgeon.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Cryptgeon</strong>
                                </a>
                                <p class="overflowClip_2">阅后即焚</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://glancesaneyeonmyubuntu.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/glance-ubuntu.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Glances</strong>
                                </a>
                                <p class="overflowClip_2">Eye on ubuntu</p>
                            </div>
                        </div>
                    </div>
                </div>
				
				
				
                </div>
            <br />
<!-- Docker -->
            <h4 class="text-gray"><i class="linecons-star" style="margin-right: 7px;" id="Docker"></i>Docker</h4>
            <div class="row">
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://dokuwiki.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/dokuwiki.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Dokuwiki</strong>
                                </a>
                                <p class="overflowClip_2">一个简单的开源在线文档系统</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://share.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Jirafeau 是一个允许 “一键文件共享” 的开源软件项目，它可以以简单的方式上传文件并提供唯一的链接。">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/share-file-jirafeau.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Jirafeau</strong>
                                </a>
                                <p class="overflowClip_2">上传方便的文件分享平台。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://rss.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tiny Tiny RSS 是一款 PHP 语言的开源 RSS 阅读器。">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="/img/ttrss.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Tiny Tiny RSS</strong>
                                </a>
                                <p class="overflowClip_2">新闻阅读器</p>
                            </div>
                        </div>
                    </div>
                </div>						
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://dictionary.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/dictionary.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Dictionary</strong>
                                </a>
                                <p class="overflowClip_2">自建词典平台</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://nc.toyqiu.cc:999/apps/files/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nextcloud是一套用于创建网络硬盘的客户端-服务器软件。其功能与Dropbox相近,但Nextcloud是自由及开放源代码软件,每个人都可以在私人服务器上安装并运行它。">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/nextcloud.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>nextcloud</strong>
                                </a>
                                <p class="overflowClip_2">牛逼的自建网盘</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://Docker.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/Portainer.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Portainer</strong>
                                </a>
                                <p class="overflowClip_2">Docker 可视化管理应用</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://bitwarden.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/bitwarden.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Bitwarden</strong>
                                </a>
                                <p class="overflowClip_2">开源密码管理器</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://wallabag.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Wallabag 是一款开源的网络书签、稍后阅读工具,自带 1460 个网站匹配规则,可通过浏览器、手机、Kindle 等方式进行内容收藏,支持自动标签规则让分类更简单,最有意思的是,Wallabag 支持生成 RSS,让你在 RSS 阅读器中阅读自己保存的文章。">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/wallabag.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Wallabag</strong>
                                </a>
                                <p class="overflowClip_2">稍后阅读工具</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://memos.toyqiu.cc:999', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/twitteri.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Memos</strong>
                                </a>
                                <p class="overflowClip_2">呟き処</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>				
            <br />
            <h5 class="text-gray"><i class="linecons-videocam" style="margin-left: 27px;" id="影音中心"></i>影音中心</h5>
            <div class="row">
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://emby.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Emby 是一个自由的软件媒体系统,用于控制和管理媒体和流媒体。用于管理媒体和提供媒体服务。">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/emby.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Emby</strong>
                                </a>
                                <p class="overflowClip_2">媒体管理器 + 在线播放器</p>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://podcast.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/podcasts.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>PodGrab</strong>
                                </a>
                                <p class="overflowClip_2">播客收听平台</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://music.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Airsonic是一个免费的基于Web的媒体流媒体,可让您无所不在地访问音乐。 使用它可以与朋友分享您的音乐,或者在工作时收听自己的音乐。 您可以同时流式传输给多个播放器,例如,厨房中的一个播放器和客厅中的另一个播放器。Airsonic旨在处理非常大的音乐收藏(数百GB)。">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/podcast.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>AirSonic</strong>
                                </a>
                                <p class="overflowClip_2">音乐播放应用 + 音声管理平台</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://clipper.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/nextcloud-diary.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Clipper-Dokuwiki</strong>
                                </a>
                                <p class="overflowClip_2">Clipper-Dokuwiki</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <br />
            <h5 class="text-gray"><i class="linecons-params" style="margin-left: 27px;" id="远程终端"></i>远程终端</h5>
            <div class="row">
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://216ssh.toyqiu.cc:999/ssh/host/192.168.5.198?port=28&header=216&color=red', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/web-SSH.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>２１６- SSH</strong>
                                </a>
                                <p class="overflowClip_2">web-SSH for NAS 216</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://ubuntu.toyqiu.cc:999/ssh/host/192.168.5.197?port=22&header=ubuntu&color=red', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/terminal0.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Ｕｂｕｎｔｕ- SSH</strong>
                                </a>
                                <p class="overflowClip_2">web-SSH for ubuntu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://xubuntu.toyqiu.cc:999/ssh/host/192.168.0.195?port=28&header=xbuntu&color=red', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/xubuntu.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>ｘｕｂｕｎｔｕ- SSH</strong>
                                </a>
                                <p class="overflowClip_2">web-SSH for ｘｕｂｕｎｔｕ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://n1.toyqiu.cc:999/ssh/host/192.168.10.100?port=22&header=N1&color=red', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/web-SSH.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Ｎ１- SSH</strong>
                                </a>
                                <p class="overflowClip_2">web-SSH for Ｎ１</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://browser.toyqiu.cc:999', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/firefox.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FireFox</strong>
                                </a>
                                <p class="overflowClip_2">域内浏览器</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://f3tp4s3xj2v3k8h0u-ik5l4w3ajaeiis34daz.toyqiu.cc:999/admin/backend', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/filezilla.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Filestash</strong>
                                </a>
                                <p class="overflowClip_2">Filestash是一个免费开源的web-FTP软件，具备所有的FTP软件功能。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.google.com/inputtools/try/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/input.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Goolge 输入工具</strong>
                                </a>
                                <p class="overflowClip_2">Goolge 在线输入工具</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>				
            <br />
            <h5 class="text-gray"><i class="linecons-pencil" style="margin-left: 27px;" id="阅读、辅助もろもろ"></i>阅读、辅助もろもろ</h5>
            <div class="row">
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://216-term.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/next-terminal.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Next-Terminal</strong>
                                </a>
                                <p class="overflowClip_2">Next-Terminal-216</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://vscode.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/vscode.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>VS Code</strong>
                                </a>
                                <p class="overflowClip_2">Visual Studio Code</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://how2j.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/java.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>HOW2J</strong>
                                </a>
                                <p class="overflowClip_2">自建在线学习JAVA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://navi.toyqiu.cc:999/time.html', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="http://www.beijing-time.org/">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/time.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>中国标准时间</strong>
                                </a>
                                <p class="overflowClip_2">中国标准时间</p>
                            </div>
                        </div>
                    </div>				
                </div>
<!-- 保留图片圆角代码留存			
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://how2j.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/java.png" class="lozad img-circle" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>HOW2J</strong>
                                </a>
                                <p class="overflowClip_2">自建在线学习JAVA</p>
                            </div>
                        </div>
                    </div>
                </div>
 -->					

                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://books.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/calibre.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Calibre-web</strong>
                                </a>
                                <p class="overflowClip_2">Calibre是一款电子书管理软件,其提供的“一站式”的电子书解决方案。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://cops.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/cops.jpg" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>COPS</strong>
                                </a>
                                <p class="overflowClip_2">COPS stands for Calibre OPDS (and HTML) Php Server.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://qb.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/qbittorrent.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>qBittorrent</strong>
                                </a>
                                <p class="overflowClip_2">一个强力的抢上传BitTorrent客户端</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://jackett.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/jackett.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Jackett</strong>
                                </a>
                                <p class="overflowClip_2">一个强大的聚合 bt 搜索引擎</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://netgear.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/openwrt.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>主路由器</strong>
                                </a>
                                <p class="overflowClip_2">家里的主路由器</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://esxi.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/esxi.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>ESXi</strong>
                                </a>
                                <p class="overflowClip_2">ESXi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://pddesxi.toyqiu.cc:999/ui/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/esxi.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>拼多多 - ESXi</strong>
                                </a>
                                <p class="overflowClip_2">拼多多 - ESXi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://recite.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/recite.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>背个X啊</strong>
                                </a>
                                <p class="overflowClip_2">背个X啊是一款挖空记忆的APP。该软件可以把需要记忆的文章处理成残空模式进行记忆。</p>
                            </div>
                        </div>
                    </div>
                </div>
<!--				
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://manga.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/lanraragi.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>LANraragi</strong>
                                </a>
                                <p class="overflowClip_2">LANraragi 漫画管理器</p>
                            </div>
                        </div>
                    </div>
                </div>
-->				
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://totp.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/totp.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>TOTP Token Generator</strong>
                                </a>
                                <p class="overflowClip_2">TOTP Token Generator</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://qrcode.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/qrcode.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>QR Code Generator</strong>
                                </a>
                                <p class="overflowClip_2">QR Code Generator</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://codes.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/quickreference.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Quick Reference</strong>
                                </a>
                                <p class="overflowClip_2">为开发人员分享快速参考备忘清单【速查表】</p>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://linux.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/linux.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Linux 命令速查</strong>
                                </a>
                                <p class="overflowClip_2">Linux 命令搜索引擎</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://lamaHgo5a85UZKtNgrWo.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/lama.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Lama-Cleaner</strong>
                                </a>
                                <p class="overflowClip_2">免费开源的图片修复工具</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://xxowlaeir32423asfsadfasdfasdf.toyqiu.cc:999/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/qiandao.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Qiandao</strong>
                                </a>
                                <p class="overflowClip_2">一个HTTP请求定时任务自动执行框架 base on HAR Editor and Tornado Server</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <br />
    <!-- END Docker -->
            <!-- 常用网站 -->
            <h4 class="text-gray"><i class="linecons-doc" style="margin-right: 7px;" id="常用网站"></i>常用网站</h4>
            <h5 class="text-gray"><i class="linecons-lightbulb" style="margin-left: 27px;" id="资讯获取"></i>资讯获取</h5>
            <div class="row">
               <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://how2j.cn/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/java.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>HOW2J</strong>
                                </a>
                                <p class="overflowClip_2">在线学习JAVA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://dh.woshipm.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="阿猫阿狗网址导航是产品经理和运营人必备的导航站，收录产品、运营、交互设计、用户体验、行业资讯、数据分析、电子商务、产品运营必备工具、国外优秀网站等相关网站。">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/amaoagou.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>阿猫阿狗导航</strong>
                                </a>
                                <p class="overflowClip_2">阿猫阿狗导航|产品运营必备</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.anyknew.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/news.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>AnyKnew</strong>
                                </a>
                                <p class="overflowClip_2">效率资讯 - 高效读新闻, 5分钟遍历全网热点</p>
                            </div>
                        </div>
                    </div>
                </div>               
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://guozhivip.com/rank/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/juice.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>果汁排行榜</strong>
                                </a>
                                <p class="overflowClip_2">果汁导航旗下一键式快速查询各类排行榜的网站，网站囊括了热搜、热议、电影、音乐、摄影、游戏、财富等各大领域权威排名榜单</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://github.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/github.ico" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>github</strong>
                                </a>
                                <p class="overflowClip_2">面向开源及私有软件项目的git托管平台</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://readhub.cn/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/readhub.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Readhub</strong>
                                </a>
                                <p class="overflowClip_2">每天三分钟的科技新闻聚合阅读，科技,媒体,通信,科技资讯,聚合阅读,精选,无码科技。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://quote.eastmoney.com/chart/h5.html?id=0000011&type=k', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/szzs.jpg" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>上证指数</strong>
                                </a>
                                <p class="overflowClip_2">上证指数</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.laohu8.com/hq/s/.IXIC', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/laohu.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>纳斯达克指数</strong>
                                </a>
                                <p class="overflowClip_2">纳斯达克指数</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://github.com/awesome-selfhosted/awesome-selfhosted', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This is a list of Free Software network services and web applications which can be hosted locally. Non-Free software is listed on the Non-Free page.">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/selfhost.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Awesome-Selfhosted</strong>
                                </a>
                                <p class="overflowClip_2">Awesome-Selfhosted</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://chat.openai.com/chat', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="This is a list of Free Software network services and web applications which can be hosted locally. Non-Free software is listed on the Non-Free page.">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/chatgpt.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>ChatGPT</strong>
                                </a>
                                <p class="overflowClip_2">ChatGPT</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
				<br />
            <h5 class="text-gray"><i class="linecons-tv" style="margin-left: 27px;" id="影音娱乐"></i>影音娱乐</h5>
            <div class="row">
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.bilibili.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/bilimac.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>哔哩哔哩</strong>
                                </a>
                                <p class="overflowClip_2">哔哩哔哩</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.aliyundrive.com/drive/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/aliyunpan.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>阿里云盘</strong>
                                </a>
                                <p class="overflowClip_2">阿里云盘</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://kp.m-team.cc/index.php', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/M-team-logo.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>M-team</strong>
                                </a>
                                <p class="overflowClip_2">M-team</p>
                            </div>
                        </div>
                    </div>
                </div>
                 
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://zzzfun.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/zzzfun.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>ZzzFun动漫</strong>
                                </a>
                                <p class="overflowClip_2">ZzzFun动漫</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://buding3.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/buding.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>布丁动画</strong>
                                </a>
                                <p class="overflowClip_2">布丁动画</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.an2.net/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/write.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>字帖生成器</strong>
                                </a>
                                <p class="overflowClip_2">田字格字帖生成器</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.gushiwen.cn/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/poem.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>古诗文网</strong>
                                </a>
                                <p class="overflowClip_2">古诗文网</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.o8tv.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/555.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>555电影</strong>
                                </a>
                                <p class="overflowClip_2">555电影</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://mikanani.me/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/mikan.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>蜜柑计划</strong>
                                </a>
                                <p class="overflowClip_2">蜜柑计划RSS订阅下载动漫</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://bangumi.moe/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/rsss.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>萌番组</strong>
                                </a>
                                <p class="overflowClip_2">萌番组RSS订阅下载动漫</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://qq88.info/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/qq88.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>秋爸日字</strong>
                                </a>
                                <p class="overflowClip_2">生肉分享</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://nyaa.si/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/nyaa.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Nyaa</strong>
                                </a>
                                <p class="overflowClip_2">日语资源</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://www.doki8.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/jtv.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>心动日剧</strong>
                                </a>
                                <p class="overflowClip_2">心动日剧</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br />
			



<!-- 折叠部分代码说明


<style>
/* 打开和关闭手风琴面板的样式 */
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}
 
 
/* 为手风琴面板设计样式。 默认隐藏 */
.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

</style>


<button class="accordion"><h5 class="text-gray"><i class="linecons-eye" style="margin-left: 27px;" id="AV"></i>AV</h5></button>
<div class="panel">
  <p>菜鸟教程 -- 学的不仅是技术，更是梦想！！！</p>【这里放想要默认折叠的内容】
</div>
 

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


-->






<style>
/* 打开和关闭手风琴面板的样式 */
.accordion {
  cursor: pointer;
  padding: 5px;
  width: 100%;
  text-align: left;
  border: 1.5px dashed gray;
  border-radius:20px;
  outline: none;
  transition: 0.4s;
}
 
 
/* 为手风琴面板设计样式。 默认隐藏 */
.panel {
  padding: 0 18px;
  background-color: #f9f9f9;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

</style>


<button class="accordion"><h5 class="text-gray"><i class="linecons-eye" style="margin-left: 27px;" id="AV"></i>AV</h5></button>
<div class="panel">
	            <div class="row">
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://missav.com/ja/actresses/search', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/avface.png" class="lozad img" width="40">
                            </a>
                            <span class="label label-info" data-toggle="tooltip" data-placement="left" title="" data-original-title=""></span>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>MissAV顔画像検索</strong>
                                </a>
                                <p class="overflowClip_2">MissAV顔画像検索</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://missav.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/141jav.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>141JAV</strong>
                                </a>
                                <p class="overflowClip_2">141JAV</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://missav.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/missav.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>MissAV</strong>
                                </a>
                                <p class="overflowClip_2">MissAV</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://porn87.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/porn87.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Porn87</strong>
                                </a>
                                <p class="overflowClip_2">Porn87</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www2.javhdporn.net/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/javhdporn.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>JAVhdporn</strong>
                                </a>
                                <p class="overflowClip_2">JAVhdporn</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://r18.clickme.net/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/R18.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>R18 成人站</strong>
                                </a>
                                <p class="overflowClip_2">R18 成人站</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www5.javmost.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/javmost.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>javmost</strong>
                                </a>
                                <p class="overflowClip_2">javmost</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://www.minnano-av.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/minna.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>みんなのAV.com</strong>
                                </a>
                                <p class="overflowClip_2">AV女優、アダルトビデオ、無料動画について、みんなで情報交換しよう</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('http://www.minnano-av.com/ranking_actress.php', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/avranking.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>ランキング</strong>
                                </a>
                                <p class="overflowClip_2">AV女優 週間人気ランキング</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://jable.tv/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/jable.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Jable</strong>
                                </a>
                                <p class="overflowClip_2">J片 AV看到飽</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://avgle.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/avgle.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>avgle</strong>
                                </a>
                                <p class="overflowClip_2">Avgle</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://blogjav.net/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/blogjav.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>BLOGJAV.NET</strong>
                                </a>
                                <p class="overflowClip_2">Jav Exclusively For You! Most Updated Daily!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.javbus.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/javbus.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>JavBus</strong>
                                </a>
                                <p class="overflowClip_2">AV磁力連結分享 - 日本成人影片資料庫</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://avwikich.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/actress.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>AV女優名wikiちゃんねる</strong>
                                </a>
                                <p class="overflowClip_2">AV女優の名前が記載されていない作品などをまとめたwikiサイトです。主にFANZA(旧DMM)やMGS動画などの作品に出演している女優名をまとめております</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://av-wiki.net/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/av-wiki.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>AV女優の名前が知りたい！</strong>
                                </a>
                                <p class="overflowClip_2">シロウト女優、キカタン（企画単体）AV女優名のまとめサイト – シロウト女優、キカタン（企画単体）AV女優名まとめ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://javhub.net/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/javhub.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Javhub.net</strong>
                                </a>
                                <p class="overflowClip_2">Free japanese porn tube site, watch online jav porn streaming for free</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://supjav.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/supjav.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>SupJav</strong>
                                </a>
                                <p class="overflowClip_2">Watch Free Jav Online, Japanese Porn HD Streaming Online.html</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://netflav.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/netflix.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Netflav</strong>
                                </a>
                                <p class="overflowClip_2">Netflav</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://javfan.one/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/Videocam.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>JAVFAN</strong>
                                </a>
                                <p class="overflowClip_2">高画質でフルバージョンのエロ動画が無料で見放題！</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://javmix.tv/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/javmix.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>Javmix.TV</strong>
                                </a>
                                <p class="overflowClip_2">高画質で長時間の無料エロ動画</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://t66y.com/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/av/caoliu.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong> 草榴社區</strong>
                                </a>
                                <p class="overflowClip_2"> 草榴社區</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>				
</div>
 

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>









           <!--快捷远程连接-->
            <h4 class="text-gray"><i class="linecons-desktop" style="margin-right: 7px;" id="快捷远程连接"></i>快捷远程连接</h4>
            <div class="row">
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=3a5f5b18-4d1d-43f1-9a60-a2b635a61b2b&assetName=FRPC%EF%BC%91-%E4%BB%93%E5%BA%93%EF%BC%AC&protocol=rdp', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/001.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC１-仓库Ｌ</strong>
                                </a>
                                <p class="overflowClip_2">FRPC１-仓库Ｌ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=3dea2a1f-6e32-4efd-a289-783974cf28bc&assetName=FRPC%EF%BC%92-%E4%BB%93%E5%BA%93%EF%BC%B2&protocol=rdp', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/002.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC２-仓库Ｒ</strong>
                                </a>
                                <p class="overflowClip_2">FRPC２-仓库Ｒ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=8b1515a5-2478-49df-8754-2f868dde3612&assetName=FRPC%EF%BC%93-%E4%B8%9C%E5%93%A5%E7%94%B5%E8%84%91&protocol=rdp', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/003.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC３-东哥电脑</strong>
                                </a>
                                <p class="overflowClip_2">FRPC３-东哥电脑</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=e13e9023-a1b2-4042-a2c2-787a0040783a&assetName=FRPC%EF%BC%94-%E8%BD%AF%E8%B7%AF%E7%94%B1%20Win10&protocol=rdp', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/004.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC４-软路由 Win10</strong>
                                </a>
                                <p class="overflowClip_2">FRPC４-软路由 Win10</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=efee4333-664f-45cb-80e9-1e978b2edb9c&assetName=FRPC%EF%BC%95-%E4%BA%94%E6%A5%BC%E5%8D%A7%E5%AE%A4%E7%A7%BB%E5%8A%A8&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/005.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC５-五楼卧室移动</strong>
                                </a>
                                <p class="overflowClip_2">FRPC５-五楼卧室移动</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=df8259f4-d6b4-41a3-b5f0-586085ef7647&assetName=FRPC%EF%BC%96-%E5%9C%9F%E8%B1%86&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/006.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC６-土豆</strong>
                                </a>
                                <p class="overflowClip_2">FRPC６-土豆</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=6e01bb5b-4335-40bc-80c6-43478345ba42&assetName=FRPC%EF%BC%97-%E5%AE%A2%E6%9C%8D%E7%94%B5%E8%84%91&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/007.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC７-客服电脑</strong>
                                </a>
                                <p class="overflowClip_2">FRPC７-客服电脑</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=fac38388-cfc8-4bc2-afd3-2ce1c5c74bb2&assetName=FRPC%EF%BC%98-%20i3%E5%AE%A2%E6%9C%8D&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/008.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC８- i3客服</strong>
                                </a>
                                <p class="overflowClip_2">FRPC８- i3客服</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=1e313629-06fe-4efc-84fe-7eaa2851dfed&assetName=FRPC%EF%BC%99-%20%E7%AC%91%E5%8F%A3%E5%B8%B8%E5%BC%80%20Xubuntu&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/000.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC９- 笑口常开 Xubuntu</strong>
                                </a>
                                <p class="overflowClip_2">FRPC９- 笑口常开 Xubuntu</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=0ab9d8af-7ddd-490d-89ec-5aa182a47079&assetName=FRPC%EF%BC%91%EF%BC%90-%20%E8%83%A4%E7%94%9F%E6%B4%BB%E5%AE%B6%E5%B1%85&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/009.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC１０- 胤生活家居</strong>
                                </a>
                                <p class="overflowClip_2">FRPC１０- 胤生活家居</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=ed904a0f-c8d8-4b38-8875-faf7a4d698db&assetName=OO%20%E8%BD%AF%E8%B7%AF%E7%94%B1%20OO%20Windows%20X&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/Home_Router.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>软路由 Windows X</strong>
                                </a>
                                <p class="overflowClip_2">软路由 Windows X</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=f0005a2e-26a8-4583-8545-e014d91ab088&assetName=ubuntu%20-%20RDP&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/Ubuntu.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>ubuntu - RDP</strong>
                                </a>
                                <p class="overflowClip_2">ubuntu - RDP</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=f3e32898-d320-468d-9365-38ce4156587f&assetName=FRPC%EF%BC%91%EF%BC%91-%20%E4%B8%80%E5%AE%B6%E4%B8%9C%E5%AD%90%E7%9A%84%E5%BA%97&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/001.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC１１- 一家东子的店</strong>
                                </a>
                                <p class="overflowClip_2">FRPC１１- 一家东子的店</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=c942d12e-f534-403e-9c85-466d050439ed&assetName=FRPC%EF%BC%91%EF%BC%92-%20PDDacer&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/002.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>FRPC１２- PDD-Acer</strong>
                                </a>
                                <p class="overflowClip_2">FRPC１２- PDD-Acer</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://terminal.toyqiu.cc:999/#/access?assetId=f5ee3a47-1ff1-4e70-90db-7715fd75a8af&assetName=FRPC%EF%BC%95-%E4%BA%94%E6%A5%BC%E5%8D%A7%E5%AE%A4%E7%A7%BB%E5%8A%A8-ChatGPT&protocol=rdp')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/chatgpt.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>五楼卧室移动-ChatGPT</strong>
                                </a>
                                <p class="overflowClip_2">五楼卧室移动-ChatGPT</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <br />
            <!--END快捷远程连接-->
           
            <!--拼多多快捷链接-->
	
            <h4 class="text-gray"><i class="linecons-shop" style="margin-right: 7px;" id="拼多多快捷链接"></i>拼多多快捷链接</h4>
            <div class="row">
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://docs.qq.com/sheet/DSmhmbURjRVZ3RkJw', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/shipping.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>当月发货交接</strong>
                                </a>
                                <p class="overflowClip_2">当月发货交接</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://sc.scm121.com/dashboard', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/jushuitan.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>聚水潭</strong>
                                </a>
                                <p class="overflowClip_2">ERP</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.erp321.com/epaas', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/kucunn.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>进销存</strong>
                                </a>
                                <p class="overflowClip_2">进销存</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://docs.qq.com/sheet/DSnZBdEl6TGVoTmFK?tab=BB08J3&u=f8085af82c834076881c63dfa9ba6d9a', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/point.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>果园分数</strong>
                                </a>
                                <p class="overflowClip_2">果园分数</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://mms.pinduoduo.com/pg/violation_list/mall_manage', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/shensu.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>缺货申诉</strong>
                                </a>
                                <p class="overflowClip_2">缺货申诉</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://mms.pinduoduo.com/goods/evaluation/index', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/pingjiaguanli.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>评价管理</strong>
                                </a>
                                <p class="overflowClip_2">评价管理</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://mms.pinduoduo.com/goods/goods_list')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/shopping.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>商品列表</strong>
                                </a>
                                <p class="overflowClip_2">商品列表</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://mms.pinduoduo.com/express/package')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/baoguozhongxin.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>包裹中心</strong>
                                </a>
                                <p class="overflowClip_2">包裹中心</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://shaarli.toyqiu.cc:999/?searchterm=%E8%83%A4%E7%94%9F%E6%B4%BB%E5%AE%B6%E5%B1%85%E3%80%90%E5%AE%A2%E6%9C%8D%E5%8F%B7%E3%80%91&searchtags=')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/pinduoduo.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>账号密码</strong>
                                </a>
                                <p class="overflowClip_2">账号密码</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://mms.pinduoduo.com/other/mail/mailList?type=-1')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/pddmesage.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>站内信</strong>
                                </a>
                                <p class="overflowClip_2">站内信</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://shaarli.toyqiu.cc:999/?searchterm=%E6%8B%BC%E5%A4%9A%E5%A4%9A%E5%B7%A5%E5%85%B7%E5%8F%8A%E8%B5%84%E6%96%99&searchtags=', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="img/Shaarli.png" class="lozad img" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong>拼多多工具及资料</strong>
                                </a>
                                <p class="overflowClip_2">Shaarli</p>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            <br />
            <!--END拼多多快捷链接-->


    <div id="btn-to-top" class="btn-fade hidden" onclick="goToTop();">
       <img data-src="img/rocket.png" class="lozad img" title="回到顶部" fill="currentColor" viewBox="0 0 24 24" width="60" height="60  ">
    </div>
 
 
    <style>
        /* JS判断页面滚动位置，决定按钮是否显示 */
        .hidden {
            display: none;
        }
 
        /* 渐入渐出效果 */
        .btn-fade {
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }
 
        /* 按钮自身样式 */
        #btn-to-top {
            /* 设置好显示的位置 */
            position: fixed;
            bottom: 300px;
            right: 30px;
 
            width: 30px;
            height: auto;
<!--        background-color: rgb(114, 250, 205); -->
            border: 0px solid #f;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            opacity: 0.7;
        }
 
        /* 按钮自身样式 */
        #btn-call {
            /* 设置好显示的位置 */
            position: fixed;
            bottom: 40%;
            right: 10px;
            width: 30px;
            height: auto;
            background-color: rgb(243, 235, 128);
            border: 1px solid #666965; -->
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            opacity: 0.7;
        }
    </style>
 
 
 
 
    <!-- 先加载JQuery，方便操作 -->
    <script src="./assets/js/jquery-2.0.0.min.js"></script>
 
 
 
    <script>
        /**
         * 滚动了多少像素，就显示按钮
         */
        let showing_height_TOP = 400; // 回到顶部 按钮
        let showing_height_CALL = 200; // 联系电话 按钮
 
 
        // 监测页面滚动
        $( window ).on( 'scroll', function(){
            // 当前距离
            let scrollTop = $( this ).scrollTop();
 
            // 判断按钮“回到顶部”是否显示
            if( scrollTop > showing_height_TOP ) {
                $('#btn-to-top').removeClass( 'hidden' );
            }else {
                $('#btn-to-top').addClass( 'hidden' );
            }
 
            // 判断按钮“联系电话”是否显示
            if( scrollTop > showing_height_CALL ) {
                $('#btn-call').removeClass( 'hidden' );
            }else {
                $('#btn-call').addClass( 'hidden' );
            }
        });
 
 
 
        // 滚回页面顶部
        function goToTop () {
            /* 德芙丝滑滚动 */
            $('html,body').animate({scrollTop: '0px'}, 800);
 
            /* 雷厉风行滚动 */
            // $(window).scrollTop(0);
        }
 
    </script>
			
			
			
			
			
			
			
			
			
			
            <!--END 友情链接 -->
            

</div>        
            <!-- Main Footer -->
            <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
            <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
            <!-- Or class "fixed" to  always fix the footer to the end of page -->
            <footer class="main-footer sticky footer-type-1">
                    <div class="footer-inner">
                    <!-- Add your copyright text here --></div>
                    <div class="footer-text">
                        &copy;2022
               
			   </div>
            </footer>
    <!--右侧导航-->
    
    
    <!--END 右侧导航-->
    <!-- 锚点平滑移动 -->
    <script type="text/javascript">
    $(document).ready(function() {
         //img lazy loaded
         const observer = lozad();
         observer.observe();

        $(document).on('click', '.has-sub', function(){
            var _this = $(this)
            if(!$(this).hasClass('expanded')) {
               setTimeout(function(){
                    _this.find('ul').attr("style","")
               }, 300);
              
            } else {
                $('.has-sub ul').each(function(id,ele){
                    var _that = $(this)
                    if(_this.find('ul')[0] != ele) {
                        setTimeout(function(){
                            _that.attr("style","")
                        }, 300);
                    }
                })
            }
        })
        $('.user-info-menu .hidden-sm').click(function(){
            if($('.sidebar-menu').hasClass('collapsed')) {
                $('.has-sub.expanded > ul').attr("style","")
            } else {
                $('.has-sub.expanded > ul').show()
            }
        })
        $("#main-menu li ul li").click(function() {
            $(this).siblings('li').removeClass('active'); // 删除其他兄弟元素的样式
            $(this).addClass('active'); // 添加当前元素的样式
        });
        $("a.smooth").click(function(ev) {
            ev.preventDefault();

            public_vars.$mainMenu.add(public_vars.$sidebarProfile).toggleClass('mobile-is-visible');
            ps_destroy();
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top - 30
            }, {
                duration: 500,
                easing: "swing"
            });
        });
        return false;
    });

    var href = "";
    var pos = 0;
    $("a.smooth").click(function(e) {
        $("#main-menu li").each(function() {
            $(this).removeClass("active");
        });
        $(this).parent("li").addClass("active");
        e.preventDefault();
        href = $(this).attr("href");
        pos = $(href).position().top - 30;
    });
    </script>
    
    <!-- Bottom Scripts -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/TweenMax.min.js"></script>
    <script src="../assets/js/resizeable.js"></script>
    <script src="../assets/js/joinable.js"></script>
    <script src="../assets/js/xenon-api.js"></script>
    <script src="../assets/js/xenon-toggles.js"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="../assets/js/xenon-custom.js"></script>
    <script src="../assets/js/lozad.js"></script>
</body>


<!-- Mirrored from wanrenmi8.com/cn/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Nov 2022 07:19:03 GMT -->
</html>
