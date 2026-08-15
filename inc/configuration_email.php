<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_email">
        <h2 class="_abp_color_theme">Configuration: E-Mail </h2>
        <h2 class="_abp_color_theme"><span class="_mar_r_xs">📧</span>Transport Booking - E-Mail Configuration </h2>
        <div class="_divider"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">These are customer E-Mail Configuration.</i>
        <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/5.10.email.png"><img class="_img_control" src="#" alt="E-Mail"></div>
        <table class="_abp_fixed_text_left_mt">
            <tbody>
            <tr>
                <th class="_color_theme">Send Mail ?</th>
                <td colspan="3">Should you wish to mail a traveler Turn the light <strong class="_abp_color_theme"> ON</strong> . The mail won`t be sent if <strong class="_abp_color_theme"> OFF</strong> . By default, <strong class="_abp_color_theme"> ON</strong></td>
            </tr>
            <tr>
                <th class="_color_theme">Send pdf Ticket ?</th>
                <td colspan="3"> If you would like to email with PDF ticket, Turn <strong class="_abp_color_theme"> ON</strong> otherwise the PDF won`t be sent if <strong class="_abp_color_theme"> OFF</strong> . By default, <strong class="_abp_color_theme"> ON</strong></td>
                <td colspan="3"> If You want to send pdf ticket mail to traveller Switch ON otherwise pdf not send . Default ON</td>
            </tr>
            <tr>
                <th class="_color_theme">Which status send Mail ?</th>
                <td colspan="3">Please choose the order status for which the mail will be send.</td>
            </tr>
            <tr>
                <th class="_color_theme">Mail Subject</th>
                <td colspan="3">Add a subject to your email, please. Alternatively, your site title will be it.</td>
            </tr>
            <tr>
                <th class="_color_theme">Mail Content</th>
                <td colspan="3">
                    <span>Please use this shortcode for get real data.</span><br>
                    <span><strong style="color:#e67c30">#post_name</strong> : In order to print the Transport Name.</span><br>
                    <span><strong style="color:#e67c30">#client_name</strong> : In order to print the  Traveller Form.</span><br>
                    <span><strong style="color:#e67c30">#order_id</strong> : In order to print the  Order ID.</span><br>
                    <span><strong style="color:#e67c30">#pass_id</strong> : In order to print the Traveller ID.</span><br>
                    <span><strong style="color:#e67c30">#from</strong> : In order to print the  Boarding.</span><br>
                    <span><strong style="color:#e67c30">#to</strong> : In order to print the  Dropping.</span><br>
                    <span><strong style="color:#e67c30">#order_date</strong> : In order to print the  Order Date.</span><br>
                    <span><strong style="color:#e67c30">#status</strong> : In order to print the  Order Status.</span><br>
                    <span><strong style="color:#e67c30">#payment</strong> : In order to print the  Payment Method.</span><br>
                    <span><strong style="color:#e67c30">#booking_details</strong> : In order to print the  Booking Details.</span><br>
                    <span><strong style="color:#e67c30">#rent_details</strong> : In order to print the  Ticket Details.</span><br>
                    <span><strong style="color:#e67c30">#bill_info</strong> : In order to print the  Billing Information.</span><br>
                    <span><strong style="color:#e67c30">#price_details</strong> : In order to print the  Total Price.</span><br>
                </td>
            </tr>
            <tr>
                <th class="_color_theme">Re-send Mail Content</th>
                <td colspan="3">
                    <span>Please use this shortcode for get real data.</span><br>
                    <span><strong style="color:#e67c30">#post_name</strong> : In order to print the  Transport Name.</span><br>
                    <span><strong style="color:#e67c30">#client_name</strong> : In order to print the  Traveller Form.</span><br>
                    <span><strong style="color:#e67c30">#order_id</strong> : In order to print the  Order ID.</span><br>
                    <span><strong style="color:#e67c30">#pass_id</strong> : In order to print the  Traveller ID.</span><br>
                    <span><strong style="color:#e67c30">#from</strong> : In order to print the  Boarding.</span><br>
                    <span><strong style="color:#e67c30">#to</strong> : In order to print the  Dropping.</span><br>
                    <span><strong style="color:#e67c30">#order_date</strong> : In order to print the  Order Date.</span><br>
                    <span><strong style="color:#e67c30">#status</strong> : In order to print the  Order Status.</span><br>
                    <span><strong style="color:#e67c30">#payment</strong> : In order to print the  Payment Method.</span><br>
                    <span><strong style="color:#e67c30">#booking_details</strong> : In order to print the  Booking Details.</span><br>
                    <span><strong style="color:#e67c30">#rent_details</strong> : In order to print the  Ticket Details.</span><br>
                    <span><strong style="color:#e67c30">#bill_info</strong> : In order to print the  Billing Information.</span><br>
                    <span><strong style="color:#e67c30">#price_details</strong> : In order to print the  Total Price.</span><br>
                </td>
            </tr>
            <tr>
                <th class="_color_theme">Admin Notification Mail</th>
                <td colspan="3">After an order is placed, if the admin would want to get a PDF ticket, please give a mail address.</td>
            </tr>
            <tr>
                <th class="_color_theme">Mail From Name</th>
                <td colspan="3"> The email from name should be added here. otherwise it will be Transportation</td>
            </tr>
            <tr>
                <th class="_color_theme">Mail From Mail</th>
                <td colspan="3"> The email from mail should be added here. otherwise it will be your admin mail.</td>
            </tr>
            </tbody>
        </table>
    </div>
<?php
