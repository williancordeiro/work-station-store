<?php
namespace controller;

use \Framework\DW3Controlador;

class RegisterController extends DW3Controlador {

    public function index() {
        $this->visao('/register/register.php');
    }
}
?>