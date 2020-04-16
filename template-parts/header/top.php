<?php
/**
 * Template part for displaying the top part of the header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$headerClass = is_front_page() ? 'site-header' : 'site-header-subpage';
?>

<div class="header-top">
    <div class="top-content">
        <?php get_template_part('template-parts/header/branding'); ?>
        <div class="site-directs">
            <?php get_template_part('template-parts/header/header-actions'); ?>
            <?php get_template_part( 'template-parts/header/navigation' ); ?>
        </div>
    </div>
    <?php if($headerClass == "site-header-subpage") { ?>
        <div class="subpage-header-tag">
            <span>We've got you covered.</span>
        </div>
    <?php } ?>
</div><!-- .header-top -->
