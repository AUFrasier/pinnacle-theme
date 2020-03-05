<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<footer id="colophon" class="site-footer">
	<div class="footer-container">
		<div class="footer-content container-fluid pt-3">
			<div class="row align-items-center m-3">
				<div class="col-lg-8 col-md-12 align-self-end">
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<?php get_template_part('template-parts/footer/footer-contact') ?>
						</div>
						<div class="col-lg-6 col-md-12">
							<?php get_template_part('template-parts/footer/footer-logo') ?>
						</div>
					</div>
					<?php get_template_part('template-parts/partials/action-button') ?>
				</div>
				<div class="col-lg-4 col-md-12 align-self-start">
					<?php get_template_part('template-parts/footer/footer-menu') ?>
					<?php get_template_part('template-parts/footer/footer-actions') ?>
				</div>
			</div>
		</div><!-- .footer-container -->
	</div><!-- .footer-content -->
	<?php get_template_part( 'template-parts/footer/copyright-bar' ); ?>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
