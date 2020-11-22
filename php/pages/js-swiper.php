<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt ly-innnerWidth">
        <header>
			<?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("update順に並べる", "swiperを使う"); ?>
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
			<h3>html、php</h3>
			<p>ファイルのupdate日はファイル自体にアクセスしないと取得できないのに対し、サイトで表示させたいのは$allPages内の変数なので、その違う情報をどう正確に結びつけるかがポイントです。</p>
<pre class="prettyprint">
$sort_by_lastmod = function($a, $b) {
return filemtime($b) - filemtime($a);
};
$stack = array();
foreach($allPages as $list){
	$filename = $baseUrl.$list["file"]; 
	array_push($stack,$filename);   
}
usort( $stack, $sort_by_lastmod );
$n = 5;
$latestUpdate = array_slice($stack, 0, $n);
$latestContent = array();
for($i = 0; $i < $n; $i++){
	foreach($allPages as $list){
		$filename = $baseUrl.$list["file"];
		if(in_array($filename, (array)$latestUpdate[$i])){
			array_push($latestContent,$list);
		}
	}
}

&lt;div class=&quot;swiper-container&quot;&gt;
	&lt;div class=&quot;swiper-wrapper&quot;&gt;
		&lt;?php foreach($latestContent as $value){ ?&gt;
			&lt;a href=&quot;&lt;?php echo &#039;/pages/&#039;. $value[&quot;html&quot;]; ?&gt;&quot; class=&quot;swiper-slide&quot;&gt;
				&lt;div class=&quot;swiper-slide_cnt&quot;&gt;
					&lt;ul class=&quot;swiper-slide_tag&quot;&gt;
						&lt;?php foreach ( $value[&quot;tag&quot;] as $name) { ?&gt;
						&lt;li class=&quot;swiper-slide_tag_list&quot;&gt;
							&lt;?php echo $name; ?&gt;
						&lt;/li&gt;
						&lt;?php } ?&gt;   
					&lt;/ul&gt;
					&lt;h2 class=&quot;swiper-slide_title&quot;&gt;&lt;?php echo $value[&quot;title&quot;];?&gt;&lt;/h2&gt;
					&lt;p class=&quot;swiper-slide_lead&quot;&gt;&lt;?php echo $value[&quot;lead&quot;];?&gt;&lt;/p&gt;
					&lt;p class=&quot;swiper-slide_updateDate&quot;&gt;&lt;?php echo date (&quot;Y.m.d&quot;, filemtime($baseUrl.$value[&quot;file&quot;])); ?&gt;&lt;/p&gt;
				&lt;/div&gt;
			&lt;/a&gt;
		&lt;?php } ?&gt;
	&lt;/div&gt;
	&lt;div class=&quot;swiper-pagination&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;swiper-button-prev&quot;&gt;&lt;/div&gt; 
	&lt;div class=&quot;swiper-button-next&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>

			<h3>phpでデータの準備</h3>
			<p>更新日時順で並び替える関数を作る。</p>
<pre class="prettyprint">
$sort_by_lastmod = function($a, $b) {
	return filemtime($b) - filemtime($a);
};
</pre>
		<p>allPages内にある変数の各ファイルのパスをとって$stack配列内で並べる。</p>
<pre class="prettyprint">
$stack = array();
foreach($allPages as $list){
	$filename = $baseUrl.$list["file"]; 
	array_push($stack,$filename);   
}
</pre>
		<p>allPagesから取得したファイルパスからファイル自体にアクセスして、ファイルの更新日で並び替える。$stack変数はupdateの新しい順</p>
<pre class="prettyprint">
usort( $stack, $sort_by_lastmod );
</pre>
		<p>スライダー内に表示する数の分だけを$stackから$latestUpdate変数に入れる</p>
<pre class="prettyprint">
$n = 5;
$latestUpdate = array_slice($stack, 0, $n);
</pre>
		<p>新しい配列$latestContentを作り$allPages内の各ファイルパスと$latestUpdateのパスが一致する変数だけif文で見つけ配列内に並べる。その際新しい順になるよう２重のループを使用する。</p>
<pre class="prettyprint">
$latestContent = array();
for($i = 0; $i < $n; $i++){
	foreach($allPages as $list){
		$filename = $baseUrl.$list["file"];
		if(in_array($filename, (array)$latestUpdate[$i])){
			array_push($latestContent,$list);
		}
	}
}
</pre>
			<h3>htmlでswiperの準備</h3>
			<p>swiper用の基本DOM構成</p>
<pre class="prettyprint">
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
    </div>
</div>
</pre>
			<p>スライドの数を表示するpaginationを追加する</p>
<pre class="prettyprint">
<div class="swiper-pagination"></div>
</pre>
			<p>前後のスライドに移動するナビゲーションを追加する</p>
<pre class="prettyprint">
<div class="swiper-button-prev"></div> 
<div class="swiper-button-next"></div>
</pre>
          <cite class="ly-cite"><a href="https://tech.playground.style/javascript/carousel-slider/" <?php echo $targetBlank ?>>カルーセルスライダーの実装に便利なSwiper.jsの使い方</a></cite>
          <cite class="ly-cite"><a href="https://cooen.jp/archives/510" <?php echo $targetBlank ?>>スライダーSwiper.js 基本の使い方解説</a></cite>
		</section>
        <section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
            <p>swiperのオプションを追加するjavascript。</p>
<pre class="prettyprint">
var mySwiper = new Swiper ('.swiper-container', {
	autoplay: {
		delay: 2500,
	},
	loop: true,
	speed: 500,
	pagination: {
		el: '.swiper-pagination',
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	slidesPerView: 3,    // 追加...1度に表示するスライド枚数
	spaceBetween: 4,    // 追加...スライド間の余白
	breakpoints: {
		767: {
		slidesPerView: 1,
		spaceBetween: 0,
		}
	}
});
</pre>

            </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php") ?>