<?php

$rotas = [
    '/' => [
        'GET' => '\Controller\Principal#index',
    ],
    '/store' => [
        'GET' => '\Controller\StoreController#index',
    ],
    '/login' => [
        'GET' => '\Controller\LoginController#index',
        'POST' => '\Controller\LoginController#bin',
        'DELETE' => '\Controller\LoginController#delete',
    ],
    '/register' => [
        'POST' => '\Controller\RegisterController#bin',
    ],
    '/register/create' => [
        'GET' => '\Controller\RegisterController#index'
    ],
];