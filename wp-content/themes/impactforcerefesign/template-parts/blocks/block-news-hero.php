<section class="news-hero">
    <div class="hero-news-slider">
        <div class="slider-navigation-wrap">
            <div class="container">
                <div id="blog-hero-slider-navigation" class="slider-navigation">
                    <div class="prev-slide nav-slide">
                        <span>PREVIOUS</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                            <path d="M0.0577046 5.02041C0.923225 5.20408 3.05818 6 3.00048 9L3.98141 9C4.03911 6.97959 3.23128 5.7551 2.30806 5.02041L37 5.02041L37 3.91837L2.30806 3.91837C3.17358 3.18367 3.9814 2.02041 3.9237 3.05994e-08L2.94277 1.16354e-07C3.00048 2.93878 0.865524 3.67347 -4.44453e-07 3.91837L0.0577046 5.02041Z" fill="#fff"/>
                        </svg>
                    </div>
                    <div class="next-slide nav-slide">
                        <span>nEXT</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                            <path d="M36.9423 3.97959C36.0768 3.79592 33.9418 3 33.9995 0L33.0186 0C32.9609 2.02041 33.7687 3.2449 34.6919 3.97959L1.58209e-10 3.97959L2.0202e-10 5.08163L34.6919 5.08163C33.8264 5.81633 33.0186 6.97959 33.0763 9H34.0572C33.9995 6.06122 36.1345 5.32653 37 5.08163L36.9423 3.97959Z" fill="#fff"/>
                        </svg>
                    </div>
                </div>                         
            </div>
        </div>
        <div id="blog-hero-slider" class="slider-wrap owl-carousel">
            <?php
                $slider = get_field('slider');
                if( !empty($slider) ):
                    foreach ($slider as $key => $slide):
            ?>            
                <div class="slide-item <?php echo $slide['theme_color']; ?>-theme">
                    <div class="container">
                        <div class="title"><?php echo $slide['title']; ?></div>
                        <div class="slide-content">
                            <div class="sub-title"><?php echo $slide['subtitle']; ?></div>
                            <div class="content"><?php echo $slide['content']; ?></div>                                
                        </div>
                        <?php if($slide['link_title'] != ''): ?>
                            <div class="read-more">
                                <a href="<?php echo $slide['link_url']; ?>"><?php echo $slide['link_title']; ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if( !empty($slide['image']) ): ?>
                            <div class="image-wrap">
                                <img src="<?php echo $slide['image']['url']; ?>" alt="<?php echo $slide['image']['alt']; ?>">
                            </div>
                        <?php endif; ?>
                        <?php if( !empty($slide['image']) ): ?>
                            <div class="image-wrap mobile-mage-wrap">
                                <img src="<?php echo $slide['image_mobile']['url']; ?>" alt="<?php echo $slide['image_mobile']['alt']; ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                    endforeach;
                endif;
            ?>            
        </div>
    </div>
</section>