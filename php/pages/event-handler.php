<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("イベントとは", "イベントハンドラーとは", "HTML属性のイベントハンドラ", "DOM要素プロパティのイベントハンドラ", "イベントリスナーのイベントハンドラ３つの方法"); ?>
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

            <p>ウェブページ上で発生するアクションの総称。アクションには、例えばボタンのクリック、フォームへの入力、ページの読み込み、マウスポインタを要素の上に合わせるなどが含まれます。</p>
        </section>
        <section class="ly-section" id="1">
			<h2><?php echo $navList[1]; ?></h2>
            <p>イベントの処理を行うコードのこと。方法は大きく３つに分けられます。</p>
            <ul>
                <li>HTML属性のイベントハンドラ</li>
                <li>DOM要素プロパティのイベントハンドラ</li>
                <li>イベントリスナーのイベントハンドラ</li>
            </ul>
        </section>
        <section class="ly-section" id="2">
			<h2><?php echo $navList[2]; ?></h2>
<pre class="prettyprint">
<input type="text" onchange="sample1()">

<script>
function sample1() {
    console.log("Hello world");
}
</script>
</pre>
        </section>
        <section class="ly-section" id="3">
			<h2><?php echo $navList[3]; ?></h2>
<pre class="prettyprint">
<p id="sample2">クリックでコンソールログにHello</p>

<script>
    var sample2 = document.getElementById('sample2');
    sample2.onclick = function() {
        console.log("Hello");
    }
</script> 
</pre>   
        </section>
        <section class="ly-section" id="4">
			<h2><?php echo $navList[4]; ?></h2>
            <p>複数の処理の登録が可能になります。</p>
            <h3>addEventListenerの基本的な使い方</h3>
<pre class="prettyprint">
要素.addEventListener(イベント, 関数, オプション);
</pre>
            <p>
                第1引数：イベントの種類を指定<br>
                第2引数：関数を指定。任意のイベントが発生時に関数内に書かれた処理を実行。<br>
                第3引数は：イベント伝搬の方式（true / false）。通常はfalse。
            </p>
            <h3>方法1 外部に関数を設定</h3>
            <p>処理やファイルが複雑な場合に使用</p>
<pre class="prettyprint">
<p id="sample3">クリックでコンソールログにHello</p>

<script>
    var sample3 = document.getElementById('sample3');

    function sayHello(){
        console.log("Hello");
    }
    sample3.addEventListener('click', sayHello, false);
</script>
</pre>

            <h3>方法2 無名関数で書く</h3>
            <p>よく使われる書き方で第2引数へそのまま関数を記述。単純な処理しか記述しないようなケースは、関数をわざわざ用意するよりコードが分かりやすい。</p>
<pre class="prettyprint">
<p id="sample4">クリックでコンソールログにHello</p>
 
<script>
    var sample4 = document.getElementById('sample4');
    
    sample4.addEventListener('click', function() {
    console.log("Hello");
    }, false);
</script>
</pre>

            <h3>方法3 アロー関数を使う</h3>
            <p>無名関数をES2015の書き方にしただけ</p>
<pre class="prettyprint">
<p id="sample5">クリックでコンソールログにHello</p>
 
<script>
    var sample5 = document.getElementById('sample5');

    sample5.addEventListener('click', () => {
    console.log("Hello");
});
</script>
</pre>      
            <cite class="ly-cite"><a href="https://phpjavascriptroom.com/?t=js&p=event" <?php echo $targetBlank ?>>PHP & JavaScript Room JavaScriptのイベントハンドラ一覧</a></cite>
            <cite class="ly-cite"><a href="http://www.tohoho-web.com/js/onevent.htm" <?php echo $targetBlank ?>>tohoho-web イベントハンドラ</a></cite>  
  
        </section>

    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
