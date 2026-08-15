<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_client_form">
        <h2 class="_abp_color_theme">Client Forms Configuration</h2>
        <div class="_divider_xxs"></div>
        <label>
            The Client Forms Configuration system allows you to manage and customize the forms used to collect information from clients during the booking or rental process. Like Additional Services, this feature supports both global and post-level configuration for maximum flexibility.
        </label>
        <h6 class="_abp">🌍 Global Client Forms</h6>
        <i>
            From the Global Configuration panel, you can create and manage a standard set of client form fields that will be used across all posts.
        </i>
        <ul class="_abp_list_margin_xs">
            <li>👉 Define global form fields (e.g. Name, Email, Phone, Address, ID number, etc.)</li>
            <li>👉 Enable or disable specific fields globally</li>
            <li>👉 Maintain a consistent form structure for all properties</li>
        </ul>
        <h6 class="_abp">🏠 Custom Post-Level Forms</h6>
        <i>
            Each individual post can also have its own custom client form configuration.
        </i>
        <ul class="_abp_list_margin_xs">
            <li>👉 Import form fields from global configuration</li>
            <li>👉 Add new custom fields specific to that post</li>
            <li>👉 Modify imported fields (label, type, required/optional)</li>
            <li>👉 Remove unnecessary fields per post</li>
        </ul>
        <h6 class="_abp">🔄 Import & Customization System</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 One-click import from global forms</li>
            <li>👉 Fully editable after import</li>
            <li>👉 Combine global and custom fields in a single form</li>
            <li>👉 Control field order, validation, and requirements</li>
        </ul>
        <h6 class="_abp">⚙️ Smart Behavior</h6>
        <ul class="_abp_list_margin_xs">
            <li>Global forms act as a default template</li>
            <li>Each post can override or extend the global structure</li>
            <li>Changes in global configuration do not overwrite existing post-level forms</li>
        </ul>
        <h6 class="_abp">🚀 Benefits</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 Standardized data collection across all properties</li>
            <li>👉 Faster setup using reusable form templates</li>
            <li>👉 Full flexibility for different property requirements</li>
            <li>👉 Scalable system for large rental platforms</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/client_form.png">
            <img class="_img_control" src="#" alt="Client Forms Configuration Overview">
        </div>
    </div>
<?php
