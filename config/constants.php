<?php

return [
    'PROJECT_NAME' => env('PROJECT_NAME', 'Red Brigade Lucknow'),
    'MAIL_FROM_WEB' => env('MAIL_FROM_WEB', 'info@redbrigadelucknow.org'),
    'PROJECT_URL' => rtrim(env('APP_URL', 'http://localhost/'), '/') . '/',
];