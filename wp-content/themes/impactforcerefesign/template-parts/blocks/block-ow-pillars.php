<section class="OW-pillars">
    <?php $top_row = get_field('top_row'); ?>
    <div class="title-row">
        <div class="container">
            <div class="section-title"><?php echo $top_row['title']; ?></div>
            <?php if( $top_row['button_title'] != '' ): ?>
            <div class="content-link">
                <a class="icon-link" href="<?php echo $top_row['button_link']; ?>"><?php echo $top_row['button_title']; ?></a>
            </div>
            <?php endif; ?>
        </div>
        <?php if( $top_row['image'] ): ?>
        <div class="background-image">
            <img src="<?php echo $top_row['image']['url']; ?>" alt="<?php echo $top_row['image']['alt']; ?>">
        </div>  
        <?php endif; ?>              
    </div>
    <div class="container">
        <div class="pillars-wrap">
            <?php 
                $pillars_list = get_field("pillars_list");
                if( !empty($pillars_list) ):
                    foreach( $pillars_list as $key => $pillar ):
            ?>
            <div class="pillar-item <?php echo $pillar['color_theme']; ?>-item">
                <span class="number">/0<?php echo $key + 1;?></span>
                <div class="name"><?php echo $pillar['title']; ?></div>
                <div class="description"><?php echo $pillar['content']; ?></div>
                <div  class="icon-wrap">
                    <?php if( $pillar['icon'] ): ?>
                        <img src="<?php echo $pillar['icon']['url']; ?>" alt="<?php echo $pillar['icon']['alt']; ?>">
                    <?php endif; ?>
                </div>
            </div>  
            <?php
                    endforeach;
                endif;
            ?>
        </div>
        <?php $slider = get_field('slider'); ?>
        <div class="pillars-slider-wrap">
            <div class="columns display-flex">
                <div class="column column-left">
                    <div class="title"><?php echo $slider['title']; ?></div>
                    <div id="pillars-slider" class="pillars-slider owl-carousel">
                        <?php 
                            if( !empty($slider['slider']) ):
                                foreach( $slider['slider']as $key => $slide ):
                                    if( $key == 0 ):
                                        $first_slide_color = $slide['color'];
                                    endif;
                        ?>
                                    <div class="slide-item <?php echo $slide['color'] .'-item'; ?>" data-slide-color="<?php echo $slide['color']; ?>">
                                        <div class="slide-title"><?php echo $slide['title']; ?></div>
                                        <div class="content"><?php echo $slide['content']; ?></div>
                                    </div>                        
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>
                    
                    <div id="pillars-slider-navigtion" class="slider-navigation" data-color-nav="<?php echo $first_slide_color; ?>">
                        <div class="prev-slide nav-slide">
                            <span>PREVIOUS</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                                <path d="M0.0577046 5.02041C0.923225 5.20408 3.05818 6 3.00048 9L3.98141 9C4.03911 6.97959 3.23128 5.7551 2.30806 5.02041L37 5.02041L37 3.91837L2.30806 3.91837C3.17358 3.18367 3.9814 2.02041 3.9237 3.05994e-08L2.94277 1.16354e-07C3.00048 2.93878 0.865524 3.67347 -4.44453e-07 3.91837L0.0577046 5.02041Z" fill="#00B0EB"/>
                            </svg>
                        </div>
                        <div class="next-slide nav-slide">
                            <span>nEXT</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                                <path d="M36.9423 3.97959C36.0768 3.79592 33.9418 3 33.9995 0L33.0186 0C32.9609 2.02041 33.7687 3.2449 34.6919 3.97959L1.58209e-10 3.97959L2.0202e-10 5.08163L34.6919 5.08163C33.8264 5.81633 33.0186 6.97959 33.0763 9H34.0572C33.9995 6.06122 36.1345 5.32653 37 5.08163L36.9423 3.97959Z" fill="#00B0EB"/>
                            </svg>
                        </div>
                    </div> 

                </div>
                <div class="column column-right">
                    <?php 
                        $image = get_field('image');
                        if( !empty($image) ):
                    ?>
                            <div class="image-wrap">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                    <?php
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>