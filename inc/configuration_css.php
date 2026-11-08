<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_css_value">
    <div class="abet_doc_page_head">
        <h2>🎨 CSS Property</h2>
        <p class="abet_doc_lede">
            The <strong>CSS Property</strong> section customizes the plugin's frontend styling without editing code.
            The values are stored as plugin options and applied through CSS variables.
        </p>
    </div>

    <h3>🎛️ Available variables</h3>
    <table>
        <thead>
            <tr>
                <th>Group</th>
                <th>Variables</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Colours</strong></td>
                <td>Base Color, Alternate Color, Default Color, Warning Color, Section Background Color.</td>
            </tr>
            <tr>
                <td><strong>Typography</strong></td>
                <td>Default Font Size, Label Font Size, Font Size H1–H6, Button Font Size.</td>
            </tr>
            <tr>
                <td><strong>Shape</strong></td>
                <td>Default Border Radius.</td>
            </tr>
            <tr>
                <td><strong>Buttons</strong></td>
                <td>Button Text Color and Button Background Color.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Non-destructive</strong>
        These values are saved in the plugin options, so updating the plugin does not overwrite your customizations.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Contrast matters</strong>
        Check that button text and headings stay readable against the backgrounds you choose, especially on event
        cards and the booking form.
    </div>
</div>
