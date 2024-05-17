<?php if( get_field('show_section') ): ?>
<section id="<?php echo get_field('block_id'); ?>" class="idea">
    <div class="container">
        <div class="content-wrap">
            <h3 class="small-title">
                <span class="section-name"><?php echo get_field('section_name') ?></span>
                <?php echo get_field('main_title') ?>
            </h3>
            <div class="content">
                <?php
                    $list = get_field('list_items'); 
                    if( !empty($list) ):
                        foreach($list as $key => $list_item):
                ?>
                    <p>
                        <span class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="17" viewBox="0 0 37 17" fill="none">
                                <path d="M37.0001 7.50477C35.2896 7.14307 30.9684 5.69626 31.0585 -0.000549316H29.1679C29.0779 3.79732 30.6984 6.14839 32.4088 7.50477H6.10352e-05V9.67498H32.4088C30.6083 11.0314 29.0779 13.292 29.1679 16.9995H31.0585C30.9684 11.4835 35.1996 10.0367 36.91 9.67498H37.0001V7.50477Z" fill="#00B0EB"/>
                                </svg>
                        </span>
                        <?php echo $list_item['list_item']; ?>
                    </p>
                <?php
                        endforeach;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
