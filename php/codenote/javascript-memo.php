<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("アコーディオン", "脱Jquery"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
                

		<section class="ly-section tocContent">
			<h2>アコーディオン</h2>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://flex-box.net/js-accordion/" <?php echo $targetBlank ?>>ブログの設置 アコーディオン</a></cite>
		</section>
        <section class="ly-section">
			<h2>脱Jquery</h2 id="2">
<pre class="prettyprint">
//ID名で取得
$('#id-name');
//クラス名で取得
$('.class-name');
//タグ名で取得
$('tag-name');
//クラス名の追加
$('#element').addClass('active');
//クラス名の削除
$('#element').removeClass('active');
//トグル
$('#element').toggleClass('active');
//要素が指定したクラス名を持っているか
$('#element').hasClass('active');


//ID名で取得
document.getElementById('element');
//クラス名で取得
document.getElementsByClassName('element');
//タグ名で取得
document.getElementsByTagName('element');
//クラス名の追加
document.getElementById('element').classList.add('active');
//クラス名の削除
document.getElementById('element').classList.remove('active');
//トグル
document.getElementById('element').classList.toggle('active');
//要素が指定したクラス名を持っているか
document.getElementById('element').classList.contains('active');
</pre>
<cite class="ly-cite"><a class="ly-cite_link" href="https://www.aura-office.co.jp/blog/js-native/" <?php echo $targetBlank ?>>アウラ 脱Jquery</a></cite>
<cite class="ly-cite"><a class="ly-cite_link" href="https://q-az.net/without-jquery-height-width-offset-scrolltop/" <?php echo $targetBlank ?>>脱Jquery</a></cite>
<cite class="ly-cite"><a class="ly-cite_link" href="https://www.willstyle.co.jp/blog/1025/" <?php echo $targetBlank ?>>will style.</a></cite>

<p>
    HTMLCollection element 違い:
    getElementsByClassName()が返すのは、HTMLCollectionであってElementではない
</p>

<cite class="ly-cite"><a class="ly-cite_link" href="https://teratail.com/questions/231849" <?php echo $targetBlank ?>>getElementsByClassName()が返す</a></cite>

<p>次の要素を取得する</p>
<cite class="ly-cite"><a class="ly-cite_link" href="https://syncer.jp/javascript-reference/element/scrolltop" <?php echo $targetBlank ?>>次の要素を取得する</a></cite>


           
		</section>
        <section class="ly-section tocContent">
            <h2>「Magnific Popup」</h2>
            <p>jQueryプラグイン,レスポンシブ対応モーダル・ポップアップ</p>
            <p>Magnific Popupは、インライン、ギャラリー、Youtube、GoogleMap、フォーム、Ajax、アニメーション、など様々なタイプのポップアップを簡単に実装することができます。さらにRetinaにも対応。</p>
            <p><a href="http://dimsemenov.com/plugins/magnific-popup/" <?php echo $targetBlank ?>>公式サイト</a></p>
        </section>
        



        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://flex-box.net/js-accordion/" <?php echo $targetBlank ?>>ブログの設置 アコーディオン</a></cite>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
