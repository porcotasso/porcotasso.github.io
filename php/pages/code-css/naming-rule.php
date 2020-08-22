<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <p>名前からクラスの目的やスコープがわかりやすいようにする。</p>
            <nav>
                <div>目次</div>
                <ol>
                    <li>命名ルール</li>
                    <li>略語</li>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
        <h2>命名ルール</h2>
        <ul>
            <li>ローワーキャメル</li>
            <li>ly- レイアウトグループ</li>
            <li>bl- ブロックモジュール</li>
            <li>el- エレメントモジュール</li>
            <li>--　モディファイヤーの区切り</li>
            <li>_ block element を繋ぐ</li>
        </ul>
        <h2></h2>
        <ul>
            <li>container　単体のブロックを囲う時に使う　主にレイアウト的な入れ物　レイアウトに関するスタイルをつける </li>
            <li>wrapper　単体のブロックを囲う時に使う　意味的な入れ物　レイアウト以外に関するスタイルをつける</li>
            <li>_inner 複数のブロックを囲う時に使う　の下で使う入れ物　</li>
            <li>btn ーbutton</li>
            <li>txt ーtext</li>
            <li>cnt ーcontent</li>
            <li>ico ーicon</li>
            <li>cat ーcategory</li>
        </ul>
        </section>

        <section class="ly-section">
            <h3>参考</h3>https://qiita.com/manabuyasuda/items/dbb76ed36970bec95470
            <cite class="ly-cite"><a href="https://wunderstand.net/1417/" <?php echo $targetBlank ?>>html5のarticle・section等、まとめる要素まとめ</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
