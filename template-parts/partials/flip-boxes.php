<?php
/**
 * Template part for flip boxes
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>


<div class="flip-box-container pt-5">
    <div class="row justify-content-center align-items-center mb-4">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-box">
                <div class="front">
                    <img src="<?=get_template_directory_uri()?>/assets/images/Communication_icon.png" alt="Communication Icon">
                    <span>Communication</span>   
                </div>
                <div class="back">
                    <span>Communication</span>
                    <p>We keep you informed of every step in our process, so there are no surprises.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-box">
                <div class="front">
                    <img src="<?=get_template_directory_uri()?>/assets/images/Integrity_icon.png" alt="Integrity Icon">
                    <span>Integrity</span>                
                </div>
                <div class="back">
                    <span>Integrity</span>
                    <p>Our word is our bond - If we have an agreement, we don’t quit until we’ve followed through. </p>                
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-box">
                <div class="front">
                    <img src="<?=get_template_directory_uri()?>/assets/images/Orginization_icon.png" alt="Organization Icon">
                    <span>Organization</span>
                </div>
                <div class="back">
                    <span>Organization</span>
                    <p>We stay organized so you receive the highest quality roof and engaging customer service.</p>              
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="flip-box">
                <div class="front">
                    <img src="<?=get_template_directory_uri()?>/assets/images/Cleanup_icon.png" alt="Clean Up Icon">
                    <span>Site Clean-Up</span>
                </div>
                <div class="back">
                    <span>Site Clean-Up</span>
                    <p>We strive to leave every job site, home, and business looking better than when we arrived.</p>    
                </div>
            </div>
        </div>
    </div>
</div><!-- .flip-box-container -->
