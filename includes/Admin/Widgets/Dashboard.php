<?php

namespace Galib1996\HealthcareLite\Admin\Widgets;

/**
 * Dashboard handler
 */
class Dashboard
{
    public function admin_dashboard()
    {
        $action = isset( $_GET['action'] ) ? $_GET['action'] : 'dashboard';

        switch ( $action ) {
            
            case 'addap':
                $template = __DIR__ . '/add/add-appointment.php';
                break;

            case 'viewap':
                $template = __DIR__ . '/add/view-patient.php';
                break;

            case 'addpa':
                $template = __DIR__ . '/add/add-patient.php';
                break;

            case 'viewpa':
                $template = __DIR__ . '/add/view-patient.php';
                break;

            default:
                $template = __DIR__ . '/add/admin-panel.php';
                break;
        }

        if ( file_exists( $template ) ) {
            include $template;
        }

    }

    /**
     * Admin panel doctor's design
     */
    public function doctors_dashboard()
    {

        $action = isset( $_GET['action'] ) ? $_GET['action'] : 'dashboard';

        switch ( $action ) {
            
            case 'add':
                $template = __DIR__ . '/add/add-patient.php';
                break;

            case 'view':
                $template = __DIR__ . '/add/view-patient.php';
                break;

            default:
                $template = __DIR__ . '/add/doctor-panel.php';
                break;
        }

        if ( file_exists( $template ) ) {
            include $template;
        }
    }

}
