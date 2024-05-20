<section class="OW-pillar-community-empowerment">
    <div class="title-row">
        <div class="container">
            <?php 
                $top_row = get_field('top_row'); 
                if( !empty($top_row) ):
            ?>
                    <div class="section-title"><?php echo $top_row['title']; ?></div>
                    <div class="content-link">
                        <?php if( $top_row['button_title'] != '' ): ?>
                            <a class="icon-link" href="<?php echo $top_row['button_link']; ?>"><?php echo $top_row['button_title']; ?></a>
                        <?php endif; ?>
                    </div>
            <?php
                endif;
            ?>
        </div>               
    </div>
    <div class="pillar-community-empowerment-wrap">
        <div class="container">
            <div class="title"><?php echo get_field('subtitle'); ?></div>
                <div class="list-wrap">
                    <?php
                        $list = get_field('list');
                        if( !empty($list) ):
                            foreach( $list as $key => $list_item ):
                    ?>
                            <div class="list-item">
                                <div class="title-item"><?php echo $list_item['title']; ?></div>
                                <div class="content"><?php echo $list_item['content']; ?></div>
                            </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                </div>            
        </div>
    </div>
</section>