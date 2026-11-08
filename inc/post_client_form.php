<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_client_form">
    <div class="abet_doc_page_head">
        <h2>🧾 Attendee Form</h2>
        <p class="abet_doc_lede">
            The <strong>Attendee Form</strong> collects information from attendees at checkout. Add the fields you need
            — such as name, email, phone, or custom questions — and the data is stored with the booking.
        </p>
    </div>

    <h3>🔀 Event toggles</h3>
    <table>
        <thead>
            <tr>
                <th>Option</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Attendee Form?</strong></td>
                <td>Turns the attendee form on for this event. When off, no attendee fields are requested. Shown when
                    the <em>Attendee Form</em> feature is enabled.</td>
            </tr>
            <tr>
                <td><strong>Use Global Attendee Form?</strong></td>
                <td>When on, the event uses the fields from the global library and the table is hidden. Turn it off to
                    build a custom form for this event.</td>
            </tr>
            <tr>
                <td><strong>Import Global Attendee Form</strong></td>
                <td>Shown when <em>Use Global Attendee Form?</em> is off. Copies the global fields into the event so they
                    can be edited.</td>
            </tr>
            <tr>
                <td><strong>Same Attendee?</strong></td>
                <td>When on, one set of attendee details is collected for the whole booking. Shown only when the
                    <em>Same Attendee</em> feature is enabled.</td>
            </tr>
        </tbody>
    </table>

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
                <td>The label shown to the customer. Required.</td>
            </tr>
            <tr>
                <td><strong>Unique ID</strong></td>
                <td>The field key used to store the answer. Required and must be unique.</td>
            </tr>
            <tr>
                <td><strong>Form Type</strong></td>
                <td><em>Text</em>, <em>E-Mail</em>, <em>Number</em>, <em>Select</em>, <em>Checkbox</em>,
                    <em>Radio</em>, <em>Textarea</em> or <em>Date</em>.</td>
            </tr>
            <tr>
                <td><strong>Value Option</strong></td>
                <td>Choices for <em>Select</em>, <em>Checkbox</em> and <em>Radio</em> fields.</td>
            </tr>
            <tr>
                <td><strong>Default Value</strong></td>
                <td>Optional pre-filled value, or the default date for a <em>Date</em> field.</td>
            </tr>
            <tr>
                <td><strong>Required</strong></td>
                <td>Whether the customer must complete the field.</td>
            </tr>
            <tr>
                <td><strong>Action</strong></td>
                <td>Drag to reorder, or delete the field.</td>
            </tr>
        </tbody>
    </table>

    <p class="abet_doc_section_intro">
        Use <em>Add New Form Item</em> to add a field. Save the event to store the form.
    </p>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/37-event-editor-attendee-form.png"><img class="abet_doc_screen_img" src="#" alt="Event editor attendee form"></div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Reuse global fields</strong>
        A default set of form fields can be defined under <em>Global Configuration → Attendee Form</em> and imported
        into any event with <em>Import Global Attendee Form</em>.
    </div>
</div>
