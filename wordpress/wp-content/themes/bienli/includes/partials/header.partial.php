<header class="bienli-main-header">
    <div class="row middle-xs">
        <div class="bienli-main-header-logo col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="/">
<!--                <img class="bienli-main-header-logo" src="--><?php //bloginfo('template_directory'); ?><!--/images/logo_small.png" />-->
                <i class="bienli-main-header-logo-icon fa fa-birthday-cake" aria-hidden="true"></i>
            </a>
        </div>
        <div class="bienli-main-navigation col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php wp_nav_menu(array('menu' => 'primary', 'theme_location' => 'primary')); ?>
        </div>
    </div>
</header>