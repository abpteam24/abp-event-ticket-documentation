<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_faq">
        <h2 class="_abp_color_theme">FAQ Configuration</h2>
        <div class="_divider_xxs"></div>
        <label>
            The FAQ Configuration system allows you to manage frequently asked questions and answers for your clients. Like Additional Services, this feature supports both global and post-level configuration for maximum flexibility.
        </label>
        <h6 class="_abp">🌍 Global FAQ</h6>
        <i>
            From the Global Configuration panel, you can create and manage a standard set of FAQs that will be used across all posts.
        </i>
        <ul class="_abp_list_margin_xs">
            <li>👉 Define global questions and answers</li>
            <li>👉 Enable or disable the FAQ section globally</li>
            <li>👉 Maintain a consistent FAQ structure for all properties</li>
        </ul>
        <h6 class="_abp">🏠 Custom Post-Level FAQ</h6>
        <i>
            Each individual post can also have its own custom FAQ configuration.
        </i>
        <ul class="_abp_list_margin_xs">
            <li>👉 Import FAQs from global configuration</li>
            <li>👉 Add new custom FAQs specific to that post</li>
            <li>👉 Modify imported questions and answers</li>
            <li>👉 Remove or reorder FAQs per post requirement</li>
        </ul>
        <h6 class="_abp">🔄 Import & Customization System</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 One-click import from global FAQs</li>
            <li>👉 Fully editable after import</li>
            <li>👉 Combine global and custom FAQs if needed</li>
            <li>👉 Control FAQ order and visibility</li>
        </ul>
        <h6 class="_abp">⚙️ Smart Behavior</h6>
        <ul class="_abp_list_margin_xs">
            <li>Global FAQs act as a default knowledge base</li>
            <li>Each post can override or extend FAQs independently</li>
            <li>Global changes do not overwrite custom post-level FAQs</li>
        </ul>
        <h6 class="_abp">🚀 Benefits</h6>
        <ul class="_abp_list_margin_xs">
            <li>👉 Reduces repetitive customer queries</li>
            <li>👉 Improves user experience with quick answers</li>
            <li>👉 Saves time with reusable FAQ templates</li>
            <li>👉 Provides a flexible and scalable system</li>
        </ul>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/faq_configuration.png">
            <img class="_img_control" src="#" alt="FAQ Configuration Overview">
        </div>
    </div>
<?php
