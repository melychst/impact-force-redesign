<section class="WWA-impact">
    <div class="container">
        <div class="columns display-flex">
            <div class="column column-left">
                <div class="top-content"><?php echo get_field('title'); ?></div>
                <?php 
                    $slider = get_field('slider');
                    if( !empty($slider) ):
                ?> 
                        <div class="title"><?php echo !empty($slider['title']) ? $slider['title'] : ''; ?></div>
                        <div class="slider-wrap">
                            <div id="impact-slider" class="slider-support owl-carousel">
                                <?php 
                                    if( !empty($slider['slider']) ):
                                        foreach( $slider['slider'] as $key => $slide):
                                ?>
                                        <div class="slide-item">
                                            <?php if( $slide['icon'] ): ?>
                                            <div class="image-wrap">
                                                <img src="<?php echo $slide['icon']['url']; ?>" alt="<?php echo $slide['icon']['alt']; ?>">
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                <?php
                                        endforeach;
                                    endif
                                ?>
                            </div>
                        </div>
                        <?php if( !empty($slider['slider']) && (count($slider['slider'])) > 3): ?>
                            <div id="impact-slider-navigation" class="slider-navigation">
                                <div class="prev-slide nav-slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="181" height="12" viewBox="0 0 181 12" fill="none">
                                    <path d="M0.0820308 6.6939C1.3121 6.93879 4.34627 8.00002 4.26427 12L5.65836 12C5.74036 9.30614 4.59228 7.67349 3.28021 6.6939L180.082 6.69388L180.082 5.22449L3.28021 5.22451C4.51028 4.24492 5.65834 2.6939 5.57634 2.28852e-05L4.18227 2.3007e-05C4.26427 3.91839 1.2301 4.89798 2.99252e-05 5.22451L0.0820308 6.6939Z" fill="#43E0D5"/>
                                    </svg>
                                </div>
                                <div class="pages"><span class="current">01</span> / <span class="all">03</span></div>
                                <div class="next-slide nav-slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="181" height="12" viewBox="0 0 181 12" fill="none">
                                    <path d="M180 5.30612C178.77 5.06122 175.736 4 175.818 0H174.424C174.342 2.69388 175.49 4.32653 176.802 5.30612H0V6.77551H176.802C175.572 7.7551 174.424 9.30612 174.506 12H175.9C175.818 8.08163 178.852 7.10204 180.082 6.77551L180 5.30612Z" fill="#43E0D5"/>
                                    </svg>
                                </div>
                            </div>
                        <?php endif; ?>
                <?php
                    endif;
                ?>
            </div>
            <div class="column column-right">
                <div class="content"><?php echo get_field('content'); ?></div>
            </div>
        </div>
    </div>
</section>  