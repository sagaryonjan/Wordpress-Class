<?php
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