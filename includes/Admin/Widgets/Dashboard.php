<?php

namespace Galib1996\HealthcareLite\Admin\Widgets;

/**
 * Dashboard handler
 */
class Dashboard
{
    public function admin_dashboard()
    {
        include $template = __DIR__ . '/add/dashboard.php';

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

    /*

     $template = __DIR__.'/Admin-dashboard.php';
        include $template;
    public function staff_dashboard()
    {
        echo "I am from staff dashboard";
    }

    public function doctor_dashboard()
    {
        echo "I am from doctor dashboard";
    }

    public function patient_dashboard()
    {
        echo "I am from patient dashboard";
    }*/
}
