<?php

namespace Galib1996\HealthcareLite\Admin\Widgets;

class Dashboard
{
    public function admin_dashboard()
    {
        $template = __DIR__.'/Admin-dashboard.php';
        include $template;
    }

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
    }
}
