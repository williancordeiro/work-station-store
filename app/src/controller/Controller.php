<?php
namespace controller;

use \Framework\DW3Controlador;
use \Framework\DW3Sessao;
use \Model\User;

abstract class Controller extends DW3Controlador {
    
    protected $usuario;

    protected function isLogged() {

        $usuario = $this->getUser();

        if ($usuario == null)
            $this->redirecionar(URL_RAIZ . 'store');
    }

    protected function getUser() {

        if ($this->usuario == null)
            $usuario = DW3Sessao::get('usuario');

        return $usuario;
    }
}

?>