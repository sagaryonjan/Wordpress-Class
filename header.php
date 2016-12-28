<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_Class
 *
 *
 * ?><!DOCTYPE html>
 * <html <?php language_attributes(); ?>>
 * <head>
 * <meta charset="<?php bloginfo( 'charset' ); ?>">
 * <meta name="viewport" content="width=device-width, initial-scale=1">
 * <link rel="profile" href="<?php echo esc_url(get_template_directory_uri()); ?>/http://gmpg.org/xfn/11">
 *
 * <?php wp_head(); ?>
 * </head>
 *
 * <body <?php body_class(); ?>>
 * <div id="page" class="site">
 * <a class="skip-link screen-reader-text" href="<?php echo esc_url(get_template_directory_uri()); ?>/#content"><?php esc_html_e( 'Skip to content', 'wordpress_class' ); ?></a>
 *
 * <header id="masthead" class="site-header" role="banner">
 * <div class="site-branding">
 * <?php
 * if ( is_front_page() && is_home() ) : ?>
 * <h1 class="site-title"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
 * <?php else : ?>
 * <p class="site-title"><a href="<?php echo esc_url(get_template_directory_uri()); ?>/<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
 * <?php
 * endif;
 *
 * $description = get_bloginfo( 'description', 'display' );
 * if ( $description || is_customize_preview() ) : ?>
 * <p class="site-description"><?php echo $description; /* WPCS: xss ok.  ?></p>
 * <?php
 * endif; ?>
 * </div><!-- .site-branding -->
 *
 * <nav id="site-navigation" class="main-navigation" role="navigation">
 * <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wordpress_class' ); ?></button>
 * <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
 * </nav><!-- #site-navigation -->
 * </header><!-- #masthead -->
 *
 * <div id="content" class="site-content">
 */
?>
<?php
wp_head();
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>NDP</title>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/FontAwesome/css/font-awesome.min.css">
    <script type="text/javascript"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-2.2.2.js"></script>
    <script type="text/javascript"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/js/viewportchecker.js"></script>
    <script type="text/javascript"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/bxslider/jquery.bxslider.js"></script>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/bxslider/jquery.bxslider.css" rel="stylesheet"/>


    <script>
        $(document).ready(function () {
            $("#ndi_track_main_div").hide();
            $("#ndi_service_main_div").hide();
            $("#ndi_act_btn").click(function () {
                $("#ndi_act_main_div").fadeIn(600);
                $("#ndi_track_main_div").hide();
                $("#ndi_service_main_div").hide();
            });
            $("#ndi_track_btn").click(function () {
                $("#ndi_track_main_div").fadeIn(600);
                $("#ndi_act_main_div").hide();
                $("#ndi_service_main_div").hide();
            });
            $("#ndi_service_btn").click(function () {
                $("#ndi_service_main_div").fadeIn(600);
                $("#ndi_act_main_div").hide();
                $("#ndi_track_main_div").hide();
            });
            $(".tiny").click(function () {
                $(this).addClass('active_btn').siblings().removeClass('active_btn');
            });


        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.myAnimation').addClass("hiddenAni").viewportChecker({
                classToAdd: 'visibleAni animated bounceInLeft', // Class to add to the elements when they are visible
                offset: 100
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.bxslider').bxSlider();
        });
    </script>

    <?php
    $title = get_theme_mod('blog_header_text_setting');

    ?>

</head>
<body style="background-color:#fff;">
<!-- Header Section Starts -->
<div id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 nopadding">
                <div class="top_section">
                    <div class="container">
                       <?php blog_header(); ?>
                    </div>
                    <!-- Menubar Section Starts -->
                    <div class="menubar">
                        <div class="container">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#navbar" aria-expanded="false" aria-controls="navbar"><span
                                                class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                                        <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                                    <a class="navbar-brand"
                                       href="<?php echo esc_url(get_template_directory_uri()); ?>/#">Navigation</a>
                                </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a
                                                    href="<?php echo esc_url(get_template_directory_uri()); ?>/index.php">Home</a>
                                        </li>
                                        <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/#">About</a>
                                        </li>
                                        <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/view.php">Contact</a>
                                        </li>
                                        <li class=""><a
                                                    href="<?php echo esc_url(get_template_directory_uri()); ?>/normal.php">Home</a>
                                        </li>
                                        <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/#">About</a>
                                        </li>
                                        <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/#">Contact</a>
                                        </li>
                                        <li class=""><a href="<?php echo esc_url(get_template_directory_uri()); ?>/#">Home</a>
                                        </li>
                                        <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/#">About</a>
                                        </li>
                                        <li><a href="<?php echo esc_url(get_template_directory_uri()); ?>/#">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--/.nav-collapse --> <!--/.container-fluid -->
                            </nav>
                        </div>
                    </div>
                    <!-- Menubar Section End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Section End -->
