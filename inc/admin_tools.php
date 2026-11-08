<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_admin_tools">
    <div class="abet_doc_page_head">
        <h2>🛠️ Admin Booking Tools <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Create bookings for customers or edit existing booking information from the Event Ticket administration area.</p>
    </div>
    <h3>Create a booking</h3>
    <ol class="abet_doc_steps">
        <li>Open the Event Ticket admin screen and choose <em>Add Order</em>.</li>
        <li>Find and select the event, then complete the event date/session and ticket or seat choices in the booking form.</li>
        <li>Enter the customer's billing/contact details and any attendee or additional-service information requested by the event.</li>
        <li>Choose the appropriate order status/payment state and submit the booking.</li>
        <li>Review the created order in <em>Orders</em>. If booking email is configured, an email may be sent to the customer.</li>
    </ol>
    <h3>Edit an existing booking/order</h3>
    <ol class="abet_doc_steps">
        <li>Open <em>Orders</em> and find the booking you need to change.</li>
        <li>Use its <em>Edit Booking</em> action. This action is available to administrators for bookings whose status is included in the configured booked statuses.</li>
        <li>Update the event date/session, ticket quantities or seat selection, attendee information, additional services, billing details, or order status as needed.</li>
        <li>Save the booking and review the updated order total and booking details. The total is recalculated from the selected event/session and tickets.</li>
    </ol>
    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ Administrative access</strong>
        These tools create or change customer bookings. Limit access to trusted administrators and verify the event, customer, and payment details before saving.
    </div>
</div>
