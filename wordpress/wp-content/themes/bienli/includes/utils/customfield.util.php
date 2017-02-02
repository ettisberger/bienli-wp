<?php

class CustomFieldUtils {

    function __construct() {
        if( function_exists('acf_add_options_page') ) {
            $this->registerOptionPages();
        }
    }

    function registerOptionPages() {
        acf_add_options_page(array(
            'page_title' 	=> 'Stammdaten',
            'menu_title'	=> 'Stammdaten',
            'menu_slug' 	=> 'bienli-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> true,
            'icon_url'      => 'dashicons-networking'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Torten',
            'menu_title'	=> 'Torten',
            'menu_slug' 	=> 'bienli-cakes',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'bienli-general-settings'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Team',
            'menu_title'	=> 'Team',
            'menu_slug' 	=> 'bbienli-team',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'bbienli-general-settings'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Links',
            'menu_title'	=> 'Links',
            'menu_slug' 	=> 'bienli-links',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'bienli-general-settings'
        ));

        acf_add_options_page(array(
            'page_title' 	=> 'Layout',
            'menu_title'	=> 'Layout',
            'menu_slug' 	=> 'bienli-layout-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> true,
            'icon_url'      => 'dashicons-id'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Fusszeile',
            'menu_title'	=> 'Fusszeile',
            'menu_slug' 	=> 'bienli-footer-settings',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'bienli-layout-settings'
        ));

    }
}

?>
