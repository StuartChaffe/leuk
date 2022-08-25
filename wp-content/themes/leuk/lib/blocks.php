<?php

add_filter( 'block_categories_all', 'leuk_block_categories', 10, 2 );
function leuk_block_categories( $categories, $post )
{
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'leuk-blocks',
				'title' => __( 'LEUK Blocks', 'leukblocks-master' ),
			),
		)
	);
}

add_action('acf/init', 'leuk_acf_blocks');
function leuk_acf_blocks() {
	if( function_exists('acf_register_block') ) {
		acf_register_block(array(
			'name'				=> 'banner',
			'title'				=> __('Banner'),
			'description'		=> __('Add a banner block'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'format-image',
			'align' 			=> 'full',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'banner' ),
		));
		acf_register_block(array(
			'name'				=> 'carousel',
			'title'				=> __('Carousel'),
			'description'		=> __('Add a carousel'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'slides',
			'align' 			=> 'full',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'carousel, image slider, swiper' ),
		));
		acf_register_block(array(
			'name'				=> 'change-content',
			'title'				=> __('Content changer'),
			'description'		=> __('Add a block that changes content on hover'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'align-pull-right',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'content, changing' ),
		));
		acf_register_block(array(
			'name'				=> 'columns',
			'title'				=> __('Columns'),
			'description'		=> __('Add columns content'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'columns',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'columns, content' ),
		));
		acf_register_block(array(
			'name'				=> 'contact',
			'title'				=> __('Contact'),
			'description'		=> __('Add contact content'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'id',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'contact, content' ),
		));
		acf_register_block(array(
			'name'				=> 'content',
			'title'				=> __('Content'),
			'description'		=> __('Add a content block'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'format-aside',
			'align' 			=> 'wide',
			'mode' 				=> 'auto',
			'keywords'			=> array( 'content' ),
		));
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('Call to action'),
			'description'		=> __('Add a CTA block'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'megaphone',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'cta, call to action' ),
		));
		acf_register_block(array(
			'name'				=> 'featured-posts',
			'title'				=> __('Featured posts'),
			'description'		=> __('Add featured posts'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'screenoptions',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'posts, featured' ),
		));
		acf_register_block(array(
			'name'				=> 'featured-case-study',
			'title'				=> __('Featured case studies'),
			'description'		=> __('Add featured case studies'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'screenoptions',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'posts, featured' ),
		));
		acf_register_block(array(
			'name'				=> 'jobs',
			'title'				=> __('Jobs'),
			'description'		=> __('Add all jobs'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'welcome-learn-more',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'jobs' ),
		));
		acf_register_block(array(
			'name'				=> 'logos',
			'title'				=> __('Logos'),
			'description'		=> __('Add logos block'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'buddicons-replies',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'logos' ),
		));
		acf_register_block(array(
			'name'				=> 'posts',
			'title'				=> __('Posts'),
			'description'		=> __('Add all posts'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'calendar-alt',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'posts, blogs' ),
		));
		acf_register_block(array(
			'name'				=> 'press-release',
			'title'				=> __('Press release'),
			'description'		=> __('Add all press release'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'calendar-alt',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'press, press release' ),
		));
		acf_register_block(array(
			'name'				=> 'case-study',
			'title'				=> __('Case study'),
			'description'		=> __('Add all case study'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'calendar-alt',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'case study, work' ),
		));
		acf_register_block(array(
			'name'				=> 'scrolling-content',
			'title'				=> __('Scrolling content'),
			'description'		=> __('Add content over background image'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'align-wide',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'content, scrolling' ),
		));
		acf_register_block(array(
			'name'				=> 'services',
			'title'				=> __('Service list'),
			'description'		=> __('Add a services block'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'columns',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'services' ),
		));
		acf_register_block(array(
			'name'				=> 'text-image',
			'title'				=> __('Text with image'),
			'description'		=> __('Add a standard text with image block'),
			'render_callback'	=> 'leuk_acf_block_render_callback',
			'category'			=> 'leuk-blocks',
			'icon'				=> 'align-pull-right',
			'align' 			=> 'wide',
			'mode' 				=> 'preview',
			'keywords'			=> array( 'content, text, image' ),
		));
	}
}

function leuk_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);

	if( file_exists( get_theme_file_path("/blocks/{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/{$slug}.php") );
	}
}

add_filter( 'allowed_block_types_all', 'leuk_allowed_block_types' );

function leuk_allowed_block_types( $allowed_blocks ) {

	return array(
		'acf/banner',
		'acf/carousel',
		'acf/case-study',
		'acf/change-content',
		'acf/columns',
		'acf/contact',
		'acf/content',
		'acf/cta',
		'acf/featured-posts',
		'acf/featured-case-study',
		'acf/jobs',
		'acf/logos',
		'acf/posts',
		'acf/press-release',
		'acf/scrolling-content',
		'acf/services',
		'acf/text-image',
		// 'acf/testimonial',
	);

}

add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
function add_default_value_to_image_field($field) {
	acf_render_field_setting( $field, array(
		'label'			=> 'Default Image',
		'instructions'		=> 'Appears when creating a new post',
		'type'			=> 'image',
		'name'			=> 'default_value',
	));
}
// add_action('acf/render_field_settings/type=file', 'add_default_value_to_file_field');
// function add_default_value_to_file_field($field) {
// 	acf_render_field_setting( $field, array(
// 		'label'			=> 'Default File',
// 		'instructions'		=> 'Appears when creating a new post',
// 		'type'			=> 'file',
// 		'name'			=> 'default_value',
// 	));
// }
