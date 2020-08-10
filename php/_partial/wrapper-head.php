<!doctype html>
<html lang="ja">
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
            <ul class="header-nav" id="header-nav">
                <li><a href="/coding/coding.html">htmlとcssのコーディング</a></li>
                <li><a href="">menu1</a></li>
                <li><a href="">menu1</a></li>
                <li><a href="">menu1</a></li>
            </ul>
        </nav>
    </header>