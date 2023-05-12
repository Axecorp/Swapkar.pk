<?php
        $cats  = get_terms( array(
            'taxonomy' => 'product_cat',
            'hide_empty' => false,
            'orderby' => 'ASC',
        ) );
        // foreach($cats as $cat){
        //     if($cat->name == "Uncategorized"){
        //         continue;
        //     }
        //     var_dump($cat->name);
        //     echo "</br>";
        // }
?>
<div class="trending-brands">
    <div class="inner">
        <?php if(count($block["brands_to_include"]) > 3){?>
            <div class="arrows prev-arrow-brands">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="arrows next-arrow-brands">
                <i class="fa fa-angle-right"></i>
            </div>
        <?php } ?>
        <div class="brands">
            <?php foreach($cats as $cat){
                $main = get_field('main_image', "term_" . $cat->term_id);
                $secondary = get_field('secondary_image', "term_" . $cat->term_id);
                if(in_array($cat->slug, $block["brands_to_include"])){
                    if($main && $secondary){?>
                        <a href="/<?php echo($cat->slug);?>" class="brand">
                            <img class="hover" src="<?php echo $secondary?>" alt="">
                            <img class="main" src="<?php echo $main?>" alt="">
                        </a>
                    <? } else{?>
                        <a href="/<?php echo($cat->slug);?>" class="brand">
                            <img class="hover" src="<?php echo wp_get_attachment_image_url(149, "full")?>" alt="">
                            <img class="main" src="<?php echo wp_get_attachment_image_url(148, "full")?>" alt="">
                        </a>
                    <? } ?>        
                <? } ?>
            <? } ?>
        </div>
    </div>
</div>
<script>
    $(".brands").slick({
        slidesToShow: 3,
        autoplay: true,
        arrows:true,
        prevArrow: $('.prev-arrow-brands'),
        nextArrow: $('.next-arrow-brands'),
    })
</script>