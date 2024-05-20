<section class="OW-pillar-advocacy">
    <div class="title-row">
        <div class="container">
            <?php
                $top_row = get_field('top_row');
                if( !empty($top_row) ):
            ?>
                <div class="section-title"><?php echo $top_row['title']; ?></div>
                <?php if( $top_row['button_title'] != '' ): ?>
                    <div class="content-link">
                        <a class="icon-link" href="<?php echo $top_row['button_link']; ?>"><?php echo $top_row['button_title']; ?></a>
                    </div>
                <?php endif; ?>
            <?php
                endif;
            ?>
        </div>               
    </div>
    <?php
        $left_column = get_field('left_column'); 
        $right_column = get_field('right_column'); 
    ?>
    <div class="pillar-advocacy-wrap">
        <div class="container">
            <div class="columns display-flex">
                <div class="column column-left">
                    <div class="title-column">
                        <div class="sub-columns">
                            <div class="sub-colum">
                                <span class="number">/01</span>
                                <?php if( !empty($left_column['title']) ): ?>
                                    <div class="name"><?php echo $left_column['title']; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="sub-colum display-mobile main-color">
                                <span class="number">/02</span>
                                <?php if( !empty($right_column['title']) ): ?>
                                    <div class="name"><?php echo $right_column['title']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="list-wrap">
                    <?php 
                        if( !empty($left_column['list']) ):
                            foreach( $left_column['list'] as $key => $list_item):
                    ?>
                        <div class="list-item">
                            <div class="image-wrap">
                                <?php if( $list_item['icon'] ): ?>
                                    <img src="<?php echo $list_item['icon']['url']; ?>" alt="<?php echo $list_item['icon']['alt']; ?>">    
                                <?php endif; ?>
                            </div>
                            <div class="content"><?php echo $list_item['content']; ?></div>
                        </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                    </div>
                </div>
                <div class="column column-right">
                    <div class="title-column main-color display-desktop">
                        <span class="number">/02</span>
                        <?php if( !empty($right_column['title']) ): ?>
                            <div class="name"><?php echo $right_column['title']; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="list-wrap">
                        <?php 
                            if( !empty($right_column['list']) ):
                                foreach( $right_column['list'] as $key => $list_item):
                        ?>
                            <div class="list-item">
                                <div class="image-wrap">
                                    <?php if( $list_item['icon'] ): ?>
                                        <img src="<?php echo $list_item['icon']['url']; ?>" alt="<?php echo $list_item['icon']['alt']; ?>">    
                                    <?php endif; ?>
                                </div>
                                <div class="content"><?php echo $list_item['content']; ?></div>
                            </div>
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>
                    <?php
                        $image = get_field('image');
                        if( !empty($image) ):
                    ?>
                            <div class="background-image">
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