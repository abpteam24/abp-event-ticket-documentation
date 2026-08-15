<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_translate">
        <h2 class="_abp_color_theme">Transport Booking: Translate</h2>
        <div class="_divider"></div>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Transport Booking is fully translation-ready and can be translated using any WordPress translation plugin. However, we strongly recommend using the Loco Translate plugin for the best experience and easiest workflow.
        </i>
        <h5 class="_abp_color_theme">To translate Transport Booking:</h5>
        <ol class="_abp_list_margin">
            <li>Go to <strong>Plugins → Add New</strong> from your WordPress dashboard.</li>
            <li>Search for <strong>Loco Translate</strong>, then install and activate the plugin.</li>
            <li>Navigate to <strong>Loco Translate → Plugins</strong>.</li>
            <li>Select the <strong>Transport Booking</strong> plugin from the list.</li>
            <li>Create a new language or edit an existing translation file.</li>
            <li>Click the <strong>Sync</strong> button to load the latest translatable strings.</li>
            <li>Translate the strings and click <strong>Save</strong>.</li>
        </ol>
        <i class="_color_7_fs_label_mar_tb_d_block">
            After completing these steps, most frontend and backend texts used by Transport Booking will be translated automatically. Please note that some dynamic content and documentation text may not be translatable.
        </i>
        <i class="_color_7_fs_label_mar_tb_d_block">
            Important: Always store translation files in a safe or custom directory recommended by Loco Translate. Otherwise, your translations may be lost during plugin updates.
        </i>
    </div>
<?php
