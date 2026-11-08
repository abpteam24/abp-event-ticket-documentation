<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_on_off">
    <div class="abet_doc_page_head">
        <h2>🔀 Feature ON/OFF</h2>
        <p class="abet_doc_lede">
            The <strong>Feature ON/OFF</strong> screen is the master control panel for the plugin. Every optional
            module can be switched on or off here; disabling a module removes its fields, tabs and configuration
            screens from the admin and hides its output on the frontend.
        </p>
    </div>

    <h3>⚙️ How it works</h3>
    <p class="abet_doc_section_intro">
        Toggle a feature on to reveal its related fields, tabs and settings. Toggle it off to hide them everywhere.
        Some Global Configuration tabs and event editor sections only exist while their toggle is on. When ABP Event
        Ticket PRO is active, its additional toggles appear in the same list with a <strong>PRO</strong> badge.
    </p>

    <h3>🔁 Available toggles</h3>
    <table>
        <thead>
            <tr>
                <th>Group</th>
                <th>Toggles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Event fields</strong></td>
                <td>Post SKU, Event Icon, Event Sub Title, Event Description, Event Date and Time List.</td>
            </tr>
            <tr>
                <td><strong>Taxonomies &amp; relations</strong></td>
                <td>Organizer, Location, Category, Brand, Feature, Related Post.</td>
            </tr>
            <tr>
                <td><strong>Tickets &amp; seating</strong></td>
                <td>Multiple Ticket Type, Seat Plan, Min &amp; Max qty, Capacity / Available Qty.</td>
            </tr>
            <tr>
                <td><strong>Forms &amp; extras</strong></td>
                <td>Attendee Form, Same Attendee, Attendee Form, Additional services.</td>
            </tr>
            <tr>
                <td><strong>Event content</strong></td>
                <td>Event Timeline, Event Speaker, FAQ, Term &amp; Conditions.</td>
            </tr>
            <tr>
                <td><strong>Map</strong></td>
                <td>Google Location Map (also requires an API key on the first Global Configuration tab).</td>
            </tr>
            <tr>
                <td><strong>PRO features</strong> (with PRO active)</td>
                <td>Seasonal Discount, Global Seasonal Discount, Early Bird Discount, Global Early Bird Discount,
                    QR Code, Partial Payment, Customer Cancel Request.</td>
            </tr>
            <tr>
                <td><strong>System</strong></td>
                <td>Remove All Data on Uninstall.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/8-admin-feature-on-off.png"><img class="abet_doc_screen_img" src="#" alt="Feature ON/OFF"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Attendee Form</strong>
        The <em>Attendee Form</em> toggle controls the extra client/attendee information form. While it is on, the
        <em>Attendee Form</em> Global Configuration tab and the event editor's <em>Attendee Form</em> tab are available.
        Turning it off hides both without deleting saved form fields.
    </div>

    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ Remove All Data on Uninstall</strong>
        When this toggle is on, deleting the plugin removes its events, orders, seat plans and settings from the
        database. Leave it off if you may reinstall the plugin later.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Keep it lean</strong>
        Turn off the modules you do not use. A shorter event editor is easier for your team and reduces configuration
        mistakes.
    </div>
</div>
