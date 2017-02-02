<header class="na-main-header">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <a href="/"><img class="na-main-header-logo" src="<?php bloginfo('template_directory'); ?>/images/logo_small.png" /></a>
        </div>
        <div class="col-lg-6 col-md-6">
            <?php wp_nav_menu(array('menu' => 'primary', 'theme_location' => 'primary')); ?>
        </div>
    </div>
</header>