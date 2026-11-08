<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_brand">
    <div class="abet_doc_page_head">
        <h2>🏷️ Brands</h2>
        <p class="abet_doc_lede">
            The <strong>Brands</strong> section manages the brands associated with your events. A brand can be
            assigned to any event and shown on the event details page.
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
                <td>The brand name. Required.</td>
            </tr>
            <tr>
                <td><strong>Slug (Optional)</strong></td>
                <td>URL slug for the brand archive. Leave empty to let WordPress generate it from the name.</td>
            </tr>
            <tr>
                <td><strong>Description (Optional)</strong></td>
                <td>A short description of the brand.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/18-admin-global-brands.png"><img class="abet_doc_screen_img" src="#" alt="Global brands"></div>

    <h3>🛠️ Managing brands</h3>
    <ul>
        <li><strong>Add New</strong> — open the popup and fill in the fields above.</li>
        <li><strong>Edit</strong> — reopen the popup for an existing brand.</li>
        <li><strong>Trash</strong> — remove the brand from the library.</li>
        <li>Brands can be dragged to change their order in the list.</li>
    </ul>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/19-admin-add-brand.png"><img class="abet_doc_screen_img" src="#" alt="Add brand"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ No logo field</strong>
        The brand form stores a name, slug and description only. To show an image with a brand, use the event gallery
        or the brand description.
    </div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Availability</strong>
        This section is only shown when <em>Brand</em> is enabled under <em>Feature ON/OFF</em>.
    </div>
</div>
