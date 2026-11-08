<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_menu_lists">
    <div class="abet_doc_page_head">
        <h2>🧭 Menu Overview</h2>
        <p class="abet_doc_lede">
            After activation, ABP Event Ticket adds one top-level admin menu. All plugin screens are tabs inside that
            menu, so you can move between events, orders, ticket/seat plans and global settings without leaving the
            plugin.
        </p>
    </div>

    <h3>📚 Main menu tabs</h3>
    <table>
        <thead>
            <tr>
                <th>Menu</th>
                <th>Purpose</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Dashboard</strong></td>
                <td>Welcome screen with KPI cards, today's sessions, quick actions, recent orders, system status and
                    content breakdown.</td>
            </tr>
            <tr>
                <td><strong>Events Lists</strong></td>
                <td>The event list, with a live event count in the tab. Create, edit, clone, view, trash, restore and
                    permanently delete events.</td>
            </tr>
            <tr>
                <td><strong>Orders</strong></td>
                <td>All bookings with filters, ticket/seat details, statuses, billing and attendee information. The
                    tab shows the total order count.</td>
            </tr>
            <tr>
                <td><strong>Add Order</strong> (PRO)</td>
                <td>Create a booking manually for a customer by choosing the event, session, ticket or seat, and
                    billing details.</td>
            </tr>
            <tr>
                <td><strong>Cancel Requests</strong> (PRO)</td>
                <td>Review customer cancellation requests and approve or reject them. The tab shows the number of
                    pending requests.</td>
            </tr>
            <tr>
                <td><strong>Ticket/Seat Plan</strong></td>
                <td>Global ticket types, decoration items and reusable seat plans with the seating designer.</td>
            </tr>
            <tr>
                <td><strong>Global Configuration</strong></td>
                <td>Plugin-wide settings and reusable data: labels and slugs, feature toggles, dates, ticket-related
                    libraries, taxonomies, slider, contact details and CSS properties. When PRO is active it also
                    includes PDF, Order Lists PDF, Order Lists CSV, E-Mail, Partial Payment and Global Discount
                    settings.</td>
            </tr>
            <tr>
                <td><strong>Documentation</strong></td>
                <td>Built-in quick-start reference for the plugin.</td>
            </tr>
        </tbody>
    </table>

    <h3>⚡ Quick actions</h3>
    <p class="abet_doc_section_intro">
        The header of every plugin screen includes shortcut buttons: create a new event, add a location, add a
        category (when enabled), and on the Dashboard a row of quick actions for the most-used configuration screens.
    </p>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Renaming the menu</strong>
        The menu label and slug are set on the first Global Configuration tab (the tab title follows the
        <em>Label</em> value, defaulting to <em>Events</em>) using the Label and Slug fields. The
        <em>Events Lists</em> tab uses the label you enter there.
    </div>
</div>
