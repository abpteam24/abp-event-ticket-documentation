<?php
if (!defined('ABSPATH')) {
    exit;
} ?>
<div class="abet_doc_panel" data-tabs="#abet_post_discount">
    <div class="abet_doc_page_head">
        <h2>✂️ Event Discounts <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h2>
        <p class="abet_doc_lede">Set date-range discount rules for an individual event. Seasonal and Early Bird rules are separate and can be enabled independently.</p>
    </div>
    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Before you start</strong>
        Enable Seasonal Discount or Early Bird Discount in Global Configuration → Feature ON/OFF. The matching option must be enabled for its event-level rules to apply.
    </div>
    <h3>Configure discounts for one event</h3>
    <ol class="abet_doc_steps">
        <li>Edit the event and open its <em>Discount</em> tab.</li>
        <li>Turn on the Seasonal Discount or Early Bird Discount switch you want to configure.</li>
        <li>Add a date range and enter the discount percentage. Add more rows for additional ranges.</li>
        <li>Save or update the event. Repeat for other events as needed.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/44-event-editor-discount.png"><img class="abet_doc_screen_img" src="#" alt="Event editor discount"></div>

    <p>Global rules are configured separately under <em>Global Configuration → Global Discount</em>. Event-specific rules are stored with that event and do not require enabling the global-discount switches.</p>
</div>
