<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("ファイルの更新時刻を取得する", "date関数"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
                
            
        <section class="ly-section tocContent">
            <h2><?php echo $navList[0]; ?></h2>
			<p></p>
<pre class="prettyprint">
&lt;?php if (file_exists($filename)) { ?&gt;
	&lt;?php echo date (&quot;Y.m.d&quot;, filemtime($filename)).&#039; updated&#039;; ?&gt;
&lt;?php } ?&gt;
//出力例: 2020.09.08 updated

&lt;?php if (file_exists($filename)) { ?&gt;
	&lt;?php echo date (&quot;F d Y H:i:s.&quot;, filemtime($filename)).&#039; updated&#039;; ?&gt;
&lt;?php } ?&gt;
//出力例: September 08 2020 22:10:11. updated
</pre>

<cite class="ly-cite"><a class="ly-cite_link" href="https://www.php.net/manual/ja/function.filemtime.php" <?php echo $targetBlank ?>>PHP マニュアル</a></cite>
		</section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[1]; ?></h2>
            <p>date関数は指定された日時を任意の形式でフォーマットし、日付文字列を返す関数です。ローカルの日付/時刻を書式化</p>
            <p>date_format関数は、日時の値を指定した形式にフォーマットする関数です。DateTime::format() のエイリアス、、、</p>
            <p>どう違うの？</p>
            <h3>date関数</h3>
<pre class="prettyprint">
// 現在日付をフォーマットする
echo date('Y/m/d'); //2017/04/21

echo date('Y-m-d H:i:s'); //2017-04-21 01:09:56

echo date('Y年m月d日 H時i分s秒'); //2017年04月21日 01時09分56秒

</pre>
            <h3>date_format関数</h3>
<pre class="prettyprint">
//日時を設定する
$date = date_create('2017-04-01');//date_create関数で引数に指定した日付でDataTimeクラスのオブジェクトを取得
//実行結果を出力
echo date_format($date, 'y/m/d'); //17/04/01
echo date_format($date, 'Y-m-d H:i:s'); //2017-04-01 00:00:00
echo date_format($date, 'Y年m月d日H時i分s秒'); //2017年04月01日00時00分00秒
echo date_format($date, 'g:i A'); //12:00 AM
echo date_format($date, 'G:i a'); //0:00 am
echo date_format($date, 'Y/m/d g:ia l F'); //2017/04/01 12:00am Saturday April
</pre>
        </section>
        https://techplay.jp/column/596
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
