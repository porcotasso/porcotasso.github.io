<?php include("_partial/wrapper-head.php"); ?>
<main>
    <p class="ly-homeProfile"><b>このサイトはまだ制作中です</b></p>
<div class="ly-homeNews">
<?php 
/// 更新日時順で並び替える関数
$sort_by_lastmod = function($a, $b) {
  return filemtime($b) - filemtime($a);
};
//要約：ファイルのupdate日はファイル自体にアクセスしないと取得できないのに対し、サイトで表示させたいのは$allPages内の変数なので、その違う情報をどう正確に結びつけるかがポイント
//allPages内にある変数の各パスをとって$stack配列内で並べる。
//ファイル自体にアクセスして、ファイルの更新日で並び替える。$stack変数はupdateの新しい順
//スライダー内に表示する数の分だけを$latestUpdate変数に入れる
//新しい配列$latestContentを作り$allPages内の各ファイルパスと$latestUpdateのパスが一致する変数だけif文で見つけ配列内に並べる。
$stack = array();
foreach($allPages as $list){
    $filename = $baseUrl.$list["file"]; 
    array_push($stack,$filename);   
}
usort( $stack, $sort_by_lastmod );
$n = 5;
$latestUpdate = array_slice($stack, 0, $n);

$latestContent = array();
foreach($allPages as $list){
    $filename = $baseUrl.$list["file"];
    if(in_array($filename, (array)$latestUpdate)) {
        array_push($latestContent,$list);
    }
}
?>
<?php foreach($latestContent as $value){ ?>
    <a href="<?php echo '/pages/'. $value["html"]; ?>" class="ly-homeNews_cnt">
        <h2><?php echo $value["title"];?></h2>
        <p class="ly-homeNews_lead"><?php echo $value["lead"];?></p>
    </a>
<?php } ?>

</div>

    <article class="ly-baseWrap">
        <a href="pages/diary.html">制作日記、メモ</a>
        <nav>
            <ul class="bl-categoryList">
                <?php foreach($pageLists as $list){ ?>
                <li class="bl-categoryList_cnt js-accordionTrigger">
                    <div class="bl-categoryList_index">
                       <div class="bl-categoryList_ttl"><h2><?php echo $list["title"]; ?></h2><span>(<?php echo count($list["pages"]) ?>)</span></div>
                       <?php /* <p class="bl-categoryList_txt"><?php echo $list["lead"]; ?></p> */ ?>
                    </div>
                </li>
                <li class="bl-categoryList_menu">
                    <ul  class="bl-categoryList_menuList">
                        <?php foreach($list["pages"] as $value){ ?>
                        <li>
                            <a href="<?php echo '/pages/'. $value["html"]; ?>" class="">
                                <div class=""><?php echo $value["title"]; ?></div>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </nav>  
                <!-- 
                
                    <li class="home__menu__cnt">
                    <a href="" class="home__menu__cnt__box">
                        <h2 class="home__menu__cnt__box__ttl">イラストとか4コマ漫画とか</h2>
                        <p class="home__menu__cnt__box__txt">個人の自由は権利で保障されていますが、社会や人間関係のルールの中でいつの間にやら窮屈に生きてしまうのがこの世界。絵を描くことは描きたいものも色も自由に選べれるし、この「自分で決める」という行為は当たり前のようで大事なことなんだと思う私。なにかしら人にコントロールされて疲れがちなひとは芸術活動とかどうでしょう。</p>
                    </a>
                </li>
                <li class="home__menu__cnt">
                    <a href="" class="home__menu__cnt__box">
                        <h2 class="home__menu__cnt__box__ttl">昔してた３Dで何かをしたい</h2>
                        <p class="home__menu__cnt__box__txt">あれは大学１期生の冬だったか、当時油絵を学んではいたのですが、将来の目標なりがはっきりせず「これは食べていけんパターンや」と焦った私は何か他に職（食）になりそうな楽しいことを探しており、偶然受けた３DCG制作の授業がバッチリハマって、とても真面目に技術を身につけようと努力したのでした。今は触る機会がないですが、何かWEBとかで利用できないかなあとこっそり思っているのでした。</p>
                    </a>
                </li>
                <li class="home__menu__cnt">
                    <a href="" class="home__menu__cnt__box">
                        <h2 class="home__menu__cnt__box__ttl">建築は創作知識の最大限の質が必要</h2>
                        <p class="home__menu__cnt__box__txt">ルールがあるものですが、それにしては人によって書き方はなかなか違ったりします。きっと構築するための哲学といっては大げさかもしれないですが、そんな風にコーディングした理由がなにかしらどのサイトにも存在しているのだと思います。私の（とりあえず今）思う居心地がいいと思うコーディングについて</p>
                    </a>
                </li>
                <li class="home__menu__cnt">
                    <a href="" class="home__menu__cnt__box">
                        <h2 class="home__menu__cnt__box__ttl">二胡</h2>
                        <p class="home__menu__cnt__box__txt">ルールがあるものですが、それにしては人によって書き方はなかなか違ったりします。きっと構築するための哲学といっては大げさかもしれないですが、そんな風にコーディングした理由がなにかしらどのサイトにも存在しているのだと思います。私の（とりあえず今）思う居心地がいいと思うコーディングについて</p>
                    </a>
                </li> -->
        <!-- <h2>よく起きる問題</h2>
    <p>CSSは管理が不十分だとカオスになりやすい。サイトの全体構成や運用、メンテナンスの考えが不十分だと、すぐカオスになります。それがわかった上で何が難しいかというと、サイト自体の内容や機能、大枠さえも予想を超えた変更がされていくものなので、未来が見える能力でもない限り「話が違う」ことが起こります。家で例えると、間仕切りをとったり、部屋をわけたりくらいまでは建てる前でも想像できますが、２階建を１０階建にしたり、大黒柱を切ったり、和風を洋風にしたり、建ぺい率や構造計算無視の素敵なアイデアがでてくると、なかなか大変な作業になるわけです。<br>
    また仕事では他のひとと共同作業をするわけで、初見でも理解しやすく、その時の気分で書き方が変わらないような状態が理想です。</p>
    <h2>スコープの限定でカオスをふせぐ</h2>
    <p>スコープの限定ができてないと既存のスタイルが編集できなくなります。cssでグローバルスコープにするのは簡単ですが、管理ができてないとスコープが不明確で既存のスタイルを修正できず、スタイルを追加しどんどんカオス化していきます。ひどい場合は同じクラスが複数書かれていたり、とりあえずその時をしのいだ感満載のコードをみて、人生の悲哀を現実の厳しさを感じ逆にカタルシスさえ覚えそうです。なのでスコープの限定をしましょう。</p>
    <h2>タグのmargin-bottomについて</h2>
    <p>hタグ、p、ulにセクションのスペースを任せるべきでない。hタグ、p、ulのmargin-bottomはあくまで並列のコンテンツ同士のスペースについてを目的とする</p>
    <p>セクションにクラスをつけ、内容ごとにみやすいようにスペースをつける、という目的で</p>
    <h2>cssファイルの構成</h2>
    <p>cssの構成と優先順位<br>
        user agent stylesheet ＜ reset ＜ common ＜ each page<br>
        基本こんなイメージです。リセット(ノーマライズ、サニタイズ)CSSはいろいろあるようですが、bootstrap-reboot.cssを参考にサイト用にカスタマイズしています。<br>
        bootstrap.cssはお世話になったときもありますが、結果そのままは使わないようになりました。
        最初に予想してない変更に対応できる変化に強いCSSを重要と考えているので、BEMでクラスのスコープを限定するやり方をよく使ってます。SMACCSも少しだけ</p>
    <h2>技法</h2>
    <p>smacss htmlとscssの階層を同じにしたBEMがとてもわかりやすい。最近はアジャイル方法で徐々に質を高めていく方法があるので、美しいより変更に強いコードのほうがいいんじゃないかなと思ってます。cssの階層がとにかくながったらしくなるわけですが、基本cssを確認することはないです。</p>
    <h2>body</h2>
    <p>font-feature-settings: "palt" 1;カーニング　読みやすいのかどうか判断が難しい</p>
    <h2>フォントサイズ</h2>
    <p>フォントサイズの単位はremを使う。htmlにfont-size:62.5% にすることで、をかけて、単位remで指定します。bodyだけはchrome対策に1.6emにします。バランスを考えたときつい小さい文字を使いがちになるのですが、可読性を重視するため、モバイルで1.4rem, PCで1.6rem以上を出来るだけ守りたいと思いつつ、よく悩んでいます。</p>  
    <h2>モバイルファーストについて</h2>
    <p>時代のながれでそうしないといけないで、モバイルから作るという方法をしています。</p>
    <h2>ejsついて</h2>
    <p>phpを使うため、テンプレの共有化などもphpでしてしまった方が記法などが統一できてわかりやすいため、ejs使用をやめた。ejsファイル内でphpの変数を利用しようとしてうまくいかなったりしたので。</p>
    <h2>class名を書くかどうか</h2>
    <h2>bootstrap</h2>
    <h2>高等言語下等言語</h2>
    <h2>全部にクラスをつけるかどうか</h2>
    <h2>本</h2>
    <h2>SVG</h2> -->
        <p class="ly-homeProfile">ウェブのフロントエンドエンジニアです。html, css, php, javascript,gulp、adobe XD, Illustrator, phptoshopなどを使います。作ること全般が好きで、イラストやレタッチ、動画、３Dデータ作成などを経験して、今は楽しくサイト作成をしています。</p>
        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a href="https://murashun.jp" <?php echo $targetBlank ?>>murashun.jp</a></cite>
            <cite class="ly-cite"><a href="https://www.ameamelog.com/category/web-design/css/" <?php echo $targetBlank ?>>ameamelogコーディング</a></cite>
            <cite class="ly-cite"><a href="http://honttoni.blog74.fc2.com/blog-entry-107.html?sp" <?php echo $targetBlank ?>>ほんっとにはじめてのHTML5とCSS3</a></cite>
            <cite class="ly-cite"><a href="https://www.w3.org/TR/html51/grouping-content.html#the-p-element" <?php echo $targetBlank ?>>w3.org p element</a></cite>
            <cite class="ly-cite"><a href="https://liginc.co.jp/" <?php echo $targetBlank ?>>lig</a></cite>
            <cite class="ly-cite"><a href="https://baigie.me/menu/" <?php echo $targetBlank ?>>baigie</a></cite>
        </section>
    </article>
</main>
<?php include("_partial/wrapper-foot.php"); ?>