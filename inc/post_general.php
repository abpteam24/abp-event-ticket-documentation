<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_general">
    <div class="abet_doc_page_head">
        <h2>⚙️ General Configuration</h2>
        <p class="abet_doc_lede">
            The <strong>General</strong> tab in the event editor provides centralized controls for the basic
            information and behavior of an event. Configure the template, SKU, icon, description, capacity display,
            event type, and taxonomies from a single section.
        </p>
    </div>

    <h3>📋 Fields and options</h3>
    <table>
        <thead>
            <tr>
                <th>Option</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Sale Continue ON/OFF</strong></td>
                <td>Enables or disables ticket sales for this event. When enabled, customers can purchase according to the configured availability.</td>
            </tr>
            <tr>
                <td><strong>Template</strong></td>
                <td>Selects the details page template for this event: <em>Default</em>, <em>Light</em>, or <em>Modern</em>.</td>
            </tr>
            <tr>
                <td><strong>ID / SKU</strong></td>
                <td>A unique SKU or identifier for the event, with an option to display it on the frontend.</td>
            </tr>
            <tr>
                <td><strong>Event Icon</strong></td>
                <td>A custom icon or emoji shown alongside the event title.</td>
            </tr>
            <tr>
                <td><strong>Sub Title</strong></td>
                <td>A short subtitle for the event. Leave empty to hide it.</td>
            </tr>
            <tr>
                <td><strong>Short Description</strong></td>
                <td>A brief overview of the event for customers.</td>
            </tr>
            <tr>
                <td><strong>Event Type</strong></td>
                <td>Choose <em>Offline</em> or <em>Online</em>. This determines how the event location is presented.</td>
            </tr>
            <tr>
                <td><strong>Display Capacity ON/OFF</strong></td>
                <td>Shows or hides the event capacity on the frontend (works when the global capacity feature is enabled).</td>
            </tr>
            <tr>
                <td><strong>Location</strong></td>
                <td>Assign one or more locations and control their frontend display. New locations can be added inline.</td>
            </tr>
            <tr>
                <td><strong>Category</strong></td>
                <td>Assign categories and control their frontend display.</td>
            </tr>
            <tr>
                <td><strong>Organizer</strong></td>
                <td>Assign an organizer and control its frontend display.</td>
            </tr>
            <tr>
                <td><strong>Brand</strong></td>
                <td>Assign a brand and control its frontend display.</td>
            </tr>
            <tr>
                <td><strong>Related Event</strong></td>
                <td>Choose related events to promote on the event details page.</td>
            </tr>
            <tr>
                <td><strong>Feature</strong></td>
                <td>Add features to the event by selecting existing features or creating new ones.</td>
            </tr>
            <tr>
                <td><strong>Speaker</strong></td>
                <td>Assign one or more speaker profiles from the global speaker library, and switch
                    <em>Active Speaker?</em> on or off to show or hide them. Shown when the <em>Speaker</em> feature is
                    enabled.</td>
            </tr>
            <tr>
                <td><strong>Gallery</strong></td>
                <td>Add multiple images to build the event gallery and slider.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/31-event-editor-general.png"><img class="abet_doc_screen_img" src="#" alt="Event editor general"></div>

    <h3>🔗 Related events</h3>
    <p class="abet_doc_section_intro">
        Use <em>Related Event</em> to promote other events on the details page. Select one or more published events to
        show as related items.
    </p>
    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/39-event-editor-related-events.png"><img class="abet_doc_screen_img" src="#" alt="Event editor related events"></div>

    <h3>✨ Event features</h3>
    <p class="abet_doc_section_intro">
        Assign highlights from the Features library (or create new ones) so they appear on the event details page.
    </p>
    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/41-event-editor-features.png"><img class="abet_doc_screen_img" src="#" alt="Event editor features"></div>

    <h3>🎤 Speaker profiles</h3>
    <p class="abet_doc_section_intro">
        Speakers are created once under <em>Global Configuration → Speakers</em> and then assigned here. Each profile
        stores a name, photo, designation, company, bio, website and social links, and appears on the event details
        page while <em>Active Speaker?</em> is on.
    </p>
    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/38-event-editor-speakers.png"><img class="abet_doc_screen_img" src="#" alt="Event editor speakers"></div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Tip</strong>
        Fields such as SKU, icon, and description only appear when their matching toggle is enabled under
        <em>Global Configuration → Feature ON/OFF</em>.
    </div>
</div>
