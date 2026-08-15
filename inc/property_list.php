<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_properties">
        <h3 class="_abp_color_theme">🏠 Properties List</h3>
        <div class="_divider_xs"></div>
        <label>
            The Properties List section allows you to manage all rental properties in a centralized dashboard.
            From here, you can create, edit, clone, delete, filter, and organize properties efficiently across multiple posts.
        </label>
        <h6 class="_abp">📋 Key Features of Property Management</h6>
        <ul class="_abp_list_margin_xs">
            <li>
                <strong class="_color_theme">➕ Add New Property:</strong>
                Create a new property with full configuration including pricing rules, availability calendar, rental conditions, and booking settings.
            </li>
            <li>
                <strong class="_color_theme">✍️ Edit Property:</strong>
                Update property information such as title, description, pricing plans, gallery, rules, and availability settings.
            </li>
            <li>
                <strong class="_color_theme">🔁 Clone Property:</strong>
                Duplicate an existing property with all configurations to quickly create similar listings without manual setup.
            </li>
            <li>
                <strong class="_color_theme">❌ Delete Property:</strong>
                Permanently remove a property from the system when it is no longer required.
            </li>
            <li>
                <strong class="_color_theme">🔄 Transfer Property:</strong>
                Move a property from one post to another post without losing any configuration, pricing, or booking data.
            </li>
        </ul>
        <h6 class="_abp">🔎 Advanced Filtering & Management</h6>
        <ul class="_abp_list_margin_xs">
            <li>
                👉 Filter properties by <strong>Post</strong> to view only properties assigned to a specific post.
            </li>
            <li>
                👉 Search properties using keyword-based search for quick access.
            </li>
            <li>
                👉 View property status, availability, and associated post mapping in the listing table.
            </li>
            <li>
                👉 Bulk actions support (delete, move, update status).
            </li>
        </ul>
        <h6 class="_abp">🧭 Post-wise Property Mapping</h6>
        <ul class="_abp_list_margin_xs">
            <li>
                Each property is assigned to a specific post, allowing structured organization of rental items.
            </li>
            <li>
                You can easily reassign properties to another post using the transfer option.
            </li>
            <li>
                This helps manage multi-category rental systems such as vehicles, equipment, or real estate separately.
            </li>
        </ul>
        <h6 class="_abp">📄 Pagination & Performance</h6>
        <ul class="_abp_list_margin_xs">
            <li>
                Property list supports pagination for better performance and usability.
            </li>
            <li>
                Large datasets are automatically split into multiple pages for faster loading.
            </li>
            <li>
                Optimized query system ensures smooth admin experience even with thousands of properties.
            </li>
        </ul>
        <h6 class="_abp">🚀 Benefits</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 Centralized property management system</li>
            <li>👉 Faster workflow with clone and transfer features</li>
            <li>👉 Better organization using post-based grouping</li>
            <li>👉 Scalable system for large rental marketplaces</li>
            <li>👉 Optimized performance with pagination support</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/property_list.png">
            <img class="_img_control" src="#" alt="Transport Booking Property List Overview">
        </div>
    </div>
<?php
