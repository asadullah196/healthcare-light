<?php

namespace Galib1996\HealthcareLite\Frontend;

/**
 * Shortcode handler class
 */
class Shortcode
{
    /**
     * Initializes the class
     */
    function __construct()
    {
        add_shortcode('healthcare-lite', [$this, 'render_shortcode']);
    }

    /**
     * Shortcode handler class
     * 
     * @return array $atts
     * @param string $content
     * 
     * @return string
     */
    public function render_shortcode($atts, $content = '')
    {
        return "Hello from healthcare shortcode plugin frontend!";
    }
}
