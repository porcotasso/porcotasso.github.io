<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav>
                <div>目次</div>
                <ol>
                    <li>Pタグ</li>
                    <li>リストタグ</li>
                </ol>
            </nav>
        </header>
        <section class="ly-section">
            <h2>Pタグ</h2>
            <p>pタグは「Paragraph」の略です。長いひとかたまりの文章だけでなく、テキストを使ういろいろな場所で使われるので、用途ごとに対応できるスタイルの指定が必要になります。<br>このサイトでの考え方では、複数行にわたる文章にpタグを使用して、長文が読みやすいスタイルを指定するのを優先します。具体的にはline-heightを1.8~2 letter-space0.05em など通常よりスペースを開けています。フォントサイズは長文が読みやすいサイズを目的とします。mobileで14px、PCで16pxあたりを基本に考えています。</p><p>ラベルなどで使う際には余計なスタイルをリセットして使用します。</p>
        </section>
        <section class="ly-section">
            <h2>aタグ</h2>
<pre class="prettyprint">
a{
    outline: 0;
    cursor: pointer;
    text-decoration:none;
    color: #222;
}
</pre>
        </section>
        <section class="ly-section">
            <h2>リストタグ</h2>
            <p>文章中のリストだけでなく、メニュー、パンくずリストなどでも使われるので、list-styleの設定をnoneにするかどうか、サイトの内容によって変えます。</p>
        </section>
        <section class="ly-section">
            <h2>モバイルの左右幅。ガターについて</h2>
            <p>機種によってモバイルの幅が違い、狭いものと広いものの差は、かなり大きいので、端の幅はピクセル固定せずに425px 20px 320px 16pxのように比率で変えたほうが見やすいと考えています。</p>
        </section>
        <section class="ly-section">
            <h2>preタグとcodeタグ</h2>
            <h3>pre</h3>
            <p>Preformatted Text（整形済テキスト）という意味で、入力したソースのまま表示することができます。不要な空欄、タブもそのまま表示されるので使用できません。特殊文字は表示できないので、記号を使ってエスケープする必要があります。</p>
            <cite class="ly-cite"><a href="https://webtools.dounokouno.com/htmlescape/" <?php echo $targetBlank ?>>Web制作小物ツール</a></cite>
            <h3>code</h3>
            <p>Computer Codeの略。codeタグで囲んだ文字列がソースコードであることを示します。等幅フォントで表示される。改行やインデントなどはcodeでは反映されない（サイトによってはされると書いてあるようですが）。</p>
        </section>
        <section>
            <h2>timeタグ</h2>
            <p>timeタグはコンピュータやブラウザが日付や時刻を理解できるようにするのを目的に、グレゴリオ暦による時刻で正確に示す際に使用します。日時を記述するのに必ずtimeタグを使用しなくてはならないわけではないです。datetime属性は日付や時刻を指定します。datetime属性を省略する場合には、timeタグの中に記述します。</p>
        </section>
        <section>
            <h2>blockquote・q・citeタグ</h2>
            <cite class="ly-cite"><a href="https://nandemo-nobiru.com/2159/" <?php echo $targetBlank ?>>なんでものびるWEB</a></cite>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
