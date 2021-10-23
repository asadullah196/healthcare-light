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
                    <input type="text" id="fname" name="fname" placeholder="Your Name"><br><br>
                
                    <label for="lname">Phone Number:*</label>
                    <input type="text" id="lname" name="lname" placeholder="Phone Number"><br><br>

                    <label for="lname">Email Address:</label>
                    <input type="text" id="lname" name="lname" placeholder="Phone Number"><br><br>

                    
                    <label for="lname">Appointment Date:</label>
                    <input type="date" id="lname" name="lname" placeholder="Appointment Date"><br><br>
                    
                    <label for="lname">Appointment Type:</label><br>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Regular</label><br>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> Urgent</label><br><br>

                    <label for="lname">Gender:</label>
                    <input type="radio" id="html" name="fav_language" value="Male">
                    <label for="html">Male</label>
                    <input type="radio" id="css" name="fav_language" value="Female">
                    <label for="css">Female</label><br><br>

                    <label for="lname">Have you visit us in last 3 month?</label>
                    <input type="radio" id="html" name="fav_language" value="Male">
                    <label for="html">Yes</label>
                    <input type="radio" id="css" name="fav_language" value="Female">
                    <label for="css">No</label><br><br>

                    <label for="lname">Address:</label>
                    <input type="text" id="lname" name="lname" placeholder="Phone Number"><br><br>

                    <label for="lname">Special Notes(if any):</label>
                    <input type="text" id="lname" name="lname" placeholder="Phone Number"><br><br>

                    <input type="submit" class="btn" value="Book An Appointment">
                </form>
            </div>
            <div class="col-md-3 offset-md-1">
                <div class="appointment-schedule">
                    Time Goes Here
                </div>
            </div>
        </div>
    </div>
</div>