<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_post_partial_payment">
    <div class="abet_doc_page_head">
        <h2>💰 Event Partial Payment <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Allow customers booking this event to pay a deposit at checkout and settle the remaining balance later.</p>
    </div>
    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Enable the feature first</strong>
        Turn on Partial Payment in Global Configuration → Feature ON/OFF. A global fixed amount or percentage can be set in Global Configuration → Partial Payment.
    </div>
    <h3>Set an event payment amount</h3>
    <ol class="abet_doc_steps">
        <li>Edit the event and open its <em>Partial Payment</em> tab.</li>
        <li>Enable <em>Pay Partial Amount at Checkout?</em>.</li>
        <li>Select a percentage or fixed amount, enter the value, then save the event.</li>
        <li>At checkout, customers can choose to pay in full or pay the partial amount if the event's settings allow it.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/45-event-editor-partial-payment.png"><img class="abet_doc_screen_img" src="#" alt="Event editor partial payment"></div>

    <p>The order records the deposit and balance. Customers can review the amount due and pay it from WooCommerce <em>My Account</em>. Administrators can also record a balance payment from the order tools.</p>
    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ Check the payment amount</strong>
        Confirm the deposit is appropriate for the event price and store currency. Do not configure a deposit that is greater than the amount due.
    </div>
</div>
