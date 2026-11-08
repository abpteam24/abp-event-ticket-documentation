<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_faq">
    <div class="abet_doc_page_head">
        <h2>❓ FAQs</h2>
        <p class="abet_doc_lede">
            The <strong>FAQs</strong> tab of the event editor controls the frequently asked questions shown on that
            event's details page. You can reuse the Global FAQ library, or write a custom set for this event only.
        </p>
    </div>

    <h3>🔀 Display switches</h3>
    <table>
        <thead>
            <tr>
                <th>Option</th>
                <th>Default</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Active FAQs ?</strong></td>
                <td>ON</td>
                <td>Shows or hides the FAQ section on the frontend for this event. When it is turned off, no FAQs are saved for the event.</td>
            </tr>
            <tr>
                <td><strong>Use Global FAQ ?</strong></td>
                <td>ON</td>
                <td>Applies the shared FAQ list from <em>Global Configuration → FAQ</em>. Turn it off to add a custom FAQ list for this event only.</td>
            </tr>
            <tr>
                <td><strong>Import Global FAQ</strong></td>
                <td>-</td>
                <td>A button that copies the global FAQ items into this event. It appears only when <em>Use Global FAQ</em> is off, and the imported items stay editable and deletable.</td>
            </tr>
        </tbody>
    </table>

    <h3>✍️ Adding a custom FAQ</h3>
    <ol class="abet_doc_steps">
        <li><strong>Turn off Use Global FAQ</strong> - This reveals the event's own FAQ list and the import button.</li>
        <li><strong>Click Add New FAQ Item</strong> - A new collapsed FAQ row is added.</li>
        <li><strong>Edit the row</strong> - Use the pencil button to open the title and description fields.</li>
        <li><strong>Enter the FAQ Title</strong> - Required. It also becomes the row heading while collapsed.</li>
        <li><strong>Write the Description</strong> - Required. A rich-text editor with media and quicktags support.</li>
        <li><strong>Sort or remove rows</strong> - Drag rows to reorder, use the trash button to delete, and save the event to store the list.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/42-event-editor-faqs.png"><img class="abet_doc_screen_img" src="#" alt="Event editor FAQs"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>📌 Both fields are required</strong>
        An FAQ item is saved and displayed only when it has both a title and a description. Rows with an empty field
        are skipped.
    </div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>🌐 Availability</strong>
        The whole tab appears only when <em>FAQ</em> is enabled under <em>Global Configuration → Feature ON/OFF</em>.
    </div>
</div>
