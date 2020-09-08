<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("今日の日付を取得する","日時とif文"); ?>
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
			<p>Dateクラスをnew演算子で指定して、新しいオブジェクトを生成した際に、そのインスタンスはデフォルトで今日がセットされた状態で初期化されます。そのまま変数に入れると、以後、今日の日を示すDateオブジェクトとして使用できます。下記コードのようにDateオブジェクトから、年、月、日、時、分、秒をそれぞれ単独でメソッドで取得できます。</p>

<pre class="prettyprint">

   var today = new Date();
    console.log(today);
 	console.log(today.getDay()); //曜日
    console.log("年=" + today.getFullYear());
    console.log("月=" + (today.getMonth()+1));
    console.log("日=" + today.getDate());
    console.log("時=" + today.getHours());
    console.log("分=" + today.getMinutes());
	console.log("秒=" + today.getSeconds());
	
</pre>
<p>Date#getMonth()だけは0～11の月数を返すため、これを1～12にするには、「+1」する必要があります。</p>
		<section class="ly-section" id="1">
			<h2><?php echo $navList[1]; ?></h2>
			<p>日曜で12時前か、それ以外かの判定。</p>
<pre class="prettyprint">
var today = new Date();
if(today.getDay() == 0 && today.getHours() < 12 ){
	console.log(today.getDay());
} else {
	console.log('sss');
}
</pre>
				<ul>
					<li>
						<dl>
							<dt>協定世界時:UTC(Coordinated Universal Time)</dt>
							<dd>世界各地の標準時は協定世界時（UTC）を基準として定められている。</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>日本標準時：JST(Japan Standard Time)</dt>
							<dd>東経135度分の時差で協定世界時より9時間進んでいます。日本標準時は「+0900（JST）」と表記されます。</dd>
						</dl>
					</li>
				</ul>
				<cite class="ly-cite"><a href="https://www.sejuku.net/blog/22867" <?php echo $targetBlank ?>>日付の取得と比較の方法まとめ</a></cite>

				
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
