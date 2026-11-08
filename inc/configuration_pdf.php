<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_pdf_settings">
    <div class="abet_doc_page_head">
        <h2>🎫 Ticket PDF Settings <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Brand individual booking PDFs and control which staff roles can download them.</p>
    </div>
    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ PDF dependency</strong>
        ABP PDF Tools must be installed and active for PDF generation. The PRO plugin's dashboard status can help you install or activate it.
    </div>
    <h3>Configure ticket documents</h3>
    <ol class="abet_doc_steps">
        <li>Open <em>Global Configuration → PDF</em>.</li>
        <li>Optionally choose a background image and logo, then set the logo height, background color, and text color.</li>
        <li>Set the user roles permitted to download ticket PDFs.</li>
        <li>Optionally set the Terms &amp; Conditions heading and content for the PDF.</li>
        <li>Save the configuration and test a booking PDF.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/25-admin-global-pdf-configuration.png"><img class="abet_doc_screen_img" src="#" alt="Ticket PDF configuration"></div>

    <p>PDF download actions appear with eligible bookings when the required PDF tools are available. The PRO plugin also supports PDF attachments on booking emails when that option is enabled.</p>
</div>
