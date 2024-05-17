<section class="who-we-are">
    <div class="container">
        <div class="section-title"><?php echo get_field('title'); ?></div>
        <?php
            $link = get_field('button_link');
            $title = get_field('button_title');
            if($title != ''):
        ?>
            <div class="content-link">
                <a class="icon-link" href="<?php echo $title; ?>"><?php echo $title; ?></a>
            </div>        
        <?php
            endif;
        ?>
    </div>
    <?php 
        $image = get_field('image_background');
        if( $image ):
    ?>
            <div class="background-image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </div>    
    <?php        
        endif;
    ?>
</section>