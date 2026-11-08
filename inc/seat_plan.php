<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_seat_plan_manager">
    <div class="abet_doc_page_head">
        <h2>🪑 Ticket/Seat Plan</h2>
        <p class="abet_doc_lede">
            The <strong>Ticket/Seat Plan</strong> screen is the global library for ticket types, decoration items and
            reusable seat plans. Configure a ticket type or design a seating layout once here, then attach it to any
            number of events.
        </p>
    </div>

    <h3>📚 Three sections on one screen</h3>
    <table>
        <thead>
            <tr>
                <th>Section</th>
                <th>Purpose</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Ticket Type List</strong></td>
                <td>Reusable ticket or seat types with a name, colour, prefix and optional image, icon or emoji. Use
                    <em>Add New Ticket Type</em> to open the editor.</td>
            </tr>
            <tr>
                <td><strong>Others/Decor Item List</strong></td>
                <td>Reusable non-seat elements for the seating canvas, such as doors, stairs, aisles, windows or
                    luggage racks.</td>
            </tr>
            <tr>
                <td><strong>Seat Plan</strong></td>
                <td>The list of saved seating layouts and the builder used to create or edit them.</td>
            </tr>
        </tbody>
    </table>

    <h3>🎟️ Ticket types</h3>
    <p class="abet_doc_section_intro">
        A ticket type row stores an image/icon, a ticket name, a colour and a prefix. These settings are applied
        automatically to every seat assigned to that type and are used throughout the booking process for consistent
        identification.
    </p>
    <ul>
        <li>Drag rows to change their order.</li>
        <li>Use the delete icon to remove a ticket type.</li>
        <li>Click <em>Save Ticket Types</em> to store the list.</li>
    </ul>
    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/4-admin-ticket-types.png"><img class="abet_doc_screen_img" src="#" alt="Ticket types"></div>

    <h3>🧱 Decor items</h3>
    <p class="abet_doc_section_intro">
        Decor items use the same structure — image/icon, decor name and colour — and can be placed on a seat plan
        canvas to mark non-seatable areas.
    </p>

    <h3>📋 Seat plan list</h3>
    <table>
        <thead>
            <tr>
                <th>Column</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>ID / Background</strong></td>
                <td>The plan ID and its background image, when one is set.</td>
            </tr>
            <tr>
                <td><strong>Seat Plan Name</strong></td>
                <td>The name used when attaching the plan to an event.</td>
            </tr>
            <tr>
                <td><strong>Seat Information</strong></td>
                <td>Ticket-type breakdown of the plan, with the seat count for each type.</td>
            </tr>
            <tr>
                <td><strong>Total Seats</strong></td>
                <td>The total number of seats in the plan.</td>
            </tr>
            <tr>
                <td><strong>Dimension (R x C)</strong></td>
                <td>Rows × columns of the seating grid.</td>
            </tr>
            <tr>
                <td><strong>Cell Dimension</strong></td>
                <td>Cell width × height × gap in pixels.</td>
            </tr>
            <tr>
                <td><strong>Actions</strong></td>
                <td><em>View</em> (preview), <em>Clone</em> (copy the plan), <em>Edit</em> and
                    <em>Permanent Remove</em>.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/5-admin-seat-plan-settings.png"><img class="abet_doc_screen_img" src="#" alt="Seat plan list"></div>

    <h3>🛠️ Building a seat plan</h3>
    <ol class="abet_doc_steps">
        <li><strong>Add New Seat Plan</strong> — click the button above the list to open the builder.</li>
        <li><strong>Name the plan</strong> — enter a descriptive <em>Plan Name</em>.</li>
        <li><strong>Set the background</strong> — optionally choose a background image and background colour.</li>
        <li><strong>Set the dimension</strong> — enter the number of rows and columns. Use <em>Remove Last Row</em> and
            <em>Remove Last Col</em> to trim the grid.</li>
        <li><strong>Adjust the cells</strong> — set cell width, height, gap and radius, then click <em>Apply</em>.</li>
        <li><strong>Design cells</strong> — select cells and use <em>Cell Control</em> to set column/row spanning,
            custom text and font size.</li>
        <li><strong>Assign types</strong> — place seats and decor items from the <em>Seats</em> and
            <em>Others / Decor</em> tabs onto the canvas.</li>
        <li><strong>Save</strong> — click <em>Save Seat Plan</em>. The plan is now available to attach to events.</li>
    </ol>

    <h3>🖱️ Builder shortcuts</h3>
    <ul>
        <li><strong>Drag cells</strong> — clone/copy cells and select a range.</li>
        <li><strong>Double-click</strong> — edit row/column spanning in the left panel.</li>
        <li><strong>Ctrl + Click</strong> — select an individual item.</li>
        <li><strong>Shift + Click</strong> — select a range of items.</li>
        <li><strong>Clear Layout</strong> — empty the canvas and start again.</li>
    </ul>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/6-admin-seat-plan-designer.png"><img class="abet_doc_screen_img" src="#" alt="Seat plan designer"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Seat plan vs event</strong>
        Seat plans and their seat-to-ticket-type mapping are defined here. On the event, the <em>Ticket &amp; Price</em>
        tab only attaches existing plans, sets a frontend name and the price per ticket type.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Reuse layouts</strong>
        Design a handful of reusable plans (for example a hall, a theatre or a bus) and clone them for similar events
        to save time.
    </div>
</div>
