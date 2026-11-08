<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_cancel_requests">
    <div class="abet_doc_page_head">
        <h2>🚫 Customer Cancellation Requests <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Let customers request cancellation from WooCommerce My Account, with an administrator making the final decision.</p>
    </div>
    <h3>Enable and set the cutoff</h3>
    <ol class="abet_doc_steps">
        <li>Enable <em>Customer Cancel Request</em> in <em>Global Configuration → Feature ON/OFF</em>.</li>
        <li>Open <em>Cancel Requests</em> in the Event Ticket admin navigation.</li>
        <li>Choose the number of hours or days before the event starts when requests must stop, then save.</li>
        <li>Customers submit requests from their WooCommerce My Account booking area while the event is outside the cutoff window.</li>
    </ol>
    <h3>Review requests</h3>
    <p>The Cancel Requests page lists pending requests, including the booking, event/session, requester, and request time. Approve a request to cancel that booking and release its tickets/seats; reject it to keep the booking active.</p>
    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Customer request is not an automatic cancellation</strong>
        A booking remains active until an administrator approves the request. Review each request against your event and refund policies.
    </div>
</div>
