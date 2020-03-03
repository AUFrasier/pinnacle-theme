<?php
/**
 * Template part for displaying Section 5 of the front page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="wrap wrap-5">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <div id="bond">
                    <div class="big-text">
                        <span>Contact Us</span>
                    </div>
                    <div class="contact-tag">
                        <p class="font-weight-bolder">Send us a message today to find out how we can help you!</p>
                    </div>
                    <div class="address">
                        <p class="address-text"><a href="https://goo.gl/maps/YwT4RFhYDi3AWMrHA">1101 Wedgwood Heights <br> Schenectady, New York 12306</a></p>
                    </div>
                    <div class="contact-info">
                        <p><span>Office:</span> <a href="tel:+5184352400">518-435-2400</a></p>
                        <p><span>Fax:</span> 518-435-2343</p>
                        <p><span>Email:</span> <a href="mailto:info@pinnroof.com">info@pinnroof.com</a></p>
                    </div>
                    <div class="service-area-info">
                        <p><span class="font-weight-bolder">Service Areas - Central New York and Southern Vermont:</span> Albany, Schenectady, Saratoga Springs (New York) and Manchester, VT, and the surrounding areas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <?php get_template_part('template-parts/partials/form') ?>
            </div>
        </div>
    </div>
</div><!-- .wrap-5 -->
