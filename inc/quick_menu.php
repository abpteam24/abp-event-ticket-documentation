<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_quick_menu">
        <h2 class="_abp_color_theme">🪜 Top Quick Menu</h2>
        <div class="_divider"></div>
        <label>
            The Quick Menu provides fast access to the most commonly used actions, allowing you to create content instantly without navigating through multiple pages.
        </label>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/quick_menu.png">
            <img class="_img_control" src="#" alt="Quick Menu Overview">
        </div>
        <label>
            From this section, you can quickly perform the following actions:
        </label>
        <ul class="_abp_list_margin">
            <li>👉 Create a new post with all required fields</li>
            <li>👉 Add a new property listing with full configuration</li>
            <li>👉 Create and manage categories for better content organization</li>
            <li>👉 Add new location data for filtering and management</li>
        </ul>
    </div>
<?php
