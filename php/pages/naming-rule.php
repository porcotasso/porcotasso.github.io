<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("命名ルール", "略語", "定番のクラス、id名"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
        <section class="ly-section tocContent">
            <h2><?php echo $navList[0]; ?></h2>
            <p>DOMの構成と命名ルールは、各サイトの構成や制作者の意図が反映するので全サイトで通用する答えを作るのが難しいです。最重要なことはスコープがわかりやすいこと。そのクラス名を作った、もしくは消したときに、何が起きるか把握できること。次に、ルールが正確に反映されていること。</p>
            <p>サイト全体のレイアウトが完璧に決まっている状態であれば、ルールも具体的になりやすいですが、今後の変更や拡張を踏まえた制作も現実的には多いと思うので、状況に応じて、変更、対応がでしやすいようにしておくのも大事かと思います。</p>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[0]; ?></h2>
            <ul>
                <li>ローワーキャメル</li>
                <li>ly- レイアウトグループ</li>
                <li>bl- ブロックモジュール</li>
                <li>el- エレメントモジュール</li>
                <li>js- javascriptに利用するクラスもしくはidにつける</li>
                <li>ga- gtmなどで利用するgoogle analyticsでの分析するためのclassやidにつける</li>
                <li>--　モディファイヤーの区切り</li>
                <li>_ block element を繋ぐ</li>
                <li>is-active ja</li>
            </ul>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[1]; ?></h2>
            <ul>
                <li>_inner 複数のブロックを囲う時に使う</li>
                <li>btn ーbutton</li>
                <li>ttl ーtitle</li>
                <li>txt ーtext</li>
                <li>cnt ーcontent</li>
                <li>ico ーicon</li>
                <li>cat ーcategory</li>
            </ul>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[2]; ?></h2>
            <ul>
                <li>container　複数のブロックを囲う時に使う　主にレイアウト的な入れ物　レイアウトに関するスタイルをつける </li>
                <li>wrapper　単体のブロックを囲う時に使う　意味的な入れ物　レイアウト以外に関するスタイルをつける</li>
                <li>is-active, is-open javascriptで使う</li>
            </ul>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
