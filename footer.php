<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EGFundsDexlLagan
 */

?>

<!-- 13. footer area start -->
<footer class="section_padd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt_30 text-center">
                    <div class="footer_box">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/img/footer_logo.png" class="img-fluid" alt=""></a>
                        
												<!-- footer menu -->
												<?php
													wp_nav_menu(
														array(
															'theme_location' => 'menu-2',
														)
													);
												?>
												<!-- end footer menu -->
												
												<!-- <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#key_feature">Key Features</a></li>
                            <li><a href="#pricing">Pricing</a></li>
                            <li><a href="#testimonial">Testiminial</a></li>
                            <li><a href="#faq">FAQ</a></li>
                        </ul> -->
                        <div class="footer_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-slack-hash"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                        <span>Copyright © AppLab 2021. All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- 13. footer area end -->




    <!--====== BACK TO TOP START ======-->
    <a href="#" class="back-to-top"><i class="fal fa-angle-up"></i></a>
    <!--====== BACK TO TOP ENDS ======-->
    
		<?php wp_footer(); ?>
</body>
</html>
