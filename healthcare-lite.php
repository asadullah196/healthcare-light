<?php 

 /**
 * Plugin Name:       HealthCare Lite
 * Plugin URI:        https://silicv.com/plugins/healthcare/
 * Description:       HealthCare is an Doctor Appointment Booking, Chamber and Clinic Management Software made by Silic. 
 * Version:           0.1.0-beta
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Silic
 * Author URI:        https://silicv.com/plugins/healthcare/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://silicv.com/plugins/healthcare/
 * Text Domain:       healthcare-lite
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Call autoloader file
 */
require_once __DIR__."/vendor/autoload.php";

/** 
 * Main plugin class, declear as final so that no one can extends this class
*/
final class healthcare {

    /**
     * Plugin version
     */
    const version = '0.1.0-beta';

    /**
     * Class constructors
     */
    private function __construct()
    {
        $this->define_constants();

        /**
         * Register activation hook to check plugin version
         */
        register_activation_hook( __FILE__, [$this, 'activate']);
        add_action( 'plugins_loaded', [$this, 'init_plugin'] );
    }

    /**
     * Initializes a singleton instance
     * 
     * @return \healthcare
     */
    public static function init(){
        static $instance = false;

        if( ! $instance ){
            $instance = new self();
        }
        return $instance;
    }

    /**
     * Define all the contant for future use
     */
    public function define_constants(){
        define( 'SHC_VERSION', self::version );
        define( 'SHC_FILE', __FILE__ );
        define( 'SHC_PATH', __DIR__ );
        define( 'SHC_URL', plugins_url( '',SHC_FILE ) );
        define( 'SHC_ASSETS', SHC_URL . '/assets' );
    }

    /**
     * Initialize the plugin
     * 
     * @return void
     */
    public function init_plugin(){

        /**
         * If it access from admin pannel, it will work
         */
        if( is_admin() ){
            new Galib1996\HealthcareLite\Admin();
        }else{
            new \Galib1996\HealthcareLite\Frontend();
        }
    }
    /**
     * Plugin version storing call back function defination
     */
    public function activate(){

        $installed = get_option( 'shc_installed' );
        if( !$installed){
            update_option( 'shc_installed', time());
        }

        update_option( 'shc_version', SHC_VERSION);
    }
}

/**
 * Initializes the main plugin
 * 
 * @return \healthcare
 */
function healthcare(){
    return healthcare::init();
}

// kick-off the plugin
healthcare();

?>