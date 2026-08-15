<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_orders">
        <h3 class="_abp_color_theme">📋 Orders List</h3>
        <div class="_divider_xs"></div>
        <label>
            The Orders List section provides a complete overview of all rental bookings and transactions.
            From here, you can manage, track, filter, and review all customer orders in a centralized dashboard.
            It is designed to handle large-scale rental operations with advanced filtering and pagination support.
        </label>
        <h6 class="_abp">🔎 Advanced Order Filtering System</h6>
        <label>
            Transport Booking provides a powerful filtering system that allows you to quickly find specific orders based on multiple criteria.
        </label>
        <ul class="_abp_list_margin_xs">
            <li>
                👉 <strong>Post Name:</strong> Filter orders by related rental post or listing.
            </li>
            <li>
                👉 <strong>Order ID:</strong> Search and locate a specific order using its unique ID.
            </li>
            <li>
                👉 <strong>Order Date:</strong> Filter orders based on a specific order creation date.
            </li>
            <li>
                👉 <strong>Order Date Between:</strong> Select a date range to view orders within a specific period.
            </li>
            <li>
                👉 <strong>Booking Date:</strong> Filter orders based on the actual rental booking date.
            </li>
            <li>
                👉 <strong>Booking Date Between:</strong> Search bookings within a selected date range.
            </li>
            <li>
                👉 <strong>User Name:</strong> Find orders placed by a specific customer.
            </li>
            <li>
                👉 <strong>Location:</strong> Filter orders based on property or rental location.
            </li>
            <li>
                👉 <strong>Billing Name:</strong> Search using billing customer name.
            </li>
            <li>
                👉 <strong>Billing Email:</strong> Filter orders using customer email address.
            </li>
            <li>
                👉 <strong>Billing Phone:</strong> Search orders using customer phone number.
            </li>
        </ul>
        <h6 class="_abp">📊 Order Management Features</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 View complete order details including customer, property, pricing, and booking information</li>
            <li>👉 Track order status and rental activity in real-time</li>
            <li>👉 Access full billing and customer information per order</li>
            <li>👉 Organized table view for easy scanning and management</li>
        </ul>
        <h6 class="_abp">📄 Pagination & Performance</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 Fully paginated order system for handling large datasets efficiently</li>
            <li>👉 Optimized query structure for fast loading performance</li>
            <li>👉 Smooth navigation between pages without performance degradation</li>
        </ul>
        <h6 class="_abp">🗑️ Order Actions</h6>
        <ul class="_abp_list_margin_xs">
            <li>
                👉 <strong>Delete Order:</strong> Permanently remove an order from the system when no longer needed.
            </li>
            <li>
                👉 View full order details before performing any action to ensure safe management.
            </li>
        </ul>
        <h6 class="_abp">🚀 Benefits</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 Advanced filtering for fast order tracking</li>
            <li>👉 Full visibility of customer and booking data</li>
            <li>👉 Scalable system for high-volume rental businesses</li>
            <li>👉 Optimized performance with pagination support</li>
            <li>👉 Easy order management with minimal effort</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/order_list.png">
            <img class="_img_control" src="#" alt="Transport Booking Order List Overview">
        </div>
    </div>
<?php
