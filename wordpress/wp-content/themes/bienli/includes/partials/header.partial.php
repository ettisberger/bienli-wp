<header class="bienli-main-header">
    <div class="bienli-row bienli-row-vcenter">
        <div class="bienli-main-header-logo bienli-column-3 bienli-column-small-desktop-3 bienli-column-tablet-3 bienli-hide-phone">
            <a href="/">
<!--                <img class="bienli-main-header-logo" src="--><?php //bloginfo('template_directory'); ?><!--/images/logo_small.png" />-->
                <i class="bienli-main-header-logo-icon fa fa-birthday-cake" aria-hidden="true"></i>
            </a>
        </div>
        <div class="bienli-main-navigation bienli-column-9 bienli-column-small-desktop-9 bienli-column-tablet-9 bienli-column-phone-12">
            <?php wp_nav_menu(array('menu' => 'primary', 'theme_location' => 'primary')); ?>
        </div>
    </div>
</header>