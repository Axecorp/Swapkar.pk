<?php 
    $address = get_field("address", "options");
    $phone_number = get_field("phone_number", "options");
    $email = get_field("email", "options");
    $link_groups = get_field("link_groups", "options");
    $socials = get_field("socials", "options");
    $copyright = get_field("copyright", "options");
?>
  <footer class="footer">
    <div class="inner">
        <div class="main">
            <div class="left">
                <div class="address">
                    <?php echo $address?>
                </div>
                <div class="phone">
                    <a href="tel:<?php echo $phone_number?>">Text: <?php echo $phone_number?></a> 
                </div>
                <div class="email">
                    <a href="mailto:<?php echo $email?>"><?php echo $email?></a>
                </div>
            </div>
            <div class="mid">
                <?php foreach($link_groups as $link_group){?>
                    <div class="link-group">
                        <div class="title"><?php echo $link_group["title"] ?></div>
                        <?php foreach($link_group["links"] as $link){?>
                            <a href="<?php echo $link["link"]["url"]?>" class="link"><?php echo $link["link"]["title"]?></a>
                        <?php } ?>
                    </div>    
                <?php } ?>
            </div>
            <div class="right">
                <div class="socials">
                    <?php foreach($socials as $social){?>
                        <a href="<?php echo $social["link"]["url"]?>" class="social"><img src="<?php echo $social["icon"]?>" alt=""></a>
                    <?php } ?>
                </div>
                <div class="form">
                    
                <?php echo do_shortcode('[gravityform id="1" title="true" description="true" ajax="true"]')?>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
            <div class="inner">
                <div class="text"><?php echo $copyright?></div>
            </div>
        </div>
  </footer>
       
    
    </div><!-- closing all div -->
    

    <?php wp_footer(); ?>
	</body>
</html>
