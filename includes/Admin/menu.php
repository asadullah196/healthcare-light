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
        $capability = 'manage_options';

        add_menu_page(__('Healthcare Lite', 'healthcare-lite'), __('Healthcare Lite', 'healthcare-lite'), $capability, $parent_slug, [$this, 'healthcare_dashboard'], 'dashicons-image-filter', 20);

        add_submenu_page($parent_slug, __('Dashboard', 'healthcare-lite'), __('Dashboard', 'healthcare-lite'), $capability, $parent_slug, [$this, 'healthcare_dashboard']);
        add_submenu_page($parent_slug, __('Add Doctor', 'healthcare-lite'), __('Add Doctor', 'healthcare-lite'), $capability, 'healthcare-lite-add-doc', [$this, 'add_doctor']);
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
}
