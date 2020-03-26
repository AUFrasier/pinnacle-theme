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
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-12 mb-5">
                    <a target="_blank" href="https://www.certainteed.com/profiles/pinnacleroofingpros/">
                        <img class="pb-4" src="<?= get_template_directory_uri() ?>/assets/images/ShingleMaster.png" alt="Residential">
                    </a>
                </div>
                <div class="col-lg-6 col-md-12 mb-5">
                    <a target="_blank" href="https://www.owenscorning.com/roofing/contractors/contractor-profile/208354">
                        <img class="pb-4" src="<?= get_template_directory_uri() ?>/assets/images/OC_Platinum.png" alt="Residential">
                    </a>
                </div>
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
