<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt">
		<?php $navList = array("イベント伝搬とは", "イベントフェーズ", "発火のタイミングをコントロール", "イベント伝播の停止"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
                
            
        <section class="ly-section tocContent">
			<h2><?php echo $navList[0]; ?></h2>
            <p>親子関係のようなネストされた二つの要素の両方の要素にクリックなど同じ「イベント」リスナーがついているときに子をクリックをすると親のイベントも一緒に発動します。イベント伝搬とはイベントハンドラーが呼ばれる順番についての概念、ルールです。</p>
		</section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[1]; ?></h2>
			<p>例えば下記のようにネストされた２つのイベントターゲット（イベントの対象の要素のこと）両方にイベントリスナーがついている場合、イベントの順番はどうなるでしょうか。</p>
			<p>答えば、good evening　→　good morning　となります。</p>
<pre class="prettyprint">
<div id="parent">
	<div id="child">
	</div>
</div>

<script>
	document.getElementById('parent').addEventListener('click',()=>{
		alert('good morning');
	});
	document.getElementById('child').addEventListener('click',()=>{
		alert('good evening');
	});
</script> 
</pre>

			<p>イベントは、次の3つの段階 (フェーズ) を経て伝播されます。</p>
			<ol>
				<li>
					<dl>
						<dt>キャプチャフェーズ</dt>
						<dd>ウィンドウからイベントターゲットの親までの段階</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>ターゲットフェーズ</dt>
						<dd>イベントターゲットの段階</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>バブルフェーズ</dt>
						<dd>イベントターゲットの親から戻ってウィンドウまでの段階。<br>*イベントによってはバブリング (bubbling) しないものもあります。</dd>
					</dl>
				</li>
			</ol>
			<p>つまり上から下、下から上と往復して同じ場所を２回辿っていることになります。</p>


			
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[2]; ?></h2>
            <p>addEventListener()の第3引数（true/false）で発火のタイミングをコントロールします。</p>
            <ul>
                <li>ture・・・キャプチャーフェーズ時に発火（親から先に発火）</li>
				<li>false・・・バブリングフェーズ時に発火（子から先に発火）←初期値</li>
            </ul>
			<p>trueにした例。good morning　→　good eveningとなります。</p>
<pre class="prettyprint">
<div id="parent2">
	<div id="child2">
	</div>
</div>

<script>
	function morning(){
        alert('good morning');
    }
	document.getElementById('parent2').addEventListener('click', morning, true);

	function evening(){
        alert('good evening');
    }
	document.getElementById('child2').addEventListener('click', evening, true);
</script>
</pre>

        <p>ちなみにaddEventListener()の第3引数は元々は発火のタイミングをコントロールするuseCaptureのみの設定だったみたいですが、現在は拡張され、イベントハンドラを一度だけの処理とする設定や、preventDefault()を実行するかどうかの設定も追加できます。</p>
<pre class="prettyprint">
element.addEventListener('click', function,{
   once: true,
   passive: true,
   capture: true
});
</pre>
			<h3>once</h3>
			<p>イベントハンドラが一度だけの処理となり、一度しか読み込まないイベントを明示することでメモリの節約になり、毎回removeEventListenerを使うより楽。</p>
		</section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[3]; ?></h2>
			<p><code>stopPropagation();</code>でイベント伝播の停止をすることができます。</p>
<pre class="prettyprint">
<div id="parent3">
	<div id="child3">
	</div>
</div>

<script>
	document.getElementById('parent3').addEventListener('click',()=>{		
		alert('good morning');
	});
	document.getElementById('child3').addEventListener('click',(e)=>{
		e.stopPropagation();
		alert('good evening');	
	});
</script>
</pre>


        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
