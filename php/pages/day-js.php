<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
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
            <p>JavaScriptの日付操作ライブラリで軽量（2KB）で多くのブラウザをサポートしたDay.jsをご紹介します。</p>
<pre class="prettyprint">
<!-- <div id="js-thisSun"></div>//2020-09-06 Sun
<div id="js-thisWed"></div>//2020-09-09 Wed
<div id="js-nextWed"></div>//2020-09-16 Wed -->

<!-- <script src="https://unpkg.com/dayjs"></script> -->
<!-- <script>
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
</script> -->
</pre>

<div id="js-thisSun"></div>
<div id="js-thisWed"></div>
<div id="js-nextWed"></div>

<cite class="ly-cite"><a href="https://developer.mozilla.org/ja/docs/Web/JavaScript/Reference/Global_Objects/Intl/DateTimeFormat" <?php echo $targetBlank ?>>sdfgh</a></cite>
<cite class="ly-cite"><a href="https://docs.microsoft.com/ja-jp/dotnet/standard/base-types/standard-date-and-time-format-strings" <?php echo $targetBlank ?>>sdfg</a></cite>

		</section>
    </article>
</main>

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

<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>

