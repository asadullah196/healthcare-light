<?php

namespace Etn\Core\Migration;

use Etn\Utils\Helper;

defined('ABSPATH') || exit;

class Migration {
    use \Etn\Traits\Singleton;

    /**
     * Main Function 
     *
     * @return void
     */
    public function init(){
        $this->migrate_event_price();
        $this->migrate_attendee_unique_id();
    }

    
    /**
     * migrate event price into Woocommerce product price
     *
     * @return void
     */
    public function migrate_event_price(){
        $migration_done = !empty( get_option( "etn_event_price_migration_done" ) ) ? true : false;
        
        if( !$migration_done ){
            $all_events = \Etn\Utils\Helper::get_events();
            if( is_array($all_events) && !empty($all_events) ){
                foreach( $all_events as $event_id => $event_title ){
                    $event_price = get_post_meta( $event_id, "etn_ticket_price", true );
                    update_post_meta( $event_id, "_price", $event_price );
                    update_post_meta( $event_id, "_regular_price", $event_price );
                    update_post_meta( $event_id, "_sale_price", $event_price );
                }
            }

            update_option( "etn_event_price_migration_done", true );
        }
    }

    /**
     * Generate Unique ID For Attendee Ticket
     *
     * @return void
     */
    public function migrate_attendee_unique_id(){
        $migration_done = !empty( get_option( "etn_attendee_unique_id_migration_done" ) ) ? true : false;
        
        if( !$migration_done ){

            $args          = [
                'post_type' => 'etn-attendee',
            ];
            $all_attendees = get_posts($args);
            foreach( $all_attendees as $attendee ){
                $attendee_id    = $attendee->ID;
                $ticket_id      = Helper::generate_unique_ticket_id_from_attendee_id( $attendee_id );
                update_post_meta( $attendee_id, 'etn_unique_ticket_id', $ticket_id );
            }

            update_option( "etn_attendee_unique_id_migration_done", true );
        }
    }

}