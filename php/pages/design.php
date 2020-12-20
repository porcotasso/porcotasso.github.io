<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-main"> 
    <article class="articleCnt">
		<?php $navList = array("レイアウトの基本の４つのルール", "反転"); ?>
        <?php include("../_partial/pages-title.php"); ?>
            
                
            
        <section class="ly-section tocContent">
			<h2><?php echo $navList[0]; ?></h2>
			<h3>Proximity（近接）</h3>
            <p>位置が近いもの同時はなんらか関係性があると認識する。</p>
			<h3>Alignment（整列）</h3>
            <p>端が揃っているものは同一グループと認識する</p>
			<h3>Contrast（強弱）</h3>
            <p>強弱の差があるものは強い方が優位性が高いと感じる</p>
			<h3>Repitition（反復）</h3>
            <p>一定のルールに沿って繰り返されたものは、同じことについて表現していると感じる</p>
        </section>
        <section class="ly-section tocContent">
			<h2><?php echo $navList[1]; ?></h2>
			<h3>基本的な概念</h3>
			<p>背景が暗く文字が明るいデザインは</p>
			<ul>
				<li>人間の目は白地に濃い色をみるようにできているので目が疲れやすい</li>
				<li>読みにくい。文字の視認性が低くなる。</li>
				<li>目立つので、アクセントとして利用をする。</li>
			</ul>
        </section>


    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
