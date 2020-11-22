<article class="articleCnt ly-innnerWidth">
    <h1><?php echo $page["title"] ?></h1>
    <p><?php echo $page["lead"] ?></p>
    <nav>
        <ul class="bl-categoryList">
            <?php foreach($page["pages"] as $value){ ?>
            <li class="bl-categoryList__cnt">
                <a href="<?php echo $value["html"]; ?>" class="bl-categoryList__link">
                    <h2 class="bl-categoryList__ttl"><?php echo $value["title"]; ?></h2>
                    <p class="bl-categoryList__txt"><?php echo $value["lead"]; ?></p>
                </a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</article>