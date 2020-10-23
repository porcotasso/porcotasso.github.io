<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
			<?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("何をしたいかを明確にする", "管理と構成と流れ", "homebrewをインストール", "homebrewでgitをインストール", "anyenvをインストール", "nodenvをインストール"); ?>
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
			<p>スタイルをscssで書きたい。phpでコードを簡略したい。それとコンパイルも自動でできるようにしたい。</p>
			<p>それをするには、タスクランナーのgulpが必要。gulpを使うにはNode.jsが必要。Node.jsはanyenvで管理するのが便利。</p>
			<h3>phpを使いたい</h3>
			<p>htmlで全部書くとか無理。php使って楽したい。</p>
			<p>phpを使うには、homebrewを使ってインストールするのがいい。</p>
			<h3>ローカルサーバでバーチャルホストをたてる</h3>
			<p>MAMPは使わない。nginxを使う。homebrewを使ってインストールするのがいい。ただhomebrewでのnginxは推奨はしない的なメッセージがでてくることがあるけど。</p>
			<h3>コマンド打ちを楽したい</h3>
			<p>fishを入れる。</p>
		</section>
        <section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
			<p>何かを使おうとした時、方法が色々あってあとでどうインストールしたか忘れてしまう。基本的には、homebrewとnpmで大まかに管理して、Node.jsはanyenvを利用。</p>
			<h3>homebrewでインストールするもの</h3>
			<ul>
				<li>git</li>
				<li>php</li>
				<li>mariaDB</li>
				<li>nginx</li>
				<li>fish</li>
			</ul>
			<h3>anyenvでインストールするもの</h3>
			<ul>
				<li>nodenv</li>
				<li>
					<ul>
						<li>node.js 各バージョン</li>
						<li>npm</li>
					</ul>
				</li>
			</ul>
			<h3>流れ</h3>
			<ol>
				<li>なにはともあれvisual Studio Codeをインストール</li>
				<li>homebrewをインストール</li>
				<li>gitをインストール</li>
				<li>anyenvをインストール</li>
				<li>nodeenvをインストール</li>
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
		<section class="ly-section" id="3">
            <h2><?php echo $navList[3]; ?></h2>
			<p>gitもhomebrewで管理します。</p>
<pre class="prettyprint">
brew install git
</pre>
もしgitがhomebrew以外の方法で既にインストールされている場合、 そっちを起動する可能性がある。
<pre class="prettyprint">
which git
</pre>
<p>で場所がわかる。現在、/usr/local/bin/gitが使われるがこれはこちらのエイリアス。ー＞/usr/local/Cellar/git/2.26.2/bin/git実際のデータはこちらにある。</p>
		</section>
        <section class="ly-section" id="4">
		<h2><?php echo $navList[4]; ?></h2>
		<h3>anyenvとは</h3>
		<p>ソフトウェア、アプリケーションの開発を行っていると、同じプログラミング言語でもバージョンの違うものを使いたいということがあります。anyenvは様々なプログラミング言語のバージョンを管理することができるツールです。</p>
		<h3>インストール方法</h3>
		<p>githubのソースからインストールする(homebrewでもインストールできるようです)。</p>
<pre class="prettyprint">
//ユーザーディレクトリ以下に隠しファイル'.anyenv'という名前でanyenvをgithubからクローン.
git clone https://github.com/anyenv/anyenv ~/.anyenv
//fish用にパスの追加
set -U fish-user-paths ~/.anyenv/bin $fish-user-paths
//初期化
anyenv install --init
</pre>
        </section>
		<section class="ly-section" id="5">
		<h2><?php echo $navList[5]; ?></h2>
		<h3>nodenvとは</h3>
		<p>Node.jsは開発環境によって異なるバージョンを求められることがあり、Node.jsを複数バージョン保持しておき、それをコマンドひとつで切り替えられるのがanyenvの中のnodenvというソフトウェアです。</p>
		<h3>インストール方法</h3>
		<p></p>
<pre class="prettyprint">
//インストールできる**envのリストが表示されます。
anyenv install --list

//エラー'no such command install'が出る場合、下記に移動してsh実行でinstallコマンドが入る
cd ~/.anyenv/envs/nodenv/plugins/node-build 
sh install.sh

//nodenv のインストール　~/.nodenv/versions/12.16.3 ローカルに入る
nodenv install 12.16.3

//12.16.3
nodenv versions

//14.2.0 latestもローカルに入れてみる
nodenv install 14.2.0

//パスを入れる ここを ~/.nodenv/versions/各バージョン/bin にしてしまうと優先パスのnodeが実行されてしまう。
Set -U fish_user_paths ~/.nodenv/shims $fish_user_paths

//ローカルじゃなくてグローバルに入れる方法
nodenv global 12.16.3

//複数バージョンを入れていると有効になっている方が表示される。
nodenv version

//インストールした全バージョン表示
nodenv versions

//その他コマンドを表示
nodenv
</pre>
        <p>ちなみに以前nodebrewを入れていたので削除。パスの削除もすること。</p>
<pre class="prettyprint">
brew uninstall nodebrew
</pre>
		</section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php") ?>