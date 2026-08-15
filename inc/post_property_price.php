<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_property_price">
        <h3 class="_abp_color_theme">Properties and Price Configuration</h3>
        <div class="_divider_xs"></div>
        <label>
            The Properties and Price Configuration section allows you to manage how each property behaves in terms of availability, rental rules, and pricing structure.
        </label>
        <ul class="_abp_list_margin_xs">
            <li>
                <strong class="_color_theme">➕ Add New Property:</strong>
                Create a new property with full configuration, including pricing rules, availability settings, and rental conditions.
            </li>
            <li>
                <strong class="_color_theme">✍️ Edit Property:</strong>
                Update existing property details such as description, pricing, availability, and rental settings.
            </li>
            <li>
                <strong class="_color_theme">🔁 Clone Property:</strong>
                Duplicate an existing property along with all settings to save time when creating similar listings.
            </li>
            <li>
                <strong class="_color_theme">❌ Delete Property:</strong>
                Permanently remove a property from the system when it is no longer required.
            </li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/property_price.png">
            <img class="_img_control" src="#" alt="Properties and Price Configuration Overview">
        </div>
    </div>
<?php
