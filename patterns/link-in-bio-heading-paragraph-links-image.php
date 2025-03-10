<?php
/**
 * Title: Link in bio heading, paragraph, links and full-height image
 * Slug: twentytwentyfive/link-in-bio-heading-paragraph-links-image
 * Categories: banner, about, featured
 * Description: A link in bio landing page with a heading, paragraph, links and a full height image.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"metadata":{"name":"Link in bio heading, paragraph, links and full-height image"},"align":"full","className":"is-style-section-2","style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-2" style="min-height:100vh">
	<!-- wp:columns {"align":"full"} -->
	<div class="wp-block-columns alignfull">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:heading -->
				<h2 class="wp-block-heading">Lewis Hine</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Lewis W. Hine studied sociology before moving to New York in 1901 to work at the Ethical Culture School, where he took up photography to enhance his teaching practices</p>
				<!-- /wp:paragraph -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p><a href="#">Instagram</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="#">X</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><a href="#">TikTok</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/link-in-bio-background.webp","alt":"Photo of a woman worker.","dimRatio":0,"customOverlayColor":"#6b6b6b","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","layout":{"type":"default"}} -->
			<div class="wp-block-cover" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#6b6b6b"></span>
				<img class="wp-block-cover__image-background" alt="Photo of a woman worker." src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/link-in-bio-background.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
				<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
				<p class="has-text-align-center has-large-font-size"></p>
				<!-- /wp:paragraph -->
			</div></div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
