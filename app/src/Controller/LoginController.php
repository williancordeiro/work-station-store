<?php
namespace Controller;

use \Model\User;
use \Framework\DW3Sessao;

class LoginController extends Controller {

    public function index() {
        $this->visao('login/login.php');
    }

    public function bin() {
        $user = User::searchEmail($_POST['email']);

        if ($user && $user->verifyPassword($_POST['password'])) {
            DW3Sessao::set('user', $user->getId());
            $this->redirecionar(URL_RAIZ . 'store');
        } else {
            $this->visao('login/login.php');
        }
    }

    public function delete() {
        DW3Sessao::deletar('usuario');
        $this->redirecionar(URL_RAIZ . 'login');
    }
}
?>