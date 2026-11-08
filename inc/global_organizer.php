<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_organizer">
    <div class="abet_doc_page_head">
        <h2>🏢 Organizers</h2>
        <p class="abet_doc_lede">
            The <strong>Organizers</strong> section manages the companies or people behind your events. An organizer
            can be assigned to any event and displayed on the event details page.
        </p>
    </div>

    <h3>📋 Fields</h3>
    <table>
        <thead>
            <tr>
                <th>Field</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Name</strong></td>
                <td>The organizer name. Required.</td>
            </tr>
            <tr>
                <td><strong>Slug (Optional)</strong></td>
                <td>URL slug for the organizer archive. Leave empty to let WordPress generate it from the name.</td>
            </tr>
            <tr>
                <td><strong>Description (Optional)</strong></td>
                <td>A short description of the organizer.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/16-admin-global-organizers.png"><img class="abet_doc_screen_img" src="#" alt="Global organizers"></div>

    <h3>🛠️ Managing organizers</h3>
    <ul>
        <li><strong>Add New</strong> — open the popup and fill in the fields above.</li>
        <li><strong>Edit</strong> — reopen the popup for an existing organizer.</li>
        <li><strong>Trash</strong> — remove the organizer from the library.</li>
        <li>Organizers can be dragged to change their order in the list.</li>
    </ul>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/17-admin-add-organizer.png"><img class="abet_doc_screen_img" src="#" alt="Add organizer"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Availability</strong>
        This section is only shown when <em>Organizer</em> is enabled under <em>Feature ON/OFF</em>.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Label and slug</strong>
        The words “Organizer” and the archive slug can be renamed under
        <em>Global Configuration → Events → Organizer Label / Organizer Slug</em>. The first tab is named after the
        <em>Label</em> value, so it reads <em>Events</em> until renamed.
    </div>
</div>
