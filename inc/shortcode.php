<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_shortcode">
    <div class="abet_doc_page_head">
        <h2>🔗 Shortcodes</h2>
        <p class="abet_doc_lede">
            ABP Event Ticket provides shortcodes that let you display event listings, booking interfaces, and image
            galleries anywhere on your website — pages, posts, widgets, or other supported WordPress areas.
        </p>
    </div>

    <h3>🔄 Overview</h3>
    <p class="abet_doc_section_intro">
        Each shortcode supports a set of parameters for controlling layout, filtering, item count, and frontend
        display. Parameters can be combined to build customised event listing and booking pages.
    </p>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Parameter usage</strong>
        Use only the parameters supported by each shortcode. Invalid or unsupported parameters are ignored and do not
        affect the output.
    </div>

    <h3>🎟️ Booking Shortcode</h3>
    <p class="abet_doc_section_intro">
        The <code>[abpet-booking]</code> shortcode displays the booking interface. Use it to create a dedicated booking
        page where customers can browse available events and complete a purchase. Show all events, or filter by a
        specific event, category, location, organizer, brand, or speaker.
    </p>
    <table>
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
                <th>Default</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>post_id</code></td>
                <td>Display a specific event. When used, other filtering parameters are ignored. Example: <code>[abpet-booking post_id="123"]</code></td>
                <td>—</td>
            </tr>
            <tr>
                <td><code>cat_id</code></td>
                <td>Filter events by category ID. Example: <code>[abpet-booking cat_id="5"]</code></td>
                <td>—</td>
            </tr>
            <tr>
                <td><code>loc_id</code></td>
                <td>Filter events by location ID. Example: <code>[abpet-booking loc_id="2"]</code></td>
                <td>—</td>
            </tr>
            <tr>
                <td><code>organizer_id</code></td>
                <td>Filter events by organizer ID. Example: <code>[abpet-booking organizer_id="3"]</code></td>
                <td>—</td>
            </tr>
            <tr>
                <td><code>brand_id</code></td>
                <td>Filter events by brand ID. Example: <code>[abpet-booking brand_id="4"]</code></td>
                <td>—</td>
            </tr>
            <tr>
                <td><code>speaker_id</code></td>
                <td>Filter events by speaker ID. Example: <code>[abpet-booking speaker_id="7"]</code></td>
                <td>—</td>
            </tr>
            <tr>
                <td><code>filter</code></td>
                <td>Choose which taxonomy dropdowns the event list filter bar shows. Use <code>all</code> (default), <code>none</code> to hide the bar, a list such as <code>category,location</code>, or an exclusion list such as <code>-speaker</code>. Example: <code>[abpet-post filter="category,brand"]</code>. A taxonomy switched OFF in Event Ticket → Configuration → Feature ON/OFF never appears.</td>
                <td>all</td>
            </tr>
            <tr>
                <td><code>style</code></td>
                <td>Layout style. Options: <code>grid</code>, <code>list</code>, <code>missionary</code>, <code>minimal</code>.</td>
                <td>grid</td>
            </tr>
            <tr>
                <td><code>column</code></td>
                <td>Number of columns for grid layouts (1–10). Example: <code>[abpet-booking column="3"]</code></td>
                <td>3</td>
            </tr>
            <tr>
                <td><code>show</code></td>
                <td>Number of events to display (0–100).</td>
                <td>0</td>
            </tr>
            <tr>
                <td><code>sort</code></td>
                <td>Sort direction. Options: <code>ASC</code>, <code>DESC</code>.</td>
                <td>ASC</td>
            </tr>
            <tr>
                <td><code>pagination</code></td>
                <td>Enable or disable pagination. Options: <code>yes</code>, <code>no</code>.</td>
                <td>yes</td>
            </tr>
            <tr>
                <td><code>pagination-style</code></td>
                <td>Pagination style. Options: <code>live</code>, <code>number</code>.</td>
                <td>live</td>
            </tr>
            <tr>
                <td><code>form</code></td>
                <td>Search form style. Options: <code>inline</code>.</td>
                <td>inline</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/53-frontend-ticket-booking.png"><img class="abet_doc_screen_img" src="#" alt="Frontend ticket booking"></div>

    <h3>📄 Post List Shortcode</h3>
    <p class="abet_doc_section_intro">
        The <code>[abpet-post]</code> shortcode displays events without the booking/search interface. It accepts the
        same <code>post_id</code>, category, location, organizer, brand, speaker, filter, style, column, show, sort, and
        pagination parameters as the booking shortcode. When <code>post_id</code> is set, the single event's details
        template is rendered instead of a list.
    </p>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/46-frontend-event-list.png"><img class="abet_doc_screen_img" src="#" alt="Frontend event list"></div>
    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/49-frontend-event-list-cards.png"><img class="abet_doc_screen_img" src="#" alt="Frontend event list cards"></div>
    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/50-frontend-event-list-prices.png"><img class="abet_doc_screen_img" src="#" alt="Frontend event list prices"></div>
    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/51-frontend-event-details.png"><img class="abet_doc_screen_img" src="#" alt="Frontend event details"></div>
    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/52-frontend-event-details-highlights.png"><img class="abet_doc_screen_img" src="#" alt="Frontend event details highlights"></div>

    <h3>🖼️ Gallery Shortcode</h3>
    <p class="abet_doc_section_intro">
        The <code>[abpet-gallery]</code> shortcode displays the images saved in the event Slider/Gallery field.
        With <code>post_id</code> it shows that event's gallery; without it, the images of all events matched by the
        filter parameters are combined. <code>slider_style</code> switches between a <code>gallery</code> grid and a
        <code>slider</code> carousel, and <code>column</code> / <code>show</code> control the layout and item count.
    </p>
    <table>
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
                <th>Default</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>post_id</code></td>
                <td>Show the gallery of one event. Example: <code>[abpet-gallery post_id="123"]</code></td>
                <td>-</td>
            </tr>
            <tr>
                <td><code>slider_style</code></td>
                <td>Gallery layout. Options: <code>gallery</code>, <code>slider</code>.</td>
                <td>gallery</td>
            </tr>
            <tr>
                <td><code>column</code></td>
                <td>Images per row (1-10). Also sets the number of visible slider items.</td>
                <td>3</td>
            </tr>
            <tr>
                <td><code>show</code></td>
                <td>Maximum slider items to show. <code>0</code> means the column value times three.</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>

    <h3>🎟️ PRO Ticket Lookup Shortcode <span class="abet_doc_badge abet_doc_badge_pro">PRO</span></h3>
    <p class="abet_doc_section_intro">
        The <code>[abpet-ticket]</code> shortcode creates a ticket lookup page where a customer or authorized staff
        member can view a booking, download its ticket PDF, and use the check-in action when permitted.
    </p>
    <ol class="abet_doc_steps">
        <li>Create a WordPress page and add <code>[abpet-ticket]</code> to its content, then publish it.</li>
        <li>Sign in to the site before using the page. Signed-out visitors are asked to log in.</li>
        <li>Enter the ticket PIN in <em>Order ID / Ticket ID</em>, then choose <em>View Ticket</em>. The PIN format is <code>ORDER_ID-BOOKING_ID</code>, for example <code>123-5</code>.</li>
        <li>Review the booking details. PDF download requires ABP PDF Tools. Check-in is available to logged-in users who are authorized for that booking.</li>
    </ol>
    <div class="abet_doc_callout abet_doc_callout_warn">
        <strong>⚠️ Keep ticket PINs private</strong>
        The PIN identifies a booking. Share it only with the customer or authorized event staff. The lookup page enforces login and booking ownership/role checks.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Tip</strong>
        Combine filters to build focused pages, for example a category-only listing or a single event's booking page.
    </div>
</div>
