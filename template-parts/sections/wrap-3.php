<?php
/**
 * Template part for displaying Section 3 of the front page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="wrap wrap-3">
    <div class="container-fluid">
        <div id="bond">
            <div class="big-text">
                <span>SERVICES WE OFFER</span>
            </div>
            <div class="row row-eq-height mt-4">
                <div class="col-lg-6 col-md-12 mb-5">
                    <img class="pb-4" src="<?= get_template_directory_uri() ?>/assets/images/residential.jpg" alt="Residential">
                    <div class="service-text pb-5 text-center">
                        <span class="font-weight-bolder">Residential Roofing</span>
                        <p>Whether your roof needs a quick fix or to be fully replaced, we have your solution. With extended warranties and top of the line materials, you won’t have to worry about your roof for years to come.</p>
                    </div>
                    <div class="action shadow">
                        <a href="/residential"><div id="action-btn"><span>Learn More</span></div></a>
                    </div><!-- .action -->
                </div>
                <div class="col-lg-6 col-md-12 mb-5">
                    <img class="pb-4" src="<?= get_template_directory_uri() ?>/assets/images/commercial.jpg" alt="Commercial">
                    <div class="service-text pb-5 text-center">   
                        <span class="font-weight-bolder">Commercial Roofing</span>
                        <p>With a wide variety of material and installation certifications, you can be sure we have the products you need and the knowledge to install it. Let us take care of your roof so you can focus on what matters: Your business.</p>
                    </div>
                    <div class="action shadow">
                        <a href="/commercial"><div id="action-btn"><span>Learn More</span></div></a>
                    </div><!-- .action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- .wrap-3 -->
