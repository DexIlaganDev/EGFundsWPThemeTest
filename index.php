<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EGFundsDexLagan
 */

get_header();
?>

	<main>



			<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
						<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

				endif;
			?>


        <!-- 03. client area start -->
        <div class="client_wrapper section_padd">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 mt_30">
                        <div class="client_head text-center">
                            <p>Trusted by companies like</p>
                        </div>
                        <div class="owl-carousel client_carousel">
                            <div class="item d-flex align-items-center justify-content-center">
                               <img src="img/client_1.png" class="img-fluid" alt="">         
                            </div>
                            <div class="item d-flex align-items-center justify-content-center">
                                <img src="img/client_2.png" class="img-fluid" alt="">
                            </div>
                            <div class="item d-flex align-items-center justify-content-center">
                                <img src="img/client_3.png" class="img-fluid" alt="">
                            </div>
                            <div class="item d-flex align-items-center justify-content-center">
                                <img src="img/client_4.png" class="img-fluid" alt="">
                            </div>
                            <div class="item d-flex align-items-center justify-content-center">
                                <img src="img/client_5.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 03. client area end -->


        <!-- 04. app feature area start -->
        <div class="awesomeapp_wrapper section_padd" id="key_feature">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-5 mt_30">
                        <div class="awesomeapp_img">
                            <img src="img/app_feature.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7 mt_30">
                        <div>
                            <div class="appfeature_head">
                                <h2 class="title_head mb_30">Awesome apps features</h2>
                                <p>Increase productivity with a simple to-do app. app for managing your personal budgets.</p>
                            </div>
                            <div class="app_item d-flex align-items-center">
                                <div class="appimg_bg appimg_bg1">
                                    <img src="img/app_icon1.png" class="img-fluid" alt="">
                                </div>
                                <div class="app_subitem">
                                    <h3 class="sub_title default_color1 mb_20">Fast Performance</h3>
                                    <p>Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                </div>
                            </div>
                            <div class="app_item d-flex align-items-center">
                                <div class="appimg_bg appimg_bg2">
                                    <img src="img/app_icon2.png" class="img-fluid" alt="">
                                </div>
                                <div class="app_subitem">
                                    <h3 class="sub_title default_color2 mb_20">Prototyping</h3>
                                    <p>Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                </div>
                            </div>
                            <div class="app_item d-flex align-items-center">
                                <div class="appimg_bg appimg_bg3">
                                    <img src="img/app_icon3.png" class="img-fluid" alt="">
                                </div>
                                <div class="app_subitem">
                                    <h3 class="sub_title default_color3 mb_20">Vector Editing</h3>
                                    <p>Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 04. app feature area end -->


        <!-- 05. smart jackpot area start -->
        <div class="smartjack_wrapper section_padd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mt_30">
                        <div class="smartjack_head">
                            <h2 class="title_head">Smart jackpots that you may love this anytime & anywhere</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt_30">
                        <div class="smartjack_subhead">
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="smartjact_item">
                            <div class="appimg_bg appimg_bg1 mb_30">
                                <img src="img/smartjack_icon1.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title default_color1">Automatic Payouts</h3>
                            <p class="mt_15">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="smartjact_item">
                            <div class="appimg_bg appimg_bg2 mb_30">
                                <img src="img/smartjact_icon2.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title default_color2">Network Effect</h3>
                            <p class="mt_15">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="smartjact_item">
                            <div class="appimg_bg appimg_bg3 mb_30">
                                <img src="img/smartjact_icon3.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title default_color3">Bigger Rewards Method</h3>
                            <p class="mt_15">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 05. smart jackpot area end -->


        <!-- 06. design & build area start -->
        <div class="designbuild_wrapper border_bottm section_padd">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 order-sm-last order-md-first mt_30">
                        <div class="desingbuild_img">
                            <img src="img/design&build_img.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-5 offset-xl-1 order-sm-first order-md-last mt_30">
                        <div class="designbuild_box">
                            <h2 class="title_head mb_30">Designed & built by the latest code integration</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 06. design & build area end -->


        <!-- 07. choose our app area start -->
        <div class="chooseourapp_wrapper section_padd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt_30 text-center">
                        <div class="chooseourapp_head">
                            <h2 class="title_head">Why you should choose our app</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 text-center mt_30">
                        <div class="chooseapp_item">
                            <div class="appimg_bg appimg_bg1">
                                <img src="img/chooseapp_icon1.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title mt_30">App Development</h3>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 text-center mt_30">
                        <div class="chooseapp_item">
                            <div class="appimg_bg appimg_bg4">
                                <img src="img/chooseapp_icon2.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title mt_30">10 Times Award</h3>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 text-center mt_30">
                        <div class="chooseapp_item">
                            <div class="appimg_bg appimg_bg5">
                                <img src="img/chooseapp_icon3.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title mt_30">Cloud Storage</h3>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 text-center mt_30">
                        <div class="chooseapp_item">
                            <div class="appimg_bg appimg_bg3">
                                <img src="img/chooseapp_icon4.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title mt_30">Customization</h3>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 text-center mt_30">
                        <div class="chooseapp_item">
                            <div class="appimg_bg appimg_bg2">
                                <img src="img/chooseapp_icon5.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title mt_30">UX Planning</h3>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 text-center mt_30">
                        <div class="chooseapp_item">
                            <div class="appimg_bg appimg_bg6">
                                <img src="img/chooseapp_icon6.png" class="img-fluid" alt="">
                            </div>
                            <h3 class="sub_title mt_30">Customer Support</h3>
                            <p>Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 07. choose our app area end -->

        <!-- 07. mobile app area start -->
        <div class="mobileapp_wrapper section_padd">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt_30 text-center">
                        <div class="chooseourapp_head">
                            <h2 class="title_head">Mobile app screenshots</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel mobile_active">
                        <div class="col-lg-12 mt_30">
                            <div class="mobile-img">
                                <img src="img/mobile_app_1.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 mt_30">
                            <div class="mobile-img">
                                <img src="img/mobile_app_2.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 mt_30">
                            <div class="mobile-img">
                                <img src="img/mobile_app_3.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 mt_30">
                            <div class="mobile-img">
                                <img src="img/mobile_app_4.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 mt_30">
                            <div class="mobile-img">
                                <img src="img/mobile_app_5.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 mt_30">
                            <div class="mobile-img">
                                <img src="img/mobile_app_6.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 mt_30">
                            <div class="mobile-img">
                                <img src="img/mobile_app_7.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 mt_30">
                            <div class="mobile-img">
                                <img src="img/mobile_app_8.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 mt_30">
                            <div class="mobile-img">
                                <img src="img/mobile_app_9.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 07. mobile app area end -->


        <!-- 08. ultimate area start -->
        <div class="ultimatefe_wrapper section_padd overflow-hidden">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-lg-start">
                    <div class="col-lg-7 col-md-12 mt_30">
                        <div class="ultimate_box">
                            <h2 class="title_head mb_30">Ultimate features that we built</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="smartjact_item">
                                    <div class="appimg_bg appimg_bg1 mb_30">
                                        <img src="img/ultimate_icon1.png" class="img-fluid" alt="">
                                    </div>
                                    <h3 class="sub_title">App Development</h3>
                                    <p class="mt_15">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="smartjact_item">
                                    <div class="appimg_bg appimg_bg3 mb_30">
                                        <img src="img/ultimate_icon2.png" class="img-fluid" alt="">
                                    </div>
                                    <h3 class="sub_title">UX Planing</h3>
                                    <p class="mt_15">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="smartjact_item">
                                    <div class="appimg_bg appimg_bg6 mb_30">
                                        <img src="img/chooseapp_icon3.png" class="img-fluid" alt="">
                                    </div>
                                    <h3 class="sub_title">Cloud Storage</h3>
                                    <p class="mt_15">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="smartjact_item">
                                    <div class="appimg_bg appimg_bg2 mb_30">
                                        <img src="img/ultimate_icon4.png" class="img-fluid" alt="">
                                    </div>
                                    <h3 class="sub_title">Customer support</h3>
                                    <p class="mt_15">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="ultimate_btn">
                                    <a href="#" class="button">See all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9 mt_30 ultimate_ab">
                        <div class="ultimate_image">
                            <img src="img/ultimate_feature_img.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 08. ultimate area  end -->


        <!-- 09. awesome feature area start -->
        <div class="getfeature_wrapper border_bottm section_padd" id="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt_30 text-center">
                        <div class="getfe_head">
                            <h2 class="title_head">Get awesome features, without extra charges</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 mt_30">
                        <nav class="text-center">
                            <div class="nav getbtn" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Monthly</a>
                              <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Yearly</a>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mt_30 text-center">
                                        <div class="getfe_item">
                                            <div class="getfe_txt">
                                                <h2>$0<span>/ month</span></h2>
                                                <h3>Business Class</h3>
                                                <p>For small teams or office</p>
                                            </div>
                                            <div class="getfe_second">
                                                <ul>
                                                    <li>Drag & Drop Builder</li>
                                                    <li>1,000's of Templates</li>
                                                    <li>Blog Support Tools</li>
                                                    <li>eCommerce Store</li>
                                                </ul>
                                                <a href="#" class="button">Start free trail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mt_30 text-center order-lg-3">
                                        <div class="getfe_item">
                                            <div class="getfe_txt">
                                                <h2>$60<span>/ month</span></h2>
                                                <h3>Premium</h3>
                                                <p>For small teams or office</p>
                                            </div>
                                            <div class="getfe_second">
                                                <ul>
                                                    <li>Drag & Drop Builder</li>
                                                    <li>1,000's of Templates</li>
                                                    <li>Blog Support Tools</li>
                                                    <li>eCommerce Store</li>
                                                </ul>
                                                <a href="#" class="button">Start free trail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mt_30 text-center order-lg-2">
                                        <div class="getfe_item getfe_border">
                                            <div class="getfe_txt">
                                                <h2>$99<span>/ month</span></h2>
                                                <h3>Pro Master</h3>
                                                <p>For Best opportunities</p>
                                            </div>
                                            <div class="getfe_second">
                                                <ul>
                                                    <li>Drag & Drop Builder</li>
                                                    <li>1,000's of Templates</li>
                                                    <li>Blog Support Tools</li>
                                                    <li>eCommerce Store</li>
                                                </ul>
                                                <a href="#" class="button mb_30">Subscribe Now</a>
                                                <p>Or Start 14 days trail</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 mt_30 text-center">
                                        <div class="getfe_item">
                                            <div class="getfe_txt">
                                                <h2>$0<span>/ Year</span></h2>
                                                <h3>Business Class</h3>
                                                <p>For small teams or office</p>
                                            </div>
                                            <div class="getfe_second">
                                                <ul>
                                                    <li>Drag & Drop Builder</li>
                                                    <li>1,000's of Templates</li>
                                                    <li>Blog Support Tools</li>
                                                    <li>eCommerce Store</li>
                                                </ul>
                                                <a href="#" class="button">Start free trail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mt_30 text-center order-lg-3">
                                        <div class="getfe_item">
                                            <div class="getfe_txt">
                                                <h2>$60<span>/ Year</span></h2>
                                                <h3>Premium</h3>
                                                <p>For small teams or office</p>
                                            </div>
                                            <div class="getfe_second">
                                                <ul>
                                                    <li>Drag & Drop Builder</li>
                                                    <li>1,000's of Templates</li>
                                                    <li>Blog Support Tools</li>
                                                    <li>eCommerce Store</li>
                                                </ul>
                                                <a href="#" class="button">Start free trail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mt_30 text-center order-lg-2">
                                        <div class="getfe_item getfe_border">
                                            <div class="getfe_txt">
                                                <h2>$99<span>/ Year</span></h2>
                                                <h3>Pro Master</h3>
                                                <p>For Best opportunities</p>
                                            </div>
                                            <div class="getfe_second">
                                                <ul>
                                                    <li>Drag & Drop Builder</li>
                                                    <li>1,000's of Templates</li>
                                                    <li>Blog Support Tools</li>
                                                    <li>eCommerce Store</li>
                                                </ul>
                                                <a href="#" class="button mb_30">Subscribe Now</a>
                                                <p>Or Start 14 days trail</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 09. awesome feature area end -->


        <!-- 10. meet client area start -->
        <div class="meetclient_wrapper section_padd" id="testimonial">
            <div class="container">
                <div class="row align-items-center justify-content-end">
                    <div class="col-lg-6 mt_30 meetimg_ab">
                        <div class="meetclient_img">
                            <img src="img/meet_client.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 mt_30">
                        <div class="meetclient_box">
                            <div class="meet_head">
                                <h2 class="title_head mb_30">Meet Client Satisfaction by using product</h2>
                                <p>The rise of mobile devices transforms the way we consume. elevant channels such as Facebook.</p>
                            </div>
                            <div class="owl-carousel testi_slide">
                                <div class="friendcustomize_box">
                                    <div class="d-flex rating_icon">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                    <h3 class="sub_title mt_30">User friendly & Customizable</h3>
                                    <p class="mt_30">Bring to the table win-win survival strategies to ensure proactive domi- nation. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                    <div class="meet_man d-flex align-items-center">
                                        <img src="img/meet_img.png" class="meet_size" alt="">
                                        <div class="meet_txt">
                                            <h4>Zoltan Nemeth</h4>
                                            <span>CEO of Pixler Lab</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="friendcustomize_box">
                                    <div class="d-flex rating_icon">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                    <h3 class="sub_title mt_30">User friendly & Customizable</h3>
                                    <p class="mt_30">Bring to the table win-win survival strategies to ensure proactive domi- nation. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                    <div class="meet_man d-flex align-items-center">
                                        <img src="img/meet_img.png" class="meet_size" alt="">
                                        <div class="meet_txt">
                                            <h4>Zoltan Nemeth</h4>
                                            <span>CEO of Pixler Lab</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="friendcustomize_box">
                                    <div class="d-flex rating_icon">
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                        <a href="#"><i class="fas fa-star"></i></a>
                                    </div>
                                    <h3 class="sub_title mt_30">User friendly & Customizable</h3>
                                    <p class="mt_30">Bring to the table win-win survival strategies to ensure proactive domi- nation. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>
                                    <div class="meet_man d-flex align-items-center">
                                        <img src="img/meet_img.png" class="meet_size" alt="">
                                        <div class="meet_txt">
                                            <h4>Zoltan Nemeth</h4>
                                            <span>CEO of Pixler Lab</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 10. meet client area end -->


        <!-- 11. freequently area start -->
        <div class="frequently_wrapper section_padd border_bottm" id="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 mt_30 text-center">
                        <div class="frequently_head">
                            <h2 class="title_head mb_30">Frequently asked questions</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                        </div>
                    </div>
                    <div class="col-lg-10 mt_30">
                        <div class="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How to contact with riders<br> emergency?
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent=".accordion">
                                    <div class="card-body">
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                    </div>
                                </div>
                            </div>

                            <div class="card mt_15">
                                <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">App installation failed, how to<br> update system information?</button>
                                </h2>
                                </div>
                                <div id="collapsetwo" class="collapse" data-parent=".accordion">
                                    <div class="card-body">
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                    </div>
                                </div>
                            </div>

                            <div class="card mt_15">
                                <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">Website reponse taking<br> time, how to improve?</button>
                                </h2>
                                </div>
                                <div id="collapsethree" class="collapse" data-parent=".accordion">
                                    <div class="card-body">
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                    </div>
                                </div>
                            </div>

                            <div class="card mt_15">
                                <div class="card-header">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link sub_title" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">New update fixed all bug <br> and issues</button>
                                    </h2>
                                </div>
                                <div id="collapsefour" class="collapse" data-parent=".accordion">
                                <div class="card-body">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                </div>
                                </div>
                            </div>

                            <div class="card mt_15">
                                <div class="card-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-link sub_title" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">How to contact with riders <br> emergency?</button>
                                </h2>
                                </div>
                                <div id="collapsefive" class="collapse" data-parent=".accordion">
                                    <div class="card-body">
                                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 11. freequently area start -->


        <!-- 12. download area start -->
        <div class="download_wrapper section_padd overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 mt_30">
                        <div class="download_box">
                            <h2 class="title_head mb_30">Download our App now !</h2>
                            <p>The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                            <div class="d-flex align-items-center flex-wrap">
                                <a href="#"><img src="img/google_play.png" class="img-fluid mr_30" alt=""></a>
                                <a href="#"><img src="img/apple_store.png" class="img-fluid" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 download_ab">
                        <div class="download_img">
                            <img src="img/download_img.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 12. download area end -->


    </main>




<?php
get_sidebar();
get_footer();
