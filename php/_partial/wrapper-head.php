<!doctype html>
<html lang="ja">
<?php include("_variable.php"); ?>
<!-- code-prettify -->
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon and App icon -->
    <link rel="icon" href="/images/favicon/favicon.ico">             
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="android-touch-icon" sizes="192x192" href="/images/favicon/android-touch-icon.png" >
    <link rel="stylesheet" href="/css/common.css">
    <?php if($_SERVER['REQUEST_URI'] == "/php/index.php"){ ?>
        <link rel="stylesheet" href="/css/home.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" rel="stylesheet">
    <?php } ?>  
    <!-- google font Pacifico for title -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> -->
    <?php date_default_timezone_set('Asia/Tokyo'); ?>
    <?php if($_SERVER['REQUEST_URI'] == "/php/index.php"){
        $title = "Porco Tassoのフロントエンドエンジニアまとめ";
        } elseif($_SERVER['REQUEST_URI'] == "/php/diary/diary.php"){
            $title = "制作メモ、日記";
        } else {
            $i = 0;
            foreach($allPages as $list){
                if($list["file"] == $_SERVER['REQUEST_URI']){
                    $title = $list["title"];
                    $lead = $list["lead"];
                    $tag = $list["tag"];
                    $filename = $baseUrl.$list["file"];
                    if($i != 0){
                        $pagePre = "/pages/".$allPages[$i - 1]["html"];
                        $pagePreTtl = $allPages[$i - 1]["title"];
                    }
                    if($i != count($allPages) -1 ){
                        $pageNext = "/pages/".$allPages[$i + 1]["html"];
                        $pageNextTtl = $allPages[$i + 1]["title"];
                    }                   
                    break;
                }
                $i ++;
            } 
        } ?>
    <title><?php echo ($title); ?></title>
</head>
<body>
<?php include_once($baseUrl.'/images/common/sprite.svg'); ?>
    <header class="ly-header js-headerSmaller" id="js-headerNav">  
        <nav class="ly-header__inner">
            <?php if($_SERVER['REQUEST_URI'] == "/"){ ?>
                <h1 class="web-ttl">
                    <a href="/">
                        <svg class="svg-logo" viewBox="0 0 252 36">
                            <use xlink:href="#svg-logo"></use>
                        </svg>
                        <?php /* $str = file_get_contents($baseUrl.'/images/common/logo.svg'); echo $str; */ ?>
                    </a>
                </h1>
            <?php }else{ ?>
                <div class="web-ttl">
                    <a href="/">
                        <svg class="svg-logo" viewBox="0 0 252 36">
                            <use xlink:href="#svg-logo"></use>
                        </svg>
                        <?php /* $str = file_get_contents($baseUrl.'/images/common/logo.svg'); echo $str; */ ?>
                    </a>
                </div>
            <?php } ?>
            <a class="menu-trigger pc-header-none" id="js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </a>
            
            <ul class="headerMenu" id="header-menu">
                <?php foreach($pageLists as $list){ ?>
                <details>
                    <summary class="headerMenu_list"><?php echo $list["title"]; ?></summary>
                    <ul class="headerMenu_subNav">
                        <?php foreach($list["pages"] as $value){ ?>
                        <li class="headerMenu_subList">
                            <a href="<?php echo '/pages/'.$value["html"]; ?>" class="">
                                <div class=""><?php echo $value["title"]; ?></div>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </details>
                <?php } ?>
            </ul>
        </nav>
    </header>

    <a id="js-scrollTop" class="el-scrollTop"></a>
    
    <!-- メニューを出した時に出る黒背景 -->
    <div class="el-blackCover" id="js-blackCover"></div>