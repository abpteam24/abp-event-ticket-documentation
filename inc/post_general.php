<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_general">
        <h3 class="_abp_color_theme">General Configuration</h3>
        <div class="_divider_xs"></div>
        <label>
            The General Configuration section provides centralized controls to manage how a post behaves and which features are enabled within the system. From here, you can easily enable or disable key modules and manage related settings without leaving the post details page.
        </label>
        <ul class="_abp_list_margin_xs">
            <li>
                <strong class="_color_theme">👉 Rent Continue ON/OFF:</strong>
                Enable or disable the rent continuation feature. When enabled, users can extend rental duration without creating a new booking.
            </li>
            <li>
                <strong class="_color_theme">👉 Template Change (Details Page Template):</strong>
                Select and switch between different post details page templates to control layout, design, and content structure.
            </li>
            <li>
                <strong class="_color_theme">👉 Category Control:</strong>
                Enable or disable category support for the post type. You can select existing categories, or create new categories directly from this section without leaving the page.
            </li>
            <li>
                <strong class="_color_theme">👉 Location Control:</strong>
                Enable or disable location features for the post type. You can select available locations from the list or add new locations instantly for better flexibility.
            </li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/general_configuration.png">
            <img class="_img_control" src="#" alt="General Configuration Overview">
        </div>
    </div>
<?php
