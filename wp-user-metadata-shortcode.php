<?php
// Adding the shortcode 'show_my_metadata'
add_shortcode('show_my_metadata', 'show_my_metadata_shortcode');

function show_my_metadata_shortcode($atts) {
    // Get the current user's ID
    $user_id = get_current_user_id();

    $my_metadata_value = get_user_meta($user_id, 'my-metadata', true);

    // Validate if metadata exists
    if ($my_metadata_value) {
        return '<span class="my-metadata">' . esc_html($my_metadata_value) . '</span>';
    } else {
        return '<span class="my-metadata">Metadata not found</span>';
    }
}
