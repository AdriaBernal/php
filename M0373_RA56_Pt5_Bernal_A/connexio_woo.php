<?php
require DIR .'/vendor/autoload.php';
use Automattic\WooCommerce\Client;

$url_wordpress="http://192.168.56.11/wordpress";
$url_wordpress_rest=$url_wordpress.'/index.php';
$woocommerce=new Client(
    $url_wordpress_rest,
'ck_695511846119de588fe5e2e25327e35c24f4b765',
'cs_70e84cc6773b77ab9278e61aacb54c41ceae6bc3',
[
    'wp_api' => true,
    'query_string_auth' => true,
    'timeout' => 400,
]
);
?>