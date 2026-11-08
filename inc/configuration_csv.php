<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_csv_settings">
    <div class="abet_doc_page_head">
        <h2>📊 Booking CSV Export <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Select the booking and attendee fields included in CSV exports, then export filtered booking results from Orders.</p>
    </div>
    <h3>Configure CSV fields</h3>
    <ol class="abet_doc_steps">
        <li>Open <em>Global Configuration → Order Lists CSV</em>.</li>
        <li>Choose which columns to include, such as order ID/status/date, event and session, ticket, price, attendee/additional-service, billing, and payment details.</li>
        <li>Save the configuration.</li>
        <li>Go to <em>Orders</em>, apply filters for the bookings you need, and choose the CSV export action.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/27-admin-global-order-lists-csv.png"><img class="abet_doc_screen_img" src="#" alt="Order lists CSV"></div>

    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ Protect exported data</strong>
        CSV files can contain personal and billing information. Export only the fields you need and store or share the file securely.
    </div>
</div>
