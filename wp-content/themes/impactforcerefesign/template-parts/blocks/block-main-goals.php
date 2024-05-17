<section class="goals">
    <div class="container">
        <div class="columns display-flex">
            <div class="column left-column">
                <div class="section-title"><?php echo get_field('title'); ?></div>
                <div class="goals-wrap">
                    <?php 
                        $icons = get_field('icons');
                        if( !empty($icons) ):
                            foreach( $icons as $key => $icon):
                    ?>
                            <div class="goal-item">
                                <img src="<?php echo $icon['icon']['url']; ?>" alt="">
                            </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                </div>
            </div>
            <div class="column right-column">
                <div class="our-goals">
                    <?php
                        $goals = get_field('goals_list');
                        if( !empty($goals) ):
                    ?>
                            <div class="title-list"><?php echo $goals['title']; ?></div>
                    <?php
                        endif;
                    ?>
                    <div class="list-wrap">
                        <?php 
                            if( is_array($goals['goals']) ): 
                                foreach( $goals['goals'] as $key => $goal):
                        ?>
                                    <div class="list-item"><?php echo $goal['goal']; ?></div>
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