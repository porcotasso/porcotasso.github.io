<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<?php $title = $button["title"] ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article>
        <header>
            <h1><?php echo $title ?></h1>
            <p>ボタンを作る際 &lt;a&gt;か&lt;button&gt;か&lt;input&gt;か迷わないように違いを理解する。</p>
            <nav>
                <div>目次</div>
                <ol>
                    <li>aタグ</li>
                    <li>buttonタグ</li>
                    <li>inputタグ</li>
                </ol>
            </nav>
        </header>
        <section>
        	<h2>aタグ</h2>
            <p>汎用的なボタンはaタグを使用する。理由として、一般的に浸透していること。buttonが推奨されているわけでもないということで、よく使われているaを使うのが無難。大手web会社もaを使っている様子。</p>
        </section>
        <section>
            <h2>buttonタグ</h2>
			<p>フォームの送信ボタンとして使用する。aタグは送信ボタンとして使えない。buttonは擬似要素が使えて、inputの上位互換となるので。</p>
			<p>htmlに「type=""」の指定が必要。<br>cssにデフォルトのデザインを打ち消す指定が必要<br>リンクが「onclick="location.href='aa.html'"」となる</p>
			<p>一方でbuttonを汎用ボタンに押すひとの意見。<br>フォーカスが当たる。フォーカスしてenterキーでclickイベントが発火する。音声読み上げで「ボタン」と読まれる。aは「リンク」。フォームと連動することでbuttonを嫌がる人もいるが、type="button"にすればフォームに対しなにもしない。</p>
		</section>
		<section>
            <h2>inputタグ</h2>
            <p>可能な限り使用しない。</p>
		</section>
		<section>
			<h2>やってはいけないこと</h2>
			<p>aタグの中にインタラクティブコンテンツを入れてはいけない。button をaで囲むなど。
				インタラクティブコンテンツとはselect, button, a, input, textarea などユーザー操作に対し反応するタグ。</p>
		</section>
		<section>
			<h2>サンプル</h2>
			<a href="/" class="el-btn el-btn--center el-btn--angle">ボタンサンプル</a>
		</section>


        <section>
            <h3>参考</h3>
            <cite><a href="https://www.ameamelog.com/html-a-button/">ameamelog.com</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
