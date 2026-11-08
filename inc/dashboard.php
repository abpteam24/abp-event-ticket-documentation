<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_dashboard">
    <div class="abet_doc_page_head">
        <h2>📊 Dashboard</h2>
        <p class="abet_doc_lede">
            The Dashboard is the landing screen of ABP Event Ticket. It gives you a quick overview of your event
            activity and shortcuts into the most frequently used areas of the plugin.
        </p>
    </div>

    <h3>👋 Header</h3>
    <p class="abet_doc_section_intro">
        The header greets the current user by name, shows today's date, and provides two buttons: create a new event
        and open <em>Orders</em>.
    </p>

    <h3>🔢 KPI cards</h3>
    <table>
        <thead>
            <tr>
                <th>Card</th>
                <th>Shows</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Total Events</strong></td>
                <td>The number of events. Clicking it opens the event list.</td>
            </tr>
            <tr>
                <td><strong>Total Orders</strong></td>
                <td>The number of bookings. Clicking it opens the Orders screen.</td>
            </tr>
            <tr>
                <td><strong>Tickets Sold</strong></td>
                <td>Total tickets sold across all events.</td>
            </tr>
            <tr>
                <td><strong>Total Revenue</strong></td>
                <td>Revenue formatted with the WooCommerce currency.</td>
            </tr>
            <tr>
                <td><strong>Booked Today</strong></td>
                <td>Bookings created today.</td>
            </tr>
        </tbody>
    </table>

    <h3>🗓️ Today's Sessions</h3>
    <p class="abet_doc_section_intro">
        Lists the sessions scheduled for today, each with its event, time, sold/available counts and a status chip
        such as <em>Session Started</em>. Clicking a session opens a popup with the seat map or ticket-type breakdown,
        the totals (sold, available, total, reserve) and the bookings for that session. <em>View All</em> opens the
        Orders screen.
    </p>

    <h3>🧾 Recent Orders</h3>
    <p class="abet_doc_section_intro">
        Two tabs — <em>Last 10 Orders</em> and <em>Today's Orders</em> — show the order number and event, the booked
        session, the order status and the total. The <em>Today's Orders</em> tab loads more rows on demand, and
        <em>All Orders</em> opens the Orders screen.
    </p>

    <h3>⚡ Quick Actions</h3>
    <ul>
        <li><strong>ON/OFF Configuration</strong> — enable or disable features.</li>
        <li><strong>Global Date</strong> — manage global date settings.</li>
        <li><strong>Additional Services</strong> — shown when additional services are enabled.</li>
        <li><strong>Attendee Form</strong> — shown when the attendee form is enabled.</li>
        <li><strong>Location Configuration</strong> — manage locations.</li>
    </ul>

    <h3>🖥️ System Status</h3>
    <p class="abet_doc_section_intro">
        Shows the plugin, WordPress, PHP and WooCommerce versions, plus the WooCommerce sender name and email. A
        checklist verifies the WooCommerce plugin, the Booking page, the event list page, the Gallery page and whether
        an event exists, with a <em>Fix</em> action where applicable. The card also shows the number of posts and a
        <em>Dummy Import</em> control that can add or remove sample data.
    </p>

    <h3>📈 Content Breakdown</h3>
    <p class="abet_doc_section_intro">
        A bar and legend showing how many events are <em>Published</em>, <em>Draft</em>, <em>Private</em> and in the
        <em>Trash</em>.
    </p>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/1-admin-dashboard.png"><img class="abet_doc_screen_img" src="#" alt="Admin dashboard"></div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Tip</strong>
        Keep the dashboard open in a separate browser tab while configuring events — it is the fastest way back to
        every area of the plugin.
    </div>
</div>
