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

        $charset_collate = $wpdb->get_charset_collate();

        $schema = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}shc_appointment` (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `name` varchar(100) NOT NULL DEFAULT '',
            `phone` varchar(30) DEFAULT NULL,
            `email` varchar(255) NOT NULL,
            `appointment` date NOT NULL,
            `type` int(10) NOT NULL,
            `gender` int(10) NOT NULL,
            `visited` int(10) NOT NULL,
            `address` varchar(255) DEFAULT NULL,
            `notes` varchar(800) NOT NULL,
            `created_by` bigint(20) unsigned NOT NULL,
            `created_at` datetime NOT NULL,
          PRIMARY KEY (`id`)
        ) $charset_collate";

        if (!function_exists('dbDelta')) {
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }

        //shc_appointment();
        
        dbDelta($schema);
    }
}
