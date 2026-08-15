<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
    <div class="tab_item" data-tabs="#abpet_post">
        <h2 class="_abp_color_theme">Transport Booking - Post Lists</h2>
        <div class="_divider_xs"></div>
        <label>
            Here you can view all Transport Booking posts in one place. You can easily create, clone, edit, restore, or delete posts. Each post includes a short summary, shortcode usage, total properties/tools count, status, and other important rental details for quick and efficient management.
        </label>
        <div class="abp_image" data-image-href="<?php echo esc_url( ABPET_DOC_URL . '/' ) ?>image/post_lists.png">
            <img class="_img_control" src="#" alt="Post Lists Overview">
        </div>
        <ul class="_abp_list_margin_xs">
            <li>
                <strong>🔁 Clone Post:</strong>
                Create an exact duplicate of the selected post. The cloned post is saved as a draft and can be freely edited or customized.
            </li>
            <li>
                <strong>♻️ Restore Post:</strong>
                Recover a previously deleted or archived post and restore it back to the post list.
            </li>
            <li>
                <strong>❌ Permanent Delete:</strong>
                Permanently remove the selected post from the system. This action cannot be undone.
            </li>
            <li>
                <strong>✍️ Edit Post:</strong>
                Modify and update existing post content, settings, and configurations at any time.
            </li>
            <li>
                <strong>👁️ View Post:</strong>
                Preview how the post will appear on the live frontend website.
            </li>
            <li>
                <strong>🗑️ Move to Trash:</strong>
                Move the post to trash instead of permanently deleting it. You can restore it later if needed.
            </li>
        </ul>
        <label>
            After clicking Clone, Edit, or Add New Post, you will be redirected to the Post Details Page, where you can manage all post-related information in a structured and user-friendly interface.
        </label>
        <label>
            This page allows you to fully configure your post content before publishing or updating.
        </label>
    </div>
<?php
