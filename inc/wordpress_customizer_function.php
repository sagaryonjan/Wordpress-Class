<?php
// about ndi function
function about_ndi()
{

    $title                      = get_theme_mod('blog_about_ndi_setting');
    $description                = get_theme_mod('blog_about_ndi_desc_setting');
    $btn_text                   = get_theme_mod('blog_about_ndi_readmore_btn__value_text');
    $description_color          = get_theme_mod('blog_about_description_color_setting');
    $background_color           = get_theme_mod('Blog_about_ndi_section_bg_color_setting');
    $background_image           = get_theme_mod('blog_about_ndi_image_setting');
    $read_more_btn_text_color   = get_theme_mod('blog_about_more_btn_color_setting');
    $read_more_btn_bg_color     = get_theme_mod('blog_about_more_btn_bg_color_setting');
    $title_color                = get_theme_mod('blog_about_title_color_setting');
    $about_nd_section_en_ds     = get_theme_mod('blog_about_ndi_section_en_ds');

    ?>
    <?php
    if($about_nd_section_en_ds == 1)
    {
        ?>
        <div class="about_ndi" style="background-color:<?php echo $background_color;?>;">

                        <h3 style="color:<?php echo $title_color;?>;"><?php echo $title;?></h3>
                        <div class="ndi_main_section">
                            <p style="color:<?php echo $description_color;?>;"> <?php echo $description;?>
                            <img src="<?php echo $background_image;?>">

                            </p>
                            <div class="read_more_a_n" style="background-color:<?php echo $read_more_btn_bg_color;?>;">
                                <a href="#" style="color:<?php echo $read_more_btn_text_color;?>;"><?php echo $btn_text;?> <i class="fa fa-share"></i></a>
                            </div>
                        </div>
                    </div>
        <?php
    }
        ?>
    
        <?php
}
function blog_header()
{
    $site_description = get_theme_mod('blog_header_textarea_setting');
    $btn_txt = get_theme_mod('blog_header_btnText_setting');
    ?>
    <div class="row">
        <?php if (get_theme_mod('blog_header_checkbox_setting') == 1): ?>
            <div class="col-lg-3">
                <div class="logo">
                    <?php blog_custom_logo(); ?>
                </div>
            </div>
            <div class="col-lg-7">
                <?php if (get_theme_mod('blog_textarea_enable_setting') == 1): ?>
                    <div class="welcome_text">
                        <p><?php echo $site_description; ?></p>
                    </div>
                    <?php
                endif;

                ?>
            </div>
            <?php if (get_theme_mod('blog_button_checkbox_setting') == 1): ?>
                <div class="col-lg-2">
                    <div class="top_donamte_btn">
                        <button class="btn btn-info"><?php echo $btn_txt; ?></button>
                        <br/>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <?php
}
?>