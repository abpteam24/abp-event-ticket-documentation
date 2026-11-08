<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_feature">
    <div class="abet_doc_page_head">
        <h2>✨ Features Library</h2>
        <p class="abet_doc_lede">
            The <strong>Features</strong> library holds reusable event highlights — such as “Free Wi-Fi”, “Parking
            Included” or “Live Streaming”. Features are assigned to events and displayed on the event page.
        </p>
    </div>

    <h3>📋 Fields</h3>
    <table>
        <thead>
            <tr>
                <th>Column</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Icon</strong></td>
                <td>Optional icon shown next to the feature.</td>
            </tr>
            <tr>
                <td><strong>Label</strong></td>
                <td>The feature title. Required.</td>
            </tr>
            <tr>
                <td><strong>Value</strong></td>
                <td>Optional supporting text shown with the label, for example “Yes” or “Included”.</td>
            </tr>
            <tr>
                <td><strong>Action</strong></td>
                <td>Drag to reorder, or delete the row.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/21-admin-global-features.png"><img class="abet_doc_screen_img" src="#" alt="Global features"></div>

    <h3>💾 Saving the library</h3>
    <p class="abet_doc_section_intro">
        Click <em>Add New Feature Item</em> to add a row, then save the list with the button below the table. Saved
        features become available when assigning features to an event.
    </p>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/20-admin-add-feature.png"><img class="abet_doc_screen_img" src="#" alt="Add feature"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Availability</strong>
        This section is only shown when <em>Feature</em> is enabled under <em>Feature ON/OFF</em>.
    </div>
</div>
