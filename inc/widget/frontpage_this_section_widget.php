<?php

add_action('widgets_init', function () {
    register_widget('this_section');
});

function register_this_section()
{
    register_widget('this_section');
}

class this_section extends WP_Widget
{

    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'this_section',
            'description' => __('Please Add This In Feauture Post', 'blog')
        );
        parent::__construct('this_section', __('This Section Widget', 'blog'), $widget_ops);

    }

    public function form($instance)
    {
        $default = [];
        $default['title'] = '';
        $default['description'] = '';
        $default['link'] = '';

        $instance = wp_parse_args((array)$instance, $default);
        $title = $instance['title'];
        $description = $instance['description'];
        $link = $instance['link'];

        ?>
        <p><label for="<?php $this->get_field_id('title') ?>"><?php esc_html_e('title', 'blog') ?></label>
            <input type="text" name="<?php echo $this->get_field_name('title') ?>"
                   id="<?php $this->get_field_id('title') ?>" value="<?php echo $title; ?>"></p>

        <p><label for="<?php $this->get_field_id('description') ?>"><?php esc_html_e('description', 'blog') ?></label>
            <input type="text" name="<?php echo $this->get_field_name('description') ?>"
                   id="<?php $this->get_field_id('description') ?>" value="<?php echo $description; ?>"></p>

        <p><label for="<?php $this->get_field_id('link') ?>"><?php esc_html_e('link', 'blog') ?></label>
            <input type="text" name="<?php echo $this->get_field_name('link') ?>"
                   id="<?php $this->get_field_id('link') ?>" value="<?php echo $link; ?>"></p>


        <?php
    }

    public function update($new_test, $old_test)
    {
        $data = $old_test;
        $data['title'] = sanitize_text_field($new_test['title']);
        $data['description'] = sanitize_text_field($new_test['description']);
        $data['link'] = sanitize_text_field($new_test['link']);

        return $data;
    }

    public function widget($args, $instance)
    {
        extract($args);
        extract($instance);
            echo 'manage';
    }

}

?>




