<section class="top-categories">
    <div class="inner">
        <h2 class="heading"><?php echo $block["heading"]?></h2>
        <div class="categories">
            <?php foreach($block["categories"] as $cat){?>
                <a class="category" href="<?php echo $cat["link"]["url"]?>">
                    <div class="icon">
                        <img src="<?php echo $cat["icon"]?>" alt="">
                    </div>
                    <div class="text"><?php echo $cat["link"]["title"]?></div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>