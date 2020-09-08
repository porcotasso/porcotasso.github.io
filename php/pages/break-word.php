<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-head.php"); ?>
<main class="ly-baseWrap ly-UnderheaderSpace"> 
    <article class="articleCnt">
        <header>
            <h1><?php echo $title ?></h1>
			<?php if (file_exists($filename)) { ?>
				<p class="el-updateDate"><?php echo date ("Y.m.d", filemtime($filename)).' updated'; ?></p>
			<?php } ?>
            <p><?php echo $lead ?></p>  
            <nav class="ly-mainNav">
                <div class="el-mainNavTtl">目次</div>
                <?php $navList = array("文字の処理について","禁則処理とは"); ?>
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
            <p>判断する基準は次のようなものになります。</p>
            <ul>
                <li>単語の切れ目で、次にくる単語が枠内に収まらない場合に改行するかどうか</li>
                <li>長い英単語を途中で改行するかどうか</li>
                <li>英語、日本語・中国語・韓国語での対応の違い</li>
                <li>禁則処理への対応</li>
            </ul>
            <p>使用するプロパティは以下２つです。</p>
            <ul>
                <li>word-breakプロパティ:テキストや単語の改行方法を指定</li>
                <li>overflow-wrap:単語の途中で改行するかどうかを指定。テーブル内のセルには使用できません。</li>
            </ul>
            <h3>word-break:normal;</h3>
            <p>その言語の習慣的な規則に従う（初期値）</p>
            <h3>word-break:keep-all;</h3>
            <p>単語の途中では改行しない</p>
            <h3>word-break:break-all;</h3>
            <p>文字列のどこでも（単語の途中でも）強制改行。単語中などでの文字の改行に関する禁則処理をほとんど解除し、どの文字の間でも改行するようにし絶対レイアウト崩さない。コンテナ幅より長い英単語は強制的に折り返され読みづらい。禁則処理のほぼ全解除なので日本語でも句読点が行頭に来る。overflow-wrap: break-word;とword-break: break-all; を重ね掛けした場合は、word-break: break-all; が優先。しかしテーブル内で一部記号の連続を改行することは難しい</p>
            <h3>word-break:break-word;</h3>
            <p>単語の区切りで改行するが、場合によっては単語の途中でも改行。禁則処理：可能な限り保たれる！コンテナ（テキストの表示領域）幅より長い英単語：強制的に折り返される
記号の連続の折り返し：対応　テーブル内のセルにかけてもちゃんと効く。行内で適切に改行できる場所が他にない場合に限って単語の途中でも改行するようにします。</p>
            <h3>overflow-wrap:normal;</h3>
            <p>改行可能な箇所でのみ改行する（初期値）</p>
            <h3>overflow-wrap:break-word;</h3>
            <p>単語の途中でも改行する。改行箇所にハイフンは挿入されない。「単語内改行をしないこと」より「コンテナ幅」を優先する設定です。次に入力される単語がコンテナ幅の残りを超えそうな場合、単語内で改行しないように単語ごと次の行に送る制御をします。単語の途中で折り返さないと行ボックスの幅からあふれてしまうときのみ、その単語の途中で折り返します。単語の途中で折り返しが発生するのは、その単語の幅が行ボックスの幅より大きい場合のみとなります。つまり、可能な限り禁則処理が保持され、可能な限り単語途中での折り返しを避けることができます。</p>
            <h3>overflow-wrap:break-spaces;</h3>
            <p>改行は通常のように処理されるが、場合によりホワイトスペースの表示方法が異なる</p>
        </section>
        <section class="ly-section" id="1">
            <h2><?php echo $navList[1]; ?></h2>
            <p>読みやすい文章組みを行うのを目的に、主に日本語の文書作成・組版において、約物（句読点・疑問符・括弧類などの記号）を行頭・行末などに置かないといった禁止事項、またはそれを回避するためにする字詰めや文の長さの調整のこと。</p>
            <h3>行頭禁則文字</h3>
            <p>行の頭にきてはいけない文字</p>
            <ul>
                <li>終わり（受け）括弧類：」』）｝】＞≫］など</li>
                <li>拗促音：ぁぃぅぇぉっゃゅょァィゥェォッャュョなど</li>
                <li>中点や音引：・（中点／中黒）ー（音引き）―（ダーシ）-（ハイフン）など</li>
                <li>句読点：、。,.など</li>
                <li>その他約物：ゝ々！？：；／など</li>
            </ul>
            <h3>行末禁則文字</h3>
            <p>行の末尾にきてはいけない文字</p>
            <ul>
                <li>始め括弧類：「『（｛【＜≪［など</li>
            </ul>
            <h3>分離禁止文字</h3>
            <p>行をまたいで分離してはいけない文字は以下のとおり。</p>
            <ul>
                <li>つなぎ罫：……（二倍リーダー）――（二倍ダーシ）など</li>
                <li>連数字や組数字：10,000　3/5など</li>
                <li>英単語：Mississippiなど</li>
                <li>グループルビ</li>
            </ul>
            <cite class="ly-cite"><a href="https://www.tairapromote.co.jp/column/284/" <?php echo $targetBlank ?>>禁則処理とは何か 株式会社平プロモート</a></cite>
            <cite class="ly-cite"><a href="https://qiita.com/akane_kato/items/2b1385574e1a1babdde1" <?php echo $targetBlank ?>>Qiita overflow-wrap: break-word; や word-break: break-all; が万能の改行処理だったなら、こんなに苦労していない</a></cite>
            <cite class="ly-cite"><a href="https://w3g.jp/blog/confusing_word-break_word-wrap" <?php echo $targetBlank ?>>W3C word-breakとword-wrapはややこしい</a></cite>
        </section>
    </article>
</main>
<?php include("/Users/porcokafuka/projects/porcotasso.github.io/php/_partial/wrapper-foot.php"); ?>
