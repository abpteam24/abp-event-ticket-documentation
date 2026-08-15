<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_date">
        <h3 class="_abp_color_theme">Date Configuration</h3>
        <div class="_divider_xxs"></div>
        <label>
            The Date Configuration system allows you to control and define rental availability dates for each property in a flexible and intelligent way. You can set specific dates, recurring days, and special conditions to manage when a property can be rented.
        </label>
        <h6 class="_abp">📅 Flexible Date Selection</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 Select specific dates for property rental availability</li>
            <li>👉 Configure availability based on weekdays (Monday–Sunday)</li>
            <li>👉 Set custom recurring day rules for schedules</li>
            <li>👉 Define special dates (holidays/events) as available or unavailable</li>
        </ul>
        <h6 class="_abp">🌍 Global Date Configuration</h6>
        <i>
            The system also includes a Global Date Configuration option available in the Global Settings menu.
        </i>
        <ul class="_abp_list_margin_xs">
            <li>👉 When Global Date Configuration is ENABLED, all post-level date settings are ignored</li>
            <li>👉 The system automatically applies global rules to all properties/posts</li>
            <li>👉 Ensures consistent date behavior across the entire platform</li>
        </ul>
        <h6 class="_abp">⚙️ Smart Workflow Behavior</h6>
        <ul class="_abp_list_margin_xs">
            <li>If Global Date Configuration = ON → Individual post date settings are not required</li>
            <li>If Global Date Configuration = OFF → Each post can use its own custom date settings</li>
        </ul>
        <h6 class="_abp">🚀 Benefits</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 Reduces repetitive configuration and saves time</li>
            <li>👉 Ensures consistent booking rules across all properties when needed</li>
            <li>👉 Provides full flexibility for individual property control</li>
            <li>👉 Ideal for large-scale rental and booking systems</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/date_config.png">
            <img class="_img_control" src="#" alt="Date Configuration Overview">
        </div>
    </div>
<?php
