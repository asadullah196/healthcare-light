

<div class="wrap">
    <div class="row">
        <div class="admin-heading row">
            <h1 class="wp-heading-inline"><?php _e('Admin Dashboard!', 'healthcare-lite'); ?></h1>
            <br /><br /><br />
        </div>
    </div>

    <div class="admin-topmenu">
        <div class="row">
            <div class="text-white col-md-3 text-center admin-dashboard-card">
                <div class="row">
                    <div class="col-md-3">
                        <br />
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="col-md-9">
                        <p id="card-title"><?php _e('Total Patients', 'healthcare-lite'); ?></p>
                        <p>05</p>
                    </div>
                </div>
            </div>
            <div class="text-white col-md-4 text-center admin-dashboard-card">
                <div class="row">
                    <div class="col-md-3">
                        <br />
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="col-md-9">
                        <p id="card-title"><?php _e('Current Appointment', 'healthcare-lite'); ?></p>
                        <p>05</p>
                    </div>
                </div>
            </div>
            <div class="text-white col-md-4 text-center admin-dashboard-card">
                <div class="row">
                    <div class="col-md-3">
                        <br />
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="col-md-9">
                        <p id="card-title"><?php _e('Pending Appointment', 'healthcare-lite'); ?></p>
                        <p>05</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="admin-area">
            <a href="<?php echo admin_url('admin.php?page=healthcare-lite&action=add'); ?>" class="page-title-action"><?php _e('Add Patient', 'healthcare-lite'); ?></a>

            <a href="<?php echo admin_url('admin.php?page=healthcare-lite&action=view'); ?>" class="page-title-action"><?php _e('View Patients', 'healthcare-lite'); ?></a>

            <h1 class="madamf">Sorry Doctor Bhai!</h1>
        </div>
    </div>
</div>