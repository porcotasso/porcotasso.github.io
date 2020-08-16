<!doctype html>
<html lang="ja">
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/_variable.php"); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/common.css">
    <?php if($_SERVER['REQUEST_URI'] == "/php/pages/index.php"){ ?>
        <link rel="stylesheet" href="/css/home.css">
    <?php } ?>  
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title><?php echo $title ?></title>
</head>
<body>
    <header class="ly-header js-headerSmaller" id="js-headerTrigger">  
        <nav class="ly-header__inner">
            <?php if($_SERVER['REQUEST_URI'] == "/php/pages/index.php"){ ?>
                <h1 class="web-ttl"><a href="/">porco tasso</a></h1>
            <?php }else{ ?>
                <div class="web-ttl"><a href="/">porco tasso</a></div>
            <?php } ?>

            <a class="menu-trigger pc-header-none" id="menu-trigger">
                <span></span>
                <span></span>
                <span></span>
            </a>
            
            <ul class="headerNav" id="header-nav">
                <?php foreach($pageLists as $list){ ?>
                <li class="headerNav_list"><a href="<?php echo $list["html"]; ?>"><?php echo $list["title"]; ?></a></li>
                <li>
                    <ul class="headerNav_subNav">
                        <?php foreach($list["pages"] as $value){ ?>
                        <li class="headerNav_subList">
                            <a href="<?php echo $value["html"]; ?>" class="">
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