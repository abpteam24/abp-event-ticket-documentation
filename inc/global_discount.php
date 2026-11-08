<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_discount">
    <div class="abet_doc_page_head">
        <h2>🌍 Global Discounts <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Use site-wide date-range rules to apply Seasonal and Early Bird discounts across eligible events.</p>
    </div>
    <h3>Setup steps</h3>
    <ol class="abet_doc_steps">
        <li>In <em>Global Configuration → Feature ON/OFF</em>, enable Seasonal Discount or Early Bird Discount.</li>
        <li>Enable the corresponding global switch if that discount should apply site-wide.</li>
        <li>Open <em>Global Configuration → Global Discount</em>.</li>
        <li>Turn on the desired discount, add date ranges and percentages, and save the configuration.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/29-admin-global-discount.png"><img class="abet_doc_screen_img" src="#" alt="Global discount"></div>

    <p>Configure each discount type separately. To use different rules for one event, configure its <em>Discount</em> tab instead. Review the event's scheduled dates and sale settings so customers see the intended price for each booking period.</p>
</div>
