<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
            <p><?php echo $lead ?></p>
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
            <p>pタグは「Paragraph」の略です。文章のひとかたまりだけでなく、テキストを使う用途でいろんな使われ方をするので、スタイルの指定が難しいです。ただ、個人的には、複数行にわたる文章を基本として設定するのがいいと思うので、長文が読みやすいスタイルを指定します。具体的にはline-heightを1.8~2 letter-space0.05em など通常よりスペースを開けています。フォントサイズは大きければいいというものでないので、mobileで1.4rem、PCで1.6remあたりを基本に考えています。</p>
        </section>
        <section class="ly-section">
            <h2>aタグ</h2>
<pre>
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
            <h2>モバイルの左右幅。ガターについて</h2>
            <p>機種によってモバイルの幅が違い、狭いものと広いものの差は、かなり大きいので、端の幅はピクセル固定せずに425px 20px 320px 16pxのように比率で変えたほうが見やすいと考えています。</p>
        </section>
        <section class="ly-section">
            <h3>参考</h3>
            <cite class="ly-cite"><a href="https://wunderstand.net/1417/" <?php echo $targetBlank ?>>html5のarticle・section等、まとめる要素まとめ</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
