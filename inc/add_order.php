<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_create_order">
        <h3 class="_abp_color_theme">➕ Add Order From Dashboard</h3>
        <div class="_divider_xs"></div>
        <label>
            The Add Order feature allows administrators to create rental orders directly from the dashboard without requiring customers to complete the checkout process. This is ideal for phone bookings, walk-in customers, offline reservations, and custom rental arrangements.
        </label>
        <div class="_divider_xs"></div>
        <label>
            Using the same booking experience available on the frontend, administrators can select event dates and sessions, configure booking details, and generate orders within a few clicks.
        </label>
        <div class="_divider_xs"></div>
        <ul class="_abp">
            <li>Create rental orders directly from the admin dashboard.</li>
            <li>No online payment is required to create an order.</li>
            <li>Select any available rental item or listing with ease.</li>
            <li>Use the same date, time, and availability selection system available on the frontend.</li>
            <li>Add custom customer information, including name, email, phone number, and billing details.</li>
            <li>Send booking notifications to any custom email address during order creation.</li>
            <li>Perfect for manual bookings, corporate reservations, and offline rental management.</li>
            <li>Quickly create and manage orders without leaving the dashboard.</li>
        </ul>
        <div class="_divider_xs"></div>
        <label>
            This feature provides complete flexibility for rental businesses, allowing administrators to efficiently manage both online and offline bookings from a single centralized dashboard.
        </label>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/add_order.png">
            <img class="_img_control" src="#" alt="Transport Booking Add Order Dashboard">
        </div>
    </div>
<?php
