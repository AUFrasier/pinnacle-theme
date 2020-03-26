<?php
/**
 * Template part for displaying the bottom part of the header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
<<<<<<< HEAD

$subPageBgImgHeader = "";
if(is_page(5)) { 
    $subPageBgImgHeader = "subpage-bg-header-residential";
}
if(is_page(7)) { 
    $subPageBgImgHeader = "subpage-bg-header-commercial";
}
if(is_page(9)) { 
    $subPageBgImgHeader = "subpage-bg-header-about-us";
}
if(is_page(11)) { 
    $subPageBgImgHeader = "subpage-bg-header-contact-us";
}
if(is_home()) { 
    $subPageBgImgHeader = "subpage-bg-header-blog";
}
?>

<div class="header-bottom <?= $subPageBgImgHeader ?>">
    <?php if(is_front_page()) {
        get_template_part( 'template-parts/header/hero' );
    } ?>
    <!-- <?php if(is_page(5)) { ?>
        <img src="<?= get_template_directory_uri() ?>/assets/images/PR-header-4.jpg" alt="">
    <?php } ?> -->
=======
?>

<div class="header-bottom">
    <?php get_template_part( 'template-parts/header/hero' ); ?>
>>>>>>> 47be7988b444771b7193ae26915b9f20a8ab62c2
</div><!-- .header-bottom -->
