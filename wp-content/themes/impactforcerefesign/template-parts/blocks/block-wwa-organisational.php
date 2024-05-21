<section class="WWA-organisational">
    <div class="container">
        <div class="top-row">
            <div class="columns display-flex">
                <div class="column left-column">
                    <div class="section-title"><?php echo get_field('title'); ?></div>
                </div>
                <div class="column right-column">
                    <div class="description"><?php echo get_field('content'); ?></div>
                </div>
            </div>
        </div>
        <div class="bottom-row">
            <div class="columns display-flex">
                <?php 
                    $list = get_field('list');
                        if( !empty($list) ):
                            foreach( $list as $key => $list_item):
                    ?>
                            <div class="column">
                                <div class="header">
                                    <?php if( $list_item['icon'] ): ?>
                                    <div class="icon-wrap">
                                        <img src="<?php echo $list_item['icon']['url']; ?>" alt="<?php echo $list_item['icon']['alt']; ?>">
                                    </div>
                                    <?php endif; ?>
                                    <span class="number">/0<?php echo $key + 1; ?></span>                                
                                </div>
                                <div class="content">
                                    <p><?php echo $list_item['description']; ?></p>
                                </div>
                            </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
            </div>
        </div>
    </div>
</section>