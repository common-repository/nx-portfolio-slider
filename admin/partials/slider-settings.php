
<div class="wrap">
    <h2>Slider Settings</h2>
    <form action="options.php" method="post">
        <?php
            settings_fields( 'nx_portfolio_slider_settings_fields' );
            do_settings_sections( 'nx_portfolio_slider_settings_section' );
        ?>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for=""><?php _e('Default Shortcode Use' , 'nx-portfolio-slider'); ?></label>
                    </th>
                    <td>
                        <b>All Slider => [nx_portfolio_slider]</b> <br><b>Categories Wise => [nx_portfolio_slider category="design"]</b> <small> use category slug</small>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label for=""><?php _e('Slider Loop' , 'nx-portfolio-slider'); ?></label>
                    </th>
                    <td>
                        <select name="nx_slider_loop" id="">
                            <option value="true" <?php echo esc_attr(selected( get_option('nx_slider_loop'), 'true'));?>>True</option>
                            <option value="false" <?php echo esc_attr(selected( get_option('nx_slider_loop'), 'false'));?>>False</option>
                        </select>
                        <small>Set slider loop true or false</small>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for=""><?php _e('Slider AutoPlay' , 'nx-portfolio-slider'); ?></label>
                    </th>
                    <td>
                        <select name="nx_slider_autoplay" id="">
                            <option value="true" <?php echo esc_attr(selected( get_option('nx_slider_autoplay'), 'true'));?>>True</option>
                            <option value="false" <?php echo esc_attr(selected( get_option('nx_slider_autoplay'), 'false'));?>>False</option>
                        </select>
                        <small>Set slider auto play true or false</small>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for=""><?php _e('Slider Navigation' , 'nx-portfolio-slider'); ?></label>
                    </th>
                    <td>
                        <select name="nx_slider_navbar" id="">
                            <option value="true" <?php echo esc_attr(selected( get_option('nx_slider_navbar'), 'true'));?>>True</option>
                            <option value="false" <?php echo esc_attr(selected( get_option('nx_slider_navbar'), 'false'));?>>False</option>
                        </select>
                        <small>Set slider navigation true or false</small>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for=""><?php _e('AutoPlay Time out' , 'nx-portfolio-slider'); ?></label>
                    </th>
                    <td>
                        <input type="number" value="<?php echo esc_attr(get_option('nx_slider_autoplay_timeout')); ?>" name="nx_slider_autoplay_timeout" class="regular-text">
                        <small>Set slider auto play time out</small>
                    </td>
                </tr>
               
            </tbody>
        </table>
        <?php submit_button(); ?>
    </form>
</div>