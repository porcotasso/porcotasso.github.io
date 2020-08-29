<?php
// /code-html
// /code-css
// /code-parts

// /code-html
$contentsModel = array(
	"file" => "/php/pages/code-html/contents-model.php",
	"title" => "コンテンツ・モデル",
	"lead" => "HTML5では、このタグの中にはこのタグが配置できる、といった配置ルールが決められており、これをコンテンツ・モデル（Content models）といいます。",
	"html" => "/code-html/contents-model.html"
);
$semanticTags = array(
	"file" => "/php/pages/code-html/semantic-tags.php",
	"title" => "セマンティックhtml",
	"lead" => "クローラーや読み上げソフトがタグから各コンテンツの役割がわかるように記述するコンテンツの意味に合ったタグを使ってマークアップすることをセマンティックHTMLと呼びます。",
	"html" => "/code-html/semantic-tags.html"
);
$aboutTags = array(
	"file" => "/php/pages/code-html/about-tags.php",
	"title" => "各タグ要素について",
	"lead" => "各タグのスタイルをどうするかは、考え方やサイトのないようによりますが、できるだけなぜそうしたかを明確にしておくことで修正がしやすくなるのでメモ。",
	"html" => "/code-html/about-tags.html"
);
$codeHtml = array(
	"title" => "html",
	"lead" => "",
	"html" => "/code-html/index.html",
	"pages" => array($contentsModel, $semanticTags, $aboutTags)
);

// /code-css
$categorizedCSS = array(
	"file" => "/php/pages/code-css/categorized-css.php",
	"title" => "CSSを役割ごとにカテゴライズする",
	"lead" => "全てのCSSを目的ごとに分けることで、使い方を明確にするカテゴライズする。",
	"html" => "/code-css/categorized-css.html"
);
$namingRule = array(
	"file" => "/php/pages/code-css/naming-rule.php",
	"title" => "命名ルール",
	"lead" => "クラス名からクラスの目的やスコープがわかるようにしておき、正確なコーディングに役立てる。",
	"html" => "/code-css/naming-rule.html"
);
$codeCss = array(
	"file" => "/php/pages/code-html/contents-model.php",
	"title" => "css",
	"lead" => "cssについての説明",
	"html" => "/code-css/index.html",
	"pages" => array($categorizedCSS, $namingRule)
);

// /code-parts
$button = array(
	"file" => "/php/pages/code-parts/button.php",
	"title" => "ボタン作成",
	"lead" => "ボタンを作る際 &lt;a&gt;か&lt;button&gt;か&lt;input&gt;か迷わないように違いを理解する。",
	"html" => "/code-parts/button.html"
);
$breakWord = array(
	"file" => "/php/pages/code-parts/break-word.php",
	"title" => "break-word",
	"lead" => "break-word",
	"html" => "/code-parts/break-word.html"
);
$elementEmStrongMarkB = array(
	"file" => "/php/pages/code-parts/element-em-strong-mark-b-difference.php",
	"title" => "em,strong,mark,b,dfn,iの違い",
	"lead" => "文字を目立たせるタグの違いが曖昧になりがちなので明確に使い分けたい。基本的にはセマンティックマークアップとして利用するのが目的で装飾を前提に使用しないこと。",
	"html" => "/code-parts/element-em-strong-mark-b-difference.html"
);
$favicon = array(
	"file" => "/php/pages/code-parts/favicon.php",
	"title" => "favicon",
	"lead" => "faviconはfavorite icon”の略語でウェブサイトのシンボルマーク・イメージとして、サイトに配置するアイコンの俗称です。閲覧中のタブなどに表示し潜在層にサイトを認知させる目的があります。",
	"html" => "/code-parts/favicon.html"
);
$hamburgerMenu = array(
	"file" => "/php/pages/code-parts/hamburger-menu.php",
	"title" => "hamburger-menu",
	"lead" => "hamburger-menuを作る際に必要な要素がいくつかあるので、分解して説明します。",
	"html" => "/code-parts/hamburger-menu.html"
);
$headerSmaller = array(
	"file" => "/php/pages/code-parts/header-smaller.php",
	"title" => "header-smaller",
	"lead" => "画面をスクロールした時に高さを変えるjavascriptについての説明です。",
	"html" => "/code-parts/header-smaller.html"
);
$codeParts = array(
	"title" => "パーツ",
	"lead" => "明確なルールがないが実際にやってみると定義が必要になってくるもののメモ",
	"pages" => array($button, $breakWord, $elementEmStrongMarkB, $favicon, $hamburgerMenu, $headerSmaller)
);

// /javascript memo
$javascriptMemo = array(
	"file" => "/php/pages/code-js/javascript-memo.php",
	"title" => "javascriptmemo",
	"lead" => "メモ",
	"html" => "/code-js/javascript-memo.html"
);
$eventHandler = array(
	"file" => "/php/pages/code-js/event-handler.php",
	"title" => "event-handler",
	"lead" => "event、event-handler、addEventListenerについての説明です。",
	"html" => "/code-js/event-handler.html"
);
$codeJs = array(
	"title" => "javascript",
	"lead" => "javascriptメモ",
	"pages" => array($javascriptMemo, $eventHandler)
);
// /php memo
$phpMemo = array(
	"file" => "/php/pages/code-php/php-memo.php",
	"title" => "phpmemo",
	"lead" => "メモ",
	"html" => "/code-php/php-memo.html"
);
$codePhp = array(
	"title" => "php",
	"lead" => "phpメモ",
	"pages" => array($phpMemo)
);
// /code-environment
$gulpfile = array(
	"file" => "/php/pages/code-env/gulpfile.php",
	"title" => "gulpfile",
	"lead" => "メモ",
	"html" => "/code-env/gulpfile.html"
);
$codeEnv = array(
	"title" => "作業効率を高める環境設定",
	"lead" => "gulpfile.js package.json、ローカルサーバnginx バーチャルホスト,scss",
	"pages" => array($gulpfile)
);
// /code-svg
$svg = array(
	"file" => "/php/pages/code-svg/svg.php",
	"title" => "svg",
	"lead" => "メモ",
	"html" => "/code-svg/svg.html"
);
$codeSvg = array(
	"title" => "svg",
	"lead" => "svg",
	"pages" => array($svg)
);

// /work-site
$workSite = array(
	"title" => "現実的な問題点",
	"lead" => "ルールを完璧に満たしたコーディングが理想だけど、現実的にはいろんな問題が起きるのでメモと考察",
	"pages" => array()
);

$pageLists = array($codeHtml, $codeCss, $codeParts, $codeJs, $codePhp, $codeEnv, $codeSvg, $workSite);

$targetBlank = 'target="_blank" rel="noopener noreferrer"';
?>