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

                <div class="intro_site">
                    <?php
                    if (get_theme_mod('site_introduction_enable_btn_settinng') == 1) { ?>
                        <h2><?php echo get_theme_mod('site_introduction_title_settinng'); ?></h2>
                        <div class="col-lg-12">
                            <div class="intro_main_div" style="
                                    background-color: <?php echo get_theme_mod('site_introduction_background_color_setting') ?>;
                                    color:<?php echo get_theme_mod('site_introduction_color_setting') ?> ">
                                <p><?php echo get_theme_mod('site_introduction_settinng'); ?></p>
                                <a href="<?php echo get_theme_mod('site_introduction_link_setting'); ?>"
                                   style="background-color:#5bc0de; padding:3px 15px; border-radius:5px; color:white;">Read
                                    More...</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="recent_feature_all">
                    <h2>Recent Featured Stories</h2>
                    <div class="col-lg-6 col-sm-6">
                        <div class="r_i_all">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                        </div>
                        <div class="r_all_details">
                            <a href="#">A Bipartisan Celebration of Democracy</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="r_i_all">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                        </div>
                        <div class="r_all_details">
                            <a href="#">A Bipartisan Celebration of Democracy</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="r_i_all">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                        </div>
                        <div class="r_all_details">
                            <a href="#">A Bipartisan Celebration of Democracy</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="r_i_all">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                        </div>
                        <div class="r_all_details">
                            <a href="#">A Bipartisan Celebration of Democracy</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="r_i_all">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                        </div>
                        <div class="r_all_details">
                            <a href="#">A Bipartisan Celebration of Democracy</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="r_i_all">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                        </div>
                        <div class="r_all_details">
                            <a href="#">A Bipartisan Celebration of Democracy</a>
                        </div>
                    </div>
                    <div class="clear"></div>
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
                    <div class="twitter_div">
                        <h3>NDI On Twitter</h3>
                        <div class="twitter_main_box">
                            <p>“This battle will liberate us; we want to be involved in the decision making process.
                                Women will not continue to be used as fillers,” declared Socorro Torres, coordinator of
                                the Honduras Interparty Women’s Network (Red de Mujeres Interpartidarias de Honduras, or
                                the Network). Torres’s comments were in response to the historic ratification of a pact
                                between members of Honduras’s leading political parties, affirming women’s equality in
                                political participation.

                                On October, 20, 2016, party leaders and aspiring presidential candidates from seven of
                                Honduras’s ten political parties met in the Honduran capital of Tegucigalpa to ratify
                                the “Political Parity and Alternation Pact” (Pacto Político por la Paridad y la
                                Alternancia). The pact commits aspiring presidential candidates to push their parties to
                                place women in top positions of party lists, ensuring the application of the principle
                                of parity (50 percent women and 50 percent men on party lists) and mechanisms for
                                alteration (rotating between female and male candidates on the ballot). Alternation
                                allows women and men to have an equal chance of being seen on the ballot as compared to
                                ballots that list male candidates first.

                                “This battle will liberate us; we want to be involved in the decision making process.
                                Women will not continue to be used as fillers” - Socorro Torres, coordinator of the
                                Honduras Interparty Women’s Network
                            </p>
                        </div>
                    </div>
                    <div class="inthis_section">
                        <h3>In This Section</h3>
                        <ul class="clearfix">
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participation</a></li>


                            <div class="view_all_insection">
                                <a href="#">View All <i class="fa fa-share"></i></a>
                            </div>
                        </ul>
                    </div>
                    <?php about_ndi(); ?>
                    <div class="learn_more">
                        <h3>Learn More</h3>
                        <div class="learn_main_section">
                            <ul class="clearfix">
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                                </li>
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                                </li>
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                                </li>
                                <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about.jpg">
                                </li>

                            </ul>
                        </div>
                    </div>
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
 