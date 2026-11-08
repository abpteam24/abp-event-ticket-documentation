<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_location">
    <div class="abet_doc_page_head">
        <h2>📍 Locations</h2>
        <p class="abet_doc_lede">
            The <strong>Location</strong> section manages the venues you assign to events. Each entry stores a name,
            an optional slug, a full address, and optional Google Map coordinates used to render a map on the event
            page.
        </p>
    </div>

    <h3>📋 The location list</h3>
    <p class="abet_doc_section_intro">The table shows one row per location with these columns:</p>
    <table>
        <thead>
            <tr>
                <th>Column</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>SI</strong></td>
                <td>Running row number.</td>
            </tr>
            <tr>
                <td><strong>ID</strong></td>
                <td>The term ID of the location, used in shortcodes and assignments.</td>
            </tr>
            <tr>
                <td><strong>Location label</strong></td>
                <td>The location name, linked to its frontend archive page.</td>
            </tr>
            <tr>
                <td><strong>Full Address</strong></td>
                <td>The saved address text for the location.</td>
            </tr>
            <tr>
                <td><strong>Shortcode Post</strong></td>
                <td>A ready-made shortcode such as <code>[abpet-post loc_id="12"]</code> for showing posts of this location.</td>
            </tr>
            <tr>
                <td><strong>Action</strong></td>
                <td>Pencil icon to <strong>edit</strong>, close icon to <strong>trash</strong> the location.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/12-admin-global-locations.png"><img class="abet_doc_screen_img" src="#" alt="Global locations"></div>

    <h3>➕ Adding or editing a location</h3>
    <ol class="abet_doc_steps">
        <li><strong>Click Add New Location</strong> - A popup form opens. The same form is used for editing.</li>
        <li><strong>Enter the location name</strong> - Required; the field cannot be left empty.</li>
        <li><strong>Set a slug (optional)</strong> - Leave it blank to auto-generate the slug from the name.</li>
        <li><strong>Add the full address (optional)</strong> - Free text describing the venue address.</li>
        <li><strong>Search the map (optional)</strong> - When the Google Map field is available, search for the address or place and select it. Latitude, longitude, place, and address are then saved with the location.</li>
        <li><strong>Click Save Location</strong> - The button reads <em>Update Location</em> when editing an existing entry.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/13-admin-add-location.png"><img class="abet_doc_screen_img" src="#" alt="Add location"></div>

    <h3>🗺️ Google Location Map</h3>
    <p class="abet_doc_section_intro">
        The map search appears only when <em>Google Location Map</em> is enabled under <em>Feature ON/OFF</em> and a
        Google Maps API key is saved under <em>Global Configuration → Events</em> (the first tab, named after the
        Label value). On the frontend, the map is drawn
        with the Google Maps JavaScript API when a key exists, and falls back to an embedded iframe map when it does
        not. The map markup follows the event's details template (Default, Light, or Modern).
    </p>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>📌 Deleting a location</strong>
        Trashing a location removes it from this list. If it is already assigned to an event, that event's location
        and map output will change, so update the affected events first.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Custom labels</strong>
        The words <em>Location</em> and its slug are configurable under <em>Global Configuration → Events</em> using
        the Location Label and Location Slug fields.
    </div>
</div>
