<?php

function get_pagination_page_numbers( $current_page, $max_num_pages, $current_url ){
    $pages = array(
        'prev_page' => 'javascript:void(0);',
        'next_page' => 'javascript:void(0);',
    );

    if( $current_page < $max_num_pages ):
        $pages['next_page'] = $current_url .'page/'. ($current_page + 1);
    endif;

    if($current_page > 1 ):
        $pages['prev_page'] = $current_url .'page/'. ($current_page - 1);
    endif;
    
    
    return $pages;
}