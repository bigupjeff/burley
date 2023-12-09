<?php
/**
 * Title: Three columns of features
 * Slug: burley/three-columns-features
 * Categories: burley
 * Keywords: section, image, text, columns, title
 *
 * @package burley
 */

$columns = array(
	array(
		'image' => 'shape-05.svg',
		'title' => __( 'Style Variations', 'burley' ),
	),
	array(
		'image' => 'shape-06.svg',
		'title' => __( 'Built-in Patterns', 'burley' ),
	),
	array(
		'image' => 'shape-04.svg',
		'title' => __( 'Powered by blocks', 'burley' ),
	),
);

$strings = array(
	'title' => __( 'Three columns of features', 'burley' ),
);

$columns_markup = '';

foreach ( $columns as $column ) {
	$columns_markup .= '<!-- wp:column -->';
	$columns_markup .= '<div class="wp-block-column">';

	$columns_markup .= '<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->';
	$columns_markup .= '<figure class="wp-block-image size-full">';
	$columns_markup .= '<img src="' . esc_url( BURLEY_URL . 'assets/svg/pattern-images/' . $column['image'] ) . '" alt="Illustration"/>';
	$columns_markup .= '</figure>';
	$columns_markup .= '<!-- /wp:image -->';

	$columns_markup .= '<!-- wp:heading {"level":3} -->';
	$columns_markup .= '<h3>' . esc_html( $column['title'] ) . '</h3>';
	$columns_markup .= '<!-- /wp:heading -->';

	$columns_markup .= '<!-- wp:paragraph -->';
	$columns_markup .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>';
	$columns_markup .= '<!-- /wp:paragraph -->';

	$columns_markup .= '</div>';
	$columns_markup .= '<!-- /wp:column -->';
}

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);">

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<?php echo wp_kses_post( $columns_markup ); ?>
</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->
