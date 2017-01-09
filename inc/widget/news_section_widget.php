<?php
add_action('widgets_init', function(){
	register_widget('news_section');
});

function register_news_section(){
	register_widget('news_section');
}

class news_section extends WP_Widget{

	public function __construct(){
		$widget_ops = array(
		'classname' => 'news_widget',
		'description' => __('Please Add This WIdget In Feature POst', 'blog'),
			);

		parent::__construct('news_widget', __('News Section WIdget', 'blog'), $widget_ops);
	}

	public function form($instance){
		$data = [];
		$data['title'] = '';
		$data['category'] = '';
		$data['layout1'] = 1;

		$instance = wp_parse_args((array)$instance, $data);
		$title = $instance['title'];
		$category = $instance['category'];
		$layout1 = $instance['layout1'];

		?>
		<p>
			<label>Title</label>
			<input type="text" name="<?php echo $this->get_field_name('title');?>" class="widefat" id="<?php $this->get_field_id('title');?>" value="<?php echo $title;?>">
		</p>

		<p>
			<label for="<?php echo $this->get_field_id('category');?>"><?php _e('Select Category', 'blog');?></label>
			<?php wp_dropdown_categories(array(
				'show_option_none' => '--Select Category',
				'name' => $this->get_field_name('category'),
				'selected' => $category,
				'class' => 'widefat'
				));
			?>

		</p>
		<p><label>Layout 1</label></p>
		

		<input type="checkbox" value="0" <?php echo $label == 0?'checked=""':'';?> name="<?php echo $this->get_field_name('layout1');?>">layout1
			<?php
		

		
		
	}

	public function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['category'] = absint($new_instance['category']);
		$instance['layout1'] = absint($new_instance['layout1']);


		return $instance;
	}

	public function widget($args, $instance){
		extract($args);
		extract($instance);
		$title = $instance['title'];
		$category = $instance['category'];
		echo $layout1 = $instance['layout1'];

		$news_details = new WP_Query(array(
			'post_per_page' => 3,
			'post_type' => 'post',
			'status' => 'publish',
			'order_by' => 'date',
			'order' => 'desc',
			'category__in' => $category
			));
		$cat_slug = get_category($category);

		?>
		<div class="inthis_section">
                        <h3><?php echo $title;?></h3>
                        <ul class="clearfix">
                        <?php
                        if($news_details->have_posts()):
                        while($news_details->have_posts()):
                        	$news_details->the_post();
                        	$news_title = get_the_title();
                        	$id= get_the_id();
                        	?>
                        	<li class="fa fa-check" style="font-size:16px; color:green;"><a href="<?php echo the_permalink();?>"><?php echo $news_title;?>
                                    <?php echo the_post_thumbnail('full');?></a></li>

                        	<?php

                        endwhile;  
                        endif;  
                        
                        ?>
                            <div class="view_all_insection">
                                <a href="<?php echo site_url() . '/category/' . $cat_slug->slug;?>">View All <i class="fa fa-share"></i></a>
                            </div>
                        </ul>
                    </div>
		<?php
	}

}
?>