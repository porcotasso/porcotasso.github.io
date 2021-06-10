<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("aタグ", "buttonタグ", "inputタグ"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
                
            
        <section class="ly-section tocContent">
            <h2><?php echo $navList[0]; ?></h2>
            <p>汎用的なボタンはaタグを使用する。理由として、一般的に浸透していること。buttonが推奨されているわけでもないということで、よく使われているaを使うのが無難。大手web会社もaを使っている様子。</p>
			<h3>サンプル</h3>
			<a href="/" class="el-btn el-btn--center el-btn--angle">ボタンサンプル</a>
        </section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[1]; ?></h2>
			<p>フォームの送信ボタンとして使用する。aタグは送信ボタンとして使えない。buttonは擬似要素が使えて、inputの上位互換となるので。</p>
			<p>htmlに「type=""」の指定が必要。<br>cssにデフォルトのデザインを打ち消す指定が必要<br>リンクが「onclick="location.href='aa.html'"」となる</p>
			<p>一方でbuttonを汎用ボタンに押すひとの意見。<br>フォーカスが当たる。フォーカスしてenterキーでclickイベントが発火する。音声読み上げで「ボタン」と読まれる。aは「リンク」。フォームと連動することでbuttonを嫌がる人もいるが、type="button"にすればフォームに対しなにもしない。</p>
<pre class="prettyprint">
<button type="button" onclick="location.href='aaa.html'">ボタン</button>
</pre>
		</section>
		<section class="ly-section tocContent">
            <h2><?php echo $navList[2]; ?></h2>
            <p>可能な限り使用しない。</p>
		</section>
		<section class="ly-section">
			<h2>やってはいけないこと</h2>
			<p>aタグの中にインタラクティブコンテンツを入れてはいけない。button をaで囲むなど。インタラクティブコンテンツとはselect, button, a, input, textarea などユーザー操作に対し反応するタグ。</p>
		</section>

        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://www.ameamelog.com/html-a-button/" <?php echo $targetBlank ?>>ameamelog.com</a></cite>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
