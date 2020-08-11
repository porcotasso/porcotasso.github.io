<!doctype html>
<html lang="ja">
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/variable.php"); ?>
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
    <header class="ly-header js-headerMenu">  
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
                <li><a href="/coding/coding.html">htmlとcssのコーディング</a></li>
                <li>
                <ul class="">
                    <?php for($i = 0; $i < count($coding); $i++){ ?>
                    <li class="">
                        <a href="<?php echo $coding[$i]["html"]; ?>" class="">
                            <div class=""><?php echo $coding[$i]["title"]; ?></div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
                </li>
                <li><a href="">menu1</a></li>
                <li><a href="">menu1</a></li>
                <li><a href="">menu1</a></li>
            </ul>
        </nav>
    </header>