<?php
/**
 * Template part for displaying the top part of the header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>

<div class="header-top">
    <div class="top-content">
        <?php get_template_part('template-parts/header/branding'); ?>
        <div class="site-directs">
            <?php get_template_part('template-parts/header/header-actions'); ?>
            <?php get_template_part( 'template-parts/header/navigation' ); ?>
        </div>
    </div>
</div><!-- .header-top -->
