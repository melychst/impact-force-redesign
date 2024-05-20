    <section class="reports">
        <div class="container">
            <div class="columns display-flex top-row">
                <?php
                    $top_row = get_field('top_row');
                    if( is_array($top_row) ):
                ?>
                    <div class="column left-column">
                        <span class="number">/01</span>
                        <div class="column-title"><?php echo $top_row['left_title']; ?></div>
                        <div class="content"><?php echo $top_row['left_content']; ?></div>
                    </div>
                    <div class="column right-column">
                        <span class="number">/02</span>
                        <div class="column-title"><?php echo $top_row['right_title']; ?></div>
                        <div class="content"><?php echo $top_row['right_content']; ?></div>
                    </div>                
                <?php
                    endif;
                ?>
            </div>
            <?php
                $key_facts = get_field('key_facts');
                if( is_array($key_facts) ):
            ?>
                    <div class="columns display-flex bottom-row">
                        <div class="column left-column">
                            <h3><?php echo $key_facts['sub_title']; ?></h3>
                            <div class="content">
                                <p><?php echo $key_facts['content']; ?></p>                            
                            </div>
                        </div>
                        <div class="column right-column">
                            <div class="section-title"><?php echo $key_facts['main_title']; ?></div>
                        </div>
                    </div>
                    <div class="facts-wrap">
                        <?php
                            if( !empty($key_facts['facts_list']) ):
                                foreach ($key_facts['facts_list'] as $key => $fact):                            
                        ?>
                                    <div class="fact-item">
                                        <div class="title"><?php echo $fact['value']; ?></div>
                                        <div class="content"><?php echo $fact['description']; ?></div>
                                    </div>                        
                        <?php
                                endforeach;
                            endif;
                        ?>
                    </div>            
            <?php
                endif; 
            ?>
            <?php 
                $reports = get_field('reports'); 
                if( !empty($reports) ):
            ?>
            <div class="report-wrap">
                <div class="columns display-flex">
                    <div class="column left-column">
                        <div class="title"><?php echo $reports['title']; ?></div>
                        <div id="report-slider-navigation" class="slider-navigation">
                            <div class="prev-slide nav-slide">
                                <span>PREVIOUS</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                                    <path d="M0.0577046 5.02041C0.923225 5.20408 3.05818 6 3.00048 9L3.98141 9C4.03911 6.97959 3.23128 5.7551 2.30806 5.02041L37 5.02041L37 3.91837L2.30806 3.91837C3.17358 3.18367 3.9814 2.02041 3.9237 3.05994e-08L2.94277 1.16354e-07C3.00048 2.93878 0.865524 3.67347 -4.44453e-07 3.91837L0.0577046 5.02041Z" fill="#9575CD"/>
                                    </svg>
                            </div>
                            <div class="next-slide nav-slide">
                                <span>nEXT</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                                    <path d="M36.9423 3.97959C36.0768 3.79592 33.9418 3 33.9995 0L33.0186 0C32.9609 2.02041 33.7687 3.2449 34.6919 3.97959L1.58209e-10 3.97959L2.0202e-10 5.08163L34.6919 5.08163C33.8264 5.81633 33.0186 6.97959 33.0763 9H34.0572C33.9995 6.06122 36.1345 5.32653 37 5.08163L36.9423 3.97959Z" fill="#9575CD"/>
                                    </svg>
                            </div>
                        </div>
                    </div>
                    <div class="right-column">
                        <div id="report-slider" class="report-slider owl-carousel">
                            <?php 
                                if(!empty($reports['slider'])):
                                    foreach( $reports['slider'] as $key => $slide ):
                            ?>
                                        <div class="report-item">
                                            <a href="<?php echo $slide['link']; ?>" target=_blank>
                                                <div class="columns-wrap">
                                                    <div class="icon-wrap">
                                                        <img src="<?php echo TEMPLATE_DIRECTORY_URI .'/assets/images/icon-download.svg'; ?>" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <div class="name"><?php echo $slide['name']; ?></div>
                                                        <div class="meta"><?php echo $slide['size']; ?></div>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>                           
                           <?php
                                    endforeach;
                                endif;
                            ?>
                        </div> 
                        
                        <div id="report-slider-mobile" class="report-slider-mobile owl-carousel">
                            <?php 
                                if(!empty($reports['slider'])):
                                    $count = 0;
                                    $lenght = count($reports['slider']);
                                    foreach( $reports['slider'] as $key => $slide ):
                                        if($count == 0):
                                            echo '<div class="slide-wrap">';
                                        endif;
                            ?>
                                <div class="report-item" data-count="<?php echo $count; ?>">
                                    <a href="<?php echo $slide['link']; ?>" target=_blank>
                                        <div class="columns-wrap">
                                            <div class="icon-wrap">
                                                <img src="<?php echo TEMPLATE_DIRECTORY_URI .'/assets/images/icon-download.svg'; ?>" alt="">
                                            </div>
                                            <div class="content">
                                                <div class="name"><?php echo $slide['name']; ?></div>
                                                <div class="meta"><?php echo $slide['size']; ?></div>
                                            </div>                                                    
                                        </div>
                                    </a>
                                </div>    
                           <?php
                                        $count++;
                                        if( ($count == 2) || ($key == ($lenght - 1)) ):
                                            echo '</div>';
                                            $count = 0;
                                        endif;
                                    endforeach;
                                endif;
                            ?>
                        </div> 

                    </div>
                </div>
            </div>
            <?php
                endif;
            ?>
        </div>
    </section>