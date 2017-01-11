<?php
/**
 * Template Name : Front Page
 */

get_header();
?>
    <!--Mainber Section Starts -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="leftbar">
                    <div class="photo_slider">
                        <!--<ul class="bxslider">
                            <?php
/*                            for ($i = 1; $i < 5; $i++) {

                                $slider_image = get_theme_mod('blog_slider_setting' . $i);
                                $slider_title = get_theme_mod('blog_slider_title_setting' . $i);
                                if (!empty($slider_image)) {
                                    */?>
                                    <li><img src="<?php /*echo $slider_image; */?>" alt="Slider Img"/>
                                        <p><?php /*echo $slider_title; */?></p>
                                    </li>
                                <?php /*}
                            } */?>
                        </ul>-->
                        <ul class="bxslider">
                            <?php
                $get_theme_category_mod = get_theme_mod('blog_products_category');

                            $get_featured_posts = new WP_Query(array(
                                'post_type'       =>  'product',
                                'orderby'         => 'date',
                                'posts_per_page'  => 5,
                                'tax_query'       =>  array(
                                    array(
                                        'taxonomy'  => 'product_cat',
                                        'field'     => 'id',
                                        'terms'     => $get_theme_category_mod
                                    ) )
                            ));

                         while ($get_featured_posts->have_posts()):$get_featured_posts->the_post();
                                    ?>
                                    <li>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="Slider Img"/>
                                        <a href="<?php the_permalink(); ?>"><p>Add To Cart</p></a>
                                    </li>
                                <?php
                                endwhile;
                                wp_reset_query();
                             ?>
                        </ul>
                    </div>

                  <?php
                  dynamic_sidebar('feature_post');
                  ?>


                </div>
            </div>
            <div class="col-lg-4">
                <div class="rightbar">
                    <div class="stay_inform">
                        <div class="stay_title">
                            Stay Informed
                        </div>
                        <div class="stay_input">
                            <input type="email" name="input_name" placeholder="Email Address" class="form-control">

                            <input type="submit" name="submitBtn" value="Go" class="btn btn-info">
                        </div>

                        <div class="social_icon">
                            <a class="facebook"><i class="fa fa-facebook"></i></a>
                            <a class="twitter"><i class="fa fa-twitter"></i></a>
                            <a class="instagram"><i class="fa fa-instagram"></i></a>
                            <a class="youtube"><i class="fa fa-youtube"></i></a>
                            <a class="googleplus"><i class="fa fa-google-plus"></i></a>
                            <a class="rss"><i class="fa fa-rss"></i></a>
                        </div>
                        <div class="demo_work">
                            <h3><a href="#">DemoWorks.org</a></h3>
                            <p>A Blog Of The National Democratic Institute</p>
                        </div>
                        <?php
                        if (is_active_sidebar('feature_post')) {
                            echo dynamic_sidebar('feature_post');
                        }
                        ?>

                        <?php about_ndi(); ?>
                        <?php
                        dynamic_sidebar('learn_more');
                        ?>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Mainbar Section End -->
<?php
get_footer();