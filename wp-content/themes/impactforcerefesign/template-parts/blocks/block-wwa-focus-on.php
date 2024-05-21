<section class="WWA-focus-on">
    <div class="container">
        <div class="section-title"><?php echo get_field('title'); ?></div>
        <?php
            $button_title = get_field('button_title');
            if( $button_title != '' ):
        ?>
                <div class="content-link">
                    <a class="icon-link" href="<?php echo get_field('button_link'); ?>"><?php echo $button_title; ?></a>
                </div>
        <?php
            endif;
        ?>
    </div>
    <div class="background-image">
        <img src="images/main-who-section-image.png" alt="">
    </div>
</section>  