<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_getting_start">
    <div class="abet_doc_page_head">
        <h2>🚀 Getting Started</h2>
        <p class="abet_doc_lede">
            Thank you for choosing <strong>ABP Event Ticket</strong>. This documentation walks you through the
            complete plugin — creating events, configuring ticket and seat plans, scheduling dates, collecting
            attendee information, and selling tickets through WooCommerce.
        </p>
    </div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Recommended knowledge</strong>
        A basic working knowledge of WordPress and WooCommerce is recommended before using the plugin.
    </div>

    <h3>📄 Document information</h3>
    <ol class="abet_doc_steps">
        <li><strong>Version</strong> — <?php echo esc_html(defined('ABET_DOC_VERSION') ? ABET_DOC_VERSION : '1.0.0'); ?></li>
        <li><strong>Author</strong> — <a href="https://abp-team.com" target="_blank" rel="noopener">ABPTEAM</a></li>
        <li><strong>Plugin</strong> — ABP Event Ticket</li>
        <li><strong>Requirements</strong> — WordPress 6.2+, PHP 7.4+, WooCommerce 8.0+</li>
    </ol>

    <h3>🎯 What ABP Event Ticket does</h3>
    <p class="abet_doc_section_intro">
        ABP Event Ticket turns WooCommerce into a complete event ticketing and registration system. From a single
        dashboard you can create events, define ticket types and prices, design reserved seat plans, publish event
        schedules, and sell tickets through the standard WooCommerce checkout and cart.
    </p>
    <ul>
        <li>Create and manage events with rich details, galleries, and frontend templates.</li>
        <li>Sell general admission tickets or reserved seats from reusable seat plans.</li>
        <li>Configure dates, times, ticket availability, and advance booking buffers.</li>
        <li>Collect attendee information through configurable Attendee forms.</li>
        <li>Maintain reusable global configuration for ticket types, seat plans, taxonomies, speakers, FAQs, and terms.</li>
        <li>Embed events anywhere with shortcodes such as <code>[abpet-post]</code>, <code>[abpet-booking]</code> and
            <code>[abpet-gallery]</code>.</li>
    </ul>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Need help?</strong>
        If you have any questions that are beyond the scope of this documentation, do not hesitate to contact us
        through the <a target="_blank" href="https://abp-team.com/support-desk/" rel="noopener">Support Page</a>.
    </div>
</div>
