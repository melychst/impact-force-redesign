<section class="WWA-targets">
    <div class="container">
        <div class="top-row">
            <div class="columns display-flex">
                <div class="column column-left">
                    <div class="title"><?php echo get_field('title'); ?></div>
                </div>
                <div class="column column-right">
                    <div class="content"><?php echo get_field('description'); ?></div>
                </div>
            </div>
        </div>
        <div class="targets-wrap">
            <?php
                $targets = get_field('targets');
                if( !empty($targets) ):
                    foreach( $targets as $key => $target_item):
            ?>
                        <div class="target-item <?php echo $target_item['theme_color']; ?>-item">
                            <span class="number">/0<?php echo $key + 1; ?></span>
                            <div class="name"><?php echo $target_item['title']; ?></div>
                            <div class="description"><?php echo $target_item['content']; ?></div>
                        </div>
            <?php
                    endforeach;
                endif;
            ?>
        </div>
    </div>
</section>  