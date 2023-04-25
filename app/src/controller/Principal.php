<?php
namespace controller;

use \Framework\DW3Controlador;

class Principal extends DW3Controlador
{
    public function index()
    {
        $this->visao('/index/index.php');
    }
}