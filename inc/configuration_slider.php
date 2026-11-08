<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_slider">
    <div class="abet_doc_page_head">
        <h2>🖼️ Slider</h2>
        <p class="abet_doc_lede">
            The <strong>Slider</strong> section controls how event galleries are presented on the frontend. It does
            not store images itself — the images come from each event's <em>General → Gallery</em> field.
        </p>
    </div>

    <h3>⚙️ Settings</h3>
    <table>
        <thead>
            <tr>
                <th>Setting</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Slider Theme</strong></td>
                <td><em>Carousel Slider</em> or <em>Gallery / Masonry</em> presentation.</td>
            </tr>
            <tr>
                <td><strong>Images Per Row</strong></td>
                <td>Number of thumbnails per row (1–10) for the gallery layout.</td>
            </tr>
            <tr>
                <td><strong>Image Indicator?</strong></td>
                <td>Show or hide the pagination dots in the carousel.</td>
            </tr>
            <tr>
                <td><strong>Indicator Position</strong></td>
                <td>Place the dots at the top, right, bottom or left of the carousel.</td>
            </tr>
            <tr>
                <td><strong>Visible Popup?</strong></td>
                <td>Open clicked thumbnails in a full-screen lightbox.</td>
            </tr>
            <tr>
                <td><strong>Popup Image Indicator</strong></td>
                <td>Show or hide navigation arrows/dots inside the lightbox.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>ℹ️ Where the images come from</strong>
        Add gallery images per event in the event editor under <em>General → Gallery</em>. Use the
        <code>[abpet-gallery]</code> shortcode to render an event gallery anywhere, or leave it to the event details
        template.
    </div>

    <div class="abet_doc_callout abet_doc_callout_tip">
        <strong>💡 Optimise images</strong>
        Use consistently sized, compressed images so carousels and galleries load quickly on mobile devices.
    </div>
</div>
