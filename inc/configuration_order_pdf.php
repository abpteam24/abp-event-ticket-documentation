<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_order_pdf_settings">
    <div class="abet_doc_page_head">
        <h2>📄 Attendee List PDF <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Choose the company details and booking columns printed on an attendee-list PDF.</p>
    </div>
    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ PDF dependency</strong>
        Install and activate ABP PDF Tools before generating ticket or attendee-list PDF documents.
    </div>
    <h3>Configure and export</h3>
    <ol class="abet_doc_steps">
        <li>Open <em>Global Configuration → Order Lists PDF</em>.</li>
        <li>Enable or disable the company address, company logo, and booking summary.</li>
        <li>Choose which fields to include, such as event/date/session, ticket information, customer/attendee details, order status, payment method, and price.</li>
        <li>Save the settings. Open Orders, apply the desired filters, and use the PDF export action to create the attendee list for that result set.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/26-admin-global-order-lists-pdf.png"><img class="abet_doc_screen_img" src="#" alt="Order lists PDF"></div>

    <p>Review the selected columns before sharing or printing a list because it may contain customer personal or billing information.</p>
</div>
