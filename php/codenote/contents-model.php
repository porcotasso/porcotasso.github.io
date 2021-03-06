<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
      <?php $navList = array("コンテンツ・モデルとは", "７つのカテゴリー", "７つのカテゴリーに分類されない３つのルール"); ?>
      <?php include("../_partial/pages-title.php"); ?>
        
        
      <section class="ly-section tocContent">
          <h2><?php echo $navList[0]; ?></h2>
          <p>例えば段落を表すpタグのコンテンツ・モデルは「フレージング・コンテンツ」になります。これは、pタグの中に入れるのは、フレージング・コンテンツというカテゴリーに属したタグのみということを表します。</p>
          <p>コンテンツ・モデルが”Nothing”とされているものは、そのタグの中に何もコンテンツを入れられないというルールです。</p>
          <p>例：divタグはフロー・コンテンツしか内包できない。</p>
          <p>例：spanタグはフレージング・コンテンツしか内包できない。</p>
          <h3>よくある間違い</h3>
          <p>例：pタグは子要素にフレージングコンテンツしか含むことができませんので、divタグなどフレージングコンテンツではないものを入れてはいけない。</p>
          <p>例：aタグの子孫要素にbuttonタグなどインタラクティブコンテンツを含むことはできない。</p>
          <cite class="ly-cite"><a class="ly-cite_link" href="https://yoshikawaweb.com/element/" <?php echo $targetBlank ?>>HTML5 入れ子チートシート</a></cite>
          <cite class="ly-cite"><a class="ly-cite_link" href="https://s8a.jp/10-minutes-html-part-2" <?php echo $targetBlank ?>>10分でわかるHTMLの最小限（後編）</a></cite>
      </section>
      <section class="ly-section tocContent">
          <h2><?php echo $navList[1]; ?></h2>
          <p>HTML5では類似する特性を持ったタグが7つの「カテゴリー」に分類されます。タグによってはどこのカテゴリーにも属していないものや、複数のカテゴリーに属するタグも存在します。</p>
          <cite class="ly-cite"><a class="ly-cite_link" href="https://webgoto.net/html5/" <?php echo $targetBlank ?>>HTML5 コンテンツモデル ガイド</a></cite>
          <ul>
              <li>メタデータ・コンテンツ</li>
              <li>フロー・コンテンツ</li>
              <li>セクショニング・コンテンツ</li>
              <li>ヘディング・コンテンツ</li>
              <li>フレージング・コンテンツ</li>
              <li>エンベディッド・コンテンツ</li>
              <li>インタラクティブ・コンテンツ</li>
          </ul>
          <h3>メタデータ・コンテンツ</h3>
          <p>ブラウザ上では表示されず、文章情報や現在のページや関連するページの付加情報などを定義するタグ。基本的にはheadタグ内に配置されます。</p>
          <p>&lt;base&gt; &lt;command&gt; &lt;link&gt; &lt;meta&gt; &lt;noscript&gt; &lt;script&gt; &lt;style&gt; &lt;title&gt;</p>
          
          <h3>フロー・コンテンツ</h3>
          <p>ブラウザ上に表示される一般的なタグで子孫にテキストなどを持つもの。<br>
          bodyタグ内で使用されるタグのほとんどがこれに当てはまります。セクショニング、ヘディング、フレージング、エンベディッド、インタラクティブ・コンテンツを含みます。</p>
          
          <h3>セクショニング・コンテンツ</h3>
          <p>文章をセクションごとに区切るタグです。見出しと概要を付けられるものになります。</p>
          <p>&lt;article&gt; &lt;aside&gt; &lt;nav&gt; &lt;section&gt;</p>
          
          <h3>ヘディング・コンテンツ</h3>
          <p>見出しを表すタグです。セクショニング・コンテンツの中にある場合はそのセクションの見出し、そうでない場合は文章の見出しの役割があります。</p>
          <p>&lt;h1&gt; &lt;h2&gt; &lt;h3&gt; &lt;h4&gt; &lt;h5&gt; &lt;h6&gt;</p>
          
          <h3>フレージング・コンテンツ</h3>
          <p>段落やテキストの中で使われる文節・語句などのタグです。エンベディッド・コンテンツを含みます。</p>
          <p>&lt;abbr&gt; &lt;audio&gt; &lt;b&gt; &lt;bdo&gt; &lt;br&gt; &lt;button&gt; &lt;canvas&gt; &lt;cite&gt; &lt;code&gt; &lt;command&gt; &lt;datalist&gt; &lt;dfn&gt; &lt;em&gt; &lt;embed&gt; &lt;i&gt; &lt;iframe&gt; &lt;img&gt; &lt;input&gt; &lt;kbd&gt; &lt;keygen&gt; &lt;label&gt; &lt;mark&gt; &lt;math&gt; &lt;meter&gt; &lt;noscript&gt; &lt;object&gt; &lt;output&gt; &lt;progress&gt; &lt;q&gt; &lt;ruby&gt; &lt;samp&gt; &lt;script&gt; &lt;select&gt; &lt;small&gt; &lt;span&gt; &lt;strong&gt; &lt;sub&gt; &lt;sup&gt; &lt;svg&gt; &lt;textarea&gt; &lt;time&gt; &lt;var&gt; &lt;video&gt; &lt;wbr&gt;</p>
          
          <h3>エンベディッド・コンテンツ</h3>
          <p>メディア・ファイルや外部コンテンツを埋め込めるタグです。</p>
          <p>&lt;audio&gt; &lt;canvas&gt; &lt;embed&gt; &lt;iframe&gt; &lt;img&gt; &lt;math&gt; &lt;object&gt; &lt;svg&gt; &lt;video&gt;</p>
          
          <h3>インタラクティブ・コンテンツ</h3>
          <p>ユーザーが操作可能なタグです。</p>
          <p>&lt;a&gt; &lt;button&gt; &lt;details&gt; &lt;embed&gt; &lt;iframe&gt; &lt;keygen&gt; &lt;label&gt; &lt;select&gt; &lt;textarea&gt;</p>
      </section>
      <section class="ly-section tocContent">
          <h2><?php echo $navList[2]; ?></h2>
          <ul>
              <li>トランスペアレント・コンテンツ</li>
              <li>パルパブル・コンテンツ</li>
              <li>セクショニング・ルート</li>
          </ul>

          <h3>トランスペアレント・コンテンツ</h3>
          <p>親タグのコンテンツモデルを引き継ぐタグです。</p>
          <p>OKな例</p>
<pre class="prettyprint">
<div>
  <a>
      <h1>
      </h1>
  </a>
</div>
</pre>
          <p>aの親タグがdivなのでdivのコンテンツモデルを継承する。 divは「フロー・コンテンツ」を子タグにできるコンテンツモデルなので、このaはh1を内包できます。</pre>
          <p>NGの例</p>
<code class="displayCode">
&lt;p&gt;<br>
&nbsp;&nbsp;&lt;a&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/h1&gt;<br>
&nbsp;&nbsp;&lt;/a&gt;<br>
&lt;/p&gt;
</code>
          <p>aの親タグがpなのでpのコンテンツモデルを継承する。pは「フレージングコンテンツ」しか子タグにできないコンテンツモデルなので、このaはh1（ヘディング・コンテンツ）を内包できないので記述が間違っている。</p>
          <p>&lt;a&gt;&lt;audio&gt;&lt;canvas&gt;&lt;del&gt;&lt;ins&gt;&lt;map&gt;&lt;noscript&gt;&lt;video&gt;</p>

          <h3>パルパブル・コンテンツ</h3>
          <p>明瞭なコンテンツ、を意味します。hidden属性が指定されていない内容を最低でも1つは持つタグのことをいいます。コンテンツモデルがフロー・コンテンツ、もしくはフレージング・コンテンツとなるタグはパルパブル・コンテンツとなります。しかし、場合によっては内容が空であっても問題ないとされおり、そこまで厳密ではありません。</p>
          <h3>セクショニング・ルート</h3>
          <p>セクションのルートとして扱われるタグのことで独自のアウトライン（階層構造）を持つことができるため、内包されるタグは、文書全体への影響を与えません。</p>
          <p>&lt;blockquote&gt;&lt;body&gt;&lt;details&gt;&lt;dialog&gt;&lt;fieldset&gt;&lt;figure&gt;&lt;td&gt;</p>
      </section> 

      <section class="ly-section">
          <h3>参考</h3>
          <cite class="ly-cite"><a class="ly-cite_link" href="http://honttoni.blog74.fc2.com/blog-entry-107.html?sp" <?php echo $targetBlank ?>>ほんっとにはじめてのHTML5とCSS3</a></cite>
          <cite class="ly-cite"><a class="ly-cite_link" href="https://www.w3.org/TR/html51/grouping-content.html#the-p-element" <?php echo $targetBlank ?>>w3.org p element</a></cite>
      </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>