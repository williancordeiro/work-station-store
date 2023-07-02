<?php

$rotas = [
    '/' => [
        'GET' => '\Controller\Principal#index',
    ],
    '/store' => [
        'GET' => '\Controller\StoreController#index',
        'POST' => '\Controller\StoreController#saleComplete',
    ],
    '/store/new' => [
        'GET' => '\Controller\ProductController#index',
        'POST' => '\Controller\ProductController#bin',
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