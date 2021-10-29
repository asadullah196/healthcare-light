<?php

namespace Galib1996\HealthcareLite\Admin;

use Galib1996\HealthcareLite\Admin\Widgets\Dashboard;

/**
 * The menu handler class
 */
class Menu
{
    public $dashboard;
    /**
     * Install the class
     */
    function __construct( $dashboard )
    {
        $this->dashboard = $dashboard;
        add_action('admin_menu', [$this, 'admin_menu']);
    }

    public function admin_menu()
    {

        $parent_slug = 'healthcare-lite';
        $capabilityAdmin = 'manage_options';
        $capabilityEditor = 'editor';

        /**
         * Admin menu starts here
         */
        $hook = add_menu_page(__('Healthcare Lite', 'shchealthcare-lite'), __('Healthcare Lite', 'shchealthcare-lite'), $capabilityAdmin, $parent_slug, [$this->dashboard, 'admin_dashboard'], 'dashicons-image-filter', 20);

        add_submenu_page($parent_slug, __('Dashboard', 'shchealthcare-lite'), __('Dashboard', 'healthcare-lite-dashboard'), $capabilityAdmin, $parent_slug, [$this->dashboard, 'admin_dashboard']);

        add_submenu_page($parent_slug, __('Doctor', 'shchealthcare-lite'), __('Doctor', 'shchealthcare-lite'), $capabilityAdmin, 'healthcare-lite-doctor', [$this, 'healthcare_admin_doctor']);

        add_submenu_page($parent_slug, __('Patient', 'shchealthcare-lite'), __('Patient', 'shchealthcare-lite'), $capabilityAdmin, 'healthcare-lite-patient', [$this, 'healthcare_admin_patient']);

        add_submenu_page($parent_slug, __('Technologist', 'shchealthcare-lite'), __('Technologist', 'healthcare-lite'), $capabilityAdmin, 'healthcare-lite-technologist', [$this, 'healthcare_admin_technologist']);

        add_submenu_page($parent_slug, __('Appointment', 'shchealthcare-lite'), __('Appointment', 'shchealthcare-lite'), $capabilityAdmin, 'healthcare-lite-appointment', [$this, 'healthcare_admin_appintment']);

        add_submenu_page($parent_slug, __('Profile', 'healthcare-lite'), __('Profile', 'shchealthcare-lite'), $capabilityAdmin, 'healthcare-lite-profile', [$this, 'healthcare_admin_profile']);

        /**
         * Doctor's menu starts here
         */
        add_submenu_page($parent_slug, __('Doctor', 'healthcare-lite'), __('Doctor', 'shchealthcare-lite'), $capabilityEditor, 'healthcare-lite-doctor-dashboard', [$this, 'healthcare_doctor_doctor']);

        add_action('admin_head-' . $hook, [$this, 'enqueue_assets']);
    }

    public function healthcare_admin_doctor()
    {
        $doctors = new Dashboard();
        $doctors->doctors_dashboard();
    }

    public function healthcare_admin_patient()
    {
        include __DIR__ . '/Template/admin/admin-sorry.php';
    }

    /**
     * Enqueue scripts and styles
     *
     * @return void
     */
    public function enqueue_assets()
    {
        wp_enqueue_style('shc-admin-style');
    }
}
