<?php
/**
 * Title: Posts Query loop
 * Slug: burley/posts-query-loop
 * Categories: burley
 * Keywords: section, blog, posts, latest
 *
 * @package burley
 */

$strings = array(
	'button'   => __( 'Go to post', 'burley' ),
	'title'    => __( 'Posts Query loop', 'burley' ),
	'no_posts' => __( 'Unfortunately no posts were found', 'burley' ),
);

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);">
<!-- wp:heading -->
<h2><?php echo esc_html( $strings['title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query">

<!-- wp:post-template -->

<!-- wp:post-featured-image {"align":"center"} /-->
<!-- wp:post-date {"fontSize":"small"} /-->
<!-- wp:post-title /-->
<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
<!-- wp:post-excerpt {"moreText":"\u003cstrong\u003e<?php echo esc_html( $strings['button'] ); ?>\u003c/strong\u003e","style":{"elements":{"link":{"color":{"text":"var:preset|color|burley-accent"}}}}} /-->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-numbers /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"backgroundColor":"burley-bg-alt"} -->
<p class="has-burley-bg-alt-background-color has-background"><?php echo esc_html( $strings['no_posts'] ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->
