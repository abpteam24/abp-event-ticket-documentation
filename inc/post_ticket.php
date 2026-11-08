<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_ticket">
    <div class="abet_doc_page_head">
        <h2>🎫 Ticket &amp; Price</h2>
        <p class="abet_doc_lede">
            The <strong>Ticket &amp; Price</strong> tab is where an event's sellable inventory is defined. Choose
            whether the event sells general admission tickets or reserved seats from a seat plan, then set the
            quantities and prices customers can book.
        </p>
    </div>

    <h3>🎯 Ticket type mode</h3>
    <table>
        <thead>
            <tr>
                <th>Mode</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Ticket</strong></td>
                <td>General admission. You add ticket type rows and set a quantity and price for each one.</td>
            </tr>
            <tr>
                <td><strong>Seat Plan</strong></td>
                <td>Reserved seating. You attach one or more reusable seat plans to the event; seats and their
                    ticket-type quantities come from the plan. This option appears when the <em>Seat Plan</em> feature
                    is enabled under <em>Feature ON/OFF</em>.</td>
            </tr>
        </tbody>
    </table>

    <h3>⚙️ Common settings</h3>
    <ul>
        <li><strong>Ticket Type</strong> — switches the event between <em>Ticket</em> and <em>Seat Plan</em> mode.</li>
        <li><strong>Multiple Ticket Type?</strong> — when on, several ticket types can be sold for the event. When
            off, only a single ticket type is used.</li>
        <li><strong>Min Qty/Order</strong> and <strong>Max Qty/Order</strong> — optional event-level booking limits,
            shown when the <em>Min &amp; Max qty</em> feature is enabled.</li>
    </ul>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/32-event-editor-ticket-and-price.png"><img class="abet_doc_screen_img" src="#" alt="Event editor ticket and price"></div>

    <h3>🎟️ Ticket Configuration (general admission)</h3>
    <p class="abet_doc_section_intro">
        Each row is one ticket type offered for the event. Use <em>Add New item</em> for another row and
        <em>Add New Ticket Type</em> to create a reusable ticket type in the global library.
    </p>
    <table>
        <thead>
            <tr>
                <th>Field</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Ticket Name</strong></td>
                <td>The reusable ticket type (for example Adult, Child, VIP) selected from the global ticket type
                    list.</td>
            </tr>
            <tr>
                <td><strong>Quantity</strong></td>
                <td>The total number of tickets of this type offered for the event. Availability is calculated per
                    session.</td>
            </tr>
            <tr>
                <td><strong>Price</strong></td>
                <td>The price charged for one ticket of this type.</td>
            </tr>
            <tr>
                <td><strong>Reserve Qty</strong></td>
                <td>Tickets held back from sale (for guest lists, staff, or offline sales). Reserved tickets reduce
                    the quantity that can be sold.</td>
            </tr>
            <tr>
                <td><strong>Min Qty/Order</strong></td>
                <td>The minimum number of this ticket type a customer must select in one booking.</td>
            </tr>
            <tr>
                <td><strong>Max Qty/Order</strong></td>
                <td>The maximum number of this ticket type a customer may select in one booking.</td>
            </tr>
            <tr>
                <td><strong>Description</strong></td>
                <td>Optional text shown with the ticket type during booking.</td>
            </tr>
            <tr>
                <td><strong>Action</strong></td>
                <td>Drag to reorder rows, or delete a row.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/33-event-editor-multiple-ticket-types.png"><img class="abet_doc_screen_img" src="#" alt="Event editor multiple ticket types"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ How stock is calculated</strong>
        Available quantity = Quantity − sold − reserved, and it is never shown below zero. Sold counts are tracked per
        ticket type <em>and per session</em>, so each date/time combination has its own availability. When the
        available quantity reaches zero the ticket shows <em>Sold Out !</em> and cannot be selected.
    </div>

    <h3>🪑 Seat Plan Configuration (reserved seating)</h3>
    <p class="abet_doc_section_intro">
        When <strong>Ticket Type</strong> is set to <em>Seat Plan</em>, the ticket rows are replaced by seat plan rows.
        The <em>Total Seat</em> counter at the top shows the combined seats of all attached plans.
    </p>
    <ol class="abet_doc_steps">
        <li><strong>Add a seat label</strong> — click <em>Add New Seat Label</em> to add a row.</li>
        <li><strong>Select the seat plan</strong> — choose one of the reusable plans from the <em>Seat Plan Name</em>
            list.</li>
        <li><strong>Set the frontend name</strong> — enter the label customers see, for example <em>Lower Deck</em>.
        </li>
        <li><strong>Check the quantities</strong> — <em>Type Wise Quantity</em> shows the seat counts per ticket type
            and <em>Total Quantity</em> shows the plan total. Both come from the plan and are read-only here.</li>
        <li><strong>Set ticket prices</strong> — the small table beside the rows lists each ticket type with a price
            field.</li>
        <li><strong>Save the event</strong> — the seat plan appears on the event details page for customers.</li>
    </ol>

    <h3>🛠️ Row actions</h3>
    <ul>
        <li><strong>View</strong> — open the seat plan preview.</li>
        <li><strong>Sort</strong> — drag the row to change the order of plans on the frontend.</li>
        <li><strong>Delete</strong> — detach the seat plan from this event. The global plan is not deleted.</li>
    </ul>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Reserved seat availability</strong>
        Seat plans and their seat-to-ticket-type mapping are designed once under
        <em>Ticket/Seat Plan</em>. Once an order reaches one of the statuses selected in
        <em>Global Configuration → Events → Booked Status</em>, the booked seats are marked as taken and cannot be
        selected again.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 WooCommerce integration</strong>
        The plugin keeps <strong>one hidden WooCommerce product per event</strong> (linked through <code>link_wc_id</code>)
        to carry the cart, checkout, tax, coupon and payment flow. Ticket types are not separate WooCommerce products —
        they are stored with the event and priced through that hidden product.
    </div>
</div>
