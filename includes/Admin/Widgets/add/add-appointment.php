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

                    <label for="patientName">Full Name:*</label>
                    <input type="text" id="patientName" name="patientName" placeholder="Your Name"><br><br>

                    <label for="patientNumber">Phone Number:*</label>
                    <input type="text" id="patientNumber" name="patientNumber" placeholder="Phone Number"><br><br>

                    <label for="patientEmail">Email Address:</label>
                    <input type="email" id="patientEmail" name="patientEmail" placeholder="Phone Number"><br><br>


                    <label for="appDate">Appointment Date:</label>
                    <input type="date" id="appDate" name="appDate" placeholder="Appointment Date"><br><br>

                    <label for="appType">Appointment Type:</label>
                    <input type="checkbox" id="appTypeRegular" name="appTypeRegular" value="regular">
                    <label id="widthzero" for="appType"> Regular &nbsp;&nbsp;</label>
                    <input type="checkbox" id="appTypeUrgent" name="appTypeUrgent" value="Urgent">
                    <label for="appTypeUrgent"> Urgent</label><br><br>

                    <label for="patientGender">Gender:</label>
                    <input type="radio" id="patientGenderMale" name="patientGenderMale" value="Male">
                    <label id="widthzero" for="patientGenderMale"> Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" id="patientGenderFemale" name="patientGenderFemale" value="Female">
                    <label for="patientGenderFemale">Female</label><br><br>

                    <label for="lastVist">visited in last 3 month?</label>
                    <input type="radio" id="lastVistYes" name="lastVistYes" value="Last Visit">
                    <label id="widthzero" for="lastVistYes"> Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" id="lastVistNo" name="lastVistNo" value="No">
                    <label for="lastVistNo">No</label><br><br>

                    <label for="patientAddress">Address:</label>
                    <input type="text" id="patientAddress" name="patientAddress" placeholder="Phone Number"><br><br>

                    <label for="patientNote">Special Notes(if any):</label><br>
                    <textarea id="patientNote" name="patientNote" rows="4" cols="50"></textarea><br><br>

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