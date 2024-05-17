<section class="programs">
    <div class="container">
        <div class="section-title"><?php echo get_field('title'); ?></div>
        <?php 
            $button_title = get_field('button_title');
            $button_link = get_field('button_link');
            if( $button_title != ''):
        ?>
            <div class="content-link">
                <a class="icon-link" href="<?php echo $button_link; ?>"><?php echo $button_title; ?></a>
            </div>        
        <?php
            endif;
        ?>
    </div>
    <?
        $img = get_field('image'); 
        if( $img ):
    ?>
            <div class="background-image">
                <img src="<?php echo $img['url']; ?>" alt="<?php echo  $img['alt']; ?>">
            </div>
    <?php
        endif;
    ?>
</section>