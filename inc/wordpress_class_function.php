<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wordpress_class_widgets_init()
{

    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'wordpress_class'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'wordpress_class'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Front Page Feature Post', 'wordpress_class'),
        'id' => 'feature_post',
        'description' => esc_html__('Add widgets which is suitable for feature post.', 'wordpress_class'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Add Widget Here', 'blog'),
        'id' => 'learn_more',
        'description' => __('Add Widget')
        ));
}

add_action('widgets_init', 'wordpress_class_widgets_init');


if (!function_exists('blog_custom_logo')):

    function blog_custom_logo()
    {
        if (function_exists('the_custom_logo')):
            return the_custom_logo();
        endif;
    }
endif;

if(!function_exists('blog_news_view_count')){

    function blog_news_view_count($post_id){
        $meta_key = 'blog_count_views';

        $count = get_post_meta($post_id, $meta_key, true);

        if($count == ''){
              delete_post_meta($post_id, $meta_key);
              add_post_meta($post_id, $meta_key, '0');
        }else{
            $count++;
            update_post_meta($post_id,$meta_key, $count);
        }
    }
}







