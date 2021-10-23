<?php

/**
 * Bootsrap calling here
 */
wp_enqueue_style('shc-admin-bootstrap');
wp_enqueue_style('shc-admin-style');

/**
 * Bootsrap icon calling with CDN
 */
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">';

?>
<div class="wrap container">
    <div class="admin-heading container">
        <div class="row">
            <h1 class="wp-heading-inline"><?php _e('Admin Dashboard!', 'healthcare-lite'); ?></h1>
            <br /><br />
        </div>
    </div>

    <div class="new-appointment">
        <h1>Book your appointment</h1>
        <p>We will confirm your appointment within 2 hours.</p>
        <div class="row">
            <div class="col-md-8">
                <form action="#" method="post">
                    
                        <label for="fname">Full Name:*</label>
                        <input type="text" id="fname" name="fname" placeholder="Your Name">
                    
                        <label for="lname">Phone Number:*</label>
                        <input type="text" id="lname" name="lname" placeholder="Phone Number"><br><br>

                        <label for="lname">Email Address:</label>
                        <input type="text" id="lname" name="lname" placeholder="Phone Number"><br><br>
                    
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname" value="Doe"><br><br>
                    <input type="submit" class="btn" value="Submit">
                </form>
                <div class="appointment-form">
                    <p>Name*</p>
                    <p>Phone*</p>
                    <p>Gender*</p>
                    <p>Date of Birth*</p>
                    <p>Address*</p>
                    <p>Have you previously attended our facility?*</p>
                    <p>Appointment Type*</p>
                    <p>Date*</p>
                    <p>Your Message*</p>
                    <p>Book An Appointment</p>
                </div>
            </div>
            <div class="col-md-3 offset-md-1">
                <div class="appointment-schedule">
                    Time Goes Here
                </div>
            </div>
        </div>
    </div>
</div>