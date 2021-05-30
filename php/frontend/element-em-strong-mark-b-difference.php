<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("emタグ", "strongタグ", "markタグ", "bタグ", "dfnタグ", "iタグ"); ?>
         <?php include("../_partial/pages-title.php"); ?>
            
                

        <section class="ly-section tocContent">
            <h2>emタグ</h2>
            <p>文脈的に強調する部分によって文の意味が変更される場合に使います。</p>
        </section>
        <section class="ly-section tocContent">
            <h2>strongタグ</h2>
            <p>strongタグは、<span class="el-marker">強い重要性、深刻性、緊急性</span>を表し大事な部分を強調するときに使います。前述のemタグは、文の意味が変更されるのに対して、strongタグは、文の意味が変更されません。emタグ、bタグより強い重要性を示します。HTML4.01からHTML5に移行で廃止されると言及もありましたが、そのまま使われています。特定のキーワードだけstrongタグを乱用するといった不適切な使用を繰り返せば、ペナルティのリスクを高める原因にもなりかねません。</p>
        </section>
        <section class="ly-section tocContent">
            <h2>markタグ</h2>
            <p><span class="el-marker">重要性とは関係なく注目</span>させたい場合に使用します。検索結果をハイライトしたいときにも使えます。</p>
        </section>
        <section class="ly-section tocContent">
            <h2>bタグ</h2>
            <p>目立たせたいけど、emタグ、strongタグ、markタグ、iタグではないと思ったときに<span class="el-marker">最後の手段</span>で使用します。見栄えを定義するタグとして、HTML4.01 では「非推奨(deprecated)」とされましたが、HTML5 では「特に付加的な重要性を与えるわけでも、異なるトーンや雰囲気を表現するわけでもないが、実利的な理由から注意を引きつける箇所」を示すタグとして、非推奨が解除されており、b は「太字」と理解するのは間違いのようです。単に太字にしたいのならfont-weightを使用すべきだそう。</p>
        </section>
        <section class="ly-section tocContent">
            <h2>dfnタグ</h2>
            <p>definitionの略で、<span class="el-marker">用語の意味を定義</span>する際に使用します。定義用語が何度も出る場合には最初の用語だけdfnタグで囲むのが一般的ですがあまり使用されていません。</p>
        </section>
        <section class="ly-section tocContent">
            <h2>iタグ</h2>
            <p>iタグを使用すると文字が斜めに表現されますが、<span class="el-marker">イタリック体、斜体、標準フォントを強引に傾斜</span>の３つパターンがあります。指定フォントにイタリック体があればイタリック体、ない場合は斜体、イタリック体も斜体もなければ標準フォントを斜めにして表示されます。日本語フォントの多くは標準フォントを斜めに傾けた表示になります。iタグ使用は非推奨ではないですができるだけスタイルシート<code>{font-style:italic;}</code>で指定しましょう。
            </p>
        </section>
        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://yoshikawaweb.com/element-em-strong-mark-b-difference.html" <?php echo $targetBlank ?>>吉川ウェブ</a></cite>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://html-coding.co.jp/annex/dictionary/html/i/" <?php echo $targetBlank ?>>クロノドライブのHTML辞典</a></cite>
            <cite class="ly-cite"><a class="ly-cite_link" href="https://seolaboratory.jp/52093/#:~:text=strong%E3%82%BF%E3%82%B0%E3%81%A8%E3%81%AF%E3%80%81%20%E3%83%86%E3%82%AD%E3%82%B9%E3%83%88,%E9%87%8D%E8%A6%81%E6%80%A7%E3%82%92%E7%A4%BA%E3%81%97%E3%81%BE%E3%81%99%E3%80%82" <?php echo $targetBlank ?>>seoラボ</a></cite>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
