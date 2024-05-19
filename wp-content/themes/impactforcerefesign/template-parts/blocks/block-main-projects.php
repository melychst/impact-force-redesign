<section class="projects">
    <div class="container">
        <div id="projects-slider" class="projects-slider owl-carousel" data-slide-count="2" data-current-slide="1">
            <?php
                $projects = get_field('projects');
                if( !empty($projects) ):
                    $i = 0;
                    foreach( $projects as $key => $project ):
                        $post_id = $project['project']->ID;
            ?>
                        <div class="slide-item <?php echo $i == 0 ? 'active' : ''; ?>">
                            <div class="image-wrap">
                                <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="">
                            </div>
                            <div class="content">
                                <?php if( $i == 0 ): ?>
                                <div class="icon-wrap">
                                    <img src="<?php echo TEMPLATE_DIRECTORY_URI .'/assets/images/project-icon-work.svg'; ?>" alt="">
                                </div>
                                <?php endif; ?>
                                <div class="title"><?php echo get_the_title($post_id); ?></div>
                                <div class="meta">
                                    <div class="read-more">
                                        <a href="<?php echo get_the_permalink($post_id); ?>">More about the project</a>
                                    </div>
                                </div>
                                <div class="description"><?php echo get_the_excerpt($post_id);?></div>
                            </div>
                        </div>
            <?php
                        $i++;
                    endforeach;
                endif; 
            ?>
        </div>
        <div id="projects-slider-navigation" class="slider-navigation">
            <div class="prev-slide nav-slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="181" height="12" viewBox="0 0 181 12" fill="none">
                <path d="M0.0820308 6.6939C1.3121 6.93879 4.34627 8.00002 4.26427 12L5.65836 12C5.74036 9.30614 4.59228 7.67349 3.28021 6.6939L180.082 6.69388L180.082 5.22449L3.28021 5.22451C4.51028 4.24492 5.65834 2.6939 5.57634 2.28852e-05L4.18227 2.3007e-05C4.26427 3.91839 1.2301 4.89798 2.99252e-05 5.22451L0.0820308 6.6939Z" fill="#00B0EB"/>
                </svg>
            </div>
            <div class="pages"><span class="current">01</span> / <span class="all"><?php echo ($key + 1) < 10 ? '0'. ($key + 1) : ($key + 1); ?></span></div>
            <div class="next-slide nav-slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="181" height="12" viewBox="0 0 181 12" fill="none">
                <path d="M180 5.30612C178.77 5.06122 175.736 4 175.818 0H174.424C174.342 2.69388 175.49 4.32653 176.802 5.30612H0V6.77551H176.802C175.572 7.7551 174.424 9.30612 174.506 12H175.9C175.818 8.08163 178.852 7.10204 180.082 6.77551L180 5.30612Z" fill="#00B0EB"/>
                </svg>
            </div>
        </div>
    </div>
</section>   