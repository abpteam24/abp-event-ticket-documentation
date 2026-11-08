<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_date">
    <div class="abet_doc_page_head">
        <h2>📅 Global Dates</h2>
        <p class="abet_doc_lede">
            The <strong>Dates</strong> section under Global Configuration holds the date and time formats used
            throughout the plugin, plus the two values that control when booking opens and closes. These settings are
            global — they are not overridden per event.
        </p>
    </div>

    <h3>📋 Available settings</h3>
    <table>
        <thead>
            <tr>
                <th>Setting</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Date Format</strong></td>
                <td>The display format for event dates across the admin and the frontend.</td>
            </tr>
            <tr>
                <td><strong>Time Format</strong></td>
                <td>The display format for session times, for example <code>g:i a</code>.</td>
            </tr>
            <tr>
                <td><strong>Buffer time in MIN</strong></td>
                <td>How many minutes before a session starts ticket sales close. Enter the value in minutes (60 = one
                    hour).</td>
            </tr>
            <tr>
                <td><strong>Number of advance booking date</strong></td>
                <td>How many days ahead periodic dates are generated. The default is 28 days.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/9-admin-global-dates.png"><img class="abet_doc_screen_img" src="#" alt="Global dates"></div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ One save for all events</strong>
        Click <em>Save Global Date Configuration</em> to apply the values to every event. Date types, specific dates,
        periodic rules and session times are configured per event from the event <em>Date</em> tab.
    </div>
</div>
