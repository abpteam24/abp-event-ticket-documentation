<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_orders">
    <div class="abet_doc_page_head">
        <h2>🧾 Orders</h2>
        <p class="abet_doc_lede">
            The <strong>Orders</strong> screen lists every booking made through the plugin. Each row shows the order,
            its event session, the tickets and extras purchased, the amounts, the status, payment method, billing
            details and the attendee data collected by the Attendee form.
        </p>
    </div>

    <h3>🔎 Filtering</h3>
    <p class="abet_doc_section_intro">
        Use the search field and <em>More Options</em> to narrow the list by order, event, status, date or customer.
        The footer row shows the total price, additional total and grand total for the filtered results.
    </p>

    <h3>📋 Columns</h3>
    <table>
        <thead>
            <tr>
                <th>Column</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Action</strong></td>
                <td>Cancel a booking. The cancel button is shown only when the order is in one of the statuses
                    selected under <em>Global Configuration → Events → Booked Status</em>.</td>
            </tr>
            <tr>
                <td><strong>Order ID / Date</strong></td>
                <td>The order number and the date the booking was created.</td>
            </tr>
            <tr>
                <td><strong>Event</strong></td>
                <td>The event title, with its icon and SKU when those features are enabled.</td>
            </tr>
            <tr>
                <td><strong>Event Date / Session</strong></td>
                <td>The booked date and session time.</td>
            </tr>
            <tr>
                <td><strong>Ticket Info</strong></td>
                <td>The ticket types and quantities, plus the seat plan and seat numbers when reserved seating is
                    used.</td>
            </tr>
            <tr>
                <td><strong>Additional Info</strong></td>
                <td>Additional services purchased (shown when <em>Additional Services</em> is enabled).</td>
            </tr>
            <tr>
                <td><strong>Price / Additional / Total</strong></td>
                <td>Ticket total, additional-services total and the order total.</td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                <td>The current order status.</td>
            </tr>
            <tr>
                <td><strong>Payment Method</strong></td>
                <td>The gateway used for the order.</td>
            </tr>
            <tr>
                <td><strong>Billing Info</strong></td>
                <td>Billing name, address and contact details, expandable with <em>More</em>.</td>
            </tr>
            <tr>
                <td><strong>Attendee Info</strong></td>
                <td>The attendee data collected by the Attendee form (shown when <em>Attendee Form</em> is enabled).</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/3-admin-orders-list.png"><img class="abet_doc_screen_img" src="#" alt="Orders list"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Automatic inventory</strong>
        Orders that reach the statuses selected under <em>Global Configuration → Events → Booked Status</em> count
        as sold, so their tickets are deducted from availability and their seats are reserved. Cancelling an order
        releases them again.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 WooCommerce orders</strong>
        Every booking also creates a WooCommerce order, so you can open it under <em>WooCommerce → Orders</em> for the
        full line-item, customer and payment history.
    </div>
</div>
