<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_date">
    <div class="abet_doc_page_head">
        <h2>🗓️ Date Configuration</h2>
        <p class="abet_doc_lede">
            The <strong>Date</strong> tab defines when an event takes place and which sessions customers can book.
            Choose exact calendar dates, or let the plugin generate a recurring series of dates, then attach the
            session times that are offered on those dates.
        </p>
    </div>

    <h3>🗓️ Date types</h3>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Specific Dates</strong></td>
                <td>Add one or more exact dates with <em>Add Specific Date</em>. Use this for one-off performances or
                    any irregular schedule. Each row can be edited or removed and the rows can be dragged to reorder
                    them.</td>
            </tr>
            <tr>
                <td><strong>Periodic Dates</strong></td>
                <td>The plugin generates a series of dates automatically. The series starts at the
                    <em>Launching Date</em>, repeats every <em>Periodic after</em> days, and stops at the
                    <em>Terminate Date</em> (or after the global advance-booking window). It is a day interval, not a
                    weekday selection.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/34-event-editor-dates.png"><img class="abet_doc_screen_img" src="#" alt="Event editor dates"></div>

    <h3>🔁 Periodic date settings</h3>
    <table>
        <thead>
            <tr>
                <th>Setting</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Periodic after</strong></td>
                <td>Gap between generated dates in days. <code>1</code> means every day, <code>2</code> means every
                    other day, and so on.</td>
            </tr>
            <tr>
                <td><strong>Launching Date</strong></td>
                <td>Optional first date of the series. When left empty the series starts from today.</td>
            </tr>
            <tr>
                <td><strong>Terminate Date</strong></td>
                <td>Optional last date of the series. When left empty the series is limited by the global
                    <em>Number of advance booking date</em> setting.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/35-event-editor-periodic-dates.png"><img class="abet_doc_screen_img" src="#" alt="Event editor periodic dates"></div>

    <h3>🚫 Special On/Off Dates</h3>
    <p class="abet_doc_section_intro">
        These rules apply to periodic dates and let you fine-tune the generated series:
    </p>
    <ul>
        <li><strong>Weekend</strong> — select the weekdays that should be excluded from the series.</li>
        <li><strong>Specific Off Dates</strong> — exclude individual calendar dates (holidays, closures).</li>
        <li><strong>Special On Dates</strong> — force extra dates into the series even if they do not match the
            interval.</li>
    </ul>

    <h3>⏰ Time Configuration</h3>
    <table>
        <thead>
            <tr>
                <th>Option</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Operation Time</strong></td>
                <td>The session list offered on every date. Each row has a label (for example Morning, Evening) and a
                    time. Use <em>Add Operation Time</em> for multiple daily sessions.</td>
            </tr>
            <tr>
                <td><strong>Day Wise Time</strong></td>
                <td>Optional per-weekday time override, for example different opening hours on weekends.</td>
            </tr>
            <tr>
                <td><strong>Date Wise Time</strong></td>
                <td>Optional per-date time override for specific calendar dates.</td>
            </tr>
        </tbody>
    </table>

    <h3>🖥️ Date selection on the frontend</h3>
    <p class="abet_doc_section_intro">
        The booking form picks the right control automatically, based on how many dates are available:
    </p>
    <table>
        <thead>
            <tr>
                <th>Available dates</th>
                <th>Control shown</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>1 date</strong></td>
                <td>The date is displayed as fixed text. When the event has a single session time it is shown with the
                    date.</td>
            </tr>
            <tr>
                <td><strong>2 – 7 dates</strong></td>
                <td>A compact select field. When session times exist, every option contains both the date and the
                    session time.</td>
            </tr>
            <tr>
                <td><strong>8 or more dates</strong></td>
                <td>A calendar date picker that only enables the available dates.</td>
            </tr>
        </tbody>
    </table>
    <p class="abet_doc_section_intro">
        The threshold is 7 by default and can be changed with the <code>abpet_date_select_limit</code> filter.
    </p>

    <h3>📦 Availability</h3>
    <ul>
        <li><strong>Sale-closing buffer</strong> — a global value in minutes. Booking closes that many minutes before
            a session starts.</li>
        <li><strong>Advance booking days</strong> — a global value that controls how many days of periodic dates are
            generated.</li>
        <li><strong>Stock</strong> — ticket quantity, sold and reserved counts are tracked per ticket type and per
            session, not per date row.</li>
        <li><strong>Event Date and Time List</strong> — the <em>Feature ON/OFF</em> toggle that shows or hides the
            date/time list on the event details page.</li>
    </ul>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Global vs event settings</strong>
        Date format, time format, sale-closing buffer and advance-booking days are set once under
        <em>Global Configuration → Dates</em> and apply to every event. The event <em>Date</em> tab only defines the
        dates, date rules and session times.
    </div>
</div>
