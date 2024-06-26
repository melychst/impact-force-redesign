<section class="WWA-hero">
    <div class="container">
        <div class="hero-content-wrap">
            <h1 class="hero-title"><?php echo get_field('title'); ?></h1>
            <div class="sub-title">
                <span>
                    <svg width="73" height="17" viewBox="0 0 73 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M72.8862 7.517C71.1785 7.17006 66.9663 5.66666 67.0801 0L65.1448 0C65.0309 3.81632 66.6248 6.12925 68.4463 7.517L2.98839e-10 7.517L3.81594e-10 9.59863L68.4463 9.59863C66.7386 10.9864 65.1448 13.1837 65.2587 17H67.194C67.0801 11.449 71.2924 10.0612 73 9.59863L72.8862 7.517Z" fill="white"/>
                        </svg>
                </span>
                <?php echo get_field('subtitle'); ?>
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