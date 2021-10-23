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
            <div class="col-md-8 appointment-info">
                <form action="#" method="post">

                    <label for="fname">Full Name*</label>
                    <input type="text" id="fname" name="fname" placeholder="Your Name"><br><br>

                    <label for="lname">Phone Number*</label>
                    <input type="text" id="lname" name="lname" placeholder="Phone Number"><br><br>

                    <label for="lname">Email Address</label>
                    <input type="text" id="lname" name="lname" placeholder="Phone Number"><br><br>


                    <label for="lname">Appointment Date</label>
                    <input type="date" id="lname" name="lname" placeholder="Appointment Date"><br><br>

                    <label for="lname">Appointment Type</label>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label id="widthzero" for="vehicle1"> Regular &nbsp;&nbsp;</label>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> Urgent</label><br><br>

                    <label for="lname">Gender</label>
                    <input type="radio" id="html" name="fav_language" value="Male">
                    <label id="widthzero" for="html"> Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" id="css" name="fav_language" value="Female">
                    <label for="css">Female</label><br><br>

                    <label for="lname">visited in last 3 month?</label>
                    <input type="radio" id="html" name="fav_language" value="Male">
                    <label id="widthzero" for="html"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" id="css" name="fav_language" value="Female">
                    <label for="css">No</label><br><br>

                    <label for="lname">Address</label>
                    <input type="text" id="lname" name="lname" placeholder="Phone Number"><br><br>

                    <label for="lname">Special Notes(if any)</label><br>
                    <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea><br><br>

                    <input type="submit" class="btn btn-primary" value="Book An Appointment"><br><br>
                </form>
            </div>
            <div class="col-md-4">
                <div class="appointment-schedule">
                    <h3>Available Schedule<br/>In next 7 days</h3>
                    <h4>Friday: <span>05</span></h4>
                    <h4>Friday: <span>05</span></h4>
                    <h4>Friday: <span>05</span></h4>
                    <h4>Friday: <span>05</span></h4>
                    <h4>Friday: <span>05</span></h4>
                    <h4>Friday: <span>05</span></h4>
                    <h4>Friday: <span>05</span></h4>
                </div>
            </div>
        </div>
    </div>
</div>