<section class="impact">
    <div class="container">
        <div class="columns display-flex">
            <div class="column left-column">
                <div class="section-title"><?php echo get_field('title'); ?></div>
                <div class="content">
                    <p><?php echo get_field('content'); ?></p>
                </div>
            </div>
            <div class="column right-column">
                <div class="sub-title"><?php echo get_field('subtitle'); ?></div>
                <div class="areas-wrap">
                    <?php
                        $focuses = get_field('focuses');
                        if(!empty($focuses)):
                            foreach ($focuses  as $key => $focus_item):
                    ?>
                    <div class="area-item <?php echo $focus_item['color']; ?>-area">
                        <span class="number">/0<?php echo $key + 1; ?></span>
                        <div class="name"><span><?php echo $focus_item['name']; ?></span></div>
                        <div class="content"><?php echo $focus_item['content']; ?></div>
                    </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                </div>
                <div class="projects-wrap">
                    <?php
                        $projects = get_field('projects');
                        if( !empty($projects) ):
                            foreach( $projects as $key => $project ):
                    ?>
                            <div class="project-name <?php echo $project['color']; ?>-project">
                                <a href="#"><?php echo $project['project']; ?></a>
                            </div>                    
                    <?php
                            endforeach;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>