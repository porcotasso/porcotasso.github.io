<?php include("../_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace browserRenderingEngine"> 
    <article class="articleCnt">
        <header>
            <?php include("../_partial/pages-title.php"); ?>
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("グラフ"); ?>
                <ol>
                    <?php for($i = 0; $i < count($navList); $i++){ ?>
                    <li>
                        <a href="#<?php echo $i; ?>" class="">
                            <div class=""><?php echo $navList[$i]; ?></div>
                        </a>
                    </li>
                    <?php } ?>
                </ol>
            </nav>
        </header>
        <section class="ly-section" id="0">
		<h2><?php echo $navList[0]; ?></h2>
			<table class="browserTable">
				<tr>
					<th>ブラウザ</th>
					<th>ベース</th>
					<th>rendering engine</th>
					<th>javascript engine</th>
					<th>bender prefix</th>
				</tr>
				<tr>
					<td>chrome</td>
					<td rowspan="3">Chromium<br>(open source)</td>
					<td rowspan="3">Blink<br>←webkit<br>←KHTML</td>
					<td rowspan="3">V8 JavaScript engine</td>
					<td rowspan="3">-webkit</td>
				</tr>
				<tr>
					<td>Opera</td>
				</tr>
				<tr>
					<td>Edge</td>
				</tr>
				<tr>
					<td>Safari</td>
					<td rowspan="2">独自</td>
					<td>webkit<br>←KHTML</td>
					<td>JavaScript Cove</td>
					<td>-webkit</td>
				</tr>
				<tr>
					<td>FireFox<br>(open source)</td>
					<td>Servo Gecko</td>
					<td>Spider Monkey</td>
					<td>-moz</td>
				</tr>
			</table>
			<dl>
				<dt>Chromium</dt>
				<dd>Google開発のオープンソースWebブラウザ</dd>
			</dl>
			<dl>
				<dt>iOSのレンダリングエンジン</dt>
				<dd>全てのブラウザで強制的にWebkitが使われる。ChromeのBlinkも、FireFoxのServo Geckoも使われない。</dd>
			</dl>
        </section>
    </article>
</main>
<?php include("../_partial/wrapper-foot.php"); ?>
