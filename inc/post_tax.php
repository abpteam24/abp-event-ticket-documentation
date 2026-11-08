<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_tax">
    <div class="abet_doc_page_head">
        <h2>🧾 Tax</h2>
        <p class="abet_doc_lede">
            The <strong>Tax</strong> tab sets the WooCommerce tax status and tax class used by this event's ticket
            products. The tab mirrors the standard WooCommerce product tax fields.
        </p>
    </div>

    <h3>🔧 Tax Status</h3>
    <table>
        <thead>
            <tr>
                <th>Value</th>
                <th>Meaning</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Please Select</strong></td>
                <td>The default placeholder. No explicit status is chosen, so WooCommerce's standard behaviour applies.</td>
            </tr>
            <tr>
                <td><strong>Taxable</strong></td>
                <td>Tax is calculated on the ticket price.</td>
            </tr>
            <tr>
                <td><strong>Shipping only</strong></td>
                <td>Tax applies to shipping only, not to the ticket price.</td>
            </tr>
            <tr>
                <td><strong>None</strong></td>
                <td>No tax is applied to this ticket.</td>
            </tr>
        </tbody>
    </table>

    <h3>🏷️ Tax Class</h3>
    <p class="abet_doc_section_intro">
        Choose <em>Standard</em>, or any additional tax class that exists in WooCommerce. The list is built from the
        site's tax classes, so custom classes appear here automatically. To add a new class, go to
        <em>WooCommerce → Settings → Tax</em>.
    </p>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>⚠️ Requires WooCommerce tax calculation</strong>
        Both fields are shown only when <em>Enable tax rates and calculations</em> is turned on in the WooCommerce tax
        settings. When it is off, the tab displays a warning note instead of the fields.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Where the values are stored</strong>
        The selected values are saved to the event's WooCommerce product as its tax status and tax class, which is
        why the same options appear when the product is edited directly in WooCommerce.
    </div>
</div>
