<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_tc">
    <div class="abet_doc_page_head">
        <h2>📜 Terms &amp; Conditions</h2>
        <p class="abet_doc_lede">
            The <strong>Term &amp; Conditions</strong> tab attaches event-specific terms — refund rules, entry
            requirements, age restrictions and similar policies. The content is shown on the event details page.
        </p>
    </div>

    <h3>🔀 Event toggles</h3>
    <table>
        <thead>
            <tr>
                <th>Option</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Active Term &amp; Conditions?</strong></td>
                <td>Turns the terms on for this event. When off, the content is hidden and not shown on the frontend.</td>
            </tr>
            <tr>
                <td><strong>Use Global Term &amp; Conditions?</strong></td>
                <td>When on, the event displays the terms saved in the global library and the editor is hidden. Turn it
                    off to write event-specific terms.</td>
            </tr>
            <tr>
                <td><strong>Import Global Term &amp; Conditions</strong></td>
                <td>Shown when <em>Use Global Term &amp; Conditions?</em> is off. Copies the global content into the
                    event editor so it can be edited.</td>
            </tr>
        </tbody>
    </table>

    <h3>✍️ Content</h3>
    <p class="abet_doc_section_intro">
        The editor accepts rich text, links, lists and media. It is only active when the event keeps its own terms
        (that is, when <em>Use Global Term &amp; Conditions?</em> is off). Save the event to store the content.
    </p>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/43-event-editor-terms-conditions.png"><img class="abet_doc_screen_img" src="#" alt="Event editor terms and conditions"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Display only</strong>
        The terms are informational. The plugin does not add a mandatory “I accept the terms” checkbox to checkout —
        it only shows the content on the event page while the tab is active.
    </div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Global T&amp;C</strong>
        Standard terms can be defined once under <em>Global Configuration → Terms &amp; Conditions</em> and imported
        into any event.
    </div>
</div>
