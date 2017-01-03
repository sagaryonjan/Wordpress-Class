<?php

/**
 * Front Page Widget
 */


add_action('widgets_init', function () {
    register_widget('site_title_widget');
});

// register feature_widget widget
function register_site_title_widget()
{
    register_widget('site_title_widget');
}

class Site_title_widget extends WP_Widget
{

    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => 'site_title_widget',
            'description' => esc_html__('Please Add THis in Site Post', 'blog'),
        );

        parent::__construct('site_title_widget', esc_html__('Site Title Widget', 'blog'), $widget_ops);
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        $default = [];
        $default['head_title'] = '';
        $default['title'] = '';
        $default['description'] = '';
        $default['link'] = '';

        $instance = wp_parse_args((array)$instance, $default);
        $head_title = $instance['head_title'];
        $title = $instance['title'];
        $description = $instance['description'];
        $link = $instance['link'];
        ?>
        <p>
            <label for="<?php $this->get_field_id('head_title'); ?>"><?php esc_html_e(' Head Title', 'blog') ?></label>
            <input class="widefat" type="text" id="<?php $this->get_field_id('head_title'); ?>"
                   name="<?php echo $this->get_field_name('head_title') ?>" value="<?php echo $head_title; ?>">
        </p>
        <p>
            <label for="<?php $this->get_field_id('title'); ?>"><?php esc_html_e('Title', 'blog') ?></label>
            <input type="text" class="widefat" id="<?php $this->get_field_id('title'); ?>"
                   name="<?php echo $this->get_field_name('title') ?>" value="<?php echo $title; ?>">
        </p>
        <p>
            <label for="<?php $this->get_field_id('description'); ?>"><?php esc_html_e('Description', 'blog') ?></label>
            <textarea class="widefat" id="<?php $this->get_field_id('description'); ?>"
                      name="<?php echo $this->get_field_name('description'); ?>"><?php echo $description; ?></textarea>
        </p>
        <p>
            <label for="<?php $this->get_field_id('link'); ?>"><?php esc_html_e('Link', 'blog') ?></label>
            <input class="widefat" type="text" id="<?php $this->get_field_id('link'); ?>"
                   name="<?php echo $this->get_field_name('link') ?>" value="<?php echo $link; ?>">
        </p>
        <?php
    }

    /**
     * Handles updating settings for the current Site Title widget instance.
     *
     * @access public
     *
     * @param array $new_instance New settings for this instance as input by the user via
     *  WP_Widget::update().
     * @param array $old_instance Old settings for this instance.
     * @return array Settings to save or bool false to cancel saving.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;

        $instance['head_title'] = sanitize_text_field($new_instance['head_title']);
        $instance['title'] = sanitize_text_field($new_instance['title']);
        $instance['description'] = sanitize_text_field($new_instance['description']);
        $instance['link'] = esc_url_raw($new_instance['link']);

        return $instance;
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        extract($args);
        extract($instance);

        $title = isset($instance['title']) ? $instance['title'] : '';

        ?>
        <div class="intro_site">
            <?php
            if (get_theme_mod('site_introduction_enable_btn_settinng') == 1) { ?>
                <h2><?php echo get_theme_mod('site_introduction_title_settinng'); ?></h2>
                <div class="col-lg-12">
                    <div class="intro_main_div" style="
                            background-color: <?php echo get_theme_mod('site_introduction_background_color_setting') ?>;
                            color:<?php echo get_theme_mod('site_introduction_color_setting') ?> ">
                        <p><?php echo $title; ?></p>
                        <a href="<?php echo get_theme_mod('site_introduction_link_setting'); ?>"
                           style="background-color:#5bc0de; padding:3px 15px; border-radius:5px; color:white;">Read
                            More...</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>


        <?php
    }

}




?>




