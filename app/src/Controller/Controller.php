<?php
namespace Controller;

use \Model\User;
use \Framework\DW3Controlador;
use \Framework\DW3Sessao;

abstract class Controller extends DW3Controlador {
    use ViewerController;

    protected $user;

    protected function verifyLogin() {
        $user = $this->getUser();
        
        if ($user == null)
            $this->redirecionar(URL_RAIZ . 'login');

    }

    protected function getUser() {
        if ($this->user == null) {
            $userId = DW3Sessao::get('user');
            if ($userId == null)
                return null;
            
            $this->user = User::searchId($userId);
        }

        return $this->user;
    }
}
?>