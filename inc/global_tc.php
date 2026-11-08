<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_tc">
    <div class="abet_doc_page_head">
        <h2>📜 Global Terms &amp; Conditions</h2>
        <p class="abet_doc_lede">
            The <strong>Terms &amp; Conditions</strong> section under Global Configuration stores the reusable terms
            that events can import. It holds content only — there are no display toggles on this screen.
        </p>
    </div>

    <h3>✍️ The content field</h3>
    <p class="abet_doc_section_intro">
        <em>Term &amp; Conditions Content</em> is a rich-text editor with media support. Write your standard policy
        once and click <em>Save Term &amp; Conditions Configuration</em>.
    </p>

    <h3>🔁 How events use it</h3>
    <ol class="abet_doc_steps">
        <li>Open an event and go to the <em>Term &amp; Conditions</em> tab.</li>
        <li>Turn <em>Active Term &amp; Conditions?</em> on.</li>
        <li>Leave <em>Use Global Term &amp; Conditions?</em> on to display the global content, or turn it off and use
            <em>Import Global Term &amp; Conditions</em> to copy and edit it.</li>
    </ol>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/24-admin-global-terms-conditions.png"><img class="abet_doc_screen_img" src="#" alt="Global terms and conditions"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Availability</strong>
        This section is only shown when <em>Term &amp; Conditions</em> is enabled under <em>Feature ON/OFF</em>.
    </div>
</div>
