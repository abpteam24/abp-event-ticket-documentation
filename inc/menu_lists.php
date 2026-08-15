<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_menu_lists">
        <h3 class="_abp_color_theme">Transport Booking - Menu</h3>
        <div class="_divider_xs"></div>
        <label>
            After installing Transport Booking, you will get a dedicated admin dashboard menu that centralizes all rental management features in one place. You can customize the menu label and icon from the Icon & Label Configuration settings. All plugin modules are organized into structured tabs under this main menu, allowing you to manage bookings, properties, pricing, availability, inventory, orders, and system settings from a clean and user-friendly interface.
        </label>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/menu_lists.png">
            <img class="_img_control" src="#" alt="Transport Booking Menu Overview">
        </div>
        <ul class="_abp_list_margin">
            <li><strong class="_color_theme"><span class="_mar_r_xs">🪜</span> Top Quick Menu</strong></li>
            <li><strong class="_color_theme"><span class="_mar_r_xs">🔨</span> Post Lists</strong> — Manage all rental posts</li>
            <li><strong class="_color_theme"><span class="_mar_r_xs">🏠</span> Properties</strong> — Manage rental properties and inventory</li>
            <li><strong class="_color_theme"><span class="_mar_r_xs">📋</span> Orders</strong> — View and manage all booking orders</li>
            <li><strong class="_color_theme"><span class="_mar_r_xs">📦</span> Add Order (PRO)</strong> — Manually create orders from admin panel</li>
            <li><strong class="_color_theme"><span class="_mar_r_xs">🌐</span> Global Data</strong> — Configure global settings and shared data</li>
            <li><strong class="_color_theme"><span class="_mar_r_xs">⚙️</span> Configuration</strong> — Manage all plugin configurations and settings</li>
            <li><strong class="_color_theme"><span class="_mar_r_xs">🛡️</span> Status</strong> — System status and health information</li>
            <li><strong class="_color_theme"><span class="_mar_r_xs">📚</span> Documentation</strong> — Access plugin documentation and guides</li>
        </ul>
    </div>
<?php
