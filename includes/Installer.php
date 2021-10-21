<?php

namespace Galib1996\HealthcareLite;

/**
 * Installer class
 */
class Installer
{
    /**
     * Run the installer
     * 
     * @return void
     */
    public function run()
    {
        $this->add_version();
        $this->create_tables();
    }

    public function add_version()
    {
        $installed = get_option('shc_installed');
        if (!$installed) {
            update_option('shc_installed', time());
        }

        update_option('shc_version', SHC_VERSION);
    }

    public function create_tables()
    {
        global $wpdb;
    }
}
