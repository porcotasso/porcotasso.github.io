<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<?php $title = $elementEmStrongMarkB["title"] ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article>
        <header>
            <h1><?php echo $title ?></h1>
            <p>「em要素」「strong要素」「mark要素」「b要素」の違いが理解して明確に使い分けよう。<br>基本的にはセマンティックマークアップとして利用するのが目的で装飾を前提に使用しない。</p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <ol>
                    <li>em要素</li>
                    <li>strong要素</li>
                    <li>mark要素</li>
                    <li>b要素</li>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
            <h2>em要素</h2>
            <p>文にアクセントを置くことによって意味を変えるために使います。</p>
        </section>
        <section class="ly-section">
            <h2>strong要素</h2>
            <p>strong要素は、強い重要性、深刻性、緊急性を表し大事な部分を強調するときに使います。前述のem要素は、文の意味が変更されるのに対して、strong要素は、文の意味が変更されません。</p>
        </section>
        <section class="ly-section">
            <h2>mark要素</h2>
            <p>他の文に対して本文の重要性などとは関係なく「ここ大事だよ」とか「ここを見て」とかを指し示すものです。検索結果をハイライトしたいときにも使えます。</p>
        </section>
        <section class="ly-section">
            <h2>b要素</h2>
            <p>em要素やstrong要素などに適さなかったときに使うようなものです。目立たせたいけど、em要素でもstrong要素でもmark要素でも（さらにはi要素でも）ないなと思ったときに使うとよいでしょう。</p>
        </section>

        <section>
            <h3>参考</h3>
            <cite><a href="https://yoshikawaweb.com/element-em-strong-mark-b-difference.html" target="_blank" rel="noopener noreferrer">em・strong・mark・b要素の違いを本気出して調べてみた</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
