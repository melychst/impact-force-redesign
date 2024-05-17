<?php if( get_field('show_section') ): ?>
<section id="<?php echo get_field('block_id'); ?>" class="partners">
    <div class="img-background">
        <img src="<?php echo TEMPLATE_DIRECTORY_URI .'/assets/images/background_3_partners.png'?>" alt="">
    </div>
    <div class="container">
        <h2 class="section-title"><?php echo get_field('main_title'); ?></h2>
        <?php 
            $partners = get_field('partners');
            if( !empty($partners) ):
        ?>
                <div class="partners-wrap">
        <?php
                    foreach( $partners as $key => $partner ):
                        $partner_logo = $partner['partner_logo'];
                        
        ?>
                            <div class="logo-item">
                                <?php 
                                    if( $partner_logo ):
                                ?>
                                        <img src="<?php echo $partner_logo['url']; ?>" alt="<?php echo $partner_logo['alt']; ?>">
                                <?php 
                                    else: 
                                        echo "LOG0 ". $key;
                                    endif;
                                ?> 
                            </div>
        <?php
                    endforeach;
        ?>
                </div>
        <?php
            endif;
        ?>
    </div>
</section>
<?php endif; ?>