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
        $our_initiatives = get_field('our_initiatives'); 
        $our_networks = get_field('our_networks'); 
        // echo "<pre>";
        //         print_r($our_initiatives);
        // echo "</pre>";
        // $left_column = get_field('left_column'); 
        // $right_column = get_field('right_column'); 
    ?>
    <div class="pillar-advocacy-wrap">
        <div class="container">
            <div class="title-columns display-flex">
                <div class="sub-colum tab-name" data-tab-name="our_initiatives">
                    <span class="number">/01</span>
                    <?php if( !empty($our_initiatives) ): ?>
                        <div class="name active"><?php echo $our_initiatives['title']; ?></div>
                    <?php endif; ?>
                </div>
                <div class="sub-colum tab-name" data-tab-name="our_networks">
                    <span class="number">/02</span>
                    <?php if( !empty($our_networks) ): ?>
                        <div class="name"><?php echo $our_networks['title']; ?></div>
                    <?php endif; ?>
                </div>
            </div>  
            <div class="columns display-flex columns-initiatives tab-content active" data-tab-content="our_initiatives">
                <div class="column column-left">
                    <div class="list-wrap">
                    <?php 
                        if( !empty($our_initiatives['left_column']['list']) ):
                            foreach( $our_initiatives['left_column']['list'] as $key => $list_item):
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
                    <div class="list-wrap">
                        <?php 
                            if( !empty( $our_initiatives['right_column']['list']) ):
                                foreach( $our_initiatives['right_column']['list'] as $key => $list_item):
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
                        if( !empty($our_initiatives['right_column']['image']) ):
                            $image = $our_initiatives['right_column']['image'];
                    ?>
                            <div class="background-image">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            </div> 
                    <?php
                        endif;
                    ?>    
                </div>                
            </div> 
            <div class="columns display-flex columns-networks tab-content" data-tab-content="our_networks">
                <div class="column column-left">
                    <div class="content-wrap">
                    <?php 
                        if( !empty($our_networks['left_column']) ):
                    ?>
                        <div class="content">
                            <p><?php echo $our_networks['left_column']['content']; ?></p>
                        </div>
                        <?php
                            if( !empty($our_networks['left_column']['image']) ):
                                $image = $our_networks['left_column']['image'];
                        ?>
                                <div class="image-wrap">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </div> 
                        <?php
                            endif;
                        ?> 
                    <?php
                        endif;
                    ?>
                    </div>
                </div>
                <div class="column column-right">
                    <div class="list-wrap">
                        <?php 
                            if( !empty($our_networks['right_column']['list']) ):
                                foreach( $our_networks['right_column']['list'] as $key => $list_item):
                        ?>
                            <div class="list-item">
                                <div class="icon-img">
                                    <svg width="27" height="30" viewBox="0 0 27 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.3 26.6C20.6454 26.6 26.6 20.6454 26.6 13.3C26.6 5.95461 20.6454 0 13.3 0C5.95461 0 0 5.95461 0 13.3C0 20.6454 5.95461 26.6 13.3 26.6Z" fill="#00B0EB"/>
                                        <g filter="url(#filter0_d_129_3202)">
                                        <path d="M13.3004 21.6999C17.9396 21.6999 21.7004 17.9391 21.7004 13.2999C21.7004 8.66071 17.9396 4.8999 13.3004 4.8999C8.6612 4.8999 4.90039 8.66071 4.90039 13.2999C4.90039 17.9391 8.6612 21.6999 13.3004 21.6999Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <filter id="filter0_d_129_3202" x="0.900391" y="4.8999" width="24.7998" height="24.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                        <feOffset dy="4"/>
                                        <feGaussianBlur stdDeviation="2"/>
                                        <feComposite in2="hardAlpha" operator="out"/>
                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_129_3202"/>
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_129_3202" result="shape"/>
                                        </filter>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="content"><?php echo $list_item['content']; ?></div>
                            </div>
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>   
                </div>                
            </div>
        </div>
    </div>
</section>