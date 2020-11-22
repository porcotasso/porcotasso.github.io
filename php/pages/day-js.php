<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt ly-innnerWidth">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("day.jsの使い方"); ?>
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
			<p>下記コードでhtml内に<br>
				2020-09-06 Sun<br>
				2020-09-09 Wed<br>
				2020-09-16 Wed<br>
				と表記されます。
			</p>

<pre class="prettyprint">
<div id="js-thisSun"></div>//2020-09-06 Sun
<div id="js-thisWed"></div>//2020-09-09 Wed
<div id="js-nextWed"></div>//2020-09-16 Wed

<script src="https://unpkg.com/dayjs"></script>
<script>
	dayjs.locale('sn');
	let thisSunday = dayjs().startOf('week')
	let thisWednesday = thisSunday.add(3, 'day')
	let nextWednesday = thisWednesday.add(7, 'day')
	//formatDateファンクションを使ってtimeZoneに合わせて日付を取得
	let thisSundayText = formatDate(thisSunday.toDate());
	let thisWednesdayText = formatDate(thisWednesday.toDate());
	let nextWednesdayText = formatDate(nextWednesday.toDate());

	document.getElementById('js-thisSun').textContent = thisSundayText ;
	document.getElementById('js-thisWed').textContent = thisWednesdayText ;
	document.getElementById('js-nextWed').textContent = nextWednesdayText ;

	function formatDate(date){
		const option ={ year: 'numeric', month:'numeric', day:'numeric', weekday:'short', timezone:'Asia/Singapore'} //weekday:'long' は完全表記、'short'は短縮系
		const res = new Intl.DateTimeFormat('en-GB', option).formatToParts(date)
		const year = (res.find(r => r.type === 'year')).value
		const month = (res.find(r => r.type === 'month')).value
		const day = (res.find(r => r.type === 'day')).value
		const weekday = (res.find(r => r.type === 'weekday')).value
		return `${year}-${month}-${day} ${weekday}`
	}
</script>
</pre>
<p>日曜の午前かどうか判別するif文</p>
<pre class="prettyprint">
let today = new Date();
if(today.getDay() == 0 && today.get.getHours() < 12 ){
	console.log('日曜の午前');
}
//　0 sun, 1 mon, 2 tue, 3 wed, 4 thu, 5 fri, 6 sat
</pre>

<cite class="ly-cite"><a href="https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Intl/DateTimeFormat" <?php echo $targetBlank ?>>Intl.DateTimeFormat</a></cite>
<cite class="ly-cite"><a href="https://docs.microsoft.com/ja-jp/dotnet/standard/base-types/standard-date-and-time-format-strings" <?php echo $targetBlank ?>>標準の日時書式指定文字列</a></cite>
<cite class="ly-cite"><a href="https://maku77.github.io/js/time/other-country-time.html" <?php echo $targetBlank ?>>他の国のローカルタイム（現地時刻）を文字列形式で取得する</a></cite>
<cite class="ly-cite"><a href="https://www.ultra-noob.com/blog/2020-05-11-Day.js%E3%81%A7%E7%B0%A1%E5%8D%98%E3%81%AB%E6%97%A5%E4%BB%98%E5%87%A6%E7%90%86%EF%BC%81/" <?php echo $targetBlank ?>>Day.jsで簡単に日付処理！</a></cite>


		</section>

    </article>
</main>


<?php include("../_partial/wrapper-foot.php"); ?>

