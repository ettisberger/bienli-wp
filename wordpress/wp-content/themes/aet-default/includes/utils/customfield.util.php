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
            'menu_slug' 	=> 'aet-default-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> true,
            'icon_url'      => 'dashicons-networking'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Produkte',
            'menu_title'	=> 'Produkte',
            'menu_slug' 	=> 'aet-default-products',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'aet-default-general-settings'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Team',
            'menu_title'	=> 'Team',
            'menu_slug' 	=> 'aet-default-team',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'aet-default-general-settings'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Links',
            'menu_title'	=> 'Links',
            'menu_slug' 	=> 'aet-default-links',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'aet-default-general-settings'
        ));

        acf_add_options_page(array(
            'page_title' 	=> 'Layout',
            'menu_title'	=> 'Layout',
            'menu_slug' 	=> 'aet-default-layout-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> true,
            'icon_url'      => 'dashicons-id'
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Fusszeile',
            'menu_title'	=> 'Fusszeile',
            'menu_slug' 	=> 'aet-default-footer-settings',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'aet-default-layout-settings'
        ));

    }
}

?>
