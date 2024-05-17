<section id="<?php echo get_field('block_id'); ?>" class="hero">
    <div class="img-background">
        <img src="<?php echo TEMPLATE_DIRECTORY_URI .'/assets/images/background_1.jpg'?>" alt="">
    </div>
    <div class="container">
        <div class="hero-wrap">
            <span class="dots-wrap dots-v">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="43" viewBox="0 0 7 43" fill="none">
                    <circle cx="3.5" cy="39.5" r="3.5" transform="rotate(-90 3.5 39.5)" fill="#003548"/>
                    <circle cx="3.5" cy="27.5" r="3.5" transform="rotate(-90 3.5 27.5)" fill="#003548"/>
                    <circle cx="3.5" cy="15.5" r="3.5" transform="rotate(-90 3.5 15.5)" fill="#003548"/>
                    <circle cx="3.5" cy="3.5" r="3.5" transform="rotate(-90 3.5 3.5)" fill="#003548"/>
                </svg>
            </span>
            <div class="title-wrap">
                <div class="sub-title"><?php echo get_field('sub_title'); ?></div>
                <h1 class="hero-title"><?php echo get_field('title'); ?></h1>     
                <h2><?php echo get_field('second_title'); ?></h2>                  
            </div>
            <span class="dots-wrap dots-g dots-v-mob">
                <svg xmlns="http://www.w3.org/2000/svg" width="43" height="7" viewBox="0 0 43 7" fill="none">
                    <circle cx="3.5" cy="3.5" r="3.5" fill="#003548"/>
                    <circle cx="15.5" cy="3.5" r="3.5" fill="#003548"/>
                    <circle cx="27.5" cy="3.5" r="3.5" fill="#003548"/>
                    <circle cx="39.5" cy="3.5" r="3.5" fill="#003548"/>
                    </svg>
            </span>
            <div class="content-wrap">
                <div class="dots-row mobile-none">
                    <span class="dots-wrap dots-g">
                        <svg xmlns="http://www.w3.org/2000/svg" width="43" height="7" viewBox="0 0 43 7" fill="none">
                            <circle cx="3.5" cy="3.5" r="3.5" fill="#003548"/>
                            <circle cx="15.5" cy="3.5" r="3.5" fill="#003548"/>
                            <circle cx="27.5" cy="3.5" r="3.5" fill="#003548"/>
                            <circle cx="39.5" cy="3.5" r="3.5" fill="#003548"/>
                        </svg>
                    </span>                      
                </div>
                <div class="columns display-flex">
                    <div class="column left-column">
                        <span><?php echo get_field('date'); ?></span>
                        <span><?php echo get_field('location'); ?></span>
                        <span class="dots-wrap dots-g">
                            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="7" viewBox="0 0 43 7" fill="none">
                                <circle cx="3.5" cy="3.5" r="3.5" fill="#003548"/>
                                <circle cx="15.5" cy="3.5" r="3.5" fill="#003548"/>
                                <circle cx="27.5" cy="3.5" r="3.5" fill="#003548"/>
                                <circle cx="39.5" cy="3.5" r="3.5" fill="#003548"/>
                                </svg>
                        </span>
                    </div>
                    <div class="column right-column">
                        <?php 
                            $btn_title = get_field('button_title');
                            if ($btn_title != ''): 
                        ?>
                                <div class="btn blue-btn">
                                    <a href="<?php echo get_field('button_url'); ?>">
                                        <?php echo get_field('button_title'); ?>
                                    </a>
                                </div>
                        <?php
                            endif;
                        ?>
                        <div class="description"><?php echo get_field('description'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
