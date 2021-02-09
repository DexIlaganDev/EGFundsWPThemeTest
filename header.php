<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EGFundsDexlLagan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#menu" data-offset="80" <?php body_class(); ?>>
		<?php wp_body_open(); ?>
    
    <!-- 01 header area start -->
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-3 col-10 text-left">
                    <!--logo start-->
                    <div class="logo">
                        <a href="index.html">
                            <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
                        </a>
                    </div>
                    <!--logo end-->
                </div>
                <div class="col-lg-10 col-md-9 col-2">
                    <div class="try_btn">
                        <a href="#" class="button">Try for free</a>
                    </div>

										

                    <!--menu start-->
                    <?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'menu',
											)
										);
										?>
                    <!--menu end-->

                    <div class="hamburger-menu">
                        <span class="line-top"></span>
                        <span class="line-center"></span>
                        <span class="line-bottom"></span>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- 01 header area end -->
