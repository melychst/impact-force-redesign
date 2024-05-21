<section class="WWA-founded">
    <div class="container">
        <div class="section-title"><?php echo get_field('title'); ?></div>
        <div class="columns display-flex">
            <div class="column left-column">
                <div class="meta">/01</div>
                <div class="column-title"><?php echo get_field('left_subtitle'); ?></div>
                <div class="content"><?php echo get_field('left_content'); ?></div>
            </div>
            <div class="column right-column">
                <div class="meta">/02</div>
                <div class="column-title"><?php echo get_field('right_subtitle'); ?></div>
                <div class="content"><?php echo get_field('right_content'); ?></div>
            </div>
        </div>
    </div>
    <?php 
        $image = get_field('image');
        if( $image ):
    ?>
        <div class="background-image">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    <?php
        endif;
    ?>
</section>