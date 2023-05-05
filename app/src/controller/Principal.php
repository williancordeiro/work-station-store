<?php
namespace controller;

use \Framework\DW3Controlador;
use \model\User;

class Principal extends DW3Controlador
{
    public function index()
    {
        $this->visao('/index/index.php');
    }

    public function armazenar() {
        $usuario = new User($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password']);
        
        if ($usuario->isValido()) {
            $usuario->save();
            $this->redirecionar(URL_RAIZ . 'store/store');
        } else {
            
        }
    }

    public function sucess() {
        $this->visao('store/store');
    }
}