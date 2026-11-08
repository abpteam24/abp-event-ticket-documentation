<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_template">
    <div class="abet_doc_page_head">
        <h2>🧩 Templating</h2>
        <p class="abet_doc_lede">
            ABP Event Ticket renders its frontend through template files. You can override any template safely,
            without editing the plugin, by placing a copy in the dedicated override folder.
        </p>
    </div>

    <h3>📁 How overrides work</h3>
    <p class="abet_doc_section_intro">
        Copy the template you want to change from the plugin's <code>tb_templates/</code> folder into
        <code>wp-content/tb_templates/</code>, keeping the same relative path. The plugin checks that folder first and
        loads your copy when it exists, so your changes survive plugin updates.
    </p>
    <p class="abet_doc_section_intro">
        Example: to override the default event details page, copy
        <code>wp-content/plugins/abp-event-ticket/tb_templates/details_theme/default.php</code> to
        <code>wp-content/tb_templates/details_theme/default.php</code>.
    </p>

    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ Not a theme folder</strong>
        The override folder is <code>wp-content/tb_templates/</code>, not your theme directory. Creating the folder
        inside a theme has no effect.
    </div>

    <h3>📂 Available templates</h3>
    <table>
        <thead>
            <tr>
                <th>Folder</th>
                <th>Templates</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>details_theme/</strong></td>
                <td><code>default.php</code>, <code>light.php</code>, <code>modern.php</code> — the three event details
                    page layouts.</td>
            </tr>
            <tr>
                <td><strong>list/</strong></td>
                <td><code>default.php</code>, <code>missionary.php</code>, <code>minimal.php</code> — event listing
                    layouts.</td>
            </tr>
            <tr>
                <td><strong>layout/</strong></td>
                <td>Booking pieces: <code>ticket_type.php</code>, <code>sp_type.php</code>,
                    <code>client_form.php</code>, <code>additional_services.php</code>, <code>total_price.php</code>,
                    <code>gallery.php</code>, <code>slider.php</code>, <code>slider_popup.php</code>,
                    <code>registration.php</code>, <code>faq.php</code>, <code>term_condition.php</code>,
                    <code>related_item.php</code>, <code>post_filter.php</code>, <code>search_form.php</code>,
                    <code>pagination.php</code> and <code>display_cart_item.php</code>.</td>
            </tr>
            <tr>
                <td><strong>map/</strong></td>
                <td><code>default.php</code>, <code>light.php</code>, <code>modern.php</code> — location map styles.</td>
            </tr>
            <tr>
                <td><strong>speaker/</strong></td>
                <td><code>default.php</code>, <code>light.php</code>, <code>modern.php</code> — speaker layouts.</td>
            </tr>
            <tr>
                <td><strong>timeline/</strong></td>
                <td><code>default.php</code>, <code>light.php</code>, <code>modern.php</code> — timeline layouts.</td>
            </tr>
            <tr>
                <td><strong>page/</strong></td>
                <td><code>details_page.php</code>, <code>brand.php</code>, <code>category.php</code>,
                    <code>location.php</code>, <code>organizer.php</code>, <code>speaker.php</code> — archive and
                    details page wrappers.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Keep a backup</strong>
        Keep a copy of the original template. After a plugin update, compare your override with the latest template
        to pick up new features.
    </div>
</div>
