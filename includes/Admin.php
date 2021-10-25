<?php

namespace Galib1996\HealthcareLite;

/**
 * The admin class
 */
class Admin
{
    function __construct()
    {
        $this->dispatch_actions();
        new Admin\Menu();
    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     */
    public function dispatch_actions() {
        $dashboard = new Admin\Widgets\Dashboard();

        add_action( 'admin_init', [ $dashboard, 'appointment_handler' ] );
    }
}
