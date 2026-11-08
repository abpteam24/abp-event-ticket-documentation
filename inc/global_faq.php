<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_faq">
    <div class="abet_doc_page_head">
        <h2>❓ Global FAQ</h2>
        <p class="abet_doc_lede">
            The <strong>FAQ</strong> section under Global Configuration stores one shared FAQ library for every
            event. Its items can be used globally by events or imported into a single event and edited there.
        </p>
    </div>

    <h3>🧩 What this section contains</h3>
    <ul>
        <li><strong>Add New FAQ Item</strong> - Creates a new FAQ row.</li>
        <li><strong>FAQ Title</strong> - Required text field. It is also the heading of the collapsed row.</li>
        <li><strong>Description</strong> - Required rich-text editor (media and quicktags enabled).</li>
        <li><strong>Row actions</strong> - Edit (pencil), delete (trash), and drag-to-sort inside the list.</li>
        <li><strong>Save FAQs Configuration</strong> - Saves the entire library through AJAX into the
            <code>abpet_faq</code> option without reloading the page.</li>
    </ul>

    <h3>➕ Adding a global FAQ</h3>
    <ol class="abet_doc_steps">
        <li><strong>Click Add New FAQ Item</strong> - A collapsed row appears at the end of the list.</li>
        <li><strong>Open the row</strong> - Click the pencil icon to reveal the fields.</li>
        <li><strong>Enter the FAQ Title</strong> - For example <em>What is the check-in time?</em></li>
        <li><strong>Write the Description</strong> - The answer shown on the frontend.</li>
        <li><strong>Save FAQs Configuration</strong> - The library is stored and can now be reused by any event.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/23-admin-global-faqs.png"><img class="abet_doc_screen_img" src="#" alt="Global FAQs"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>📌 Both fields are required</strong>
        Global items without a title or without a description are not saved and are never shown on the frontend.
    </div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>🌐 Availability</strong>
        This section is only shown when <em>FAQ</em> is enabled under <em>Feature ON/OFF</em>.
    </div>
</div>
