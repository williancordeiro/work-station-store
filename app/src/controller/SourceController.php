<?php
namespace controller;

class SourceController extends controller
{
    public function index()
    {
        $this->redirecionar(URL_RAIZ . 'store');
    }
}