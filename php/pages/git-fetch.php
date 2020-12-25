<?php include("../_partial/wrapper-head.php"); ?>
<main> 
    <article class="articleCnt">
        <?php $navList = array("リモートブランチのコピー", "できない場合の原因"); ?>
        <?php include("../_partial/pages-title.php"); ?>
            
                
            
        <section class="ly-section tocContent">
            <h2><?php echo $navList[0]; ?></h2>

			<h3>html、php</h3>
			<p>リモートブランチのコピーをしたい場合の書き方。</p>
<pre class="prettyprint">
git checkout -b branch-name origin/branch-name	
</pre>
		</section>
        <section class="ly-section tocContent">
            <h2><?php echo $navList[1]; ?></h2>
            <p>上の書き方でエラーが出ることがある。何が問題かとういうと、ローカルにリモートにどんなブランチがあるかの情報が古くて、データが欲しいブランチをローカルが認識できてない。それを解決するのが</p>
<pre class="prettyprint">
git fetch
</pre>
			<p>これをした後なら、最初の書き方でデータがひっぱってこれる。あくまでリストのデータなので、中身はコピーされない。</p>
            </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php") ?>