<?php
/**
 * Template part for displaying a post's header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$subTitleBgImgHeader = "";
$subpageTitleClass = "subpage-title-bg-header";
if(is_page(5)) { 
    $subTitleBgImgHeader = "subpage-title-header-residential";
}
if(is_page(7)) { 
    $subTitleBgImgHeader = "subpage-title-header-commercial";
}
if(is_page(9)) { 
    $subTitleBgImgHeader = "subpage-title-header-about-us";
}
if(is_page(11)) { 
    $subTitleBgImgHeader = "subpage-title-header-contact-us";
}
?>

<header class="entry-header <?php 
echo $subTitleBgImgHeader . " "; 
if (!is_singular( 'post' ) && !is_home()) {
	echo $subpageTitleClass;
}
?>">
	<div class="entry-header-bg"> 
		<?php
		get_template_part( 'template-parts/content/entry_title', get_post_type() );

		if ( ! is_search() ) {
			get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
		}
		?>
	</div>
</header><!-- .entry-header -->
