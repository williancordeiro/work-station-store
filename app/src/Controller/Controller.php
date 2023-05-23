<?php
namespace Controller;

use \Model\User;
use \Framework\DW3Controlador;
use \Framework\DW3Sessao;

abstract class Controller extends DW3Controlador {
    protected $user;

    protected function verifyLogin() {
        $user = $this->getUser();
        
        if ($user == null)
            $this->redirecionar(URL_RAIZ . 'register/create');

    }

    protected function getUser() {
        if ($this->user == null)
            $user = DW3sessao::get('user');

        return $user;
    }
}
?>