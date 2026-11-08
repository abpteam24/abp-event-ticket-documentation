<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_pro_features">
    <div class="abet_doc_page_head">
        <h2>👑 ABP Event Ticket PRO</h2>
        <p class="abet_doc_lede">
            PRO is an optional add-on for the free ABP Event Ticket plugin. It uses the event, ticket, seat-plan,
            attendee, and booking data provided by the free plugin, and adds tools for payments, customer service,
            reporting, and event-day operations.
        </p>
    </div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Requirements</strong>
        WooCommerce and the free ABP Event Ticket plugin must both be installed and active. ABP PDF Tools must also
        be active to generate PDF tickets and attendee-list PDFs. The current PRO plugin release requires PHP 8.0 or newer.
    </div>

    <h3>✨ PRO features</h3>
    <table>
        <thead>
            <tr>
                <th>Feature</th>
                <th>What it does</th>
                <th>Where to find it</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Seasonal &amp; Early Bird Discounts</strong></td>
                <td>Configure date-based discounts globally or for individual events.</td>
                <td>Global Configuration and event settings</td>
            </tr>
            <tr>
                <td><strong>Partial Payments</strong></td>
                <td>Let eligible customers pay a deposit and track the remaining balance.</td>
                <td>Global Configuration, event settings, and WooCommerce My Account</td>
            </tr>
            <tr>
                <td><strong>Cancellation Requests</strong></td>
                <td>Customers can request cancellation before the configured event start cutoff; administrators approve or reject requests.</td>
                <td>WooCommerce My Account and Cancel Requests</td>
            </tr>
            <tr>
                <td><strong>PDF Tickets &amp; Attendee Lists</strong></td>
                <td>Generate individual booking tickets and filtered booking-list PDFs with configurable fields.</td>
                <td>Booking actions and Orders</td>
            </tr>
            <tr>
                <td><strong>Booking Emails</strong></td>
                <td>Configure booking email content, attach PDFs, and resend booking emails.</td>
                <td>Global Configuration → E-Mail and booking actions</td>
            </tr>
            <tr>
                <td><strong>Admin Booking Tools</strong></td>
                <td>Create bookings for customers and edit event dates, tickets/seats, attendee details, and billing data.</td>
                <td>Add Order and booking actions</td>
            </tr>
            <tr>
                <td><strong>CSV Export &amp; Session Statistics</strong></td>
                <td>Export filtered booking data and review event-session ticket counts and revenue.</td>
                <td>Orders and event-list actions</td>
            </tr>
            <tr>
                <td><strong>Ticket Check-in</strong></td>
                <td>Look up a booking ticket and mark it as checked in. The ticket lookup page is provided by a PRO shortcode.</td>
                <td><code>[abpet-ticket]</code> page and booking actions</td>
            </tr>
            <tr>
                <td><strong>Ticket QR Codes</strong></td>
                <td>Include a QR code and ticket PIN on individual booking PDFs for quick access to the ticket page.</td>
                <td>Global Configuration → Feature ON/OFF and PDF tickets</td>
            </tr>
            <tr>
                <td><strong>Customer Booking Actions</strong></td>
                <td>View booking details, request cancellation when enabled, and manage outstanding balances.</td>
                <td>WooCommerce My Account</td>
            </tr>
            <tr>
                <td><strong>License &amp; Updates</strong></td>
                <td>Activate or deactivate the site license and receive eligible PRO plugin updates.</td>
                <td>Event Ticket Dashboard → PRO License</td>
            </tr>
        </tbody>
    </table>

    <h3>🛠️ Configure and use PRO</h3>
    <h4>Discounts</h4>
    <ol class="abet_doc_steps">
        <li>In <em>Global Configuration → Feature ON/OFF</em>, enable Seasonal Discount or Early Bird Discount.
            Enable the corresponding global option too if the rule should apply site-wide.</li>
        <li>For a global rule, open <em>Global Configuration → Global Discount</em>, add one or more date ranges,
            enter each percentage, and save.</li>
        <li>For an event-specific rule, edit the event, open its <em>Discount</em> tab, add date ranges and percentages,
            and save the event. Event rules are configured separately from global rules.</li>
    </ol>

    <h4>Partial payments</h4>
    <ol class="abet_doc_steps">
        <li>Enable <em>Partial Payment</em> under <em>Global Configuration → Feature ON/OFF</em>.</li>
        <li>Open <em>Global Configuration → Partial Payment</em> to set a default fixed amount or percentage.</li>
        <li>Edit an event, open its <em>Partial Payment</em> tab, enable partial payment for that event, and enter
            the amount or percentage. Customers can choose a payment option at checkout; remaining balances are
            available through their WooCommerce account.</li>
    </ol>

    <h4>Cancellation requests</h4>
    <p>Enable <em>Customer Cancel Request</em> in <em>Global Configuration → Feature ON/OFF</em>. In
        <em>Cancel Requests</em>, open the cancellation settings and set the cutoff in hours or days before the
        event starts. Customers submit requests from WooCommerce My Account; an administrator must approve or
        reject each request. Approval cancels the booking and releases its ticket/seat inventory.</p>

    <h4>PDF tickets and attendee lists</h4>
    <p>Install and activate ABP PDF Tools. Use the dashboard's <em>Fix</em> action to create the Ticket Download
        Page if it is missing, then add <code>[abpet-ticket]</code> to a page for ticket lookup and check-in.
        Configure ticket branding under <em>Global Configuration → PDF</em>; configure company details and visible
        columns under <em>Order Lists PDF</em>. Individual booking PDFs are available from the order/booking actions.
        PDF generation is unavailable until ABP PDF Tools is active.</p>

    <h4>Booking emails</h4>
    <p>Use <em>Global Configuration → E-Mail</em> to enable booking email, choose the order statuses that trigger
        it, set sender and subject information, edit the email content, and choose whether to attach a PDF.
        The editor supports placeholders such as <code>#client_name</code>, <code>#order_id</code>,
        <code>#post_name</code>, <code>#booking_details</code>, <code>#ticket_details</code>,
        <code>#bill_info</code>, and <code>#price_details</code>. Administrators can resend a booking email
        from its order action.</p>

    <h4>Orders, reports, and check-in</h4>
    <p>Use the booking/order list to create or edit bookings, export the current booking results as CSV, and
        download filtered attendee-list PDFs. The Event list's <em>Statistics</em> action opens session-level
        ticket and revenue information. Check in a ticket with the <code>[abpet-ticket]</code> page or the
        check-in action on its booking; permitted staff must be logged in.</p>

    <h3>🔑 License and updates</h3>
    <p>The PRO License card appears in the Event Ticket dashboard. A 30-day trial is available for a new installation;
        to continue using PRO after the trial, enter the key from your purchase and choose <em>Activate License</em>.
        The license is associated with the site where it is activated; deactivate it before moving the license to
        another site. A valid license enables plugin updates. License status and any expiry information appear on the card.</p>

    <h3>📦 Install PRO</h3>
    <ol class="abet_doc_steps">
        <li>Purchase or download ABP Event Ticket PRO from the
            <a href="https://abp-team.com/downloads/abp-event-ticket-pro/" target="_blank" rel="noopener">official PRO page</a>.</li>
        <li>Confirm WooCommerce and the free ABP Event Ticket plugin are active.</li>
        <li>Confirm the server runs PHP 8.0 or newer.</li>
        <li>In WordPress, go to <em>Plugins → Add New → Upload Plugin</em>, upload the PRO ZIP, then activate it.</li>
        <li>Open the Event Ticket dashboard, enter your license key in the PRO License card, and activate it.</li>
        <li>Install and activate ABP PDF Tools to enable PDF generation.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/48-frontend-event-list-pro-features.png"><img class="abet_doc_screen_img" src="#" alt="Frontend event list PRO features"></div>

    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ Keep the free plugin active</strong>
        PRO extends the free plugin and depends on its event and booking data. Deactivating the free plugin prevents
        PRO features from loading.
    </div>

    <p>
        <a href="https://abp-team.com/downloads/abp-event-ticket-pro/" target="_blank" rel="noopener">
            View ABP Event Ticket PRO
        </a>
    </p>
    <p>For setup steps, see <a href="#abet_ticket_shortcode">Ticket Lookup Shortcode</a> and
        <a href="#abet_qr_code">Ticket QR Codes</a>.</p>
</div>
