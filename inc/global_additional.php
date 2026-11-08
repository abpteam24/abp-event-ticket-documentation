<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_additional">
    <div class="abet_doc_page_head">
        <h2>➕ Global Additional Services</h2>
        <p class="abet_doc_lede">
            The <strong>Additional services</strong> section under Global Configuration is the reusable library of
            extras customers can add to a booking — for example parking, a meal, a programme or merchandise. Services
            created here can be imported into any event.
        </p>
    </div>

    <h3>📋 Service fields</h3>
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
                <td>Optional icon or image shown with the service.</td>
            </tr>
            <tr>
                <td><strong>Name</strong></td>
                <td>The service name customers see. This field is required.</td>
            </tr>
            <tr>
                <td><strong>Quantity</strong></td>
                <td>Total quantity of the service available.</td>
            </tr>
            <tr>
                <td><strong>Price</strong></td>
                <td>Price per unit, added to the booking total.</td>
            </tr>
            <tr>
                <td><strong>Max qty</strong></td>
                <td>Maximum quantity a customer may add in one booking.</td>
            </tr>
            <tr>
                <td><strong>Returnable or Not</strong></td>
                <td><em>Yes</em> or <em>No</em> — marks whether the item can be returned.</td>
            </tr>
            <tr>
                <td><strong>Description</strong></td>
                <td>Optional text shown with the service.</td>
            </tr>
            <tr>
                <td><strong>Action</strong></td>
                <td>Drag the row to reorder it, or delete the service.</td>
            </tr>
        </tbody>
    </table>

    <h3>💾 Saving the library</h3>
    <p class="abet_doc_section_intro">
        Use <em>Add New Additional services</em> to add a row, then click
        <em>Save Global Additional services Configuration</em>. The saved list becomes available through the
        <em>Import Additional Service</em> button on every event.
    </p>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/10-admin-global-additional-services.png"><img class="abet_doc_screen_img" src="#" alt="Global additional services"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Availability</strong>
        This section is only shown when <em>Additional services</em> is enabled under <em>Feature ON/OFF</em>.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Import, not inherit</strong>
        Importing copies the global services into the event. Later changes to the global library do not automatically
        update events that were already imported.
    </div>
</div>
