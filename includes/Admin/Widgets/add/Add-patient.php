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

<div class="wrap">
    <div class="admin-heading">
        <div class="row">
            <h1 class="wp-heading-inline"><?php _e('Admin Dashboard!', 'shchealthcare-lite'); ?></h1>
            <br /><br />
        </div>
    </div>
    <div class="add-patient">
        <div class="row">

            <div class="appointment form">
                <form action="" method="post">
                    <h5 class="wp-heading-inline"><?php _e('Add New Patient!', 'shchealthcare-lite'); ?></h5>
                    <table class="form-table">
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <label for="name"><?php _e('Name', 'shchealthcare-lite'); ?></label>
                                </th>
                                <td>
                                    <input type="text" name="name" id="name" class="regular-text" value="">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label for="address"><?php _e('Address', 'shchealthcare-lite'); ?></label>
                                </th>
                                <td>
                                    <textarea class="regular-text" name="address" id="address"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label for="phone"><?php _e('Phone', 'shchealthcare-lite'); ?></label>
                                </th>
                                <td>
                                    <input type="text" name="phone" id="phone" class="regular-text" value="">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <?php wp_nonce_field('new-address'); ?>
                    <?php submit_button(__('Add Address', 'shchealthcare-lite'), 'primary', 'submit_address'); ?>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="admin-area">
    <div class="row">
        <h1 class="madamf">Sorry Doctor Bhai!</h1>
    </div>
</div>
</div>