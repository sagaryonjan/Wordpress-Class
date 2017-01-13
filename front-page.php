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
                        <ul class="bxslider">
                            <?php
                            for ($i = 1; $i < 5; $i++) {

                                $slider_image = get_theme_mod('blog_slider_setting' . $i);
                                $slider_title = get_theme_mod('blog_slider_title_setting' . $i);
                                if (!empty($slider_image)) {
                                    ?>
                                    <li><img src="<?php echo $slider_image; ?>" alt="Slider Img"/>
                                        <p><?php echo $slider_title; ?></p>
                                    </li>
                                <?php }
                            } ?>
                        </ul>
                    </div>

                 
                 <?php
                 dynamic_sidebar('advertise_section');
                 ?>

                 



<div class="about_ndi">
<h3>About NDI</h3>
<div class="ndi_main_section">
<p>“This battle will liberate us; we want to be involved in the decision making process. Women will not continue to be used as fillers,” declared Socorro Torres, coordinator of the Honduras Interparty Women’s Network (Red de Mujeres Interpartidarias de Honduras, or the Network). Torres’s comments were in response to the historic

</p>
<div class="read_more_a_n">
<a href="#">Read More <i class="fa fa-share"></i></a>
</div>
</div>
</div>

<div class="about_ndi">
<h3>About NDI</h3>
<div class="ndi_main_section">
<p>“This battle will liberate us; we want to be involved in the decision making process. Women will not continue to be used as fillers,” declared Socorro Torres, coordinator of the Honduras Interparty Women’s Network (Red de Mujeres Interpartidarias de Honduras, or the Network). Torres’s comments were in response to the historic

</p>
<div class="read_more_a_n">
<a href="#">Read More <i class="fa fa-share"></i></a>
</div>
</div>
</div>


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
                             dynamic_sidebar('feature_post');
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