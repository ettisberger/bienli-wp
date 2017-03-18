<?php

require_once(__DIR__.'/includes/utils/customfield.util.php');
require_once(__DIR__.'/includes/utils/filter.util.php');
require_once(__DIR__.'/includes/utils/shortcode.util.php');

$customFieldUtil = new CustomFieldUtils();
$filterUtil = new FilterUtil();
$shortcodeUtil = new ShortcodeUtil();

// NAVIGATION
register_nav_menus( array(
    'primary' => __( 'Primary', 'Bienlis Torten' ),
) );

// WP CONFIGS
show_admin_bar( false );

add_filter('the_content', array($filterUtil, 'removeEmptyParagraphTag'), 22, 1);

add_shortcode('section', array($shortcodeUtil, 'renderSection'));
add_shortcode('section-end', array($shortcodeUtil, 'renderSectionEnd'));
add_shortcode('inlay', array($shortcodeUtil, 'renderInlay'));
add_shortcode('inlay-end', array($shortcodeUtil, 'renderInlayEnd'));
add_shortcode('cakes', array($shortcodeUtil, 'renderCakes'));
add_shortcode('team', array($shortcodeUtil, 'renderTeam'));
add_shortcode('contact', array($shortcodeUtil, 'renderContact'));
?>
