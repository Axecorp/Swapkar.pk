<section class="features">
    <div class="features-container">
        <?php foreach($block['features'] as $feature){ ?>
            <div class="feature-single">
                <div class="feature-single-wrapper">
                    <div class="feature-icon">
                        <img src="<?php echo $feature['icon'] ?>" alt="">
                    </div>
                    <div class="feature-link">
                        <p><?php echo $feature['text'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>