<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_checkin_statistics">
    <div class="abet_doc_page_head">
        <h2>✅ Check-in &amp; Session Statistics <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Validate booking tickets at event entry and review ticket sales and revenue by event session.</p>
    </div>
    <h3>Prepare the check-in page</h3>
    <ol class="abet_doc_steps">
        <li>Use the Event Ticket dashboard's Ticket Download Page status action to create the page if needed.</li>
        <li>Confirm the page contains <code>[abpet-ticket]</code> and publish it.</li>
        <li>Have staff sign in before searching for a ticket. The page supports ticket lookup/check-in; users must have permission to access the booking.</li>
        <li>Use the booking's check-in action in the admin booking list when managing entry from the dashboard.</li>
    </ol>
    <p>Individual booking PDFs can include a QR code that points to the ticket page. Enable <em>QR Code?</em> under
        <em>Global Configuration → Feature ON/OFF</em>; PDF generation requires ABP PDF Tools. See
        <a href="#abet_qr_code">Ticket QR Codes</a> for setup and scanning guidance.</p>
    <h3>View session statistics</h3>
    <p>In the Event list, select an event's <em>Statistics</em> action. Choose a session date/time to review booking records, sold ticket quantities, seat information, availability, and revenue for that session.</p>
    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Keep check-in records accurate</strong>
        Check-in changes the booking's entry status. Confirm the selected event/session and ticket before marking it checked in.
    </div>
</div>
