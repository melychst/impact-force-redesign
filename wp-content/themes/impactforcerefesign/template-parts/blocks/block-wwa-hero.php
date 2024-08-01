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
        <div class="img-wrap mobile-image">
            <svg width="12" height="181" viewBox="0 0 12 181" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.69387 180C6.93877 178.77 7.99999 175.736 12 175.818L12 174.424C9.30612 174.342 7.67346 175.49 6.69387 176.802L6.69388 -2.31938e-07L5.22449 -2.96167e-07L5.22449 176.802C4.24489 175.572 2.69388 174.424 1.50849e-09 174.506L-5.94284e-08 175.9C3.91837 175.818 4.89796 178.852 5.22449 180.082L6.69387 180Z" fill="white"/>
            </svg>
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