<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_post">
    <div class="abet_doc_page_head">
        <h2>📅 Event Lists</h2>
        <p class="abet_doc_lede">
            The <strong>Events Lists</strong> screen lists every event and provides the actions needed to create,
            edit, clone, view, trash, restore and permanently delete events. The tab label follows the
            <em>Label</em> set in Global Configuration.
        </p>
    </div>

    <h3>📋 The event list</h3>
    <p class="abet_doc_section_intro">
        Status buttons at the top filter the list: <em>All</em>, <em>Published</em>, <em>Private</em>, <em>Draft</em>
        and <em>Trash</em>, each with a count. The table shows the event image, title, ticket type and quantity, the
        event's own booking shortcode, and the action buttons. Long lists are split into pages.
    </p>
    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/2-admin-events-list.png"><img class="abet_doc_screen_img" src="#" alt="Events list"></div>

    <h3>⚡ Available actions</h3>
    <table>
        <thead>
            <tr>
                <th>Action</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Add New Event</strong></td>
                <td>Open a blank event editor.</td>
            </tr>
            <tr>
                <td><strong>Edit</strong></td>
                <td>Open the event editor to change its settings, tickets, dates and content.</td>
            </tr>
            <tr>
                <td><strong>Clone</strong></td>
                <td>Duplicate an event, including its configuration, to create a similar event quickly.</td>
            </tr>
            <tr>
                <td><strong>View</strong></td>
                <td>Open the event on the frontend as customers see it.</td>
            </tr>
            <tr>
                <td><strong>Move to Trash</strong></td>
                <td>Move the event to the trash without deleting it permanently.</td>
            </tr>
            <tr>
                <td><strong>Restore</strong></td>
                <td>Restore a trashed event.</td>
            </tr>
            <tr>
                <td><strong>Permanent Remove</strong></td>
                <td>Delete the event and its data completely. This cannot be undone.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Event editor tabs</strong>
        Opening an event reveals the tabbed editor: <em>General</em>, <em>Ticket &amp; Price</em>, <em>Date</em>,
        <em>Additional services</em>, <em>Attendee Form</em>, <em>Tax</em>, <em>FAQs</em>,
        <em>Term &amp; Conditions</em> and <em>Timeline</em>. Some tabs are hidden when their feature is switched off
        under <em>Feature ON/OFF</em>. Each tab is documented in the sections that follow.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Per-event shortcode</strong>
        The <em>Shortcode</em> column shows <code>[abpet-post post_id="…"]</code> for that event. Copy it into any
        page to list or link that single event; use <code>[abpet-booking post_id="…"]</code> when you want its
        booking form on its own page.
    </div>
</div>
