<?php
add_action('widgets_init', function(){
register_widget('this_section');
});

function register_this_section(){
	register_widget('this_section');
}

class this_section extends WP_Widget{
	public function __construct(){
		$widget_oops = array(
		'classname' => 'this_section_widget',
		'description' => __('Please Add This WIdget In feaute post', 'blog'),
			);

		parent::__construct('this_section_widget', __('This Section Widget', 'blog'), $widget_oops);
	}

	public function form($instance){
		$data = [];
		$data['title'] = '';
		$data['description'] = '';
		$data['status'] = '';
		$data['category'] = '';
		$data['image_url'] = '';

		$instance = wp_parse_args((array)$instance, $data);
		$title = $instance['title'];
		$description = $instance['description'];
		$status = $instance['status'];
		$category = $instance['category'];
		$image_url = $instance['image_url'];

		?>
		<p style="background-color:skyblue; color:white; font-weight:bold; text-transform:capitalize;">
			
		<label for="<?php $this->get_field_id('title');?>"><?php esc_html_e('title');?></label>
		<input type="text" name="<?php echo $this->get_field_name('title');?>" class="widefat" id="<?php $this->get_field_id('title');?>" value="<?php echo $title;?>">		</p>

		<p>
		<label for="<?php $this->get_field_id('description');?>"><?php esc_html_e('description');?></label>
		<textarea name="<?php echo $this->get_field_name('description');?>" class="widefat" id="<?php $this->get_field_id('description');?>"><?php echo $description;?></textarea>
		</p>

        <p>
            <label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Select category', 'blog'); ?>:</label>

            <?php wp_dropdown_categories(array('show_option_none' => '--Select Category-- ', 'name' => $this->get_field_name('category'), 'selected' => $category)); ?>
        </p>

		<p>Status</p>
		<input type="radio" value="0" <?php echo $status == 0?'checked=""':'';?> name="<?php echo $this->get_field_name('status');?>">Enable
		<input type="radio" value="1" <?php echo $status == 1?'checked=""':''; ?>  name="<?php echo $this->get_field_name('status');?>">Disable
		<p>
            <label for="<?php echo $this->get_field_id($image_url); ?>"> <?php _e(' Image ', 'blog'); ?></label>

            <?php
            if ($instance[$image_url] != '') :
                echo '<img id="' . $this->get_field_id($instance[$image_url] . 'preview') . '"src="' . $instance[$image_url] . '"style="max-width:250px;" /><br />';
            endif;
            ?>

            <input type="hidden" class="widefat custom_media_url" id="<?php echo $this->get_field_id($image_url); ?>" name="<?php echo $this->get_field_name($image_url); ?>" value="<?php echo $instance[$image_url]; ?>" style="margin-top:5px;"/>

            <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name($image_url); ?>" value="<?php _e('Upload Image', 'rainbownews'); ?>" style="margin-top:5px; margin-right: 30px;" onclick="imageWidget.uploader( '<?php echo $this->get_field_id($image_url); ?>' ); return false;"/>
        </p>
		<?php
	}

	public function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['description'] = sanitize_text_field($new_instance['description']);
		$instance['status'] = absint($new_instance['status']);
		$instance['category'] = absint($new_instance['category']);
		$instance[$image_url] = esc_url_raw($new_instance[$image_url]);

		return $instance;
	}

	public function widget($args, $instance){
		extract($args);
		extract($instance);
		$title  = $instance['title'];
		$description  = $instance['description'];
		$status  = $instance['status'];
		$category  = $instance['category'];

        $get_featured_posts = new WP_Query(array(
            'posts_per_page' =>  3,
            'post_type'      =>  'post',
           // 'category__in'   =>  $category,
            'meta_key'       =>  'blog_count_views',
            'orderBy'        =>  'meta_value'
        ));
        if ($category != '')
            $cat_slug = get_category($category);

		?>
        <div class="recent_blog">
            <div class="col-lg-12">
                <div class="recent_blog_title">
                    <h2>DemWorks.org Recent Blog Posts</h2>
                </div>
                <button class="tiny" id="ndi_act_btn"> Taja Khabar <i class="fa fa-list"></i></button>
                <button class="tiny" id="ndi_track_btn">Popular <i class="fa fa-bars"></i></button>
                <button class="tiny" id="ndi_service_btn">Other Kahbar <i class="fa fa-list"></i></button>

                <div class="recent_blog_main" id="ndi_act_main_div">
                    <div class="col-lg-12">
                        <ul class="clearfix">
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participationdsgsdhgsdlkgjsdjlkdg </a>
                                <div class="detailsfsfsd">sjsjgkksdkgsjlkg
                                    sglshgsl.g sghs. . shgdhgsdhgslgs shglksglksghslghs
                                    sghlsdghsdlgh s
                                    gsdgds
                                </div>
                            </li>
                            <li class="fa fa-check" style="font-size:16px; color:green;"><a href="#">Citizen
                                    Participationdsgsdhgsdlkgjsdjlkdg </a>
                                <div class="detailsfsfsd">sjsjgkksdkgsjlkg
                                    sglshgsl.g sghs. . shgdhgsdhgslgs shglksglksghslghs
                                    sghlsdghsdlgh s
                                    gsdgds
                                </div>
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
                    <?php

                    $i = 1;
                    if ($get_featured_posts->post_count > 0) {

                        $get_featured_posts = new WP_Query(array(
                            'posts_per_page' => 8,
                            'post_type' => 'post',
                            // 'category__in'   =>  $category,
                            'meta_key' => 'blog_count_views',
                            'orderBy' => 'meta_value'
                        )); while ($get_featured_posts->have_posts()):$get_featured_posts->the_post(); ?>

                            <div class="col-lg-4 col-md-6">
                                <div class="track_title">
                                    <i class="fa fa-check-square" aria-hidden="true"></i> <a
                                            href="#"><?php the_title(); ?></a>
                                </div>
                                <?php if ($i == 1 || $i == 2): ?>
                                    <div class="track_details">
                                        <ul class="clearfix">
                                            <li><?php the_content(); ?></li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php $i++;
                        endwhile;
                        wp_reset_query(); ?>
                    <?php } ?>

                    <!--    <div class="col-lg-4 col-md-6">
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
-->

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
<?php

// Reset Post Data


	}

}
?>