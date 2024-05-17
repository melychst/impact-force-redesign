<section class="partners">
    <div class="container">
        <div class="columns display-flex">
            <div class="column left-column">
                <div class="section-title"><?php echo get_field('title'); ?></div>
            </div>
            <div class="column column-right">
                <?php
                    $image = get_field('image');
                    if($image):
                ?>
                    <div class="image-wrap">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    </div>                
                <?php
                    endif;
                ?>
            </div>
        </div>
        <div class="logos-wrap">
            <?php
                $top_row_gallary = get_field('partners_row_top');
                if( !empty($top_row_gallary) ):
            ?>
                <div class="display-flex" id="top-row">
                    <?php foreach($top_row_gallary as $key => $logo_top): ?>
                        <div class="logo-item">
                            <img src="<?php echo $logo_top['url']; ?>" alt="<?php echo $logo_top['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php
                endif;
            ?>

            <?php
                $bottom_row_gallary = get_field('partners_row_bottom');
                if( !empty($bottom_row_gallary) ):
            ?>
                <div class="display-flex" id="bottom-row">
                    <?php foreach($bottom_row_gallary as $key => $logo_top): ?>
                        <div class="logo-item">
                            <img src="<?php echo $logo_top['url']; ?>" alt="<?php echo $logo_top['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php
                endif;
            ?>
        </div>
    </div>
</section>   