<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_installation">
    <div class="abet_doc_page_head">
        <h2>📥 Installation</h2>
        <p class="abet_doc_lede">
            ABP Event Ticket is a standard WordPress plugin. Install and activate it like any other plugin, then
            enable the store features you need. WooCommerce must be installed and active for ticket sales to work.
        </p>
    </div>

    <h3>✅ Requirements</h3>
    <ul>
        <li><strong>WordPress</strong> 6.2 or newer.</li>
        <li><strong>PHP</strong> 7.4 or newer.</li>
        <li><strong>WooCommerce</strong> 8.0 or newer, installed and activated.</li>
    </ul>

    <h3>🧩 Install from the dashboard</h3>
    <ol class="abet_doc_steps">
        <li><strong>Upload the plugin</strong> — Go to <em>Plugins → Add New → Upload Plugin</em> and choose the plugin ZIP file.</li>
        <li><strong>Install</strong> — Click <strong>Install Now</strong> and wait for WordPress to finish.</li>
        <li><strong>Activate</strong> — Click <strong>Activate Plugin</strong>.</li>
        <li><strong>Verify WooCommerce</strong> — Make sure WooCommerce is installed and activated, and complete its setup wizard if you have not already.</li>
    </ol>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ FTP / file upload</strong>
        You can also upload the plugin folder to <code>/wp-content/plugins/</code> via FTP or your file manager,
        then activate it from the <em>Plugins</em> screen.
    </div>

    <h3>⚙️ First-time setup</h3>
    <ol class="abet_doc_steps">
        <li><strong>Open Global Configuration</strong> — Set the menu label, and choose which features to enable under <em>Feature ON/OFF</em>.</li>
        <li><strong>Create supporting data</strong> - Add ticket types, seat plans, categories, locations, organizers, brands, features, and speakers as needed.</li>
        <li><strong>Create your first event</strong> - Go to <em>Events → Add New</em> and configure the general settings, tickets, and dates.</li>
        <li><strong>Publish a list or booking page</strong> — Add the <code>[abpet-booking]</code> shortcode to a page to display your events.</li>
    </ol>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Tip</strong>
        Enable WooCommerce order statuses under <em>Global Configuration → Events → Booked Status</em> so that
        paid orders automatically deduct inventory and reserve seats. The first configuration tab is named after the
        value of the <em>Label</em> field, so it reads <em>Events</em> until you rename it.
    </div>

    <h3>👑 Optional PRO add-on</h3>
    <p>
        ABP Event Ticket PRO extends the free plugin; it does not replace it. First install and activate
        <strong>WooCommerce</strong> and <strong>ABP Event Ticket</strong>, then download PRO from the
        <a href="https://abp-team.com/downloads/abp-event-ticket-pro/" target="_blank" rel="noopener">ABP Event Ticket PRO page</a>
        and upload its ZIP through <em>Plugins → Add New → Upload Plugin</em>. The current PRO release requires PHP 8.0 or newer.
    </p>
    <ol class="abet_doc_steps">
        <li>Keep the free plugin and WooCommerce active, then upload and activate the PRO plugin ZIP.</li>
        <li>Open the Event Ticket dashboard and enter your purchased license key in the PRO License card.</li>
        <li>Install and activate ABP PDF Tools if you plan to use PDF tickets or attendee lists.</li>
    </ol>
    <p>PRO adds discounts, partial payments, cancellation requests, PDFs and booking emails, admin booking tools,
        CSV export, session statistics, and ticket check-in.</p>
</div>
