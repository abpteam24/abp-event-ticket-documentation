<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_ticket_shortcode">
    <div class="abet_doc_page_head">
        <h2>🎟️ Ticket Lookup Page <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Use the PRO shortcode to give customers and authorized staff a login-protected page for viewing a booking ticket, downloading its PDF, and checking in.</p>
    </div>
    <h3>Create the page</h3>
    <ol class="abet_doc_steps">
        <li>In WordPress, create a page named something like <em>My Event Ticket</em>.</li>
        <li>Add the shortcode <code>[abpet-ticket]</code> to the page content and publish it.</li>
        <li>Alternatively, use the Event Ticket dashboard's <em>Ticket Download Page</em> status action and click <em>Fix</em> to create the expected ticket page automatically.</li>
        <li>Keep the page published and accessible to the intended logged-in customers or staff.</li>
    </ol>
    <h3>Look up a ticket</h3>
    <ol class="abet_doc_steps">
        <li>Sign in to the WordPress/WooCommerce site. The shortcode does not show booking information to signed-out visitors.</li>
        <li>Enter the ticket PIN in the <em>Order ID / Ticket ID</em> field. Its format is <code>ORDER_ID-BOOKING_ID</code>; for example, <code>123-5</code>.</li>
        <li>Select <em>View Ticket</em> to see the event, session, ticket, attendee, and billing details available to that user.</li>
        <li>Use the booking PDF download or check-in action if it is available to your account.</li>
    </ol>
    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Access and PDF requirements</strong>
        Customers can view only their own bookings. Staff access is controlled by the PDF user roles configured under Global Configuration → PDF; administrators can manage bookings. PDF downloads require ABP PDF Tools to be active.
    </div>
    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ Protect the ticket PIN</strong>
        A ticket PIN identifies a booking. Do not publish PINs or expose the lookup page to untrusted users.
    </div>
    <p>QR codes printed on PRO PDF tickets point to this ticket page and include the ticket PIN. Scanning users must still sign in; if the PIN is not filled automatically, enter the PIN printed below the QR code.</p>
    <p>See <a href="#abet_qr_code">PRO Ticket QR Codes</a> for QR setup and usage details.</p>
</div>
