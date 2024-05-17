<?php if( get_field('show_section') ): ?>
<section id="<?php echo get_field('block_id'); ?>" class="art">
    <div class="container">
        <div class="columns display-flex">
            <div class="column left-column">
                <?php
                    $image = get_field('image');
                    if( $image ):
                ?>
                    <div class="image-wrap">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>
                <?php
                    endif;
                ?>
            </div>
            <div class="column right-column">
                <div class="section-name"><?php echo get_field('section_name'); ?></div>
                <div class="section-subtitle"><?php echo get_field('main_title'); ?></div>
                <div class="content-wrap">
                    <div class="content"><?php echo get_field('content'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>