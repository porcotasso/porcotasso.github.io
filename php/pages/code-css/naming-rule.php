<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("命名ルール", "略語"); ?>
                <ol>
                    <?php for($i = 0; $i < count($navList); $i++){ ?>
                    <li>
                        <a href="#<?php echo $i + 1; ?>" class="">
                            <div class=""><?php echo $navList[$i]; ?></div>
                        </a>
                    </li>
                    <?php } ?>
                </ol>
            </nav>
        </header>
        <section class="ly-section"  id="1">
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
        <section class="ly-section"  id="2">
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
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
