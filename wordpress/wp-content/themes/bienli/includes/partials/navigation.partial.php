<div class="row">
    <div class="col-lg-3">
        <a href="/"><img class="na-main-header-logo" src="<?php bloginfo('template_directory'); ?>/images/logo_white.png" /></a>
    </div>
    <div class="col-lg-3">
        <div class="na-main-navigation-desktop">
            <?php wp_nav_menu(array('menu' => 'primary', 'theme_location' => 'primary')); ?>
        </div>
    </div>
</div>