<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package Hello World
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function hello_world_jetpackHello Worldetup() {
	// Add theme support for Infinite Scroll.
	add_themeHello Worldupport(
		'infinite-scroll',
		array(
			'container' => 'main',
			'render'    => 'hello_world_infiniteHello Worldcroll_render',
			'footer'    => 'page',
		)
	);

	// Add theme support for Responsive Videos.
	add_themeHello Worldupport( 'jetpack-responsive-videos' );

	// Add theme support for Content Options.
	add_themeHello Worldupport(
		'jetpack-content-options',
		array(
			'post-details' => array(
				'stylesheet' => 'Hello World-style',
				'date'       => '.posted-on',
				'categories' => '.cat-links',
				'tags'       => '.tags-links',
				'author'     => '.byline',
				'comment'    => '.comments-link',
			),
			'featured-images' => array(
				'archive' => true,
				'post'    => true,
				'page'    => true,
			),
		)
	);
}
add_action( 'afterHello Worldetup_theme', 'hello_world_jetpackHello Worldetup' );

/**
 * Custom render function for Infinite Scroll.
 */
function hello_world_infiniteHello Worldcroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( isHello Worldearch() ) :
			get_template_part( 'template-parts/content', 'search' );
		else :
			get_template_part( 'template-parts/content', get_post_type() );
		endif;
	}
}
