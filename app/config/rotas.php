<?php

$rotas = [
    '/' => [
        'GET' => '\controller\Principal#index',
    ],
    '/login' => [
        'GET' => '\controller\LoginController#index',
    ],
    '/register' => [
        'GET' => '\controller\RegisterController#index',
    ],
    '/store' => [
        'GET' => '\controller\Store#index',
    ],
];