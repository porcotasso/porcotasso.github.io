<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
			<?php if (file_exists($filename)) { ?>
				<p class="el-updateDate"><?php echo date ("Y.m.d", filemtime($filename)).' updated'; ?></p>
			<?php } ?>
            <p><?php echo $lead ?></p>  
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("shopifyとは","現在の時間を基準にif文をつくる", "jsを利用する", "新しいcssファイルを利用する"); ?>
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
            <p>2004年にカナダで創業。世界最大のECサイト制作プラットフォームです。</p>
            
        </section>
        <section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
            <p>月曜の12時の前か後かを分ける。</p>
<pre class="prettyprint">
{% assign wday = 'now' | date: "%A" %} //今の曜日をwday変数に代入
{% assign hour = 'now' | date: "%H" %}　//今の時間をhour変数に代入
{% if wday == 'Monday' and hour <= '12' %}
<p>月曜の午前です</p>
{% else %}
<p>月曜の午前以外です</p>
{% endif %}

//%Y yesar 2020
//%m month 09
//%b month Jul
//%d day 04
//%H hour 16
//%M minutes 05
//%A weekday Friday

//"%Y-%m-%d %H:%M" 2020-09-04 16:05
</pre>
        </section>
        <section class="ly-section" id="2">
            <h2><?php echo $navList[2]; ?></h2>
            <p>Assetsで、新しいassetを追加し、javascriptを選ぶ。そのファイル内にjavascriptを書く。CDNを使う方法がわからない。使えないのかも。その場合、コードをコピーすれば使える。使いたいliquidファイル内で、</p>
<pre class="prettyprint">
{{ 'file-name.js' | asset_url | script_tag}}
</pre>
            <p>と書けば使える。</p>
        </section>
        <section class="ly-section" id="3">
            <h2><?php echo $navList[3]; ?></h2>
            <p>Assetsで、新しいassetを追加し、cssを選ぶ。そのファイル内にstyleを書く。使いたいliquidファイル内で、</p>
<pre class="prettyprint">
{{ 'file-name.css' | asset_url | stylesheet_tag}}
</pre>    
            <p>と書けば使える。</p>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
