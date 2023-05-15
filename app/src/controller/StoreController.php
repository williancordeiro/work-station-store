<?php
namespace controller;

use \Framework\DW3Controlador;

class StoreController extends DW3Controlador
{
    public function index()
    {
        $this->visao('/store/store.php');
    }
}