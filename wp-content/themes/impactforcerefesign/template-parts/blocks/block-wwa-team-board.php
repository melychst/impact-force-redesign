<section class="WWA-team-board">
    <div class="board-title">
        <?php
            $top_row = get_field('top_row');
            if( !empty($top_row) ):
        ?>
                <div class="container">
                    <div class="title"><?php echo $top_row['title']; ?></div>
                </div>
        <?php
            endif; 
        ?>
        <?php if( $top_row['image'] ): ?>
            <div class="background-image">
                <img src="<?php echo $top_row['image']['url']; ?>" alt="<?php echo $top_row['image']['alt']; ?>">
            </div>
        <?php endif; ?>
    </div>
    <div class="managers">
        <div class="container">
            <?php
                $managers = get_field('managers');
                if( !empty($managers) ):
                    foreach( $managers as $key => $manager):
            ?>
                        <div class="manager-row">
                            <div class="columns display-flex">
                                <div class="column column-left">
                                    <span class="position"><?php echo $manager['position']; ?></span>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                            <path d="M0 17.3005H14.5803L0 2.72021L2.72021 0L17.3005 14.5803V0H21V17.3005V21H17.3005H0V17.3005Z" fill="#00B0EB"/>
                                        </svg>
                                    </div>
                                    <div class="description"><?php echo $manager['content']; ?></div>
                                </div>
                                <div class="column column-center">
                                    <div class="name"><?php echo $manager['name']; ?></div>
                                    <div class="link-email">
                                        <a href="mailto:<?php echo $manager['email']; ?>"><?php echo $manager['email']; ?></a>
                                    </div>
                                </div>
                                <div class="column column-right">
                                    <?php if( $manager['image'] ): ?>
                                        <div class="image-wrap">
                                            <img src="<?php echo $manager['image']['url']; ?>" alt="<?php echo $manager['name']; ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>                        
                        </div>
            <?php
                    endforeach;
                endif;
            ?>
        </div>
    </div>
    <div class="advisors">
        <div class="container">
            <?php 
                $advisors = get_field('advisors');
                if( !empty($advisors) ):
            ?>
                <div class="title-row">
                    <div class="title"><?php echo $advisors['title']; ?></div>
                    <div id="advisor-slider-navigation" class="slider-navigation">
                        <div class="prev-slide nav-slide">
                            <span>PREVIOUS</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                                <path d="M0.0577046 5.02041C0.923225 5.20408 3.05818 6 3.00048 9L3.98141 9C4.03911 6.97959 3.23128 5.7551 2.30806 5.02041L37 5.02041L37 3.91837L2.30806 3.91837C3.17358 3.18367 3.9814 2.02041 3.9237 3.05994e-08L2.94277 1.16354e-07C3.00048 2.93878 0.865524 3.67347 -4.44453e-07 3.91837L0.0577046 5.02041Z" fill="#00B0EB"/>
                            </svg>
                        </div>
                        <div class="next-slide nav-slide">
                            <span>nEXT</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                                <path d="M36.9423 3.97959C36.0768 3.79592 33.9418 3 33.9995 0L33.0186 0C32.9609 2.02041 33.7687 3.2449 34.6919 3.97959L1.58209e-10 3.97959L2.0202e-10 5.08163L34.6919 5.08163C33.8264 5.81633 33.0186 6.97959 33.0763 9H34.0572C33.9995 6.06122 36.1345 5.32653 37 5.08163L36.9423 3.97959Z" fill="#00B0EB"/>
                            </svg>
                        </div>
                    </div>                        
                </div>
                <div id="advisor-slider" class="advisors-slider owl-carousel">
                    <?php 
                        if( $advisors['slider'] ):
                            foreach( $advisors['slider'] as $key => $slide ):
                    ?>
                                <div class="slide-item team-item">
                                    <?php if( $slide['image'] ): ?>
                                    <div class="image-wrap">
                                        <img src="<?php echo $slide['image']['url']; ?>" alt="">
                                    </div>
                                    <?php endif; ?>
                                    <div class="name"><?php echo $slide['name']; ?></div>
                                </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                </div>
            <?php
                endif;
            ?>
        </div>
    </div>
    <div class="team">
        <div class="container">
            <?php
                $team = get_field('leadership_team');
                if( !empty($team) ):
            ?>
                <div class="title-row">
                    <div class="title"><?php echo $team['title']; ?></div>
                    <?php if( $team['image'] ): ?>
                        <div class="background-image">
                            <img src="<?php echo $team['image']['url']; ?>" alt="<?php echo $team['title']; ?>">
                        </div>
                    <?php endif; ?>                            
                </div>
                <div id="team-slider-navigation" class="slider-navigation">
                    <div class="prev-slide nav-slide">
                        <span>PREVIOUS</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                            <path d="M0.0577046 5.02041C0.923225 5.20408 3.05818 6 3.00048 9L3.98141 9C4.03911 6.97959 3.23128 5.7551 2.30806 5.02041L37 5.02041L37 3.91837L2.30806 3.91837C3.17358 3.18367 3.9814 2.02041 3.9237 3.05994e-08L2.94277 1.16354e-07C3.00048 2.93878 0.865524 3.67347 -4.44453e-07 3.91837L0.0577046 5.02041Z" fill="#00B0EB"/>
                        </svg>
                    </div>
                    <div class="next-slide nav-slide">
                        <span>nEXT</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                            <path d="M36.9423 3.97959C36.0768 3.79592 33.9418 3 33.9995 0L33.0186 0C32.9609 2.02041 33.7687 3.2449 34.6919 3.97959L1.58209e-10 3.97959L2.0202e-10 5.08163L34.6919 5.08163C33.8264 5.81633 33.0186 6.97959 33.0763 9H34.0572C33.9995 6.06122 36.1345 5.32653 37 5.08163L36.9423 3.97959Z" fill="#00B0EB"/>
                        </svg>
                    </div>
                </div>  
                <div id="team-slider" class="team-wrap owl-carousel">
                    <?php 
                        if( $team['team'] ):
                            foreach( $team['team'] as $key => $team_item):
                    ?>
                            <div class="team-item">
                                <?php if( $team_item['image'] ): ?>
                                        <div class="image-wrap">
                                            <img src="<?php echo $team_item['image']['url']; ?>" alt="<?php echo $team_item['image']['alt']; ?>">
                                        </div>
                                <?php endif; ?>
                                <div class="name"><?php echo $team_item['name']; ?></div>
                                <div class="position"><?php echo $team_item['position']; ?></div>
                                <div class="description">
                                    <p><?php echo $team_item['description']; ?></p>
                                </div>
                            </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                </div>
            <?php
                endif; 
            ?>
        </div>
    </div>
    <div class="volunter">
        <?php 
            $volunteers = get_field('volunteers');
            if( !empty($volunteers) ):
        ?>        
            <div class="title-row">

                <div class="container">
                    <div class="title"><?php echo $volunteers['title']; ?></div>
                    <?php if( $volunteers['image'] ): ?>
                        <div class="background-image">
                            <img src="<?php echo $volunteers['image']['url']; ?>" alt="<?php echo $volunteers['image']['alt']; ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="container">
                <div id="volunteers-slider-navigation" class="slider-navigation">
                    <div class="prev-slide nav-slide">
                        <span>PREVIOUS</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                            <path d="M0.0577046 5.02041C0.923225 5.20408 3.05818 6 3.00048 9L3.98141 9C4.03911 6.97959 3.23128 5.7551 2.30806 5.02041L37 5.02041L37 3.91837L2.30806 3.91837C3.17358 3.18367 3.9814 2.02041 3.9237 3.05994e-08L2.94277 1.16354e-07C3.00048 2.93878 0.865524 3.67347 -4.44453e-07 3.91837L0.0577046 5.02041Z" fill="#003951"/>
                        </svg>
                    </div>
                    <div class="next-slide nav-slide">
                        <span>nEXT</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="9" viewBox="0 0 37 9" fill="none">
                            <path d="M36.9423 3.97959C36.0768 3.79592 33.9418 3 33.9995 0L33.0186 0C32.9609 2.02041 33.7687 3.2449 34.6919 3.97959L1.58209e-10 3.97959L2.0202e-10 5.08163L34.6919 5.08163C33.8264 5.81633 33.0186 6.97959 33.0763 9H34.0572C33.9995 6.06122 36.1345 5.32653 37 5.08163L36.9423 3.97959Z" fill="#003951"/>
                        </svg>
                    </div>
                </div> 
                <div id="volunteers-slider" class="volunter-slider owl-carousel">
                    <?php 
                        if( !empty($volunteers['slider']) ): 
                            foreach( $volunteers['slider'] as $key => $volunteer ):
                    ?>
                        <div class="slide-item team-item">
                            <?php if( $volunteer['image'] ): ?>
                                <div class="image-wrap">
                                    <img src="<?php echo $volunteer['image']['url']; ?>" alt="<?php echo $volunteer['image']['alt']; ?>">
                                </div>
                            <?php endif; ?>
                            <div class="name"><?php echo $volunteer['name']; ?></div>
                        </div>
                    <?php
                            endforeach;
                    ?>
                    <?php endif; ?>  
                </div>
            </div>  
        <?php endif; ?>                
    </div>
</section> 