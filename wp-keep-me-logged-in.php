add_filter('auth_cookie_expiration', 'keep_me_logged_in_for_1_week' );
function keep_me_logged_in_for_1_week( $expirein ) {
    return WEEK_IN_SECONDS; // 1 week in seconds
}
