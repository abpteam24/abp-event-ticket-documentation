<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_configuration">
    <div class="abet_doc_page_head">
        <h2>⚙️ Global Configuration</h2>
        <p class="abet_doc_lede">
            Global Configuration holds everything shared across events: naming and slugs, feature toggles, date and
            time formats, reusable libraries (ticket types, taxonomies, speakers, FAQ, terms), slider settings,
            contact details and CSS properties.
        </p>
    </div>

    <h3>📚 Sections</h3>
    <table>
        <thead>
            <tr>
                <th>Section</th>
                <th>Purpose</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Events</strong> (first tab)</td>
                <td>Booked Status, menu label, slug, dashboard menu icon, event ticket icon, taxonomy labels and
                    slugs, and the Google Maps API key. The tab title follows the <em>Label</em> field, so it is
                    <em>Events</em> by default.</td>
            </tr>
            <tr>
                <td><strong>Feature ON/OFF</strong></td>
                <td>Enable or disable individual plugin modules across the admin and frontend.</td>
            </tr>
            <tr>
                <td><strong>Dates</strong></td>
                <td>Date format, time format, sale-closing buffer in minutes and advance-booking days.</td>
            </tr>
            <tr>
                <td><strong>Additional services</strong></td>
                <td>Reusable extras offered during booking.</td>
            </tr>
            <tr>
                <td><strong>Attendee Form</strong></td>
                <td>Default attendee form fields that can be imported into events.</td>
            </tr>
            <tr>
                <td><strong>Location</strong></td>
                <td>Venues with address and Google Map data.</td>
            </tr>
            <tr>
                <td><strong>Category / Organizer / Brand / Feature</strong></td>
                <td>Reusable taxonomies and libraries assigned to events.</td>
            </tr>
            <tr>
                <td><strong>Speaker</strong></td>
                <td>Reusable speaker profiles with photo, designation, company, bio, website and social links.</td>
            </tr>
            <tr>
                <td><strong>FAQ / Term &amp; Conditions</strong></td>
                <td>Reusable content that can be imported into events.</td>
            </tr>
            <tr>
                <td><strong>Slider</strong></td>
                <td>Slider theme, images per row, indicators and popup behaviour.</td>
            </tr>
            <tr>
                <td><strong>Contact Information</strong></td>
                <td>Company name, address, phone and email.</td>
            </tr>
            <tr>
                <td><strong>CSS Property</strong></td>
                <td>Theme colours, border radius, font sizes and button/section colours.</td>
            </tr>
            <tr>
                <td><strong>PDF / Order Lists PDF / Order Lists CSV / E-Mail</strong> (PRO)</td>
                <td>Ticket PDF branding, booking-list PDF columns, CSV export columns and booking email content,
                    statuses, recipients and PDF attachment.</td>
            </tr>
            <tr>
                <td><strong>Partial Payment / Global Discount</strong> (PRO)</td>
                <td>Site-wide deposit rules and date-based seasonal or early-bird discount rules. Event-specific
                    versions live on the event editor's <em>Partial Payment</em> and <em>Discount</em> tabs.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/7-admin-global-configuration.png"><img class="abet_doc_screen_img" src="#" alt="Global configuration"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Conditional sections</strong>
        Additional services, Attendee Form, Location, Category, Organizer, Brand, Feature, Speaker, FAQ and
        Term &amp; Conditions only appear when their matching toggle is switched on under <em>Feature ON/OFF</em>.
        The PRO sections (PDF, Order Lists PDF, Order Lists CSV, E-Mail, Partial Payment and Global Discount) appear
        only while ABP Event Ticket PRO is active.
    </div>

    <h3>💾 Saving</h3>
    <p class="abet_doc_section_intro">
        Each section has its own save button labelled <em>Save {section name} Configuration</em> - for example
        <em>Save Events Configuration</em>, <em>Save Feature ON/OFF Configuration</em>, <em>Save Slider
        Configuration</em>, <em>Save Contact Information Configuration</em> and <em>Save CSS Property
        Configuration</em>. The Dates tab uses <em>Save Global Date Configuration</em>, while the reusable libraries
        (Location, Category, Organizer, Brand, Feature, Speaker, FAQ, Term &amp; Conditions) save through Add New,
        Edit, and Save Global buttons or the library's own AJAX save. Changes apply immediately.
    </p>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Booked Status</strong>
        <em>Booked Status</em> on the first Global Configuration tab (Events by default) decides which WooCommerce
        order statuses count as sold. Those statuses drive ticket availability, seat reservation and the cancel action
        on the Orders screen. The default is <code>wc-processing,wc-completed</code> (the saved value on this site also
        includes <code>wc-pending</code>).
    </div>
</div>
