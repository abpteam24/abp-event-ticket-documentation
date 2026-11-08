<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_additional">
    <div class="abet_doc_page_head">
        <h2>➕ Additional Services</h2>
        <p class="abet_doc_lede">
            Additional services are optional extras customers can add to a booking — for example parking, a meal, or a
            programme. The <strong>Additional services</strong> tab decides whether the event offers extras, and which
            ones.
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
                <td><strong>Active Additional services?</strong></td>
                <td>Turns additional services on for this event. When off, the service table is hidden and no extras
                    are offered.</td>
            </tr>
            <tr>
                <td><strong>Use Global Additional Service?</strong></td>
                <td>When on, the event uses the services defined in the global library and the table is hidden. Turn it
                    off to define a custom list for this event.</td>
            </tr>
            <tr>
                <td><strong>Import Additional Service</strong></td>
                <td>Shown when <em>Use Global Additional Service?</em> is off. Copies the global services into the
                    event, where they can then be edited.</td>
            </tr>
        </tbody>
    </table>

    <h3>📋 Service table</h3>
    <p class="abet_doc_section_intro">
        When the event keeps its own list, the table has the same columns as the global library:
    </p>
    <table>
        <thead>
            <tr>
                <th>Column</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Icon / Image</strong></td>
                <td>Optional icon or image for the service.</td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td>The service name (required).</td>
            </tr>
            <tr>
                <td><strong>Quantity</strong></td>
                <td>Quantity offered for this event.</td>
            </tr>
            <tr>
                <td><strong>Price</strong></td>
                <td>Price per unit added to the booking total.</td>
            </tr>
            <tr>
                <td><strong>Max qty</strong></td>
                <td>Maximum quantity per booking.</td>
            </tr>
            <tr>
                <td><strong>Returnable or Not</strong></td>
                <td>Whether the item can be returned.</td>
            </tr>
            <tr>
                <td><strong>Description</strong></td>
                <td>Optional text shown with the service.</td>
            </tr>
            <tr>
                <td><strong>Action</strong></td>
                <td>Drag to reorder, or delete the row.</td>
            </tr>
        </tbody>
    </table>

    <p class="abet_doc_section_intro">
        Click <em>Add New Additional services</em> to add a row. Save the event to store the list.
    </p>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/36-event-editor-additional-services.png"><img class="abet_doc_screen_img" src="#" alt="Event editor additional services"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Availability</strong>
        This tab is only shown when <em>Additional services</em> is enabled under
        <em>Global Configuration → Feature ON/OFF</em>.
    </div>
</div>
