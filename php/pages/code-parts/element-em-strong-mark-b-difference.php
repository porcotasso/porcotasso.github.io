<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<?php $title = $elementEmStrongMarkB["title"] ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article>
        <header>
            <h1><?php echo $title ?></h1>
            <p>「em要素」「strong要素」「mark要素」「b要素」の違いが理解して明確に使い分けよう。<br>基本的にはセマンティックマークアップとして利用するのが目的で装飾を前提に使用しない。</p>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <ol>
                    <li>em要素</li>
                    <li>strong要素</li>
                    <li>mark要素</li>
                    <li>b要素</li>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
            <h2>em要素</h2>
            <p>文にアクセントを置くことによって意味を変えるために使います。</p>
        </section>
        <section class="ly-section">
            <h2>strong要素</h2>
            <p>strong要素は、強い重要性、深刻性、緊急性を表し大事な部分を強調するときに使います。前述のem要素は、文の意味が変更されるのに対して、strong要素は、文の意味が変更されません。</p>
            <p>strongタグは、用途が似てるHTML「emタグ」「bタグ」より強い重要性を示します。strongタグは、HTML4.01からHTML5に移行で廃止されるとの言及もありましたが、そのまま使われ「意味の変わるHTMLタグ」として紹介されてます。特定のキーワードだけstrongタグを乱用するといった不適切な使用を繰り返せば、ペナルティのリスクを高める原因にもなりかねません。装飾する場合、strongタグをspanタグで囲う。strongタグとHTML「h1タグ」は、なるべく併用しないことをおすすめします。strongタグのSEO効果は、ほぼ期待できないでしょう。 </p>
        </section>
        <section class="ly-section">
            <h2>mark要素</h2>
            <p>他の文に対して本文の重要性などとは関係なく「ここ大事だよ」とか「ここを見て」とかを指し示すものです。検索結果をハイライトしたいときにも使えます。</p>
        </section>
        <section class="ly-section">
            <h2>b要素</h2>
            <p>em要素やstrong要素などに適さなかったときに使うようなものです。目立たせたいけど、em要素でもstrong要素でもmark要素でも（さらにはi要素でも）ないなと思ったときに使うとよいでしょう。</p><p>見栄えを定義する要素として、HTML4.01 では「非推奨(deprecated)」とされましたが、HTML5 では「特に付加的な重要性を与えるわけでも、異なるトーンや雰囲気を表現するわけでもないが、実利的な理由から注意を引きつける箇所」を示す要素として、非推奨が解除されました。b は「太字」ではない</p>
<p>
    ただし、見出しであれば h1～h6、強調であれば em、重要項目であれば strong で表現するなどbは最後の手段とすべきと定められています。
    単に太字にする目的であれば、CSS の font-weight を使用してください。
</p>
        </section>

        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a href="https://yoshikawaweb.com/element-em-strong-mark-b-difference.html" <?php echo $targetBlank ?>>em・strong・mark・b要素の違いを本気出して調べてみた</a></cite>
            <cite class="ly-cite"><a href="https://seolaboratory.jp/52093/#:~:text=strong%E3%82%BF%E3%82%B0%E3%81%A8%E3%81%AF%E3%80%81%20%E3%83%86%E3%82%AD%E3%82%B9%E3%83%88,%E9%87%8D%E8%A6%81%E6%80%A7%E3%82%92%E7%A4%BA%E3%81%97%E3%81%BE%E3%81%99%E3%80%82" <?php echo $targetBlank ?>>seoラボ</a></cite>
            
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
