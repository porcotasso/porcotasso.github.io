<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<?php $title = $contentsModel["title"] ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article>
        <header>
            <h1><?php echo $title ?></h1>
            <nav>
            <div>目次</div>
                <ol>
                    <li>コンテンツ・モデルとは</li>
                    <li>カテゴリーの種類</li>
                </ol>
            </nav>
        </header>
        <section>
            <h2>コンテンツ・モデル</h2>
            <p>「〇〇要素の中には、△△要素が配置できる」といった、各要素ごとに中に配置できる要素を定義した配置ルールの事です。HTML5では「要素内にどんな要素を置くか」が決められています。このルールをコンテンツ・モデル（Content models）といいます。</p>
            <p>段落を表すp要素のコンテンツ・モデルは「フレージング・コンテンツ」になります。つまり、p要素の中に入れるのは、フレージング・コンテンツというカテゴリーに属した要素のみということです。「コンテンツ・モデルは〜」というのはなかに「〜」を入れられるということ</p>
            <p>例：pタグはフレージング・コンテンツしか内包できない。</p>
            <p>例：divタグはフロー・コンテンツしか内包できない。</p>
            <p>例：spanタグはフレージング・コンテンツしか内包できない。</p>
            <p>コンテンツ・モデルが「空（Nothing）」とされているものは、その要素の中に何もコンテンツを入れられないというルール。</p>

            <cite><a href="https://yoshikawaweb.com/element/" <?php echo $targetBlank ?>>HTML5 入れ子チートシート</a></cite>
        </section>
        <section>
            <h2>カテゴリー</h2>
            <p>HTML5では、類似する特性を持った要素が以下の7つの「カテゴリー」に大別され、図のような包含関係にあります。それぞれの要素は、0個以上のカテゴリーに分類されます。つまり、どこのカテゴリーにも属していない要素や、複数のカテゴリーに属する要素も存在します。</p>
            <cite><a href="https://webgoto.net/html5/" <?php echo $targetBlank ?>>HTML5 コンテンツモデル ガイド</a></cite>
        </section>
        <section>
            <h2 id="id1">1.HTML5のコンテンツモデルの種類と説明</h2><p>HTML5は全部で7つのコンテンツの種類で定義されています。</p>
            <ul>
                <li>メタデータ</li>
                <li>フロー</li>
                <li>セクショニング</li>
                <li>ヘディング</li>
                <li>フレージング</li>
                <li>エンベディッド</li>
                <li>インタラクティブ</li>
            </ul>
            <h3>メタデータ・コンテンツ</h3>
            <p>ブラウザ上で表示される情報ではない、文章情報や現在のページや関連するページの付加情報などを定義する要素。基本的にはhead要素内に配置。</p>
            <p>head要素内で使用される要素</p>
            <p>&lt;base&gt; &lt;command&gt; &lt;link&gt; &lt;meta&gt; &lt;noscript&gt; &lt;script&gt; &lt;style&gt; &lt;title&gt;</p>
            
            <h3>フロー・コンテンツ</h3>
            <p>ブラウザ上に表示される一般的な要素。子孫にテキストなどを持つもの<br>
            body要素内で使用される要素のほとんど。セクショニング、ヘディング、フレージング、エンベディッド、インタラクティブを含む</p>
            
            <h3>セクショニング・コンテンツ</h3>
            <p>文章をセクションごとに区切る要素。見出しと概要を付けられるもの</p>
            <p>&lt;article&gt; &lt;aside&gt; &lt;nav&gt; &lt;section&gt;</p>
            
            <h3>ヘディング・コンテンツ</h3>
            <p>見出しを表す要素。セクショニング・コンテンツの中にある場合はそのセクションの見出し、そうでない場合は文書の見出し</p>
            <p>&lt;h1&gt; &lt;h2&gt; &lt;h3&gt; &lt;h4&gt; &lt;h5&gt; &lt;h6&gt;</p>
            
            <h3>フレージング・コンテンツ</h3>
            <p>段落やテキストの中で使われる文節・語句など。エンベディッドを含む</p>
            <p>&lt;abbr&gt; &lt;audio&gt; &lt;b&gt; &lt;bdo&gt; &lt;br&gt; &lt;button&gt; &lt;canvas&gt; &lt;cite&gt; &lt;code&gt; &lt;command&gt; &lt;datalist&gt; &lt;dfn&gt; &lt;em&gt; &lt;embed&gt; &lt;i&gt; &lt;iframe&gt; &lt;img&gt; &lt;input&gt; &lt;kbd&gt; &lt;keygen&gt; &lt;label&gt; &lt;mark&gt; &lt;math&gt; &lt;meter&gt; &lt;noscript&gt; &lt;object&gt; &lt;output&gt; &lt;progress&gt; &lt;q&gt; &lt;ruby&gt; &lt;samp&gt; &lt;script&gt; &lt;select&gt; &lt;small&gt; &lt;span&gt; &lt;strong&gt; &lt;sub&gt; &lt;sup&gt; &lt;svg&gt; &lt;textarea&gt; &lt;time&gt; &lt;var&gt; &lt;video&gt; &lt;wbr&gt;</p>
            
            <h3>エンベディッド・コンテンツ</h3>
            <p>メディア・ファイルや外部コンテンツを埋め込める要素</p>
            <p>&lt;audio&gt; &lt;canvas&gt; &lt;embed&gt; &lt;iframe&gt; &lt;img&gt; &lt;math&gt; &lt;object&gt; &lt;svg&gt; &lt;video&gt;</p>
            
            <h3>インタラクティブ・コンテンツ</h3>
            <p>ユーザーが操作可能な要素</p>
            <p>&lt;a&gt; &lt;button&gt; &lt;details&gt; &lt;embed&gt; &lt;iframe&gt; &lt;keygen&gt; &lt;label&gt; &lt;select&gt; &lt;textarea&gt;</p>

            <h3>パルパブル・コンテンツ（Palpable）</h3>
            <p>明瞭なコンテンツ aやbutton　コンテンツモデルがフローコンテンツ、もしくはフレージングコンテンツとなる要素は「パルパブルコンテンツ」となります。パルパブルコンテンツに分類される要素は、hidden属性が指定されていない内容を最低でも1つは持つ必要があります。</p>
            <h3>トランスペアレントコンテンツ　Transparent</h3>
            <p>親要素の属性を引き継ぐ</p>
            <p>ok: div -> a -> h1</p>
            <p>ng: p -> a -> h1</p>
            <p>aの親要素がpなのでpのコンテンツモデルを継承する。pは「フレージングコンテンツ」しか子要素にできないコンテンツモデルなので、このaはh1を内包できない</p>
            <p>a、audio、canvas、del、ins、map、noscript、video</p>
        </section> 

        <section>
            <h3>参考</h3>
            <cite><a href="http://honttoni.blog74.fc2.com/blog-entry-107.html?sp" <?php echo $targetBlank ?>>ほんっとにはじめてのHTML5とCSS3</a></cite>
            <cite><a href="https://www.w3.org/TR/html51/grouping-content.html#the-p-element" <?php echo $targetBlank ?>>w3.org p element</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
