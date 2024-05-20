<section class="OW-pillar-capacity-bildings">
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
    <div class="pillar-capacity-bildings-wrap">
        <div class="container">
            <div class="columns display-flex">
                <div class="column column-left">
                    <?php 
                        $left_column = get_field('left_column');
                        if( !empty($left_column) ):
                    ?>
                        <div class="title"><?php echo $left_column['title']; ?></div>
                        <?php if( !empty($left_column['image']) ): ?>
                            <div class="image-wrap">
                                <img src="<?php echo $left_column['image']['url']; ?>" alt="<?php echo $left_column['image']['alt'];?>">
                            </div>
                        <?php endif; ?>
                    <?php
                        endif;
                    ?>
                </div>
                <div class="column column-right">
                    <?php
                        $right_column = get_field('right_column');
                        if( !empty($right_column) ):
                    ?>
                            <div class="list-wrap">
                                <?php 
                                    if( !empty($right_column['list']) ):
                                        foreach( $right_column['list'] as $key => $list_item ):
                                ?>
                                <div class="list-item">
                                    <div class="content"><?php echo $list_item['content']; ?></div>
                                    <?php if( $list_item['link_title']!= '' ): ?>
                                        <div class="read-more">
                                            <a href="<?php echo $list_item['link']; ?>"><?php echo $list_item['link_title']; ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php
                                        endforeach;
                                    endif;
                                ?>
                            </div>
                    <?php 
                        endif; 
                    ?>
                    <div class="image-wrap-mobile">
                        <img src="" alt="">
                    </div>
                </div>
            </div>                    
        </div>
    </div>
</section>