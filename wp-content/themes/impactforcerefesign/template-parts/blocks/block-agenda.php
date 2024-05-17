<?php if( get_field('show_section') ): ?>
<section id="<?php echo get_field('block_id'); ?>" class="agenda">
    <div class="container">
        <h2 class="section-title"><?php echo get_field('main_title'); ?></h2>
        <div class="content-wrap">
            <div class="calendar-table desktop">
                <span class="dots-wrap dots-g">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="7" viewBox="0 0 43 7" fill="none">
                        <circle cx="3.5" cy="3.5" r="3.5" fill="#003548"/>
                        <circle cx="15.5" cy="3.5" r="3.5" fill="#003548"/>
                        <circle cx="27.5" cy="3.5" r="3.5" fill="#003548"/>
                        <circle cx="39.5" cy="3.5" r="3.5" fill="#003548"/>
                        </svg>
                </span>

                <?php $times = get_field('agenda'); ?>
                <div class="table-column time-column">
                    <div class="title-td">
                        <div class="content">Time slot</div>
                    </div>                    
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_1'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_2'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_3'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_4'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_5'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_6'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_7'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_8'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_9'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_10'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_11'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_12'] ?></div>    
                    </div>
                    <div class="time-td">
                        <div class="content"><?php echo $times['time']['time_13'] ?></div>    
                    </div>
                </div>   

                <div class="table-column venue-column">
                    <div class="title venues">
                        <div class="display-flex">
                            <div data-tab-name="venues-1" class="content venues-tab-name venue-1 active">Venue 1: <br>Main Hall</div>
                            <div data-tab-name="venues-2" class="content venues-tab-name venue-2">Venue 2: Innovation Hall </div>
                        </div>
                    </div>

                    <div class="content description venues-none">
                        <span><?php echo $times['events']['combined_event_1']; ?></span>
                    </div>
                    <div class="content description  venues-none">
                        <span><?php echo $times['events']['combined_event_2']; ?></span>
                    </div>  
                    <div class="content description  venues-none">
                         <span><?php echo $times['events']['combined_event_3']; ?></span>
                    </div>                    
                    <div class="content description  venues-none">
                        <span><?php echo $times['events']['combined_event_4']; ?></span>
                    </div>                    
                    <div class="content description  venues-none">
                         <span><?php echo $times['events']['combined_event_5']; ?></span>
                    </div>
                    <div class="content description  venues-none">
                         <span><?php echo $times['events']['combined_event_6']; ?></span>
                    </div>
                    <div class="content description  venues-none">
                        <span><?php echo $times['events']['combined_event_7']; ?></span>
                    </div>
                    <div class="content description venues">
                        <div class="display-flex">
                            <div class="column content-venues venues-1 content-venues-1 active">
                                <div class="venues-1-td">
                                    <span><?php echo $times['events']['venue_1']; ?></span>
                                </div>
                            </div>
                            <div class="column content-venues venues-2 content-venues-2">
                                <div class="venues-2-td">
                                    <span><?php echo $times['events']['venue_2_1']; ?></span>
                                </div>
                                <div class="venues-2-td">
                                   <span><?php echo $times['events']['venue_2_2']; ?></span>
                                </div>
                                <div class="venues-2-td bg">
                                    <span><?php echo $times['events']['venue_2_3']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content description  venues-none">
                        <span><?php echo $times['events']['combined_event_12']; ?></span>
                    </div>
                    <div class="content description  venues-none">
                        <span><?php echo $times['events']['combined_event_13']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>