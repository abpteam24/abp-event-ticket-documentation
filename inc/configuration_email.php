<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_email_settings">
    <div class="abet_doc_page_head">
        <h2>✉️ Booking Email <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Customize booking notifications and optionally attach a PDF ticket.</p>
    </div>
    <h3>Set up the email</h3>
    <ol class="abet_doc_steps">
        <li>Open <em>Global Configuration → E-Mail</em> and enable booking email.</li>
        <li>Select WooCommerce order statuses that should trigger the email.</li>
        <li>Set the sender name/address, subject, optional administrator notification address, and email body.</li>
        <li>Choose whether to attach the booking PDF. PDF attachments require ABP PDF Tools to be active.</li>
        <li>Save, then test with a booking in one of the selected order statuses.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/28-admin-global-email.png"><img class="abet_doc_screen_img" src="#" alt="Booking email settings"></div>

    <h3>Available content placeholders</h3>
    <p>Insert these placeholders in the email body; the plugin replaces them with booking data:</p>
    <ul>
        <li><code>#post_name</code>, <code>#client_name</code>, <code>#order_id</code>, <code>#order_date</code></li>
        <li><code>#status</code>, <code>#payment</code>, <code>#booking_details</code></li>
        <li><code>#ticket_details</code>, <code>#bill_info</code>, <code>#price_details</code></li>
    </ul>
    <p>Administrators can resend a booking email from its booking/order action. Check the recipient, message, selected order status, and PDF dependency if a notification is not received.</p>
</div>
