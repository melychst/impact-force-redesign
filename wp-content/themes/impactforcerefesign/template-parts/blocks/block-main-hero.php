<main>
    <section class="hero">
        <div class="container">
            <div class="hero-content-wrap">
                <div class="top-row">
                    <div class="columns display-flex">
                        <div class="column left-column">
                            <h1><?php echo get_field('title'); ?></h1>
                        </div>
                        <div class="column right-column">
                            <div class="content">
                                <div class="sub-title"><?php echo get_field('right_sub_title'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-row">
                    <div class="sub-title decorate-title"><?php echo get_field('bottom_sub_title'); ?></div>
                </div>
            </div>
        </div>
        <div class="background-image">
            <?php 
                $img = get_field('hero_image');
                if( $img ):
            ?>
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
            <?php        
                endif;
            ?>
            
        </div>
    </section>