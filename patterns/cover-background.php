<?php
/**
 * Title: Cover title with background
 * Slug: burley/cover-background
 * Categories: burley
 * Keywords: cover, section, header, hero
 *
 * @package burley
 */

$image = BURLEY_URL . 'assets/svg/pattern-images/burley-cover-bg.svg';

$strings = array(
	'title'  => __( 'This is a cover with a background image', 'burley' ),
	'byline' => 'Lorem ipsum dolor',
	'button' => __( 'This is a button', 'burley' ),
);

?>
<!-- wp:cover {"url":"<?php echo esc_url( $image ); ?>","dimRatio":60,"overlayColor":"black","minHeight":60,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:60vh">
<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-60 has-background-dim"></span>
<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $image ); ?>" data-object-fit="cover"/>
<div class="wp-block-cover__inner-container">

<!-- wp:group {"textColor":"burley-fg-alt","layout":{"inherit":true}} -->
<div class="wp-block-group has-burley-fg-alt-color has-text-color">

<!-- wp:heading {"fontSize":"huge"} -->
<h2 class="has-xxx-large-font-size"><?php echo esc_html( $strings['title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php echo esc_html( $strings['byline'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link"><?php echo esc_html( $strings['button'] ); ?></a></div>
<!-- /wp:button -->
</div>

<!-- /wp:buttons -->
</div>

<!-- /wp:group -->
</div>

</div>
<!-- /wp:cover -->
