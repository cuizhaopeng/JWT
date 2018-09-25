<?php
/**
 * DateTime: 2018/9/25 14:21
 * Author: John
 * Email: 2639816206@qq.com
 */
require_once __DIR__ . '/vendor/autoload.php';

use OT\OT;

$payload = [
    'key' => 123,
    'auth' => 'kjol'
];
$key_encode = OT::encode($payload, 'orait2018', $alg = 'HS256');
echo $key_encode;
