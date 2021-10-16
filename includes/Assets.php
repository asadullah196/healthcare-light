<?php

namespace Galib1996\HealthcareLite;

/**
 * Assets handler class
 */
class Assets{
    function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
        add_action('admin_enqueue_scripts', [$this, 'enqueue_assets']);
    }

    public function enqueue_assets()
    {
        wp_register_script('shc-script', SHC_ASSETS.'/js/frontend.js', false, filemtime( SHC_PATH.'/assets/js/fronend.js' ), true);
        wp_register_style('shc-style', SHC_ASSETS.'/css/frontend.css', false, filemtime( SHC_PATH.'/assets/css/fronend.css' ) );
    }
}