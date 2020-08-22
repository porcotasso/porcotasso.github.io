<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <p>CSSを役割ごとにカテゴライズする。何を目的としたクラスかわかるように分ける。</p>
            <nav>
                <div>目次</div>
                <ol>
                    <li>ベースグループ</li>
                    <li>レイアウトグループ</li>
                    <li>ブロックモジュールグループ</li>
                    <li>エレメントモジュールグループ</li>
                    <li>エレメントモジュールモディファイヤーグループ</li>
                    <li>ヘルパーグループ</li>
                    <li>ユニークグループ</li>
                    <li>プログラムグループ</li>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
            <h2>ベースグループ</h2>
            <p>ノーマライズCSS，リセットCSS、プロジェクトの標準となるスタイリング</p>
            <p>cssの種類ーベースグループ。normarize.scss。ブラウザ、デバイス間の不一致を修正。bootstrap-reboot.css をコピーしてカスタマイズなのでリセットではなくノーマライズcss。リセットCSSーuser agent stylesheetを無効化する</p>
        </section>
        <section class="ly-section">
            <h2>レイアウトグループ</h2>
            <p>位置調整を担当。header, footer, main, nav, aside, article, section</p>
            <p>position, z-index, top/right/left/bottom, float, width, margin</p>
        </section>
        <section class="ly-section">
            <h2>ブロックモジュールグループ</h2>
            <p>いろんな場所で使える。子要素を持つ。bl-</p>
        </section>
        <section class="ly-section">
            <h2>エレメントモジュールグループ</h2>
            <p>最小単位のモジュール、どこにでも使える、ボタン、ラベル el-</p>
        </section>
        <section class="ly-section">
            <h2>エレメントモジュールモディファイヤーグループ</h2>
            <p>--name</p>
        </section>
        <section class="ly-section"><h2>ヘルパーグループ</h2></section>
        <section class="ly-section"><h2>ユニークグループ</h2></section>
        <section class="ly-section"><h2>プログラムグループ</h2></section>
        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a href="https://qiita.com/pugiemonn/items/964203782e1fcb3d02c3" <?php echo $targetBlank ?>>こんなHTMLとCSSのコーディング規約で書きたい</a></cite>
            <cite class="ly-cite"><a href="https://www.amazon.co.jp/CSS設計完全ガイド-詳細解説-実践的モジュール集-半田-惇志/dp/429711173X" <?php echo $targetBlank ?>>CSS設計完全ガイド</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
