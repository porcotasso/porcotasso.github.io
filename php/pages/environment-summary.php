<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
		<?php $navList = array("何をしたいかを明確にする", "管理と構成と流れ", "homebrewをインストール", "homebrewでgitをインストール", "anyenvをインストール", "nodenvをインストール", "sassをcssに"); ?>
        <?php include("../_partial/pages-title.php"); ?>
            
                
            
        <section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
            <h2><?php echo $navList[1]; ?></h2>
			<p>インストールの流れ</p>
			<ol>
				<li>なにはともあれvisual Studio Codeをインストール</li>
				<li>Homebrewをインストール</li>
				<li>homebrewでgitをインストール</li>
				<li>homebrewでfishをインストール</li>
				<li>homebrewでphpをインストール</li>
				<li>homebrewでnginxをインストール</li>
				<li>homebrewでmariadbをインストール</li>
				<li>gitでanyenvをインストール</li>
				<li>anyenvでnodeenvをインストール</li>
				<li>nodeenvでNode.jsをインストール</li>
				<li>Node.jsでgulpをインストール</li>
				<li>Node.jsでwebpackをインストール</li>
				<li>Node.jsでtypescriptをインストール</li>
			</ol>

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
		</section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[2]; ?></h2>
			<p>homebrewはMac OSにおいてプログラミング上必要となるパッケージをインストールしたりアンインストールしたりする「パッケージ管理システム」です。</p>
			<p><a href="https://brew.sh/index_ja">ここから</a>コードをコピペする。</p>
			<p>※$curl というのはURLにアクセスしてデータを取得するコマンド。</p>
		</section>
		<section class="ly-section tocContent">
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
        <section class="ly-section tocContent">
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
		<section class="ly-section tocContent">
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
		<section class="ly-section tocContent">
		<h2><?php echo $navList[6]; ?></h2>
		<ol>
			<li>作業directoryの決定（これからこの下にデータを作っていくってフォルダを作ります httpdocs下とか）</li>
			<li>visual code studio 開く。</li>
			<li>File-> new window でそのフォルダ選択して開く。terminal のdirectly がそのフォルダに移動される。</li>
			<li>terminalで Node.jsをインストール（すでにしてたら無視）</li>
			<li>npm initで作業場所の宣言&package.json作成</li>
			<li>npm install でGulpのインストール</li>
			<li>gulpfile.js の作成　</li>
			<li>package.json、gulpfile.js編集</li>
			<li>npm run で実行</li>
		</ol>
		<h3>作業ディレクトリの決定</h3>
		<p>npm initで「このディレクトリ下は 我々npmが 管理下に置く！」宣言。ついでにpackage.jsonファイルも作成される。package.jsonにはプロジェクトの設定情報が書いてあります。Nodeからどんな便利な機能を追加するなど。</p>
<pre class="prettyprint">
npm init -y
</pre>
		<h3>Gulpのインストール　方法１</h3>
		<p>package.jsonのdevDependenciesにインストールしたプラグイン名とバージョンが記載されます。node_modulesというフォルダ下に、ライブラリが保存されます。 (node_modulesフォルダが作業場所に作成される)</p>
<pre class="prettyprint">
npm install -D gulp
</pre>
		<h3>Gulpのインストール　方法２</h3>
		<p>package.jsonのdependencies内に入ったライブラリは、npm installだけで自動的にインストールすることができます。（他の同じ環境の制作者とpackage.jsonを統一するときとか、package.jsonをもらってnpm installすれば一気にDLできる）</p>
		<h3>gulpfile.js の作成</h3>
		<p>package.json、gulpfile.js編集（色々参照してコピって編集）重要だけど長くなるのでここは省く</p>
<pre class="prettyprint">
実行

$ npm run dev
npm run dev -> package.json の中身をみる　→　

 "scripts": {
   "dev": "gulp"
 }
-> gulpfile.js の

gulp.task( {
});
が実行される。
</pre>
		<cite class="ly-cite"><a class="ly-cite_link" href="https://ics.media/entry/3290/" <?php echo $targetBlank ?>>絶対つまずかないGulp 4入門</a></cite>
		<cite class="ly-cite"><a class="ly-cite_link" href="https://qiita.com/hashrock/items/15f4a4961183cfbb2658" <?php echo $targetBlank ?>>フロントエンド開発の３ステップ（npmことはじめ）</a></cite>
		</section>

    </article>
</main>
<?php include("../_partial/wrapper-foot.php") ?>