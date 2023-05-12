<?php
    $tags  = get_terms( array(
        'taxonomy' => 'product_tag',
        'hide_empty' => false,
        'orderby' => 'ASC',
    ) );
    $cats  = get_terms( array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
        'orderby' => 'ASC',
    ) );
    $args = array(
        'orderby'           => 'date',
        'order'             => 'ASC'
    );
    $products = wc_get_products( $args );

?>
<pre>
    <?php 
        // var_dump($products[0]);
        // var_dump($block["tabs"]);
    ?>
</pre>
<section class="product-tabs">
    <div class="inner">
        <div class="tabs">
                <div class="tag" data-val=".all">
                    Show All
                </div> 
            <?php foreach($block["tabs"] as $tab){?>
                <div class="tag" data-val=".<?php echo $tab["value"];?>">
                    <?php echo $tab["label"];?>
                </div>    
            <?php } ?>
        </div>
        <div class="arrows prev-arrow">
            <i class="fa fa-angle-left"></i>
        </div>
        <div class="arrows next-arrow">
            <i class="fa fa-angle-right"></i>
        </div>
        <div class="products">

            <?php foreach($products as $product){
                
                //category
                $cat_list = array();
                $product_cat = $product->category_ids;
                foreach($product_cat as $pc){
                    foreach($cats as $cat){
                        if($cat->term_id == $pc){
                            array_push($cat_list, array($cat->slug, $cat->name));
                        }
                    }
                }
                $cat_data = $cat_list[0];
                //tags
                $tag_list = array();
                $product_tags = $product->tag_ids;
                foreach($product_tags as $pt){
                    foreach($tags as $tag){
                        if($tag->term_id == $pt){
                            array_push($tag_list, $tag->slug);
                        }
                    }
                }
                $tags_class = implode(" ", $tag_list);
                ?>
                <div class="product all <?php echo $tags_class?>">
                    <div class="popup-btn">
                        <svg viewBox="0 0 511.999 511.999" width="100%" height="100%">
                            <path d="M508.745,246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818,239.784,3.249,246.035         c-4.332,5.936-4.332,13.987,0,19.923c4.569,6.257,113.557,153.206,252.748,153.206s248.174-146.95,252.748-153.201         C513.083,260.028,513.083,251.971,508.745,246.041z M255.997,385.406c-102.529,0-191.33-97.533-217.617-129.418         c26.253-31.913,114.868-129.395,217.617-129.395c102.524,0,191.319,97.516,217.617,129.418         C447.361,287.923,358.746,385.406,255.997,385.406z"></path>
                            <path d="M255.997,154.725c-55.842,0-101.275,45.433-101.275,101.275s45.433,101.275,101.275,101.275         s101.275-45.433,101.275-101.275S311.839,154.725,255.997,154.725z M255.997,323.516c-37.23,0-67.516-30.287-67.516-67.516         s30.287-67.516,67.516-67.516s67.516,30.287,67.516,67.516S293.227,323.516,255.997,323.516z"></path>
                        </svg>
                    </div>
                    <?php if($product->sale_price){?>
                        <div class="sale">
                            Sale
                        </div>    
                    <?php } ?>
                    <div class="image-wrap">
                        <img src="<?php echo wp_get_attachment_image_url( $product->image_id, "full");?>" alt="">
                    </div>
                    <a href="" class="add-to-cart">
                        Add to Cart
                    </a>
                    <a href="<?php echo $cat_data[0];?>" class="brand"><?php echo $cat_data[1];?></a>
                    <div class="name"><?php echo $product->name;?></div>
                    <div class="price">
                        <div class="regular-price">$<?php echo $product->regular_price;?>.00</div>
                        <div class="sale-price">$<?php echo $product->sale_price;?>.00</div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<script>

    $(".tag").click(function(){
        $(".product").hide();
        $($(this).attr("data-val")).show()
    })


    $(".products").slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        arrows:true,
        prevArrow: $('.prev-arrow'),
        nextArrow: $('.next-arrow'),
    });
</script>