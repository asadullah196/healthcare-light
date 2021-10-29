<?php

namespace Galib1996\HealthcareLite;

/**
 * The admin class
 */
class Admin
{
    function __construct()
    {
        $dashboard = new Admin\Widgets\Dashboard();
        $this->dispatch_actions( $dashboard );
        new Admin\Menu( $dashboard );
    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     */
    public function dispatch_actions( $dashboard ) {
        add_action( 'admin_init', [ $dashboard, 'appointment_handler' ] );
    }
}
