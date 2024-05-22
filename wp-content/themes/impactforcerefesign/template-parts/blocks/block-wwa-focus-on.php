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
    <?php 
        $image = get_field('image');
        if( $image ): 
    ?>
    <div class="background-image">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <?php endif; ?>
</section>  