<?php
/**
 * PayPal Setting & API Credentials
 * Created by Anwar Jahid <ajr.jahid@gmail.com>.
 */

return [
    'credentials' => [
        'username' => env('PAYPAL_USERNAME', 'anwar_api1.isdb-bisew.org'),
        'password' => env('PAYPAL_PASSWORD', '4MM6CPY6GJL74J8D'),
        'signature' => env('PAYPAL_SIGNATURE', 'AluoGud9pSsv6vq7qvWxjn7cSuR5A0WxRIX2UV07CIJN2L7uAjO9N3u9'),
        'sandbox' => env('PAYPAL_SANDBOX', true)
    ],
];
