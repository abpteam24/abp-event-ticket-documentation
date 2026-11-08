<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_partial_payment">
    <div class="abet_doc_page_head">
        <h2>💳 Global Partial Payment <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Set the default deposit rule used by event bookings that offer partial payment.</p>
    </div>
    <h3>Set the default</h3>
    <ol class="abet_doc_steps">
        <li>Enable <em>Partial Payment</em> under <em>Global Configuration → Feature ON/OFF</em>.</li>
        <li>Open <em>Global Configuration → Partial Payment</em>.</li>
        <li>Choose <em>Percentage</em> or <em>Fixed Amount</em>, enter the value, and save.</li>
        <li>For each event that should accept deposits, edit the event and enable partial payment on its <em>Partial Payment</em> tab.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/30-admin-global-partial-payment.png"><img class="abet_doc_screen_img" src="#" alt="Global partial payment"></div>

    <p>The global value provides the default payment rule; event-level settings control whether a specific event offers partial payment and can specify its own value. The customer's unpaid balance is shown in their WooCommerce account and the booking/order details.</p>
</div>
