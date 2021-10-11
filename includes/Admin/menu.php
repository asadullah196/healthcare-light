<?php

namespace Galib1996\HealthcareLite\Admin;

/**
 * The menu handler class
 */
class Menu {
    function __construct(){
        add_action( 'admin_menu', [$this,'admin_menu'] );
    }

    public function admin_menu(){
        add_menu_page( __('HealthCare Lite','healthcare-lite'), __('HealthCare','healthcare-lite'), 'manage_options', 'healthcare-lite', [$this, 'plugin_page'], 'dashicons-image-filter', 20);
    }

    public function plugin_page(){
        echo "Hello Doctors!";
    }
}