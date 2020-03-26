<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$frontPageHeroClass = is_front_page() ? "front-page-hero" : '';
$headerClass = is_front_page() ? 'site-header' : 'site-header-subpage';
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:400,800,900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="<?= $headerClass ?>">
		<div class="header-container <?= $frontPageHeroClass ?>">
<<<<<<< HEAD
			<?php 
			get_template_part('template-parts/header/top');
			get_template_part( 'template-parts/header/bottom' );
			?>
=======
			<?php get_template_part('template-parts/header/top'); ?>
			<?php if(is_front_page()) {
				get_template_part( 'template-parts/header/bottom' );
			} ?>
>>>>>>> 47be7988b444771b7193ae26915b9f20a8ab62c2
		</div><!-- .header-container -->
	</header><!-- .site-header -->