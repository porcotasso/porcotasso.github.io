<?php
// /code-html
// /code-css
// /code-parts

// /code-html
$contentsModel = array(
	"file" => "/php/pages/code-html/contents-model.php",
	"title" => "コンテンツ・モデルからタグを分類",
	"description" => "要素内にどんな要素を置くか",
	"html" => "/code-html/contents-model.html"
);
$semanticTags = array(
	"file" => "/php/pages/code-html/semantic-tags.php",
	"title" => "セマンティックhtml",
	"description" => "セマンティックhtmlまとめ。クローラーや読み上げソフトが、タグから各コンテンツの役割がわかるように。",
	"html" => "/code-html/semantic-tags.html"
);
$aboutTags = array(
	"file" => "/php/pages/code-html/about-tags.php",
	"title" => "各タグ要素について",
	"description" => "各タグのスタイルをどうするかは、考え方やサイトのないようによりますが、できるだけなぜそうしたかを明確にしておくことで修正がしやすくなるのでメモ。",
	"html" => "/code-html/about-tags.html"
);
$codeHtml = array(
	"title" => "html",
	"short-description" => "html概要理解のためのメモ",
	"description" => "HTML5では「要素内にどんな要素を置くか」が決められています。このルールをコンテンツ・モデル（Content models）といいます。「コンテンツ（Content）」はここでは「要素の中身」、「モデル（models）」は「型式」といった意味です。コンテンツ・モデルはすべての要素に定義されていて、そのとおりに使わないとNG。コンテンツ・モデルには、前回の7つのカテゴリーが使われることが多いですが、カテゴリーに関係ない定義もあります。",
	"html" => "/code-html/index.html",
	"pages" => array($contentsModel, $semanticTags, $aboutTags)
);

// /code-css
$categorizedCSS = array(
	"file" => "/php/pages/code-css/categorized-css.php",
	"title" => "CSSを役割ごとにカテゴライズする",
	"description" => "全てのCSSを目的ごとに分けることで、使い方を明確にするカテゴライズする。",
	"html" => "/code-css/categorized-css.html"
);
$namingRule = array(
	"file" => "/php/pages/code-css/naming-rule.php",
	"title" => "命名ルール",
	"description" => "クラスの名前でスコープや役割が判断できるのが理想なので、",
	"html" => "/code-css/naming-rule.html"
);
$codeCss = array(
	"file" => "/php/pages/code-html/contents-model.php",
	"title" => "cssコーディング",
	"short-description" => "論理立ててcssを理解して使えるようになるように、情報や基準をまとめて今後の参考にするのが目的。",
	"description" => "cssについての説明",
	"html" => "/code-css/index.html",
	"pages" => array($categorizedCSS, $namingRule)
);

// /code-parts
$codeParts ="html,cssなどの部分について";
$button = array(
	"file" => "/php/pages/code-parts/button.php",
	"title" => "ボタンは&lt;a&gt;か&lt;button&gt;か&lt;input&gt;か",
	"description" => "タグの使い分けを明確にボタンを作成する。",
	"html" => "/code-parts/button.html"
);
$breakWord = array(
	"file" => "/php/pages/code-parts/break-word.php",
	"title" => "break-word",
	"description" => "break-word",
	"html" => "/code-parts/break-word.html"
);
$elementEmStrongMarkB = array(
	"file" => "/php/pages/code-parts/element-em-strong-mark-b-difference.php",
	"title" => "em・strong・mark・b要素の違い",
	"description" => "em・strong・mark・b要素の違いと使い方のメモ",
	"html" => "/code-parts/element-em-strong-mark-b-difference.html"
);
$favicon = array(
	"file" => "/php/pages/code-parts/favicon.php",
	"title" => "favicon",
	"description" => "favicon",
	"html" => "/code-parts/favicon.html"
);
$codeParts = array(
	"title" => "パーツのポイント",
	"short-description" => "明確なルールがないが実際にやってみると定義が必要になってくるもののメモ",
	"description" => "パーツについてのせつめい",
	"pages" => array($button, $breakWord, $elementEmStrongMarkB, $favicon)
);

// /javascript memo
$javascriptMemo = array(
	"file" => "/php/pages/code-js/javascript-memo.php",
	"title" => "javascriptmemo",
	"description" => "メモ",
	"html" => "/code-js/javascript-memo.html"
);
$codeJs = array(
	"title" => "javascript",
	"short-description" => "メモ",
	"description" => "javascriptメモ",
	"pages" => array($javascriptMemo)
);

// /code-environment
$gulpfile = array(
	"file" => "/php/pages/code-env/gulpfile.php",
	"title" => "gulpfile",
	"description" => "メモ",
	"html" => "/code-env/gulpfile.html"
);
$codeEnv = array(
	"title" => "作業効率を高める環境設定",
	"short-description" => "gulpfile.js package.json、ローカルサーバnginx バーチャルホスト,scss",
	"description" => "gulpfile.js package.json、ローカルサーバnginx バーチャルホスト,scss",
	"pages" => array($gulpfile)
);
// /code-svg
$svg = array(
	"file" => "/php/pages/code-svg/svg.php",
	"title" => "svg",
	"description" => "メモ",
	"html" => "/code-svg/svg.html"
);
$codeSvg = array(
	"title" => "svg",
	"short-description" => "svg",
	"description" => "svg",
	"pages" => array($svg)
);

// /work-site
$workSite = array(
	"title" => "現実的な問題点",
	"short-description" => "ルールを完璧に満たしたコーディングが理想だけど、現実的にはいろんな問題が起きるのでメモと考察",
	"description" => "ルールを完璧に満たしたコーディングが理想だけど、現実的にはいろんな問題が起きるのでメモと考察",
	"pages" => array()
);

$pageLists = array($codeHtml, $codeCss, $codeParts, $codeJs, $codeEnv, $codeSvg, $workSite);

$targetBlank = 'target="_blank" rel="noopener noreferrer"';
?>