<?php
add_action('widgets_init', function(){
	register_widget('ad_section');
});

function register_ad_section(){
	register_widget('ad_section');
}

class ad_section extends WP_Widget{
public function __construct(){
	$widget_ad = array(
		'classname' => 'widget_ad',
		'description' => __('Please add this widget in sidebar sectiom', 'blog')
		);
	parent::__construct('widget_ad', __('Advertise widget Section', 'blog'));
}

public function form($instance){
	$data = [];
	$data['title'] = '';
	$data['category'] = '';

	$instance = wp_parse_args((array)$instance);
	$title = $instance['title'];
	$category = $instance['category'];

	?>
	<p>
		<label>Title</label>
		<input type="text" name="<?php echo $this->get_field_name('title');?>" value="<?php echo $title;?>"> 
	</p>
	<p>
		<label>Category List</label>
	</p>
	<?php
	wp_dropdown_categories(array(
		'show_option_none' => __('---select pages---'),
		'name' => $this->get_field_name('category'),
		'selected' => $category
		));
	?>
	<?php
}

public function update($new_instance, $old_instance){
	$instance = $old_instance;
	$instance['title'] = sanitize_text_field($new_instance['title']);
	$instance['category'] = sanitize_text_field($new_instance['category']);

	return $instance;
}

public function widget($args, $instance){
	extract($args);
	extract($instance);

	$title = $instance['title'];
	$category = $instance['category'];

	$args_category = new WP_Query(array(
		'posts_per_page' => 4,
		'post_type' => 'post',
		'category__in' => $category

		));

	$cat_slug = get_category($category);

	?>
	 <div class="learn_more">
                        <h3><?php echo $title;?></h3>
                        <div class="learn_main_section">
                            <ul class="clearfix">
                               <?php
                               while($args_category->have_posts()):
                               	$args_category->the_post();
                               	?>
                                <li><?php echo the_post_thumbnail();?>
                                </li>
                                
                                
                               <?php
                               	endwhile;
                               

                               
                               ?>
                               <a href="<?php echo site_url() . '/category/' . $cat_slug->slug;?>">View All</a>

                            </ul>
                        </div>
                    </div>

	<?php
}
}
?>