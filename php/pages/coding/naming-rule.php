<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/variable.php"); ?>
<?php $title = $namingRule ?>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article>
        <header>
            <h1><?php echo $title ?></h1>
            <p>クローラーや読み上げソフトが、タグから各コンテンツの役割がわかるように。</p>
            <nav>
                <div>目次</div>
                <ol>
                    <li>命名ルール</li>
                    <li>略語</li>
                </ol>
            </nav>
        </header>
        <section>
        <h2>命名ルール</h2>
        <ul>
            <li>ローワーキャメル</li>
            <li>ly- レイアウトグループ</li>
            <li>bl- ブロックモジュール</li>
            <li>el- エレメントモジュール</li>
            <li>--　モディファイヤーの区切り</li>
            <li>_ block element を繋ぐ</li>
            <li>wrapーレイアウト的な入れ物</li>
            <li>containerー意味的な入れ物</li>
            <li>__inner ly-name の下で使う入れ物</li>
            <li>wrapーレイアウト的な入れ物</li>
            <li>wrapーレイアウト的な入れ物</li>
        </ul>
        <h2>略語</h2>
        <ul>
            <li>btnーbutton</li>
            <li>txtーtext</li>
            <li>cntーcontent</li>
            <li>icoーicon</li>
            <li>catーcategory</li>
        </ul>
        </section>

        <section>
            <h3>参考</h3>
            <cite><a href="https://wunderstand.net/1417/">html5のarticle・section等、まとめる要素まとめ</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
