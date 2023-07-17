/**
 * Shortcode to display the total sales of the current product in Easy Digital Downloads.
 *
 * To use this shortcode, place [ry-edd-total-ventas] on a single product page.
 * It will display the total number of sales for the current product.
 *
 * @return string The total sales count for the current product.
 */
function ry_edd_total_ventas_shortcode( $atts ) {
    // Ensure that we are on an Easy Digital Downloads single product page
    if ( is_singular( 'download' ) && function_exists( 'edd_get_download_sales_stats' ) ) {
        global $post;
        $product_id = $post->ID;

        // Get the total sales count for the current product
        $sales = edd_get_download_sales_stats( $product_id );

        return '<p>Total Sales: ' . $sales . '</p>';
    }
}
add_shortcode( 'ry-edd-total-ventas', 'ry_edd_total_ventas_shortcode' );
