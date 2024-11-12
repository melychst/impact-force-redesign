<?php
    $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'paged' => $current_page,
    );

    $the_query = new WP_Query($args);
?>
<section class="blog">
    <div class="container">
        <div class="news-wrap">
            <?php
                if( $the_query->have_posts() ):
                    while($the_query->have_posts()): $the_query->the_post();
                        $post_id = get_the_ID();
                        $post_link = get_the_permalink($post_id);
            ?>
                        <div class="news-item">
                            <div class="image-wrap">
                                <a href="<?php echo $post_link; ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="">
                                </a>
                            </div>
                            <div class="body-item">
                                <div class="head">
                                    <div class="date">/<?php echo get_the_date('', $post_id); ?></div>
                                    <div class="title">
                                        <a href="<?php echo $post_link; ?>"><?php echo get_the_title($post_id); ?></a>
                                    </div>
                                </div>
                                <div class="excerpt"><?php echo get_the_excerpt($post_id); ?></div>
                                <div class="read-more">
                                    <a href="<?php echo $post_link; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                            <g clip-path="url(#clip0_110_2499)">
                                                <path d="M11.4806 21.2863C17.3588 21.2863 22.124 16.5211 22.124 10.6429C22.124 4.76473 17.3588 -0.000488281 11.4806 -0.000488281C5.60238 -0.000488281 0.837158 4.76473 0.837158 10.6429C0.837158 16.5211 5.60238 21.2863 11.4806 21.2863Z" fill="#00B0EB"/>
                                                <path d="M7.23218 13.3145H13.1014L7.23218 7.48904L8.32718 6.39404L14.1526 12.2633V6.39404H15.6856V13.3145V14.8475H14.1526H7.23218V13.3145Z" fill="#003548"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_110_2499">
                                                <rect width="21.243" height="21.243" fill="white" transform="translate(0.837158 -0.000976562)"/>
                                                </clipPath>
                                            </defs>
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

            <!-- <div class="news-item">
                <div class="image-wrap">
                    <a href="#">
                        <img src="images/article-2.png" alt="">
                    </a>
                    
                </div>
                <div class="body-item">
                    <div class="head">
                        <div class="date">/28.04.2023</div>
                        <div class="title">
                            <a href="#">Impact Force is Hiring a Project
                                Coordinator</a>
                        </div>
                    </div>
                    <div class="excerpt">Apply now to lead the way in fundraising and partnership
                        at Impact Force.</div>
                    <div class="read-more">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                <g clip-path="url(#clip0_110_2499)">
                                    <path d="M11.4806 21.2863C17.3588 21.2863 22.124 16.5211 22.124 10.6429C22.124 4.76473 17.3588 -0.000488281 11.4806 -0.000488281C5.60238 -0.000488281 0.837158 4.76473 0.837158 10.6429C0.837158 16.5211 5.60238 21.2863 11.4806 21.2863Z" fill="#00B0EB"/>
                                    <path d="M7.23218 13.3145H13.1014L7.23218 7.48904L8.32718 6.39404L14.1526 12.2633V6.39404H15.6856V13.3145V14.8475H14.1526H7.23218V13.3145Z" fill="#003548"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_110_2499">
                                    <rect width="21.243" height="21.243" fill="white" transform="translate(0.837158 -0.000976562)"/>
                                    </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-item">
                <div class="image-wrap">
                    <a href="#">
                        <img src="images/article-3.png" alt="">
                    </a>
                    
                </div>
                <div class="body-item">
                    <div class="head">
                        <div class="date">/18.07.2023</div>
                        <div class="title">
                            <a href="#">2000 laptops will be provided for
                                displaced Ukrainians affected by
                                the war</a>
                        </div>
                    </div>
                    <div class="excerpt">HP Inc in partnership with the Global Business Coalition for
                        Education is providing 2000 laptops for displaced Ukrainians
                        affected by the war.</div>
                    <div class="read-more">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                <g clip-path="url(#clip0_110_2499)">
                                    <path d="M11.4806 21.2863C17.3588 21.2863 22.124 16.5211 22.124 10.6429C22.124 4.76473 17.3588 -0.000488281 11.4806 -0.000488281C5.60238 -0.000488281 0.837158 4.76473 0.837158 10.6429C0.837158 16.5211 5.60238 21.2863 11.4806 21.2863Z" fill="#00B0EB"/>
                                    <path d="M7.23218 13.3145H13.1014L7.23218 7.48904L8.32718 6.39404L14.1526 12.2633V6.39404H15.6856V13.3145V14.8475H14.1526H7.23218V13.3145Z" fill="#003548"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_110_2499">
                                    <rect width="21.243" height="21.243" fill="white" transform="translate(0.837158 -0.000976562)"/>
                                    </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-item">
                <div class="image-wrap">
                    <a href="#">
                        <img src="images/article-4.png" alt="">
                    </a>
                    
                </div>
                <div class="body-item">
                    <div class="head">
                        <div class="date">/29.02.2023</div>
                        <div class="title">
                            <a href="#">Deadline for applications to Impact
                                Business accelerator is extended</a>
                        </div>
                    </div>
                    <div class="excerpt">Exciting news! We are extending the deadline for applications
                        to our Impact Business accelerator until February 28th.</div>
                    <div class="read-more">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                <g clip-path="url(#clip0_110_2499)">
                                    <path d="M11.4806 21.2863C17.3588 21.2863 22.124 16.5211 22.124 10.6429C22.124 4.76473 17.3588 -0.000488281 11.4806 -0.000488281C5.60238 -0.000488281 0.837158 4.76473 0.837158 10.6429C0.837158 16.5211 5.60238 21.2863 11.4806 21.2863Z" fill="#00B0EB"/>
                                    <path d="M7.23218 13.3145H13.1014L7.23218 7.48904L8.32718 6.39404L14.1526 12.2633V6.39404H15.6856V13.3145V14.8475H14.1526H7.23218V13.3145Z" fill="#003548"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_110_2499">
                                    <rect width="21.243" height="21.243" fill="white" transform="translate(0.837158 -0.000976562)"/>
                                    </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-item">
                <div class="image-wrap">
                    <a href="#">
                        <img src="images/article-5.png" alt="">
                    </a>
                    
                </div>
                <div class="body-item">
                    <div class="head">
                        <div class="date">/28.04.2023</div>
                        <div class="title">
                            <a href="#">Impact Business, business
                                acceleration program, was launched</a>
                        </div>
                    </div>
                    <div class="excerpt">IT, MedTech companies, agrarian, and construction sectors
                        showed the greatest interest in Impact Business, the business
                        acceleration program aimed at the economic recovery of
                        Ukraine</div>
                    <div class="read-more">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                <g clip-path="url(#clip0_110_2499)">
                                    <path d="M11.4806 21.2863C17.3588 21.2863 22.124 16.5211 22.124 10.6429C22.124 4.76473 17.3588 -0.000488281 11.4806 -0.000488281C5.60238 -0.000488281 0.837158 4.76473 0.837158 10.6429C0.837158 16.5211 5.60238 21.2863 11.4806 21.2863Z" fill="#00B0EB"/>
                                    <path d="M7.23218 13.3145H13.1014L7.23218 7.48904L8.32718 6.39404L14.1526 12.2633V6.39404H15.6856V13.3145V14.8475H14.1526H7.23218V13.3145Z" fill="#003548"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_110_2499">
                                    <rect width="21.243" height="21.243" fill="white" transform="translate(0.837158 -0.000976562)"/>
                                    </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-item">
                <div class="image-wrap">
                    <a href="#">
                        <img src="images/article-6.png" alt="">
                    </a>
                    
                </div>
                <div class="body-item">
                    <div class="head">
                        <div class="date">/18.07.2023</div>
                        <div class="title">
                            <a href="#">We’re hiring Communications
                                Manager</a>
                        </div>
                    </div>
                    <div class="excerpt">Do you enjoy conducting research, generating ideas, telling
                        stories, and mesmerizing people with words? You’re the
                        person we are looking for!</div>
                    <div class="read-more">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                <g clip-path="url(#clip0_110_2499)">
                                    <path d="M11.4806 21.2863C17.3588 21.2863 22.124 16.5211 22.124 10.6429C22.124 4.76473 17.3588 -0.000488281 11.4806 -0.000488281C5.60238 -0.000488281 0.837158 4.76473 0.837158 10.6429C0.837158 16.5211 5.60238 21.2863 11.4806 21.2863Z" fill="#00B0EB"/>
                                    <path d="M7.23218 13.3145H13.1014L7.23218 7.48904L8.32718 6.39404L14.1526 12.2633V6.39404H15.6856V13.3145V14.8475H14.1526H7.23218V13.3145Z" fill="#003548"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_110_2499">
                                    <rect width="21.243" height="21.243" fill="white" transform="translate(0.837158 -0.000976562)"/>
                                    </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-item">
                <div class="image-wrap">
                    <a href="#">
                        <img src="images/article-4.png" alt="">
                    </a>
                    
                </div>
                <div class="body-item">
                    <div class="head">
                        <div class="date">/29.02.2023</div>
                        <div class="title">
                            <a href="#">Deadline for applications to Impact
                                Business accelerator is extended</a>
                        </div>
                    </div>
                    <div class="excerpt">Exciting news! We are extending the deadline for applications
                        to our Impact Business accelerator until February 28th.</div>
                    <div class="read-more">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                <g clip-path="url(#clip0_110_2499)">
                                    <path d="M11.4806 21.2863C17.3588 21.2863 22.124 16.5211 22.124 10.6429C22.124 4.76473 17.3588 -0.000488281 11.4806 -0.000488281C5.60238 -0.000488281 0.837158 4.76473 0.837158 10.6429C0.837158 16.5211 5.60238 21.2863 11.4806 21.2863Z" fill="#00B0EB"/>
                                    <path d="M7.23218 13.3145H13.1014L7.23218 7.48904L8.32718 6.39404L14.1526 12.2633V6.39404H15.6856V13.3145V14.8475H14.1526H7.23218V13.3145Z" fill="#003548"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_110_2499">
                                    <rect width="21.243" height="21.243" fill="white" transform="translate(0.837158 -0.000976562)"/>
                                    </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-item">
                <div class="image-wrap">
                    <a href="#">
                        <img src="images/article-5.png" alt="">
                    </a>
                    
                </div>
                <div class="body-item">
                    <div class="head">
                        <div class="date">/28.04.2023</div>
                        <div class="title">
                            <a href="#">Impact Business, business
                                acceleration program, was launched</a>
                        </div>
                    </div>
                    <div class="excerpt">IT, MedTech companies, agrarian, and construction sectors
                        showed the greatest interest in Impact Business, the business
                        acceleration program aimed at the economic recovery of
                        Ukraine</div>
                    <div class="read-more">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                <g clip-path="url(#clip0_110_2499)">
                                    <path d="M11.4806 21.2863C17.3588 21.2863 22.124 16.5211 22.124 10.6429C22.124 4.76473 17.3588 -0.000488281 11.4806 -0.000488281C5.60238 -0.000488281 0.837158 4.76473 0.837158 10.6429C0.837158 16.5211 5.60238 21.2863 11.4806 21.2863Z" fill="#00B0EB"/>
                                    <path d="M7.23218 13.3145H13.1014L7.23218 7.48904L8.32718 6.39404L14.1526 12.2633V6.39404H15.6856V13.3145V14.8475H14.1526H7.23218V13.3145Z" fill="#003548"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_110_2499">
                                    <rect width="21.243" height="21.243" fill="white" transform="translate(0.837158 -0.000976562)"/>
                                    </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="news-item">
                <div class="image-wrap">
                    <a href="#">
                        <img src="images/article-6.png" alt="">
                    </a>
                    
                </div>
                <div class="body-item">
                    <div class="head">
                        <div class="date">/18.07.2023</div>
                        <div class="title">
                            <a href="#">We’re hiring Communications
                                Manager</a>
                        </div>
                    </div>
                    <div class="excerpt">Do you enjoy conducting research, generating ideas, telling
                        stories, and mesmerizing people with words? You’re the
                        person we are looking for!</div>
                    <div class="read-more">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
                                <g clip-path="url(#clip0_110_2499)">
                                    <path d="M11.4806 21.2863C17.3588 21.2863 22.124 16.5211 22.124 10.6429C22.124 4.76473 17.3588 -0.000488281 11.4806 -0.000488281C5.60238 -0.000488281 0.837158 4.76473 0.837158 10.6429C0.837158 16.5211 5.60238 21.2863 11.4806 21.2863Z" fill="#00B0EB"/>
                                    <path d="M7.23218 13.3145H13.1014L7.23218 7.48904L8.32718 6.39404L14.1526 12.2633V6.39404H15.6856V13.3145V14.8475H14.1526H7.23218V13.3145Z" fill="#003548"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_110_2499">
                                    <rect width="21.243" height="21.243" fill="white" transform="translate(0.837158 -0.000976562)"/>
                                    </clipPath>
                                </defs>
                                </svg>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>

        <?php
            $max_num_pages = $the_query->max_num_pages;
            if( $max_num_pages > 1 ):
                $current_url = get_permalink();
                $pages = get_pagination_page_numbers($current_page, $max_num_pages, $current_url);                
        ?>
        <div class="page-navigation">
            <div class="prev-page nav-slide">
                <a href="<?php echo $pages['prev_page']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="181" height="12" viewBox="0 0 181 12" fill="none">
                    <path d="M0.0820308 6.6939C1.3121 6.93879 4.34627 8.00002 4.26427 12L5.65836 12C5.74036 9.30614 4.59228 7.67349 3.28021 6.6939L180.082 6.69388L180.082 5.22449L3.28021 5.22451C4.51028 4.24492 5.65834 2.6939 5.57634 2.28852e-05L4.18227 2.3007e-05C4.26427 3.91839 1.2301 4.89798 2.99252e-05 5.22451L0.0820308 6.6939Z" fill="#00B0EB"/>
                    </svg>                    
                </a>

            </div>
            <div class="pages">
                <span class="current"><?php echo _e('page', 'theimpactforce') ?></span> /
                <span class="all"><?php echo ($current_page < 10) ? '0'. $current_page  : $current_page; ?></span>
            </div>
           
            <div class="next-page nav-slide">
                <a href="<?php echo $pages['next_page']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="181" height="12" viewBox="0 0 181 12" fill="none">
                    <path d="M180 5.30612C178.77 5.06122 175.736 4 175.818 0H174.424C174.342 2.69388 175.49 4.32653 176.802 5.30612H0V6.77551H176.802C175.572 7.7551 174.424 9.30612 174.506 12H175.9C175.818 8.08163 178.852 7.10204 180.082 6.77551L180 5.30612Z" fill="#00B0EB"/>
                    </svg>                    
                </a>
            </div>
        </div>
        <?php
            endif;
        ?>
    </div>
</section>