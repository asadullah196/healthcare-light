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

    /**
     * Return all the scripts like js
     * 
     * @return array
     */

    public function get_scripts(){
        return [
            'shc-script' => [
                'src' => SHC_ASSETS.'/js/frontend.js',
                'version' => filemtime( SHC_PATH.'/assets/js/fronend.js' ),
                'deps' => ['jquery'],
            ]
            
        ];
    }

    /**
     * Return all the style like css
     * 
     * @return array
     */

    public function get_styles(){
        return [
            'shc-style' => [
                'src' => SHC_ASSETS.'/css/frontend.css',
                'version' => filemtime( SHC_PATH.'/assets/css/fronend.css' ),
            ]
        ];
    }

    public function enqueue_assets()
    {
        /**
         * Register all the JS file
         */
        $scripts = $this->get_scripts();
        foreach ( $scripts as $handle => $scripts)
        {
            $deps = isset ( $scripts['deps']) ? $scripts['deps'] : false;
            wp_register_script( $handle, $scripts['src'], $deps, $scripts, true);
        }

        /**
         * Register all the CSS file
         */
        $styles = $this->get_styles();
        foreach ( $styles as $handle => $styles)
        {
            $deps = isset ( $styles['deps']) ? $styles['deps'] : false;
            wp_register_style( $handle, $styles['src'], $deps, $styles, );
        }
    }
}