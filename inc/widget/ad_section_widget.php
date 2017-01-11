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
		'posts_per_page' => 40,
		'post_type' => 'our_menu',
		'category__in' => $category

		));

	$cat_slug = get_category($category);

	?>
	 
	  <div class="International_news">
                    <div class="title">Internation News</div>
                    <br/>
                    <?php
                    $i = 1;
                    if($args_category->post_count > 0){
                    while($args_category->have_posts()):
                    	$args_category->the_post();
                    	?>
                    <?php
                    if($i == 1 || $i == 2){
                    	?>
                    	<div class="col-lg-6">
                        <div class="image" style="width:250px; height:200px;">
                        <?php the_post_thumbnail();?>

                        </div>
                        <div class="i_title"><?php the_title();?></div>
                        <div class="deatails"><?php the_content();?></div>
                    </div>
                    	<?php
                    }
                    
                    	$i++;
                    	endwhile;

                }
                ?>

                    <br/>
                    <div class="d_div">
                    <?php
                    $i = 1;
                    while($args_category->have_posts()):
                    	$args_category->the_post();
                    ?>
                    <?php
                    if($i > 2){
                    	?>
                    	<div class="col-lg-6">
                  
                    <div class="image"><?php echo the_post_thumbnail();?></div>
                    <div class="d_title"><?php the_title();?></div>
                    </div>
                    	<?php
                    }
                    
                    $i++;
                    	endwhile;
                    ?>
                    
                    </div>
                    </div>

	 

	<?php
}
}
?>