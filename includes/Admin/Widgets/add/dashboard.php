<?php

/**
 * Bootsrap calling here
 */
wp_enqueue_style('shc-admin-bootstrap');
wp_enqueue_style('shc-admin-style');

echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">';

?>


<div class="wrap">
    <div class="admin-heading row">
        <h1 class="wp-heading-inline"><?php _e('Admin Dashboard!', 'healthcare-lite'); ?></h1>
        <br /><br /><br />
    </div>
    <div class="admin-topmenu">
        <div class="row">
            <div class="text-white col-md-3 admin-dashboard-card">
                <div class="row">
                    <div class="col-md-3">
                    <i class="bi-alarm" style="font-size: 2rem; color: cornflowerblue;"></i>
                    </div>
                    <div class="col-md-9">
                        <h1><span><i class="bi bi-arrow-right-square-fill"></i></span><i class="bi bi-arrow-right-square-fill"></i>Total Patients</h1>
                        <i class="bi-github" role="img" aria-label="GitHub"></i>
                        <p>05</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="admin-quickaction"></div>
    <div class="admin-analytics"></div>
    <div class="admin-footer"></div>

    <h1 class="madamf">Sorry Doctor Bhai!</h1>;
</div>