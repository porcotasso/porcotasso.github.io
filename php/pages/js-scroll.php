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
                <?php $navList = array("scroll"); ?>
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
            <p></p>
<pre class="prettyprint">


</pre>
		

<p>
scrollTop
JavaScriptの、ElementオブジェクトのscrollTopは、要素内の垂直方向のスクロール量を取得、変更するプロパティです。

.offsetHeight
垂直方向のパディングとボーダーを含む要素の高さをピクセル数で表す、読み取り専用のプロパティです。
一般的に要素のoffsetHeightは、 要素のボーダー、要素の垂直方向のパディング、要素の水平スクロールバー(もし、描画されていれば)と要素のCSSのheightを含めて計測されます。


scrollHeight
JavaScriptの、ElementオブジェクトのscrollHeightはスクロール分を含めた全体の高さを取得するプロパティです。scrollHeightプロパティはスクロール分を含めた全体の高さです。スクロールバーがあるかないかで計算方法が変わります。スクロールバーが表示されていない場合、heightとpaddingとborderの合計で、marginを含まない値となります。さて、scrollHeightの特徴はここからです。要素がスクロール可能な状態になっている時、考え方が全く変わってきます。例えば上記のように青い枠線を持った要素のscrollHeightを考えてみましょう。この青い要素は自身よりも大きいサイズの画像を内包していて、スクロール表示させています。
この時、scrollHeightの起点はborderの左上ではなく、paddingの左上となります。そして、スクロールできる分の高さがscrollHeightの数値となるのです。もう1つ例を見ておきます。内包するコンテンツが小さく、スクロールをする必要がなくても、スクロールバーが表示されている状態の場合、scrollHeightの起点はpaddingの左上となり、そして、スクロールバーを含めない、paddingとheightの合計がscrollHeightの値となります。

さて、ChromeやSafariと、Firefoxで取得できるscrollHeightの値が違うことがあります。これの原因は、paddingとスクロールバーの関係です。まずはFirefoxの例を見て下さい。下部にスクロールバーがある時、padding-bottomの幅が削られてしまいます。一方、Chromeの例を見て下さい。下部にスクロールバーがある時、padding-bottomの幅は削られません。Safariも同様です。この削られるか、削られないかの分の幅が、scrollHeightで取得できる値のズレとなって表れます。ブラウザ間で異なる値になる可能性が高いscrollHeightは、プログラムに組み込みにくいということが言えますね。</p>

scrollToメソッドとscrollByメソッドは、指定した位置にスクロールして移動することができるメソッドです。例えばclickイベントと組み合わせて、クリックしたら指定した位置にスクロールさせる、ということができるわけですね。

絶対位置を指定してスクロール/scrollTo
scrollToメソッドでは、絶対位置を指定してスクロールをさせることができます。絶対位置とは、全体に対してどの位置なのか、という指定の方法です。scrollToメソッドは第一引数にx座標、第二引数にy座標のスクロール量を指定します。このスクロール量は、ピクセル単位で指定します。次のプログラムで確認してみましょう。
scrollTo(100, 200);プログラムを実行すると、右に100px、下に200px画面がスクロールします。

相対位置で指定してスクロール/scrollBy
scrollByを使う場合は、相対位置で指定してスクロールさせることができます。相対位置とは現在のスクロール位置を基準として、そこからどれだけの量をスクロールするのか指定することです
scrollBy(100, 200);
このプログラムを実行すると、現在の画面位置から右に100px、下に200px画面がスクロールします。最初の位置が右に50px、下に100px動いた位置だとすると、最終的な位置は右から150px、下に300px動いた位置になるということですね。


TOPへ戻るボタン
最近は縦長のサイトも増えてきて、ページのTOPに戻るボタンの有る無しは結構重要ですよね。そんなページトップへ戻るボタンは、下記のように書くことで実装可能です。
<div class="btn" onclick="scrollToTop()"></div>
<br>

function scrollToTop() {
  scrollTo(0, 0);
 }


 https://www.sejuku.net/blog/62930
		</section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
