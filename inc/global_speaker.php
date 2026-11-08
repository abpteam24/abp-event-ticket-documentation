<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
} ?>
<div class="abet_doc_panel" data-tabs="#abet_global_speaker">
    <div class="abet_doc_page_head">
        <h2>🎤 Speakers</h2>
        <p class="abet_doc_lede">
            The <strong>Speaker</strong> section under Global Configuration is the central library of speaker
            profiles. Create a profile once and link it to any number of events.
        </p>
    </div>

    <h3>📋 The speaker list</h3>
    <table>
        <thead>
            <tr>
                <th>Column</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>SI</strong></td>
                <td>Running row number.</td>
            </tr>
            <tr>
                <td><strong>Speaker</strong></td>
                <td>Photo thumbnail (when uploaded) and the speaker's name.</td>
            </tr>
            <tr>
                <td><strong>ID</strong></td>
                <td>The speaker ID, used for event linking and shortcode filters.</td>
            </tr>
            <tr>
                <td><strong>Designation</strong></td>
                <td>The job title or role saved in the profile.</td>
            </tr>
            <tr>
                <td><strong>Company</strong></td>
                <td>The company or organization saved in the profile.</td>
            </tr>
            <tr>
                <td><strong>Action</strong></td>
                <td>Pencil icon to <strong>edit</strong>, close icon to <strong>trash</strong> the speaker.</td>
            </tr>
        </tbody>
    </table>

    <div class="abet_doc_screen" data-abet-doc-img="<?php echo esc_url(ABET_DOC_URL . '/') ?>image/22-admin-global-speakers.png"><img class="abet_doc_screen_img" src="#" alt="Global speakers"></div>

    <h3>➕ Adding a speaker</h3>
    <ol class="abet_doc_steps">
        <li><strong>Click Add New Speaker</strong> - A popup form opens; the same form is used for editing.</li>
        <li><strong>Speaker Name</strong> - Required. Shown on the event details page and the speaker profile page.</li>
        <li><strong>Speaker Slug (optional)</strong> - Leave it blank to auto-generate from the name.</li>
        <li><strong>Bio</strong> - A rich-text biography or description.</li>
        <li><strong>Photo</strong> - Upload a profile image from the media library.</li>
        <li><strong>Designation and Company</strong> - For example CEO, CTO, or Professor, plus the organization name.</li>
        <li><strong>Website</strong> - A URL that must start with <code>http://</code> or <code>https://</code>.</li>
        <li><strong>Social Links</strong> - Twitter/X, LinkedIn, Facebook, and Instagram profile URLs.</li>
        <li><strong>Save</strong> - The button reads <em>Update Speaker</em> when editing, and the profile is ready to assign.</li>
    </ol>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>📌 Trashing a speaker</strong>
        Removing a speaker also removes it from any event it was linked to. Both the profile term and its saved
        metadata (photo, bio, social links) are deleted.
    </div>

    <div class="abet_doc_callout abet_doc_callout_note">
        <strong>🌐 Availability</strong>
        This section is only shown when <em>Event Speaker</em> is enabled under <em>Feature ON/OFF</em>.
    </div>
</div>
