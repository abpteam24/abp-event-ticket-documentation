<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_timeline">
    <div class="abet_doc_page_head">
        <h2>🕒 Timeline</h2>
        <p class="abet_doc_lede">
            The <strong>Timeline</strong> publishes a chronological schedule of activities for an event. Each entry
            appears on the event details page, giving attendees a clear run-down of the day.
        </p>
    </div>

    <h3>🔀 Active Timeline</h3>
    <p class="abet_doc_section_intro">
        <em>Active Timeline?</em> turns the timeline on for this event. When it is off, the entry list is hidden and
        nothing is shown on the frontend. The whole tab only exists while the <em>Event Timeline</em> feature is
        enabled under <em>Feature ON/OFF</em>.
    </p>

    <h3>➕ Adding an entry</h3>
    <ol class="abet_doc_steps">
        <li><strong>Add New Timeline Item</strong> — adds a collapsible entry.</li>
        <li><strong>Time</strong> — the time the activity begins, for example <code>10:00 AM</code>.</li>
        <li><strong>Title</strong> — a short, descriptive title. Required; entries without a title are not saved.</li>
        <li><strong>Description</strong> — an optional rich-text description with media support.</li>
        <li><strong>Repeat and save</strong> — add as many entries as needed, drag to reorder, then save the event.</li>
    </ol>

    <h3>📋 Entry fields</h3>
    <table>
        <thead>
            <tr>
                <th>Field</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Time</strong></td>
                <td>Free-text start time of the activity.</td>
            </tr>
            <tr>
                <td><strong>Title</strong></td>
                <td>A short label for the activity.</td>
            </tr>
            <tr>
                <td><strong>Description</strong></td>
                <td>Rich-text details of what happens at that time.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/40-event-editor-timeline.png"><img class="abet_doc_screen_img" src="#" alt="Event editor timeline"></div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Tip</strong>
        Keep titles short and descriptions concise so the timeline stays easy to scan on the frontend.
    </div>
</div>
