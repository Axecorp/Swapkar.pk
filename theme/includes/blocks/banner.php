<section class="banner">
    <div class="banner-container">
        <div class="banner-wrapper">
            <?php if($block['title']){ ?>
                <h2><?php echo $block['title']; ?></h2>
            <?php } ?>
            <a href="<?php echo $block['link'] ?>"><img src="<?php echo $block['image'] ?>" alt=""></a>
        </div>
    </div>
</section>