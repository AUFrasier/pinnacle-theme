<?php
/**
 * Template part for displaying the bottom part of the header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="header-bottom">
    <?php if(is_front_page()) {
        get_template_part( 'template-parts/header/hero' );
    } ?>
    <!-- <?php if(is_page(5)) { ?>
        <img src="<?= get_template_directory_uri() ?>/assets/images/PR-header-4.jpg" alt="">
    <?php } ?> -->
</div><!-- .header-bottom -->
