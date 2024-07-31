<?php

function register_blocks_categories( $categories ) {

$categories = array_merge( $categories, array( array(
        'slug' => 'impactforce',
        'title' => __( 'ImpactForce' )
    ) ) );

    
    return $categories;
}
add_action( version_compare('5.8', get_bloginfo('version'), '<=' ) ? 'block_categories_all' : 'block_categories', 'register_blocks_categories');

function custom_acf_init() {

    $blocksArray = array(
        'Main hero',
        'Main WWA',
        'Main reports',
        'Main impact',
        'Main goals',
        'Main programs',
        'Main projects',
        'Main partners',
        'Main news',
        'WWA hero',
        'WWA founded',
        'WWA organisational',
        'WWA focus on',
        'WWA impact',
        'WWA impact new',
        'WWA targets',
        'WWA team board',
        'OW hero',
        'OW pillars',
        'OW pillar advocacy',
        'OW pillar capacity bildings',
        'OW pillar community empowerment',
        'News hero',
        'News grid',
        'News subscription',
        'Page content',
        'Landing page'
    );
    // check function exists
    if( function_exists('acf_register_block') ) {

        foreach($blocksArray as $blk){
          $str_title = sanitize_file_name(strtolower($blk));

          acf_register_block(array(
            'name' => sanitize_file_name(strtolower($blk)),
            'title' => $blk,
            'description' => $blk,
            'render_callback' => 'custom_acf_block_render_callback',
            'category' => 'impactforce',
            'icon' => 'block-default',
            'keywords' => array('builder', 'revo'),
            'anchor' => true,
            'reusable' => false,
            'multiple' => false,
            'inserter' => true,
            'html' => false,
            'className' => true,
            'customClassName' => true,
            'mode' => 'edit',
            'supports' => array('mode' => false),
          ));

        }

    }
}
add_action('acf/init', 'custom_acf_init');

function custom_acf_block_render_callback($block) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "partials/block" folder
	if(file_exists(STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php")) {
		include(STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php");
    }
}



add_action( 'init', 'register_projects' );
 
function register_projects() {
 
	$args = array(
		'labels' => array(
			'menu_name' => 'Projects',
      'singular_name' => 'Project',

		),
		'public' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
	);

	register_post_type( 'project', $args );
}