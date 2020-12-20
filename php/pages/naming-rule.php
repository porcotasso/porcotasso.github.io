<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt">
        <?php $navList = array("命名ルール", "略語"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
                

        <section class="ly-section tocContent">
            <h2>命名ルール</h2>
            <ul>
                <li>ローワーキャメル</li>
                <li>ly- レイアウトグループ</li>
                <li>bl- ブロックモジュール</li>
                <li>el- エレメントモジュール</li>
                <li>js- javascriptに利用するクラスもしくはidにつける</li>
                <li>--　モディファイヤーの区切り</li>
                <li>_ block element を繋ぐ</li>
            </ul>
        </section>
        <section class="ly-section tocContent">
            <h2>略語</h2>
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
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
