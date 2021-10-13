<?php

namespace Galib1996\HealthcareLite\Admin;

use Galib1996\HealthcareLite\Admin\Widgets\AdminDashboard;
use Galib1996\HealthcareLite\Admin\Widgets\Dashboard;

/**
 * The menu handler class
 */
class Menu
{
    function __construct()
    {
        add_action('admin_menu', [$this, 'admin_menu']);
    }

    public function admin_menu()
    {

        $parent_slug = 'healthcare-lite';
        $capabilityAdmin = 'manage_options';
        $capabilityEditor = 'editor';

        add_menu_page(__('Healthcare Lite', 'healthcare-lite'), __('Healthcare Lite', 'healthcare-lite'), $capabilityAdmin, $parent_slug, [$this, 'healthcare_admin_dashboard'], 'dashicons-image-filter', 20);

        add_submenu_page($parent_slug, __('Dashboard', 'healthcare-lite'), __('Dashboard', 'healthcare-lite-dashboard'), $capabilityAdmin, $parent_slug, [$this, 'healthcare_admin_dashboard']);

        add_submenu_page($parent_slug, __('Doctor', 'healthcare-lite'), __('Doctor', 'healthcare-lite'), $capabilityAdmin, 'healthcare-lite-doctor', [$this, 'healthcare_admin_doctor']);

        add_submenu_page($parent_slug, __('Patient', 'healthcare-lite'), __('Patient', 'healthcare-lite'), $capabilityAdmin, 'healthcare-lite-patient', [$this, 'healthcare_admin_patient']);

        add_submenu_page($parent_slug, __('Technologist', 'healthcare-lite'), __('Technologist', 'healthcare-lite'), $capabilityAdmin, 'healthcare-lite-technologist', [$this, 'healthcare_admin_technologist']);

        add_submenu_page($parent_slug, __('Appointment', 'healthcare-lite'), __('Appointment', 'healthcare-lite'), $capabilityAdmin, 'healthcare-lite-appointment', [$this, 'healthcare_admin_appintment']);

        add_submenu_page($parent_slug, __('Profile', 'healthcare-lite'), __('Profile', 'healthcare-lite'), $capabilityAdmin, 'healthcare-lite-profile', [$this, 'healthcare_admin_profile']);

        
    }

    /**
     * healthcare_dashboard_doc call back define
     */
    public function healthcare_admin_dashboard()
    {
        $doctors = new Dashboard();
        $doctors->admin_dashboard();
    }

    /**
     * add_doctor call back define
     */
    public function add_doctor()
    {
        echo "Hello Doctors! Want to Work for us?";
    }

    public function add_patient()
    {
        echo "Hello Patient! Want to Work for us?";
    }
}
