<?php

namespace Galib1996\HealthcareLite\Admin\Widgets;

/**
 * Dashboard handler
 */
class Dashboard
{

    public $errors = [];

    public function admin_dashboard()
    {
        $action = isset($_GET['action']) ? $_GET['action'] : 'dashboard';

        switch ($action) {

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

        if (file_exists($template)) {
            include $template;
        }
    }

    /**
     * Handle the form
     *
     * @return void
     */
    public function appointment_handler()
    {

        if (!isset($_POST['submit_address'])) {
            return;
        }

        if (!wp_verify_nonce($_POST['_wpnonce'], 'new-appointment')) {
            wp_die('Are you cheating Kid?');
        }

        if (!current_user_can('manage_options')) {
            wp_die('Are you cheating Manager?');
        }

        $patientName    = isset($_POST['patientName']);
        $patientNumber    = isset($_POST['patientNumber']);
        $patientEmail    = isset($_POST['patientEmail']);
        $appDate    = isset($_POST['appDate']);
        $appType    = isset($_POST['appType']);
        $patientGender    = isset($_POST['patientGender']);
        $lastVist    = isset($_POST['lastVist']);
        $patientAddress    = isset($_POST['patientAddress']);
        $patientNote    = isset($_POST['patientNote']);

        $patientName    = isset( $_POST['patientName'] ) ? sanitize_text_field( $_POST['patientName'] ) : '';
        $patientNumber   = isset( $_POST['patientNumber'] ) ? sanitize_text_field( $_POST['patientNumber'] ) : '';

        if ( empty( $patientName ) ) {
            $this->errors['patientName'] = __( 'Please provide a name', 'shchealthcare-lite' );
        }

        if ( empty( $patientNumber ) ) {
            $this->errors['patientNumber'] = __( 'Please provide a phone number.', 'shchealthcare-lite' );
        }

        if (!empty($this->errors)) {
            return;
        }

        $insert_id = shc_appointment([
            'name'    => $patientName,
            'phone'    => $patientNumber,
            'email'    => $patientEmail,
            'appointment'    => $appDate,
            'type'    => $appType,
            'gender'    => $patientGender,
            'visited'    => $lastVist,
            'address'    => $patientAddress,
            'notes'    => $patientNote

        ]);

        if (is_wp_error($insert_id)) {
            wp_die($insert_id->get_error_message());
        }

        $redirected_to = admin_url('admin.php?page=healthcare-lite&inserted=true');
        wp_redirect($redirected_to);
        exit;
    }

    /**
     * Admin panel doctor's design
     */
    public function doctors_dashboard()
    {

        $action = isset($_GET['action']) ? $_GET['action'] : 'dashboard';

        switch ($action) {

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

        if (file_exists($template)) {
            include $template;
        }
    }
}
