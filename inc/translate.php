<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_translate">
    <div class="abet_doc_page_head">
        <h2>🌐 Translation</h2>
        <p class="abet_doc_lede">
            ABP Event Ticket is translation-ready. Every user-facing string is wrapped for localization, and the
            plugin ships with a <code>.pot</code> template file.
        </p>
    </div>

    <h3>🛠️ Translating the plugin</h3>
    <ol class="abet_doc_steps">
        <li><strong>Use a translation plugin</strong> — tools such as Loco Translate let you translate strings directly
            from the WordPress admin.</li>
        <li><strong>Or use Poedit</strong> — open
            <code>wp-content/plugins/abp-event-ticket/languages/abp-event-ticket.pot</code> in Poedit, translate the
            strings, and save a <code>.po</code> and <code>.mo</code> pair.</li>
        <li><strong>Upload the files</strong> — place the translated <code>.po</code> and <code>.mo</code> files in
            <code>wp-content/plugins/abp-event-ticket/languages/</code> (or in
            <code>wp-content/languages/plugins/</code>).</li>
        <li><strong>Set the site language</strong> — choose your language under
            <em>Settings → General → Site Language</em>.</li>
    </ol>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Text domain</strong>
        The plugin uses the text domain <code>abp-event-ticket</code> and the domain path <code>/languages</code>. Keep
        the domain when creating translations.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 RTL support</strong>
        Right-to-left languages work automatically because the plugin's styling follows the active locale direction.
    </div>
</div>
