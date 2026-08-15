<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_tc">
        <h2 class="_abp_color_theme">Terms & Conditions Configuration</h2>
        <div class="_divider_xxs"></div>
        <label>
            The Terms & Conditions Configuration system allows you to manage and customize the terms that clients must agree to before completing a booking or rental. Like Additional Services, this feature supports both global and post-level configuration for maximum flexibility.
        </label>
        <h6 class="_abp">🌍 Global Terms & Conditions</h6>
        <i>
            From the Global Configuration panel, you can create and manage standard terms that will be applied across all posts.
        </i>
        <ul class="_abp_list_margin_xs">
            <li>👉 Define global terms and conditions content</li>
            <li>👉 Enable or disable terms acceptance globally</li>
            <li>👉 Maintain a consistent policy for all properties</li>
        </ul>
        <h6 class="_abp">🏠 Custom Post-Level Terms</h6>
        <i>
            Each individual post can also have its own custom terms and conditions configuration.
        </i>
        <ul class="_abp_list_margin_xs">
            <li>👉 Import terms from global configuration</li>
            <li>👉 Add new custom terms specific to that post</li>
            <li>👉 Modify imported terms content as needed</li>
            <li>👉 Remove or replace terms per post requirement</li>
        </ul>
        <h6 class="_abp">🔄 Import & Customization System</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 One-click import from global terms</li>
            <li>👉 Fully editable after import</li>
            <li>👉 Combine global and custom terms if required</li>
            <li>👉 Control visibility and acceptance rules</li>
        </ul>
        <h6 class="_abp">⚙️ Smart Behavior</h6>
        <ul class="_abp_list_margin_xs">
            <li>Global terms act as a default policy template</li>
            <li>Each post can override or extend global terms</li>
            <li>Global changes do not overwrite custom post-level edits</li>
        </ul>
        <h6 class="_abp">🚀 Benefits</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 Ensures legal and policy consistency across the platform</li>
            <li>👉 Saves time with reusable global templates</li>
            <li>👉 Allows full customization per property</li>
            <li>👉 Improves compliance and user transparency</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/terms_condition.png">
            <img class="_img_control" src="#" alt="Terms & Conditions Configuration Overview">
        </div>
    </div>
<?php