<?php 
    $tags  = get_terms( array(
        'taxonomy' => 'product_tag',
        'hide_empty' => false,
        'orderby' => 'ASC',
    ) );
    
?>
<pre>
<?php 
//var_dump($tags);
?>
</pre>
<section class="top-categories">
    <div class="inner">
        <h2 class="heading"><?php echo $block["heading"]?></h2>
        <div class="categories">
            <?php foreach($tags as $tag){?>
                <?php
                    $icon = get_field('icon', "term_" . $tag->term_id);
                ?>
                <a class="category" href="<?php echo $tag->slug?>">
                    <div class="icon">
                        <img src="<?php echo $icon?>" alt="">
                    </div>
                    <div class="text"><?php echo $tag->name?></div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>