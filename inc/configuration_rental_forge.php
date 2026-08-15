<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_rental_forge">
        <h2 class="_abp_color_theme">Transport Booking Configuration</h2>
        <div class="_divider"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Configure the core settings of Transport Booking from this section. These global options control dashboard labels, menu appearance, URLs, icons, and booking behavior across the entire plugin.
        </i>
        <table class="_abp_fixed_text_left_mt">
            <tbody>
            <tr>
                <th class="_color_theme">Booked Status</th>
                <td colspan="3"> Select the order status at which a rental item, seat, or resource will be considered booked and its availability will be reduced accordingly.</td>
            </tr>
            <tr>
                <th class="_color_theme">Label</th>
                <td colspan="3"> Customize the main Transport Booking menu label displayed in the WordPress admin dashboard to match your business terminology.</td>
            </tr>
            <tr>
                <th class="_color_theme">Slug</th>
                <td colspan="3">
                    Define a custom URL slug for Transport Booking pages. After updating the slug, refresh your permalinks by navigating to <strong class="_abp_color_theme">Settings → Permalinks</strong> and clicking the <strong>Save Changes</strong> button.
                </td>
            </tr>
            <tr>
                <th class="_color_theme">Dashboard Menu Icon</th>
                <td colspan="3"> Choose a custom Dashicon for the Transport Booking dashboard menu. Visit the Dashicons Library, copy your preferred icon class, and paste it here to update the menu icon.</td>
            </tr>
            <tr>
                <th class="_color_theme">Transport Booking Icon</th>
                <td colspan="3"> Upload or select a custom icon to represent Transport Booking throughout the plugin interface and related sections.</td>
            </tr>
            <tr>
                <th class="_color_theme">Category Label</th>
                <td colspan="3"> Customize the category label displayed within the dashboard menu and plugin interface to better fit your rental business structure.</td>
            </tr>
            <tr>
                <th class="_color_theme">Category Slug</th>
                <td colspan="3">
                    Set a custom URL slug for categories. After making changes, refresh your permalinks by navigating to <strong class="_abp_color_theme">Settings → Permalinks</strong> and clicking the <strong>Save Changes</strong> button.
                </td>
            </tr>
            </tbody>
        </table>
        <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/configuration_rental_forge.png"><img class="_img_control" src="#" alt="Transport"></div>
    </div>
<?php
