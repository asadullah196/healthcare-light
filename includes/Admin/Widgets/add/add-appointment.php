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
            <h1 class="wp-heading-inline"><?php _e('Admin Dashboard!', 'shchealthcare-lite'); ?></h1>
            <br /><br />
        </div>
    </div>

    <div class="new-appointment">
        
        <?php var_dump( $this->errors ); ?>

        <h1>Book your appointment</h1>
        <p>We will confirm your appointment within 2 hours.</p>
        <div class="row">
            <div class="col-md-8 appointment-info">
                <form action="" method="post">

                    <label for="patientName"><?php echo esc_html__('Full Name:*', 'shchealthcare-lite'); ?></label>
                    <input type="text" id="patientName" name="patientName" placeholder="<?php echo esc_html__('Your Name', 'shchealthcare-lite'); ?>"><br><br>

                    <label for="patientNumber"><?php echo esc_html__('Phone Number:*', 'shchealthcare-lite'); ?></label>
                    <input type="text" id="patientNumber" name="patientNumber" placeholder="<?php echo esc_html__('Phone Number', 'shchealthcare-lite'); ?>"><br><br>

                    <label for="patientEmail"><?php echo esc_html__('Email Address:', 'shchealthcare-lite'); ?></label>
                    <input type="email" id="patientEmail" name="patientEmail" placeholder="<?php echo esc_html__('Email Address', 'shchealthcare-lite'); ?>"><br><br>


                    <label for="appDate"><?php echo esc_html__('Appointment Date:', 'shchealthcare-lite'); ?></label>
                    <input type="date" id="appDate" name="appDate" placeholder="<?php echo esc_html__('Appointment Date', 'shchealthcare-lite'); ?>"><br><br>

                    <label for="appType"><?php echo esc_html__('Appointment Type:', 'shchealthcare-lite'); ?></label>
                    <input type="radio" id="appTypeRegular" name="appType" value="regular">
                    <label id="widthzero" for="appType"><?php echo esc_html__('Regular', 'shchealthcare-lite'); ?> &nbsp;&nbsp;</label>
                    <input type="radio" id="appTypeUrgent" name="appType" value="Urgent">
                    <label for="appTypeUrgent"> <?php echo esc_html__('Urgent', 'shchealthcare-lite'); ?></label><br><br>

                    <label for="patientGender"><?php echo esc_html__('Gender:', 'shchealthcare-lite'); ?></label>
                    <input type="radio" id="patientGenderMale" name="patientGender" value="Male">
                    <label id="widthzero" for="patientGenderMale"> <?php echo esc_html__('Male', 'shchealthcare-lite'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" id="patientGenderFemale" name="patientGender" value="Female">
                    <label for="patientGenderFemale"><?php echo esc_html__('Female', 'shchealthcare-lite'); ?></label><br><br>

                    <label for="lastVist"><?php echo esc_html__('visited in last 3 month?', 'shchealthcare-lite'); ?></label>
                    <input type="radio" id="lastVistYes" name="lastVist" value="Last Visit">
                    <label id="widthzero" for="lastVistYes"> <?php echo esc_html__('Yes', 'shchealthcare-lite'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" id="lastVistNo" name="lastVist" value="No">
                    <label for="lastVistNo"><?php echo esc_html__('No', 'shchealthcare-lite'); ?></label><br><br>

                    <label for="patientAddress"><?php echo esc_html__('Address:', 'shchealthcare-lite'); ?></label>
                    <input type="text" id="patientAddress" name="patientAddress" placeholder="<?php echo esc_html__('Your Address', 'shchealthcare-lite'); ?>"><br><br>

                    <label for="patientNote"><?php echo esc_html__('Special Notes(if any):', 'shchealthcare-lite'); ?></label><br>
                    <textarea id="patientNote" name="patientNote" rows="4" cols="50" placeholder="<?php echo esc_html__('Add your specil note here!', 'shchealthcare-lite'); ?>"></textarea><br><br>

                    <!--This is nonce for avoiding SQL injection and outsider submission-->
                    <?php wp_nonce_field( 'new-appointment' ); ?>
                    <?php submit_button( __( 'Add Address', 'shchealthcare-lite' ), 'primary', 'submit_address' ); ?><br><br>
                </form>
            </div>
            <div class="col-md-4">
                <div class="appointment-schedule">
                    <h3>Available Schedule<br />In next 7 days</h3>
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