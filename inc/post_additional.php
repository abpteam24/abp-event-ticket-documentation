<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_additional">
        <h2 class="_abp_color_theme">Additional Services Configuration</h2>
        <div class="_divider_xxs"></div>
        <label>
            The Additional Services Configuration system allows you to manage extra services that can be added to a rental. These services can be controlled both globally and at individual post level, giving you full flexibility in pricing and service management.
        </label>
        <h6 class="_abp">🌍 Global Additional Services</h6>
        <i>
            From the Global Configuration panel, you can define a standard set of additional services that apply across the entire system.
        </i>
        <ul class="_abp_list_margin_xs">
            <li>👉 Create global additional services (e.g. cleaning, pickup, insurance, setup, etc.)</li>
            <li>👉 Enable or disable services globally</li>
            <li>👉 Maintain a centralized service list for all posts</li>
        </ul>
        <h6 class="_abp">🏠 Custom Post-Level Configuration</h6>
        <i>
            Each individual post can also have its own custom additional services setup.
        </i>
        <ul class="_abp_list_margin_xs">
            <li>👉 Import services directly from global configuration</li>
            <li>👉 Add new custom services specific to that post</li>
            <li>👉 Modify imported or custom services</li>
            <li>👉 Remove services if not required for that post</li>
        </ul>
        <h6 class="_abp">🔄 Import & Flexibility System</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 One-click import from global services</li>
            <li>👉 Fully editable after import (no restrictions)</li>
            <li>👉 Combine global and custom services within a single post</li>
            <li>👉 Adjust pricing per post if needed</li>
        </ul>
        <h6 class="_abp">⚙️ Smart Behavior</h6>
        <ul class="_abp_list_margin_xs">
            <li>Global services act as a base template</li>
            <li>Each post can inherit or customize services independently</li>
            <li>Changes in global configuration do not overwrite existing post-level custom settings</li>
        </ul>
        <h6 class="_abp">🚀 Benefits</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 Saves time with reusable service templates</li>
            <li>👉 Ensures consistency across all properties</li>
            <li>👉 Provides full customization where needed</li>
            <li>👉 Scales easily for large rental platforms</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/additional.png">
            <img class="_img_control" src="#" alt="Additional Services Configuration Overview">
        </div>
    </div>
<?php
