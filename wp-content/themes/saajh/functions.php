<!--
add_filter( 'allowed_http_origins', 'add_allowed_origins' );
function add_allowed_origins( $origins ) {
    $origins[] = 'http://103.79.221.146:5019/api/tracks/getall';
    return $origins;
} -->
