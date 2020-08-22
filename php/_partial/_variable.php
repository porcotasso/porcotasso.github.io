<?php
// /code-html
// /code-css
// /code-parts

// /code-html
$contentsModel = array(
	"file" => "/php/pages/code-html/contents-model.php",
	"title" => "コンテンツ・モデル",
	"lead" => "コンテンツ・モデルは要素内に置ける要素のルールです。",
	"html" => "/code-html/contents-model.html"
);
$semanticTags = array(
	"file" => "/php/pages/code-html/semantic-tags.php",
	"title" => "セマンティックhtml",
	"lead" => "セマンティックhtmlまとめ。クローラーや読み上げソフトが、タグから各コンテンツの役割がわかるように。",
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
	"lead" => "html概要理解のためのメモ",
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
	"lead" => "クラスの名前でスコープや役割が判断できるのが理想なので、",
	"html" => "/code-css/naming-rule.html"
);
$codeCss = array(
	"file" => "/php/pages/code-html/contents-model.php",
	"title" => "cssコーディング",
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
	"title" => "em・strong・mark・b要素の違い",
	"lead" => "「em要素」「strong要素」「mark要素」「b要素」の違いが理解して明確に使い分けよう。<br>基本的にはセマンティックマークアップとして利用するのが目的で装飾を前提に使用しない。",
	"html" => "/code-parts/element-em-strong-mark-b-difference.html"
);
$favicon = array(
	"file" => "/php/pages/code-parts/favicon.php",
	"title" => "favicon",
	"lead" => "faviconはfavorite icon”の略語でウェブサイトのシンボルマーク・イメージとして、サイトに配置するアイコンの俗称です。閲覧中のタブなどに表示し潜在層にサイトを認知させる目的があります。",
	"html" => "/code-parts/favicon.html"
);
$codeParts = array(
	"title" => "パーツ",
	"lead" => "明確なルールがないが実際にやってみると定義が必要になってくるもののメモ",
	"pages" => array($button, $breakWord, $elementEmStrongMarkB, $favicon)
);

// /javascript memo
$javascriptMemo = array(
	"file" => "/php/pages/code-js/javascript-memo.php",
	"title" => "javascriptmemo",
	"lead" => "メモ",
	"html" => "/code-js/javascript-memo.html"
);
$codeJs = array(
	"title" => "javascript",
	"lead" => "javascriptメモ",
	"pages" => array($javascriptMemo)
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

$pageLists = array($codeHtml, $codeCss, $codeParts, $codeJs, $codeEnv, $codeSvg, $workSite);

$targetBlank = 'target="_blank" rel="noopener noreferrer"';
?>