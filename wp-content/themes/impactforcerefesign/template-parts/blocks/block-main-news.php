<?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5
    );
    $the_query = new WP_Query($args);
?>
<section class="news">
    <div class="container">
        <div class="top-row">
            <div class="columns display-flex">
                <div class="column left-column">
                    <div class="section-title"><?php echo get_field('title'); ?></div>
                </div>
                <div class="column right-column">
                    <div class="sub-title">
                        <span><?php echo get_field('subtitle'); ?></span> 
                        <a href="/news">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 11.4611H9.72021L0 1.81347L1.81347 0L11.4611 9.72021V0H14V11.4611V14H11.4611H0V11.4611Z" fill="#003548"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-row">
            <div class="column left-column">
                <div id="news-slider" class="news-slider owl-carousel">
                    <?php
                        $last_news = get_field('last_news');
                        if( $the_query->have_posts() ): 
                            while( $the_query->have_posts() ):
                                $post = $the_query->the_post();
                                $post_id = $post->ID;
                                $post_link = get_the_permalink($post_id);
                    ?>
                                <div class="slider-item">
                                    <div class="image-wrap">
                                        <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="">
                                    </div>
                                    <div class="content-wrap">
                                        <div class="date">/<?php echo get_the_date(); ?></div>
                                        <div class="title">
                                            <a href="<?php echo $post_link ?>"><?php echo get_the_title($post_id); ?></a>
                                        </div>
                                        <div class="description"><?php echo get_the_excerpt($post_id); ?></div>
                                        <div class="read-more">
                                            <a href="<?php echo $post_link ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                                <path d="M0.925598 9.681H8.53519L0.925598 2.1282L2.3453 0.708496L9.8981 8.31809V0.708496H11.8857V9.681V11.6686H9.8981H0.925598V9.681Z" fill="#003548"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div> 

                    <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;    
                    ?>
                </div>
                <div id="news-slider-navigation"  class="slider-navigation">
                    <div class="prev-slide nav-slide">
                        <span><?php echo _e('Previous', 'theimpactforce') ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                            <path d="M0.0577046 5.02041C0.923225 5.20408 3.05818 6 3.00048 9L3.98141 9C4.03911 6.97959 3.23128 5.7551 2.30806 5.02041L37 5.02041L37 3.91837L2.30806 3.91837C3.17358 3.18367 3.9814 2.02041 3.9237 3.05994e-08L2.94277 1.16354e-07C3.00048 2.93878 0.865524 3.67347 -4.44453e-07 3.91837L0.0577046 5.02041Z" fill="#00B0EB"/>
                            </svg>
                    </div>
                    <div class="next-slide nav-slide">
                        <span><?php echo _e('Next', 'theimpactforce') ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                            <path d="M36.9423 3.97959C36.0768 3.79592 33.9418 3 33.9995 0L33.0186 0C32.9609 2.02041 33.7687 3.2449 34.6919 3.97959L1.58209e-10 3.97959L2.0202e-10 5.08163L34.6919 5.08163C33.8264 5.81633 33.0186 6.97959 33.0763 9H34.0572C33.9995 6.06122 36.1345 5.32653 37 5.08163L36.9423 3.97959Z" fill="#00B0EB"/>
                            </svg>
                    </div>
                </div>
            </div>
            <div class="column right-column">
                <div class="sub-title">
                    <span><?php echo get_field('subtitle'); ?></span>
                    <a href="/news">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 11.4611H9.72021L0 1.81347L1.81347 0L11.4611 9.72021V0H14V11.4611V14H11.4611H0V11.4611Z" fill="#003548"/>
                        </svg>
                    </a>
                </div>
                <div class="last-news"> 
                    <?php 
                        if( $the_query->have_posts() ): 
                            while( $the_query->have_posts() ):
                                $post = $the_query->the_post();
                    ?>
                                <div class="news-item">
                                    <div class="date"><?php echo get_the_date(); ?></div>
                                    <div class="title">
                                        <a href="<?php echo get_the_permalink();?>">
                                            <?php echo get_the_title(); ?>
                                        </a>
                                    </div>
                                </div>
                    <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section> 