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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/common.css">
    <?php if($_SERVER['REQUEST_URI'] == "/php/index.php"){ ?>
        <link rel="stylesheet" href="/css/home.css">
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" rel="stylesheet"> -->
    <?php } ?>  
    <!-- google font Pacifico for title -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> -->
    <?php date_default_timezone_set('Asia/Tokyo'); ?>
    <?php if($_SERVER['REQUEST_URI'] == "/php/index.php"){
        $title = "Porco note";
        } elseif($_SERVER['REQUEST_URI'] == "/php/diary/diary.php"){
            $title = "制作メモ、日記";
        } else {
            // $i = 0;
            // $pageNumber = count($allPages);
            foreach($allPages as $index => $list){
                if($list["file"] == $_SERVER['REQUEST_URI']){
                    $title = $list["title"];
                    $lead = $list["lead"];
                    $tag = $list["tag"];
                    $filename = $baseUrl.$list["file"];
                    $pageName = $list["pageName"];
                    $pageNumber = $index;
                    // if($i != 0){
                    //     $pagePre = "/pages/".$allPages[$i - 1]["pageName"].'.html';
                    //     $pagePreTtl = $allPages[$i - 1]["title"];
                    // }else{
                    //     $pagePre = "/pages/".$allPages[$pageNumber - 1]["pageName"].'.html';            
                    //     $pagePreTtl = $allPages[$pageNumber - 1]["title"];
                    // }
                    // if($i != $pageNumber -1 ){
                    //     $pageNext = "/pages/".$allPages[$i + 1]["pageName"].'.html';
                    //     $pageNextTtl = $allPages[$i + 1]["title"];
                    // } else {
                    //     $pageNext = "/pages/".$allPages[0]["pageName"].'.html';             
                    //     $pageNextTtl = $allPages[0]["title"];
                    // }       
                    // break;
                }       
                // $i ++;
            };

        } ?>
    <title><?php echo ($title); ?></title>
</head>
<body class="<?php echo ($pageName); ?>" id="js-body">
<?php include_once($baseUrl.'/images/common/sprite.svg'); ?>
    <header class="ly-header" id="js-header">  
        <?php if($_SERVER['REQUEST_URI'] == "/"){ ?>
        <h1 class="headerLogo">
            <a href="/">
                <svg class="svg-logo" viewBox="0 0 252 36">
                    <use xlink:href="#svg-logo"></use>
                </svg>
                <?php /* $str = file_get_contents($baseUrl.'/images/common/logo.svg'); echo $str; */ ?>
            </a>
        </h1>
        <?php } else { ?>
        <div class="headerLogo">
            <a href="/">
                <svg class="svg-logo" viewBox="0 0 252 52">
                    <use xlink:href="#svg-logo"></use>
                </svg>
                <?php /* $str = file_get_contents($baseUrl.'/images/common/logo.svg'); echo $str; */ ?>
            </a>
        </div>
        <?php } ?>
        <div class="headerBurger" id="js-headerBurger">
            <span></span>
            <span></span>
            <span></span>
        </div>        
    </header>
    <nav class="headerNav">
        <div class="headerMenu" id="js-headerMenu">
            <?php foreach($pageLists as $list){ ?>
            <div class="headerMenu_detail">
                <p class="headerMenu_ttl js-headerMenuTtl"><?php echo $list["title"]; ?><span class="summary_cntNumber"><?php echo count($list["pages"]) ?></span></p>
                <ul class="headerMenu_ul">
                    <?php foreach($list["pages"] as $value){ ?>
                    <li class="headerMenu_li">
                        <a href="<?php echo '/pages/'.$value["pageName"].'.html'; ?>" class="headerMenu_link">
                           <?php echo $value["title"]; ?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
        </div>
    </nav>

    <a id="js-scrollTop" class="el-scrollTop"><span class="el-scrollTop_txt">トップ</span></a>
    
    <!-- メニューを出した時に出る黒背景 -->
    <div class="el-blackCover" id="js-blackCover"></div>