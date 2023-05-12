<section class="favorite-brands">
    <div class="favorite-brands-container">
        <div class="title">
            <h2><?php echo $block['title'] ?></h2>
        </div>
        <div class="image-banner-container">
            <?php foreach($block['images'] as $image){ ?>
                <div class="image-container">
                    <a href="<?php echo $image['link'] ?>"><img src="<?php echo $image['image'] ?>" alt=""></a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>