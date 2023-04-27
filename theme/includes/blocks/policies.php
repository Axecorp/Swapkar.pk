<section class="policies">
    <div class="policies-container">
        <div class="policies-wrapper">
            <?php foreach($block['policies'] as $policy){ ?>
                <div class="policy">
                    <div class="policy-wrapper">
                        <div class="policy-title">
                            <h2><?php echo $policy['title'] ?></h2>
                        </div>
                        <div class="subtext">
                            <p><?php echo $policy['subtitle'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>