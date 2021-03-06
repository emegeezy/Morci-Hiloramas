<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sabino
 */
?>

<section class="no-results not-found">
	
	<header class="page-header">
		<h3 class="page-title"><?php esc_html_e( 'Nothing Found', 'sabino' ); ?></h3>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sabino' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>
        
            <p><?php echo wp_kses_post( get_theme_mod( 'sabino-website-nosearch-msg', __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sabino' ) ) ) ?></p>

		<?php else : ?>

			<p><?php echo wp_kses_post( get_theme_mod( 'sabino-website-nosearch-msg', __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sabino' ) ) ) ?></p>

		<?php endif; ?>
        
	</div><!-- .page-content -->
    <div class="clearboth"></div>
    
</section><!-- .no-results -->