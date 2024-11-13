<section class="subscription">
    <div class="image-background">
        <img src="<?php echo TEMPLATE_DIRECTORY_URI .'/assets/images/subcription-bg.png'; ?>" alt="">
    </div>
    <div class="container">
        <div class="title"><?php echo _e('Subscription form to Newsletter', 'theimpactforce') ?></div>
        <div class="form-wrap">
            <?php $form_id = get_field('form_id'); ?>
            <?php echo do_shortcode( $form_id ); ?>
        </div>
    </div>
</section>