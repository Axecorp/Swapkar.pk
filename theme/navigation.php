<?php
    $logo = get_field("logo", "options");
    $nav = get_field("nav_links", "options");
    $categories_list  = get_terms( array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
        'orderby' => 'ASC',
    ) );
?>

<header class="header">
    <div class="inner">
        <div class="left">
            <?php if($logo){?>
                <div class="logo">
                    <img src="<?php echo $logo["main"]?>" alt="">
                    <img class="on_scroll" src="<?php echo $logo["on_scroll"]?>" alt="">
                </div>
            <?php } ?>
            <?php if($nav){?>
                <div class="nav">
                    <?php foreach($nav as $link){?>
                        <a href="<?php echo $link["link"]["url"]?>" class="link <?php if(count($link["dropdown_choice"])>0){ echo "menu-trigger"; }else{ echo "menu-close";}?>"><?php echo $link["link"]["title"]?></a>
                    <?php } ?>
                </div>
            <?php } ?>
            </div>
        <div class="right"></div>
    </div>
    <?php foreach($nav as $link){
        if(count($link["dropdown_choice"])>0){?>
            <div class="dropdown">
                <div class="inner">
                    <?php foreach($categories_list as $cat){
                            if($cat->name == "Uncategorized"){
                                continue;
                            }
                        ?>
                        <a href="" class="brand"><?php echo $cat->name?></a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    <?php } ?>

</header>
<script>
    $(".menu-trigger").mouseover(function(){
        $(".dropdown").fadeIn(0);
        $(".dropdown").css("transform", "translateY(-20px)");
        $(".menu-trigger").mouseleave(function(){
            $(".dropdown").fadeOut(0);
            $(".dropdown").css("transform", "translateY(20px)");
        })
        $(".dropdown").mouseleave(function(){
            $(".dropdown").fadeOut(0);
            $(".dropdown").css("transform", "translateY(20px)");
        })
        $(".dropdown").mouseenter(function(){
            $(".dropdown").css("transform", "translateY(-20px)");
            $(".dropdown").fadeIn(0);
        })
    })
    $(window).on("scroll", function(){
        if ($(window).scrollTop()>50){
            $(".header").addClass("scrolled")
        }else{
            $(".header").removeClass("scrolled")
        }
    })
</script>
