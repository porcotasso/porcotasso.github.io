<?php
// /code-html
// /code-css
// /code-parts

// /code-html
$contentsModel = array(
	"title" => "コンテンツ・モデルからタグを分類",
	"description" => "要素内にどんな要素を置くか",
	"html" => "/code-html/contents-model.html"
);
$semanticTags = array(
	"title" => "セマンティックなタグの各意味まとめ",
	"description" => "セマンティックなタグの各意味まとめ。クローラーや読み上げソフトが、タグから各コンテンツの役割がわかるように。",
	"html" => "/code-html/semantic-tags.html"
);
$aboutTags = array(
	"title" => "各タグ要素について",
	"description" => "各タグのスタイルをどうするかは、考え方やサイトのないようによりますが、できるだけなぜそうしたかを明確にしておくことで修正がしやすくなるのでメモ。",
	"html" => "/code-html/about-tags.html"
);
$codeHtml = array(
	"title" => "htmlコーディング",
	"description" => "HTML5では「要素内にどんな要素を置くか」が決められています。このルールをコンテンツ・モデル（Content models）といいます。「コンテンツ（Content）」はここでは「要素の中身」、「モデル（models）」は「型式」といった意味です。コンテンツ・モデルはすべての要素に定義されていて、そのとおりに使わないとNG。コンテンツ・モデルには、前回の7つのカテゴリーが使われることが多いですが、カテゴリーに関係ない定義もあります。",
	"html" => "/code-html/index.html",
	"pages" => array($contentsModel, $semanticTags, $aboutTags)
);

// /code-css
$categorizedCSS = array(
	"title" => "CSSを役割ごとにカテゴライズする",
	"description" => "全てのCSSを目的ごとに分けることで、使い方を明確にするカテゴライズする。",
	"html" => "/code-css/categorized-css.html"
);
$namingRule = array(
	"title" => "命名ルール",
	"description" => "クラスの名前でスコープや役割が判断できるのが理想なので、",
	"html" => "/code-css/naming-rule.html"
);
$codeCss = array(
	"title" => "cssコーディング",
	"description" => "cssについての説明",
	"html" => "/code-css/index.html",
	"pages" => array($categorizedCSS, $namingRule)
);

// /code-parts
$codeParts ="html,cssなどの部分について";
$button = array(
	"title" => "ボタンは&lt;a&gt;か&lt;button&gt;か&lt;input&gt;か",
	"description" => "タグの使い分けを明確にボタンを作成する。",
	"html" => "/code-parts/button.html"
);
$elementEmStrongMarkB = array(
	"title" => "em・strong・mark・b要素の違い",
	"description" => "em・strong・mark・b要素の違いと使い方のメモ",
	"html" => "/code-parts/element-em-strong-mark-b-difference.html"
);
$codeParts = array(
	"title" => "html,cssなどの部分について",
	"description" => "パーツについてのせつめい",
	"html" => "/code-parts/index.html",
	"pages" => array($elementEmStrongMarkB, $button)
);

$pageLists = array($codeHtml, $codeCss, $codeParts);

$targetBlank = 'target="_blank" rel="noopener noreferrer"';
?>