<?php

$baseUrl = '/Users/porcokafuka/projects/porcotasso.github.io';

//html
$contentsModel = array(
	"file" => "/php/pages/contents-model.php",
	"tag" => array("html"),
	"title" => "コンテンツ・モデルというHTMLの基本ルールを理解する",
	"lead" => "HTML5では、このタグの中にはこのタグが配置できる、といった配置ルールが決められており、これをコンテンツ・モデル（Content models）といいます。",
	"html" => "contents-model.html"
);
$semanticTags = array(
	"file" => "/php/pages/semantic-tags.php",
	"tag" => array("html"),
	"title" => "セマンティックHTMLで適切なDOMを構築する",
	"lead" => "クローラーや読み上げソフトがタグから各コンテンツの役割がわかるように記述するコンテンツの意味に合ったタグを使ってマークアップすることをセマンティックHTMLと呼びます。",
	"html" => "semantic-tags.html"
);
$resetCss = array(
	"file" => "/php/pages/reset-css.php",
	"tag" => array("css"),
	"title" => "リセットCSS•ノーマライズCSSを適切に使う",
	"lead" => "リセットCSSとはその名の通りブラウザのデフォルトCSSを打ち消すファイルのこと。ブラウザ毎にデフォルトで違うCSSを持っていて、それがデザインに影響を与えるので、リセットCSSを使いレイアウトの崩れなどを防ぎます。リセットCSSはブラウザが持っているCSSを全て打ち消すので、新たにCSSを構築する作業が必要になるデメリットがあります。そこでブラウザが持っている利用できるCSSをできるだけ残しつつ、部分的にリセットする方法が主流になってきています。それがnormalize.cssです。各タグのスタイルをどうするかは、考え方やサイトの内容によります。できるだけなぜそうしたかを明確にしておくことで修正がしやすくなります。本サイトでは、boostrap-reboot.cssをベースにしてサイト用に加工したノーマライズCSSを構築しています。",
	"html" => "reset-css.html"
);
//css
$categorizedCSS = array(
	"file" => "/php/pages/categorized-css.php",
	"tag" => array("css"),
	"title" => "CSSを役割ごとにカテゴライズする",
	"lead" => "全てのCSSを目的ごとに分けることで、使い方を明確にするカテゴライズする。",
	"html" => "categorized-css.html"
);
$namingRule = array(
	"file" => "/php/pages/naming-rule.php",
	"tag" => array("css"),
	"title" => "命名ルール",
	"lead" => "クラス名からクラスの目的やスコープがわかるようにしておき、正確なコーディングに役立てる。",
	"html" => "naming-rule.html"
);
$basicLayoutStyle = array(
	"file" => "/php/pages/basic-layout-style.php",
	"tag" => array("css"),
	"title" => "reset.css以外のスタイルルール",
	"lead" => "レイアウトの基本ルールとして把握、作成しておいたほうがいいスタイルについて。",
	"html" => "basic-layout-style.html"
);
//parts
$button = array(
	"file" => "/php/pages/button.php",
	"tag" => array("parts"),
	"title" => "ボタン作成の種類",
	"lead" => "ボタンを作る際 &lt;a&gt;か&lt;button&gt;か&lt;input&gt;か迷わないように違いを理解する。",
	"html" => "button.html"
);
$breakWord = array(
	"file" => "/php/pages/break-word.php",
	"tag" => array("parts"),
	"title" => "break-word",
	"lead" => "文字、文章のルール",
	"html" => "break-word.html"
);
$elementEmStrongMarkB = array(
	"file" => "/php/pages/element-em-strong-mark-b-difference.php",
	"tag" => array("parts"),
	"title" => "em,strong,mark,b,dfn,iの違い",
	"lead" => "文字を目立たせるタグの違いが曖昧になりがちなので明確に使い分けたい。基本的にはセマンティックマークアップとして利用するのが目的で装飾を前提に使用しないこと。",
	"html" => "element-em-strong-mark-b-difference.html"
);
$favicon = array(
	"file" => "/php/pages/favicon.php",
	"tag" => array("parts"),
	"title" => "favicon",
	"lead" => "faviconはfavorite icon”の略語でウェブサイトのシンボルマーク・イメージとして、サイトに配置するアイコンの俗称です。閲覧中のタブなどに表示し潜在層にサイトを認知させる目的があります。",
	"html" => "favicon.html"
);
$hamburgerMenu = array(
	"file" => "/php/pages/hamburger-menu.php",
	"tag" => array("parts"),
	"title" => "ハンバーガーメニューの作り方",
	"lead" => "hamburger-menuを作る際に必要な要素がいくつかあるので、分解して説明します。",
	"html" => "hamburger-menu.html"
);
$headerSmaller = array(
	"file" => "/php/pages/header-smaller.php",
	"tag" => array("parts"),
	"title" => "スクロールでヘッダーのスタイルを変更する",
	"lead" => "画面をスクロールした時に高さを変えるjavascriptについての説明です。",
	"html" => "header-smaller.html"
);
//javascript memo
$javascriptMemo = array(
	"file" => "/php/pages/javascript-memo.php",
	"tag" => array("js"),
	"title" => "javascriptmemo",
	"lead" => "メモ",
	"html" => "javascript-memo.html"
);
//day-js
$dayJs = array(
	"file" => "/php/pages/day-js.php",
	"tag" => array("js"),
	"title" => "day-js",
	"lead" => "Day.jsは軽量（2KB）で多くのブラウザでサポートされているJavaScriptの日付操作ライブラリです。",
	"html" => "day-js.html"
);
//js-date
$jsDate = array(
	"file" => "/php/pages/js-date.php",
	"tag" => array("js"),
	"title" => "js-date",
	"lead" => "メモ",
	"html" => "js-date.html"
);
//js-scroll
$jsScroll = array(
	"file" => "/php/pages/js-scroll.php",
	"tag" => array("js"),
	"title" => "js-scroll",
	"lead" => "メモ",
	"html" => "js-scroll.html"
);
//js-scrollTop
$jsScrollTop = array(
	"file" => "/php/pages/js-scrolltop.php",
	"tag" => array("js", "parts"),
	"title" => "スクロールでトップに戻るボタン",
	"lead" => "スクロールでトップに戻るボタンを右下に追加します。最初は表示せず、下にスクロールすると徐々に表示するようにします。",
	"html" => "js-scrolltop.html"
);

$eventHandler = array(
	"file" => "/php/pages/event-handler.php",
	"tag" => array("js"),
	"title" => "イベントハンドラーの種類と使い方",
	"lead" => "イベントハンドラーの種類と使い方、addEventListenerの使い方についての説明です。",
	"html" => "event-handler.html"
);
$jsArrowFunction = array(
	"file" => "/php/pages/arrow-function.php",
	"tag" => array("js"),
	"title" => "アロー関数とは",
	"lead" => "アロー関数についての説明です。",
	"html" => "arrow-function.html"
);
$eventPropagation = array(
	"file" => "/php/pages/event-propagation.php",
	"tag" => array("js"),
	"title" => "イベント伝搬とは",
	"lead" => "イベントハンドラーが呼ばれる順番について",
	"html" => "event-propagation.html"
);
$scrollJunk = array(
	"file" => "/php/pages/scroll-junk.php",
	"tag" => array("js"),
	"title" => "スクロールジャンクとは",
	"lead" => "スクロールジャンクとその防ぎ方について",
	"html" => "scroll-junk.html"
);
$touchEvent = array(
	"file" => "/php/pages/touch-event.php",
	"tag" => array("js"),
	"title" => "touch-event",
	"lead" => "touch-event",
	"html" => "touch-event.html"
);
$jsMarker = array(
	"file" => "/php/pages/js-marker.php",
	"tag" => array("js"),
	"title" => "黄色いmarkerアニメーション",
	"lead" => "黄色いmarkerを引くアニメーションをjavascriptで作りました",
	"html" => "js-marker.html"
);
//js-nodelist
$jsNodelist = array(
	"file" => "/php/pages/js-nodelist.php",
	"tag" => array("js"),
	"title" => "nodelist",
	"lead" => "ノードリストにはliveとstaticがあります",
	"html" => "js-nodelist.html"
);
//js-swiper
$jsSwiper = array(
	"file" => "/php/pages/js-swiper.php",
	"tag" => array("js"),
	"title" => "カルーセルスライダー",
	"lead" => "ホームのカルーセルスライダーにupdateの新しい順にコンテンツを並べ、swiper.jsを使って動きを追加します。",
	"html" => "js-swiper.html"
);
//php
$phpMemo = array(
	"file" => "/php/pages/php-memo.php",
	"tag" => array("php"),
	"title" => "phpmemo",
	"lead" => "メモ",
	"html" => "php-memo.html"
);
$phpFilemtime = array(
	"file" => "/php/pages/php-filemtime.php",
	"tag" => array("php"),
	"title" => "filemtime",
	"lead" => "filemtime()でファイルの更新時間を取得できます。",
	"html" => "php-filemtime.html"
);
//environment
$environmentSummary = array(
	"file" => "/php/pages/environment-summary.php",
	"tag" => array("environment"),
	"title" => "制作環境設定全般",
	"lead" => "例えば一から環境を整える場合、何からすればいいかというメモ。",
	"html" => "environment-summary.html"
);
$gulpfile = array(
	"file" => "/php/pages/gulpfile.php",
	"tag" => array("environment"),
	"title" => "gulpfile",
	"lead" => "メモ",
	"html" => "gulpfile.html"
);
$gitFetch = array(
	"file" => "/php/pages/git-fetch.php",
	"tag" => array("environment", "git"),
	"title" => "git-fetch",
	"lead" => "リモートブランチをローカルにコピーしたいけどできない時のメモ。",
	"html" => "git-fetch.html"
);
$browserRenderingEngine = array(
	"file" => "/php/pages/browser-rendering-engine.php",
	"tag" => array("environment"),
	"title" => "browser-rendering-engine",
	"lead" => "ブラウザーのレンダリングエンジンとjavascriptエンジンとベンダープレフィックスについて",
	"html" => "browser-rendering-engine.html"
);
//svg
$svg = array(
	"file" => "/php/pages/svg.php",
	"tag" => array("svg"),
	"title" => "svgファイルの使い方",
	"lead" => "svgを活用する方法をまとめました。",
	"html" => "svg.html"
);
//shopify-memo
$shopifyMemo = array(
	"file" => "/php/pages/shopify-memo.php",
	"tag" => array("shopify"),
	"title" => "shopify-memo",
	"lead" => "shopify-memo",
	"html" => "shopify-memo.html"
);
//design
$design = array(
	"file" => "/php/pages/design.php",
	"tag" => array("design"),
	"title" => "design-memo",
	"lead" => "design-memo",
	"html" => "design.html"
);

// 1.新規ページを作ったら全てのページの配列に追加
$allPages = array(
	$contentsModel, $semanticTags, $resetCss, 
	$categorizedCSS, $namingRule, $basicLayoutStyle,
	$button, $breakWord, $elementEmStrongMarkB, $favicon, $hamburgerMenu, $headerSmaller,
	$javascriptMemo, $eventHandler,$jsArrowFunction, $eventPropagation, $scrollJunk, $touchEvent, $dayJs, $jsDate, $jsMarker, $jsNodelist, $jsScrollTop, $jsSwiper,
	$phpMemo,$phpFilemtime,
	$environmentSummary, $gulpfile, $gitFetch, $browserRenderingEngine,
	$svg, $design,
	$shopifyMemo
);

// 2.新規タグを作ったら空のタグの変数を作る。
$tagHtml = $tagCss = $tagParts = $tagJs = $tagPhp = $tagEnvironment = $tagSvg = $tagShopify = $tagWorksite = array();

// 3..新規タグを作ったらesleifを追加してタグが当てはまるページを2の配列に追加する
$count=count($allPages);
for($i = 0; $i < $count; $i++){
	$variable = $allPages[$i];
	if (in_array("html", $allPages[$i]["tag"])){
		array_push($tagHtml, $variable);
	} elseif (in_array("css", $allPages[$i]["tag"])){
		array_push($tagCss, $variable);
	} elseif (in_array("parts", $allPages[$i]["tag"])){
		array_push($tagParts, $variable);
	} elseif (in_array("js", $allPages[$i]["tag"])){
		array_push($tagJs, $variable);
	} elseif (in_array("php", $allPages[$i]["tag"])){
		array_push($tagPhp, $variable);
	} elseif (in_array("environment", $allPages[$i]["tag"])){
		array_push($tagEnvironment, $variable);
	} elseif (in_array("svg", $allPages[$i]["tag"])){
		array_push($tagSvg, $variable);
	} elseif (in_array("shopify", $allPages[$i]["tag"])){
		array_push($tagShopify, $variable);
	}
}
// 上のコードを効率化してみたけど、最後の$tagArray[$n]が各タグの変数として認識せず各タグにどのページが入っているかを追加できない
// $tagArray = array($tagHtml, $tagCss, $tagParts, $tagJs, $tagPhp, $tagEnvironment, $tagSvg);
// $tagWord = array("html", "css", "parts", "js", "php", "environment", "svg");
// for($i = 0; $i < count($allPages); $i++){
// 	for($n = 0; $n < count($tagWord); $n++){
// 		if (in_array($tagWord[$n], $allPages[$i]["tag"])){
// 			array_push($tagArray[$n], $allPages[$i]);
// 		}
// 	}
// }

$codeHtml = array(
	"title" => "html",
	"lead" => "",
	"pages" => $tagHtml
);
$codeCss = array(
	"title" => "css",
	"lead" => "cssについての説明",
	"pages" => $tagCss
);
$codeParts = array(
	"title" => "パーツ",
	"lead" => "明確なルールがないが実際にやってみると定義が必要になってくるもののメモ",
	"pages" => $tagParts
);
$codeJs = array(
	"title" => "javascript",
	"lead" => "javascriptメモ",
	"pages" => $tagJs
);
$codePhp = array(
	"title" => "php",
	"lead" => "phpメモ",
	"pages" => $tagPhp
);
$codeEnv = array(
	"title" => "作業効率を高める環境設定",
	"lead" => "gulpfile.js package.json、ローカルサーバnginx バーチャルホスト,scss",
	"pages" => $tagEnvironment
);
$codeSvg = array(
	"title" => "svg",
	"lead" => "svg",
	"pages" => $tagSvg
);
$shopify = array(
	"title" => "shopify",
	"lead" => "",
	"pages" => $tagShopify
);
$workSite = array(
	"title" => "現実的な問題点",
	"lead" => "ルールを完璧に満たしたコーディングが理想だけど、現実的にはいろんな問題が起きるのでメモと考察",
	"pages" => $tagWorksite
);

$pageLists = array($codeHtml, $codeCss, $codeParts, $codeJs, $codePhp, $codeEnv, $codeSvg, $shopify, $workSite);

$targetBlank = 'target="_blank" rel="noopener noreferrer"';
?>