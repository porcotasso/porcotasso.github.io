<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/variable.php"); ?>
<?php $title = $coding ?>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace">
    <article>
        <h1><?php echo $title ?></h1>
        <nav>
            <ul class="bl-contentsList">
                <li class="bl-contentsList__cnt">
                    <a href="/coding/categorized-css.html" class="bl-contentsList__link">
                        <h2 class=""><?php echo $categorizedCSS ?></h2>
                        <p class="">CSSを役割ごとにカテゴライズする。何を目的としたクラスかわかるように分ける。</p>
                    </a>
                </li>
                <li class="bl-contentsList__cnt">
                    <a href="/coding/semantic-tags.html" class="bl-contentsList__link">
                        <h2 class=""><?php echo $semanticTags ?></h2>
                        <p class="">クローラーや読み上げソフトが、タグから各コンテンツの役割がわかるように。</p>
                    </a>
                </li>
                <li class="bl-contentsList__cnt">
                    <a href="/coding/about-tags.html" class="bl-contentsList__link">
                        <h2 class=""><?php echo $aboutTags ?></h2>
                        <p class="">各タグのスタイルをどうするかは、考え方やサイトのないようによりますが、できるだけなぜそうしたかを明確にしておくことで修正がしやすくなるのでメモ。</p>
                    </a>
                </li>
                <li class="bl-contentsList__cnt">
                    <a href="/coding/naming-rule.html" class="bl-contentsList__link">
                        <h2 class=""><?php echo $namingRule ?></h2>
                        <p class="">クラスの名前でスコープや役割が判断できるのが理想なので、</p>
                    </a>
                </li>
            </ul>
        </nav>
    </article>




    <h2>よく起きる問題</h2>
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
    <h2>SVG</h2>

</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
