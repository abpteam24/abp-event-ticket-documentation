<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_qr_code">
    <div class="abet_doc_page_head">
        <h2>🔳 Ticket QR Codes <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Add a QR code and its ticket PIN to an individual booking PDF so customers or authorized staff can quickly open the ticket lookup page.</p>
    </div>
    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ PDF requirement</strong>
        ABP PDF Tools must be active to generate a ticket PDF. The QR option does not create a PDF by itself.
    </div>
    <h3>Enable QR codes</h3>
    <ol class="abet_doc_steps">
        <li>Confirm that ABP Event Ticket PRO is installed and active alongside the free event plugin and WooCommerce.</li>
        <li>In the Event Ticket admin, open <em>Global Configuration → Feature ON/OFF</em>.</li>
        <li>Enable <em>QR Code?</em> and save the configuration.</li>
        <li>Confirm the Ticket Download Page exists. Use the dashboard's <em>Ticket Download Page → Fix</em> action to create it if needed; the page uses <code>[abpet-ticket]</code>.</li>
        <li>Generate or download an individual booking PDF. When QR Code is enabled, the PDF includes the QR image and the associated ticket PIN.</li>
    </ol>
    <h3>Scan and check in</h3>
    <ol class="abet_doc_steps">
        <li>Scan the QR code to open the ticket lookup page on your site.</li>
        <li>Sign in with the customer account that owns the booking, or an account with an authorized staff role.</li>
        <li>If the PIN field is not populated after scanning, enter the PIN printed directly under the QR code. It uses the format <code>ORDER_ID-BOOKING_ID</code>.</li>
        <li>Review the booking and use the check-in action if your account is authorized.</li>
    </ol>
    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ QR contents and external image service</strong>
        The QR encodes the ticket page URL with its ticket PIN. The current implementation requests the QR image from the external QR Server service (<code>api.qrserver.com</code>); generating the image therefore sends that encoded URL/PIN to the service. Consider this when handling booking data and sharing PDFs.
    </div>
    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ A QR code is not proof of entry by itself</strong>
        Scanning opens the ticket page. A logged-in authorized user must verify the booking and use the check-in control to record entry. Keep ticket PDFs and PINs private.
    </div>
    <p>For page creation, login, PIN format, and booking access rules, see <a href="#abet_ticket_shortcode">PRO Ticket Lookup Shortcode</a>.</p>
</div>
