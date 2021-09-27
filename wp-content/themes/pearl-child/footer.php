                </div> <!--.container-->
            </div> <!-- .site-content -->
        </div> <!-- id wrapper closed-->

        <?php
            //Pre footer settings

            //Global settings
            $page_pre_footer_box = pearl_get_option('page_pre_footer_box');
            $stm_pre_footer_global = pearl_get_option('page_pre_footer');
            //Page settings
            $id = get_the_ID();
            $stm_pre_footer_custom = get_post_meta($id, 'stm_pre_footer', true);
        ?>
        <?php if( $page_pre_footer_box == 'true' ): ?>
            <div class="pre_footer">
                <?php if( empty ($stm_pre_footer_custom) ): ?>
                   <?php pearl_sidebar(false, $stm_pre_footer_global); ?>
                <?php else: ?>
                    <?php pearl_sidebar(false, $stm_pre_footer_custom); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

         <!-- code for pre footer containing company contact details in footer area -->
                <div class="container-fluid">
                  <div class="row" style="background-color:rgba(10,85,136,0.9); display: flex;">
                     <div class="col-6" style="max-width: 740px; margin-top: 60px;">
                      <div class="row" style="margin-left: 100px;">
                         <img width="300" height="82" src="http://localhost/websites/pixelmatrix-website/wp-content/uploads/2021/09/logo-white.png" alt="Pixel Matrix" loading="lazy">
                      </div>
                      <div class="row" style="margin-left: 90px; margin-top: 10px;">
                        <div>
                          <p><span style="font-weight: 400; color: #fff;">Pixel Matrix is a leading website and mobile app development company in India, offering a range of innovative design & development solutions. Hire web and mobile app developers with expertise in the latest development technologies, including PHP, Laravel, React JS, Android Studio, and Xamarin, etc.</span></p>
                        </div>
                      </div>
                      <div class="row" style="margin-left: 90px; margin-top: 10px; margin-bottom: 100px;">
                          <h3 style="color: #ffffff;text-align: left">Email</h3>
                            <div style="display: flex;">
                              <div class="col">
                                <span style="display: flex;"><i style="font-size:30px;color:#ffffff;font-weight: normal;" class="custom far fa-envelope"></i><h5 class="no_line"><span style="color: #ffffff; padding-left: 15px; padding-right: 15px;">info@pxmatrix.com</span></h5></span>
                            </div>
                            <div class="col" style="padding-left: 60px;">
                              <span style="display: flex;"><i style="font-size:30px;color:#ffffff;font-weight: normal; padding-left: 15px; padding-right: 15px;" class="custom far fa-envelope"></i><h5 class="no_line"><span style="color: #ffffff;">hr@pxmatrix.com</span></h5></span>
                            </div>
                         </div>
                      </div>
                    </div>
                    <div class="col-6" style="max-width: 540px; margin-top:60px;">
                        <div class="row" style="margin-left: 90px;">
                            <h3 style="color: #ffffff;text-align: left">INDIA</h3>
                            <div style="display: flex;">
                                 <div style="width: 50px; height: 65px;"><i style="font-size:30px;color:#ffffff;font-weight: normal;" class="custom stmicon-pin_b"></i></div>
                                <div><h5 style="color:#ffffff; margin-left: 20px"><span>1008-1010 AKIK Complex, Opp. Rajpath Club, S.G. Highway Bodakdev; Ahmedabad, Gujarat - 380054</span></h5></div>
                            </div>                           
                        </div>
                        <div class="row" style="margin-left: 90px;margin-top: 30px;">
                            <h3 style="color: #ffffff;text-align: left">CANADA</h3>
                            <div style="display: flex;">
                                 <div style="width: 50px; height: 65px;"><i style="font-size:30px;color:#ffffff;font-weight: normal;" class="custom stmicon-pin_b"></i></div>
                                <div><h5 style="color:#ffffff;"><span>37, TALENCE DR, Hamilton, ON L8J 2T7</span></h5></div>
                            </div>                           
                        </div>
                        <div class="row" style="margin-left: 90px; margin-top: 30px;">
                            <h3 style="color: #ffffff;text-align: left">CONTACT</h3>
                            <div style="display: flex;">
                                 <div style="width: 50px; height: 65px;"><i style="font-size:30px;color:#ffffff;font-weight: normal;" class="custom stmicon-phone_b"></i></div>
                                <div><h5 style="color:#ffffff;"><span>(+91) 87993 10568</span></h5></div>
                            </div>                           
                        </div>
                    </div>
                  </div>
            </div>
   <!-- End of code for Company Address Details in footer.php  -->

        <?php get_template_part('partials/footer/player'); ?>
        <div class="stm-footer">
			<?php get_template_part('partials/footer/main'); ?>
        </div>

        <?php
        get_template_part('partials/modals/main');
        get_template_part('partials/footer/ga');
        get_template_part('partials/footer/scroll_top');
        get_template_part('partials/modals/product_view');
        do_action('pearl_before_footer');
        wp_footer(); ?>

    </body>
</html>