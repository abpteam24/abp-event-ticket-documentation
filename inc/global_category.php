<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_category">
    <div class="abet_doc_page_head">
        <h2>🗂️ Categories</h2>
        <p class="abet_doc_lede">
            The <strong>Category</strong> section creates and manages the event categories. Categories group events,
            can be assigned while creating an event, and each one has an ID that works in shortcodes.
        </p>
    </div>

    <h3>📋 The category list</h3>
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
                <td><strong>Category label</strong></td>
                <td>The category name, linked to its frontend archive page.</td>
            </tr>
            <tr>
                <td><strong>ID</strong></td>
                <td>The term ID used for assignments and shortcodes.</td>
            </tr>
            <tr>
                <td><strong>Description</strong></td>
                <td>The description text entered for the category.</td>
            </tr>
            <tr>
                <td><strong>Shortcode</strong></td>
                <td>A ready-made shortcode such as <code>[abpet-post cat_id="7"]</code>.</td>
            </tr>
            <tr>
                <td><strong>Action</strong></td>
                <td>Pencil icon to <strong>edit</strong>, close icon to <strong>trash</strong> the category.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/14-admin-global-categories.png"><img class="abet_doc_screen_img" src="#" alt="Global categories"></div>

    <h3>➕ Adding or editing a category</h3>
    <ol class="abet_doc_steps">
        <li><strong>Click Add New Category</strong> - A popup form opens, shared by create and edit.</li>
        <li><strong>Enter the category name</strong> - Required.</li>
        <li><strong>Set a slug (optional)</strong> - Leave it blank to auto-generate one from the name.</li>
        <li><strong>Add a description (optional)</strong> - Describes what the category contains.</li>
        <li><strong>Save</strong> - The category is stored and can be assigned to events.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/15-admin-add-category.png"><img class="abet_doc_screen_img" src="#" alt="Add category"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>📌 Deleting a category</strong>
        Trashing a category is permanent for that term. If it is already assigned to an event, that event's category
        configuration is affected too.
    </div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>⚙️ Availability and naming</strong>
        This section appears only when <em>Category</em> is enabled under <em>Feature ON/OFF</em>. The label and slug
        can be renamed with the Category Label and Category Slug fields under
        <em>Global Configuration → Events</em> (the first tab, named after the Label value).
    </div>
</div>
