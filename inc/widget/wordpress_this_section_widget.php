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

		$instance = wp_parse_args((array)$instance, $data);
		$title = $instance['title'];
		$description = $instance['description'];
		$status = $instance['status'];
		$category = $instance['category'];

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
		<?php
	}

	public function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['description'] = sanitize_text_field($new_instance['description']);
		$instance['status'] = absint($new_instance['status']);
		$instance['category'] = absint($new_instance['category']);

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
            'category__in'   =>  $category
        ));


        if ($category != '')
            $cat_slug = get_category($category);


		?>
            <div class="recent_feature_all">
                <h2>Recent Featured Stories</h2>
                <?php while ($get_featured_posts->have_posts()):$get_featured_posts->the_post(); ?>
                <div class="col-lg-6 col-sm-6">
                    <div class="r_i_all">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="r_all_details">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                </div>
            <?php  endwhile;  wp_reset_query();?>

                <a <?php if (!empty($cat_slug->slug)) {
                    ?>
                    href="<?php echo site_url() . __('/category/', 'blog') . $cat_slug->slug; ?>" style="background-color:#5bc0de; color:white; padding:2px 15px; border-radius:5px;"
                <?php } ?>>View All Stories</a>
                <div class="clear"></div>

            </div>
<?php

// Reset Post Data


	}

}
?>