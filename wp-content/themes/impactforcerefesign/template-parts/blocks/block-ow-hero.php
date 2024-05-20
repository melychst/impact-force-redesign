<section class="OW-hero">
    <div class="container">
        <div class="hero-content">
            <p><?php echo get_field('content'); ?></p>
            <?php 
                $button_title = get_field('button_title');
                if( $button_title != '' ):
            ?>
            <div class="read-more">
                <a href="<?php echo get_field('button_link'); ?>"><?php echo $button_title; ?></a>
            </div>
            <?php endif; ?>
        </div>
        <h1 class="hero-title"><?php echo get_field('title'); ?></h1>
    </div>
</section>