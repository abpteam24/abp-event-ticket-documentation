<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_feature">
    <div class="abet_doc_page_head">
        <h2>⭐ Features</h2>
        <p class="abet_doc_lede">
            ABP Event Ticket combines event publishing, ticket selling, reserved seating, attendee registration, and
            WooCommerce order handling into one plugin. The FREE features are included in ABP Event Ticket; the
            features marked PRO require the optional ABP Event Ticket PRO add-on.
        </p>
    </div>

    <h3>🎟️ Events &amp; Tickets</h3>
    <ul>
        <li>Event creation and management with a dedicated post type.</li>
        <li>Event list with pagination and status filters.</li>
        <li>Event edit, clone, view, trash, restore, and permanent delete actions.</li>
        <li>General admission ticket sales and reserved seat ticket sales.</li>
        <li>Multiple ticket types with individual pricing and quantity controls.</li>
        <li>Minimum, maximum, and reserved quantity limits per ticket type.</li>
        <li>Availability tracked per ticket type <em>and per session</em>.</li>
    </ul>

    <h3>🪑 Reserved Seating</h3>
    <ul>
        <li>Reusable seat plans with a drag-and-drop designer.</li>
        <li>Reusable ticket types with a colour, prefix, icon or image.</li>
        <li>Custom cell labels, dimensions, spacing, spanning and layouts.</li>
        <li>Ticket-type assignment to seats, with a per-type seat count for each plan.</li>
        <li>Decoration items (doors, stairs, aisles, windows and more) for non-seatable areas.</li>
        <li>Seat plans attached to events with a frontend name and per-type prices.</li>
    </ul>

    <h3>🗓️ Scheduling</h3>
    <ul>
        <li>Specific-date and periodic-date event schedules.</li>
        <li>Date-wise and day-wise time configuration.</li>
        <li>Special on/off dates and weekend rules for periodic schedules.</li>
        <li>Advance booking limits and sale-closing buffer controls.</li>
        <li>Frontend date UI that adapts to the number of available dates.</li>
    </ul>

    <h3>🧾 Content &amp; Registration</h3>
    <ul>
        <li>Configurable attendee information (client) forms.</li>
        <li>Optional additional services with quantity, price and max-quantity limits.</li>
        <li>Event FAQs and Terms &amp; Conditions.</li>
        <li>Event timeline with time, title, and description entries.</li>
        <li>Event speakers with profiles (bio, photo, designation, company, website, social links).</li>
    </ul>

    <h3>🗂️ Taxonomies &amp; Display</h3>
    <ul>
        <li>Location, category, organizer, and brand management.</li>
        <li>Google Location Map with an admin search-and-select picker and a key-free iframe fallback.</li>
        <li>Three frontend location map styles: default, light, and modern.</li>
        <li>Event features, related events, gallery, and image slider.</li>
        <li>Three details-page templates: default, light, and modern.</li>
        <li>Event search, filtering, and pagination.</li>
    </ul>

    <h3>🛒 Commerce &amp; Global Configuration</h3>
    <ul>
        <li>WooCommerce cart, checkout, payment, tax, coupon, and order integration.</li>
        <li>Booking and order details in the WordPress dashboard.</li>
        <li>Global and event-specific configuration with reusable data.</li>
        <li>Feature enable/disable controls for every module.</li>
        <li>Translation-ready, with a bundled <code>.pot</code> file.</li>
        <li>Polylang-compatible frontend language filtering when Polylang is active.</li>
        <li>Shortcode-based embedding — the plugin's post type uses the classic editor, not Gutenberg.</li>
    </ul>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/47-frontend-event-list-features.png"><img class="abet_doc_screen_img" src="#" alt="Frontend event list features"></div>

    <h3>👑 PRO Add-on</h3>
    <ul>
        <li><span class="abet_doc_badge abet_doc_badge_pro">PRO</span> Seasonal and Early Bird discounts, configured globally or per event.</li>
        <li><span class="abet_doc_badge abet_doc_badge_pro">PRO</span> Partial payments with deposit and balance tracking.</li>
        <li><span class="abet_doc_badge abet_doc_badge_pro">PRO</span> Customer cancellation requests with an event-time cutoff and administrator approval.</li>
        <li><span class="abet_doc_badge abet_doc_badge_pro">PRO</span> PDF tickets and attendee-list PDFs, customizable booking emails, and resend tools.</li>
        <li><span class="abet_doc_badge abet_doc_badge_pro">PRO</span> The <code>[abpet-ticket]</code> ticket lookup, PDF download, and check-in page, with optional QR codes on booking PDFs.</li>
        <li><span class="abet_doc_badge abet_doc_badge_pro">PRO</span> Admin-created/edited bookings, booking CSV export, session statistics, and ticket check-in.</li>
    </ul>
    <p>
        <a href="https://abp-team.com/downloads/abp-event-ticket-pro/" target="_blank" rel="noopener">
            Learn about ABP Event Ticket PRO
        </a>
    </p>
</div>
