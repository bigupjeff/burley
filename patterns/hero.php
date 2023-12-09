<?php
/**
 * Title: Hero Section
 * Slug: burley/hero
 * Categories: burley
 * Keywords: hero, section, header, hero section, hero header, hero section header, hero header section, hero header section
 *
 * @package burley
 */

$image = BURLEY_URL . 'assets/svg/pattern-images/burley-image.svg';

$strings = array(
	'title'    => __( 'Block-based websites made simple.', 'burley' ),
	'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.',
	'button'   => __( 'Learn More', 'burley' ),
);

?>
<!-- wp:group {"backgroundColor":"burley-bg-alt"} -->
<div class="wp-block-group has-burley-bg-alt-background-color has-background" >

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"huge"} -->
<h1 class="has-text-align-center has-xxx-large-font-size"><?php echo esc_html( $strings['title'] ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php echo esc_html( $strings['subtitle'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">

<!-- wp:button {"textColor":"burley-fg-alt"} -->
<div class="wp-block-button">
<a class="wp-block-button__link has-burley-fg-alt-color has-text-color"><?php echo esc_html( $strings['button'] ); ?></a>
</div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"3vw"} -->
<div style="height:3vw" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large">
<img src="<?php echo esc_url( $image ); ?>" alt="Hero Illustration"/>
</figure>
<!-- /wp:image -->

</div>
<!-- /wp:group -->
