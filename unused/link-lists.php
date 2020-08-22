<article class="articleCnt">
    <h1><?php echo $page["title"] ?></h1>
    <p><?php echo $page["lead"] ?></p>
    <nav>
        <ul class="bl-contentsList">
            <?php foreach($page["pages"] as $value){ ?>
            <li class="bl-contentsList__cnt">
                <a href="<?php echo $value["html"]; ?>" class="bl-contentsList__link">
                    <h2 class="bl-contentsList__ttl"><?php echo $value["title"]; ?></h2>
                    <p class="bl-contentsList__txt"><?php echo $value["lead"]; ?></p>
                </a>
            </li>
            <?php } ?>
        </ul>
    </nav>
</article>