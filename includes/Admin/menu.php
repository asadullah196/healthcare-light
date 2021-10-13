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

        add_menu_page(__('Healthcare Lite', 'healthcare-lite'), __('Healthcare Lite', 'healthcare-lite'), $capabilityAdmin, $parent_slug, [$this, 'healthcare_dashboard'], 'dashicons-image-filter', 20);

        add_submenu_page($parent_slug, __('Dashboard', 'healthcare-lite'), __('Dashboard', 'healthcare-lite'), $capabilityAdmin, $parent_slug, [$this, 'healthcare_dashboard']);

        add_submenu_page($parent_slug, __('Add Doctor', 'healthcare-lite'), __('Add Doctor', 'healthcare-lite'), $capabilityAdmin, 'healthcare-lite-add-doc', [$this, 'add_doctor']);

        add_submenu_page($parent_slug, __('Add Patient', 'healthcare-lite'), __('Add Patient', 'healthcare-lite'), $capabilityEditor, 'healthcare-lite-add-patient', [$this, 'add_patient']);
    }

    /**
     * healthcare_dashboard_doc call back define
     */
    public function healthcare_dashboard()
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
