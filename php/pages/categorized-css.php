<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt ly-innnerWidth">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("ベースグループ", "レイアウトグループ", "ブロックモジュールグループ", "エレメントモジュールグループ", "エレメントモジュールモディファイヤーグループ", "ヘルパーグループ", "ユニークグループ", "プログラムグループ"); ?>
                <ol>
                    <?php for($i = 0; $i < count($navList); $i++){ ?>
                    <li>
                        <a href="#<?php echo $i; ?>" class="">
                            <div class=""><?php echo $navList[$i]; ?></div>
                        </a>
                    </li>
                    <?php } ?>
                </ol>
            </nav>
        </header>
        <section class="ly-section" id="0">
            <h2><?php echo $navList[0]; ?></h2>
            <p>CSS設計の大元となるCSSのグループ。各ブラウザ上にデフォルトで指定されているuser agent stylesheetを初期化するリセットCSS、または初期化ではなくブラウザ、デバイス間の不一致を修正するノーマライズCSSを始めに適用し、そこからプロジェクトの標準となるスタイリングをしていきます。</p>
            <h3>ノーマライズCSS</h3>
            <p>ブラウザ、デバイス間の不一致を修正するCSS</p>
            <h3>リセットCSS</h3>
            <p>user agent stylesheetを無効化するCSS</p>
            <h3>bootstrap-reboot.css</h3>
            <p>適度にuser agent stylesheetを無効化、正常化したCSS</p>
            <p>このサイトでは、bootstrap-reboot.css をコピーして、サイト用にカスタマイズしています。</p>
        </section>
        <section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
            <p>位置調整を担当するCSS</p>
            <p>position, z-index, top/right/left/bottom, float, width, marginなどです。</p>
        </section>
        <section class="ly-section" id="2">
            <h2><?php echo $navList[2]; ?></h2>
            <p>いろんな場所で使えて子要素を持つCSS。基本的にはレイアウトグループに属するスタイルを持たない。bl-</p>
        </section>
        <section class="ly-section" id="3">
            <h2><?php echo $navList[3]; ?></h2>
            <p>最小単位のモジュールです。子要素を持ちません。どこにでも使える、ボタン、ラベル el-</p>
        </section>
        <section class="ly-section" id="4">
            <h2><?php echo $navList[4]; ?></h2>
            <p>エレメントモジュールグループを少しだけ変更したい際に使います。エレメントモジュールグループと同時に追加します。--name</p>
        </section>
        <section class="ly-section" id="5">
            <h2><?php echo $navList[5]; ?></h2>
        </section>
        <section class="ly-section" id="6">
            <h2><?php echo $navList[6]; ?></h2>
        </section>
        <section class="ly-section" id="7">
            <h2><?php echo $navList[7]; ?></h2>
            <p>js-</p>
        </section>
        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a href="https://qiita.com/pugiemonn/items/964203782e1fcb3d02c3" <?php echo $targetBlank ?>>こんなHTMLとCSSのコーディング規約で書きたい</a></cite>
            <cite class="ly-cite"><a href="https://www.amazon.co.jp/CSS設計完全ガイド-詳細解説-実践的モジュール集-半田-惇志/dp/429711173X" <?php echo $targetBlank ?>>CSS設計完全ガイド</a></cite>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
