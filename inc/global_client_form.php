<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_client_form">
    <div class="abet_doc_page_head">
        <h2>🧾 Global Attendee Form</h2>
        <p class="abet_doc_lede">
            The <strong>Attendee Form</strong> section under Global Configuration is the reusable attendee form. Build
            the fields once here, then import them into any event that should collect the same information.
        </p>
    </div>

    <h3>📋 Form fields</h3>
    <table>
        <thead>
            <tr>
                <th>Column</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Form Title</strong></td>
                <td>The label customers see. Required.</td>
            </tr>
            <tr>
                <td><strong>Unique ID</strong></td>
                <td>The field key stored with the booking. Required and must be unique.</td>
            </tr>
            <tr>
                <td><strong>Form Type</strong></td>
                <td>The input type. Required. Available types are <em>Text</em>, <em>E-Mail</em>, <em>Number</em>,
                    <em>Select</em>, <em>Checkbox</em>, <em>Radio</em>, <em>Textarea</em> and <em>Date</em>.</td>
            </tr>
            <tr>
                <td><strong>Value Option</strong></td>
                <td>Required for <em>Select</em>, <em>Checkbox</em> and <em>Radio</em> — the list of choices.</td>
            </tr>
            <tr>
                <td><strong>Default Value</strong></td>
                <td>Optional pre-filled value. For the <em>Date</em> type this is a date picker value.</td>
            </tr>
            <tr>
                <td><strong>Required</strong></td>
                <td>Whether the customer must complete the field before booking.</td>
            </tr>
            <tr>
                <td><strong>Action</strong></td>
                <td>Drag to reorder fields, or delete a field.</td>
            </tr>
        </tbody>
    </table>

    <h3>💾 Saving the library</h3>
    <p class="abet_doc_section_intro">
        Click <em>Add New Form Item</em> to add a field, then click
        <em>Save Global Attendee Form Configuration</em>. Events can copy these fields with the
        <em>Import Global Attendee Form</em> button on their own <em>Attendee Form</em> tab.
    </p>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/11-admin-global-attendee-form.png"><img class="abet_doc_screen_img" src="#" alt="Global attendee form"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Import, not inherit</strong>
        Importing copies the fields into the event. Editing the global form later does not change events that were
        already imported.
    </div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Availability</strong>
        This section is only shown when <em>Attendee Form</em> is enabled under <em>Feature ON/OFF</em>.
    </div>
</div>
