<?php
/**
 * Template part for displaying Section 4 of the front page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="wrap wrap-4">
    <div class="container-fluid">
        <div id="bond">
            <?php get_template_part('template-parts/partials/row-icons') ?>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12 mb-5 mt-5">
                    <?php get_template_part('template-parts/partials/action-button') ?>
                </div>
                <div class="col-lg-12 mb-5 mt-5">
                    <?php get_template_part('template-parts/partials/divider') ?>
                    <?php get_template_part('template-parts/partials/testimonials') ?>
                    <?php get_template_part('template-parts/partials/divider') ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- .wrap-4 -->
