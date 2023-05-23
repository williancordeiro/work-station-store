<?php

$rotas = [
    '/' => [
        'GET' => '\Controller\Principal#index',
    ],
    '/store' => [
        'GET' => '\Controller\StoreController#index',
    ],
    '/store/sale/new' => [
        'GET' => '\Controller\StoreController#new',
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