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

                   <div class="recent_blog">
                    <div class="col-lg-12">
                        <div class="recent_blog_title">
                            <h2>DemWorks.org Recent Blog Posts</h2>
                        </div>
                        <button class="tiny" id="ndi_act_btn"> Taja Khabar <i class="fa fa-list"></i></button>
                        <button class="tiny" id="ndi_track_btn">Lokpriya Khabar <i class="fa fa-bars"></i></button>
                        <button class="tiny" id="ndi_service_btn">Other Kahbar <i class="fa fa-list"></i></button>
                        <div class="recent_blog_main" id="ndi_act_main_div">
                            <div class="col-lg-12">
                                <ul class="clearfix">
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a>
                                            <div class="detailsfsfsd">sjsjgkksdkgsjlkg 
                                            sglshgsl.g sghs. . shgdhgsdhgslgs shglksglksghslghs
                                            sghlsdghsdlgh s
                                            gsdgds</div>
                                            </li>
                                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a>
                                            <div class="detailsfsfsd">sjsjgkksdkgsjlkg 
                                            sglshgsl.g sghs. . shgdhgsdhgslgs shglksglksghslghs
                                            sghlsdghsdlgh s
                                            gsdgds</div>
                                            </li>                                    
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>
                                    <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                            Participationdsgsdhgsdlkgjsdjlkdg </a></li>

                                    <div class="view_all_insection">
                                        <a href="#">View All <i class="fa fa-share"></i></a>
                                    </div>
                                </ul>
                            </div>
                        </div>

                        <div class="recent_blog_main" id="ndi_track_main_div">
                            <div class="col-lg-4 col-md-6">
                                <div class="track_title">
                                    <i class="fa fa-check-square" aria-hidden="true"></i> <a href="#">afasfsafsafasfasfasfsaf</a>
                                </div>
                                <div class="track_details">
                                    <ul class="clearfix">
                                        <li>ssdfdsfsdfsdffafafaf afafafasf afaf afafkl a afagf afga aagfa afga asfhjsak
                                            agf aakfga f afg akfjgasgsdgsdgsdgsgs
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="track_title">
                                    <i class="fa fa-check-square" aria-hidden="true"></i> <a href="#">afasfsafsafasfasfasfsaf</a>
                                </div>
                                <div class="track_details">
                                    <ul class="clearfix">
                                        <li>ssdfdsfsdfsdffafafaf afafafasf afaf afafkl a afagf afga aagfa afga asfhjsak
                                            agf aakfga f afg akfjgasgsdgsdgsdgsgs
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="track_title">
                                    <i class="fa fa-check-square" aria-hidden="true"></i> <a href="#">afasfsafsafasfasfasfsaf</a>
                                </div>
                                <div class="track_details">
                                    <ul class="clearfix">
                                        <li>ssdfdsfsdfsdffafafaf afafafasf afaf afafkl a afagf afga aagfa afga asfhjsak
                                            agf aakfga f afg akfjgasgsdgsdgsdgsgs
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="track_title">
                                    <i class="fa fa-check-square" aria-hidden="true"></i> <a href="#">afasfsafsafasfasfasfsaf</a>
                                </div>
                                <div class="track_details">
                                    <ul class="clearfix">
                                        <li>ssdfdsfsdfsdffafafaf afafafasf afaf afafkl a afagf afga aagfa afga asfhjsak
                                            agf aakfga f afg akfjgasgsdgsdgsdgsgs
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="track_title">
                                    <i class="fa fa-check-square" aria-hidden="true"></i> <a href="#">afasfsafsafasfasfasfsaf</a>
                                </div>
                                <div class="track_details">
                                    <ul class="clearfix">
                                        <li>ssdfdsfsdfsdffafafaf afafafasf afaf afafkl a afagf afga aagfa afga asfhjsak
                                            agf aakfga f afg akfjgasgsdgsdgsdgsgs
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="track_title">
                                    <i class="fa fa-check-square" aria-hidden="true"></i> <a href="#">afasfsafsafasfasfasfsaf</a>
                                </div>
                                <div class="track_details">
                                    <ul class="clearfix">
                                        <li>ssdfdsfsdfsdffafafaf afafafasf afaf afafkl a afagf afga aagfa afga asfhjsak
                                            agf aakfga f afg akfjgasgsdgsdgsdgsgs
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <div class="recent_blog_main" id="ndi_service_main_div">
                            <div class="col-lg-4 col-md-6">
                                <div class="blog_image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                                </div>
                                <div class="blog_details">
                                    sfdsfdsfsd asfafafasf afasf
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="blog_image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                                </div>
                                <div class="blog_details">
                                    sfdsfdsfsd asfafafasf afasf
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="blog_image">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                                </div>
                                <div class="blog_details">
                                    sfdsfdsfsd asfafafasf afasf
                                </div>
                            </div>
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
                    if(is_active_sidebar('feature_post')){
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
?>
 