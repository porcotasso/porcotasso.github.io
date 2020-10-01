<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
			<?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("何をしたいかを明確にする", "管理と構成と流れ", "homebrewをインストール"); ?>
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
			<h3>sass→css、php→htmlの自動コンパイル</h3>
			<p>スタイルをcssでいちいち書きたくないからscssを使いたい。それとコンパイルも自動でできるようにしたい。</p>
			<p>それをするには、タスクランナーのgulpが必要。gulpを使うにはNode.jsが必要。Node.jsはanyenvで管理するのが便利。</p>
			<h3>phpを使いたい</h3>
			<p>htmlで全部書くとか無理。php使って楽したい。</p>
			<p>phpを使うには、homebrewを使ってインストールするのがいい。</p>
			<h3>ローカルサーバでバーチャルホストをたてる</h3>
			<p>MAMPは使わない。nginxを使う。homebrewを使ってインストールするのがいい。</p>
			<h3>コマンド打ちを楽したい</h3>
			<p>fishを入れる。</p>
		</section>
        <section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
			<p>何かを使おうとした時、方法が色々あってあとでどうインストールしたか忘れてしまう。基本的には、homebrewとnpmで大まかに管理して、Node.jsはanyenvを利用。</p>
			<h3>流れ</h3>
			<ol>
				<li>なにはともあれvisual Studio Codeをインストール</li>
				<li>homebrewをインストール</li>
				<li>gitをインストール</li>
				<li>anyenvをインストール</li>
				<li>gulpをインストール</li>
				<li>phpをインストール</li>
				<li>fishをインストール</li>
			</ol>
		</section>
        <section class="ly-section" id="2">
            <h2><?php echo $navList[2]; ?></h2>
			<p>homebrewはMac OSにおいてプログラミング上必要となるパッケージをインストールしたりアンインストールしたりする「パッケージ管理システム」です。</p>
			<p><a href="https://brew.sh/index_ja">ここから</a>コードをコピペする。</p>
			<p>※$curl というのはURLにアクセスしてデータを取得するコマンド。</p>
		</section>
		<section class="ly-section" id="2">
            <h2><?php echo $navList[2]; ?></h2>
			<p>gitもhomebrewで管理しちゃいます。</p>
			<p><a href="https://brew.sh/index_ja">ここから</a>コードをコピペする。</p>
			<p>※$curl というのはURLにアクセスしてデータを取得するコマンド。</p>
		</section>
        <section class="ly-section" id="2">
            
<pre class="prettyprint">
git fetch
</pre>
			<p>これをした後なら、最初の書き方でデータがひっぱってこれる。</p>
            </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php") ?>