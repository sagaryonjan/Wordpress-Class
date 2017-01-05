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

		$instance = wp_parse_args((array)$instance, $data);
		$title = $instance['title'];
		$description = $instance['description'];
		$status = $instance['status'];

		?>
		<p style="background-color:skyblue; color:white; font-weight:bold; text-transform:capitalize;">
			
		<label for="<?php $this->get_field_id('title');?>"><?php esc_html_e('title');?></label>
		<input type="text" name="<?php echo $this->get_field_name('title');?>" class="widefat" id="<?php $this->get_field_id('title');?>" value="<?php echo $title;?>">		</p>

		<p>
		<label for="<?php $this->get_field_id('description');?>"><?php esc_html_e('description');?></label>
		<textarea name="<?php echo $this->get_field_name('description');?>" class="widefat" id="<?php $this->get_field_id('description');?>"><?php echo $description;?></textarea>
		</p>

		<p>Status</p>
		<input type="radio" value="0" name="<?php echo $this->get_field_name('status');?>">Enable
		<input type="radio" value="1" checked="" name="<?php echo $this->get_field_name('status');?>">Disable
		<?php
	}

	public function update($new_instance, $old_instance){
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['description'] = sanitize_text_field($new_instance['description']);

		return $instance;
	}

	public function widget($args, $instance){
		extract($args);
		extract($instance);
		?>
		<div class="twitter_div">
                        <h3><?php echo $title;?></h3>
                        <div class="twitter_main_box"><?php echo $description;?>
                            </p>
                        </div>
                    </div>
		<?php
	}

}
?>