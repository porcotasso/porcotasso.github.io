<!doctype html>
<html lang="ja">
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/_variable.php"); ?>
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
    <?php if($_SERVER['REQUEST_URI'] == "/php/pages/index.php"){ ?>
        <link rel="stylesheet" href="/css/home.css">
    <?php } ?>  
    <!-- google font Pacifico for title -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <?php date_default_timezone_set('Asia/Tokyo'); ?>
        <?php if($_SERVER['REQUEST_URI'] == "/"){ ?>
            <title>porco tasso:フロントエンドエンジニアのスキルノート　※まとめ中</title>
        <?php } else {
            foreach($allPages as $list){
                if($list["file"] == $_SERVER['REQUEST_URI']){
                    $title = $list["title"];
                    $lead = $list["lead"];
                    $filename = '/Users/porcokafuka/projects/porcotasso.github.io'.$list["file"];
                    break;
                }
            } ?>
            <title><?php echo ($title); ?></title>
        <?php } ?>
    
</head>
<body>

    <header class="ly-header js-headerSmaller" id="js-headerNav">  
        <nav class="ly-header__inner">
            <?php if($_SERVER['REQUEST_URI'] == "/"){ ?>
                <h1 class="web-ttl">
                    <a href="/">
                        <?php $str = file_get_contents('/Users/porcokafuka/projects/porcotasso.github.io/images/common/logo.svg'); echo $str; ?>
                    </a>
                </h1>
            <?php }else{ ?>
                <div class="web-ttl">
                    <a href="/">
                        <?php $str = file_get_contents('/Users/porcokafuka/projects/porcotasso.github.io/images/common/logo.svg'); echo $str; ?>
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
                <li class="headerMenu_list"><?php echo $list["title"]; ?></li>
                <li>
                    <ul class="headerMenu_subNav">
                        <?php foreach($list["pages"] as $value){ ?>
                        <li class="headerMenu_subList">
                            <a href="<?php echo '/pages/'.$value["html"]; ?>" class="">
                                <div class=""><?php echo $value["title"]; ?></div>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </header>

    <a id="js-scrollTop" class="el-scrollTop"></a>
    
    <!-- メニューを出した時に出る黒背景 -->
    <div class="el-blackCover" id="js-blackCover"></div>