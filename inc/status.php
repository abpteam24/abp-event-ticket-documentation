<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_status">
        <h2 class="_abp_color_theme">🛡️ Status & Information</h2>
        <div class="_divider"></div>
        <label>This section provides essential system information and setup status for Transport Booking.</label>
        <ol class="_abp_list_margin">
            <li><strong class="_abp_color_theme">Transport Booking Version :</strong>&nbsp;&nbsp;Displays the currently installed version of Transport Booking. Keeping the plugin updated ensures access to the latest features, performance improvements, and security updates.</li>
            <li><strong class="_abp_color_theme">WordPress Version :</strong>&nbsp;&nbsp;Shows the current WordPress version running on your website. Transport Booking is regularly tested with supported WordPress releases for maximum compatibility.</li>
            <li><strong class="_abp_color_theme">PHP Version :</strong>&nbsp;&nbsp;Displays the PHP version installed on your server. Using a supported and up-to-date PHP version improves performance, stability, and security.</li>
            <li><strong class="_abp_color_theme">Woocommerce Plugin :</strong>&nbsp;&nbsp;Transport Booking is fully integrated with WooCommerce for booking, cart, checkout, and order management. If WooCommerce is not installed or activated, use the provided button to install and activate it.</li>
            <li><strong class="_abp_color_theme">Woocommerce Version :</strong>&nbsp;&nbsp;Displays the currently installed WooCommerce version. This helps ensure compatibility between Transport Booking and WooCommerce features.</li>
            <li><strong class="_abp_color_theme">Email Address :</strong>&nbsp;&nbsp;Shows the administrator email address configured for your website. Important booking notifications and system-related communications may be sent to this address.</li>
            <li><strong class="_abp_color_theme">ABP PDF Support Tools (PRO):</strong>&nbsp;&nbsp;Enables PDF generation and download features within Transport Booking. Install and activate the ABP PDF Support Tools addon if you want to generate invoices, booking documents, or downloadable PDF files.</li>
            <li><strong class="_abp_color_theme">Transport Booking Booking Page :</strong>&nbsp;&nbsp;Displays the status of the booking page used by Transport Booking. You can automatically create the page or manually place the booking shortcode on any page.</li>
            <li><strong class="_abp_color_theme">Transport Booking Post List Page :</strong>&nbsp;&nbsp;Displays the status of the rental item listing page. This page is used to showcase available rental products and can be generated automatically or configured manually.</li>
            <li><strong class="_abp_color_theme">Property List Page :</strong>&nbsp;&nbsp;Displays the page assigned to show rental properties, vehicles, equipment, or other rentable items available on your website.</li>
            <li><strong class="_abp_color_theme">Gallery Page :</strong>&nbsp;&nbsp;Displays the page used to showcase rental item galleries, property images, and other visual content for customers.</li>
            <li><strong class="_abp_color_theme">Number of Post :</strong>&nbsp;&nbsp;Shows the total number of rental posts, listings, or items currently available in your Transport Booking system.</li>
            <li><strong class="_abp_color_theme">Number of Property :</strong>&nbsp;&nbsp;Shows the total number of properties, assets, vehicles, or rentable resources managed by Transport Booking.</li>
            <li><strong class="_abp_color_theme">Dummy Import :</strong>&nbsp;&nbsp;Import sample rental data to quickly explore Transport Booking features and configurations. This is useful for testing, demonstrations, and initial setup.</li>
        </ol>
        <label><strong>Note:</strong> WooCommerce must be installed and activated for Transport Booking to function properly. All other tools and pages are optional and can be configured based on your business requirements.</label>
        <div class="_mar_tb" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/status.png"><img class="_img_control" src="#" alt="Tools Management & Information"></div>
    </div>
<?php
