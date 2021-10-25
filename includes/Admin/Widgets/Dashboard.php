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
     * Handle the form
     *
     * @return void
     */
    public function appointment_handler() {
        if ( ! isset( $_POST['submit_address'] ) ) {
            return;
        }

        if ( ! wp_verify_nonce( $_POST['_wpnonce'], 'new-appointment' ) ) {
            wp_die( 'Are you cheating Kid?' );
        }

        if ( ! current_user_can( 'manage_options' ) ) {
            wp_die( 'Are you cheating Manager?' );
        }

        var_dump( $_POST );
        exit;
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
