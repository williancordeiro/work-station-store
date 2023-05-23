<?php
namespace Controller;

use \Model\User;

class RegisterController extends Controller {
    
    public function index() {
        $this->visao('register/register.php');
    }

    public function bin() {
        $user = new User($_POST['name'], $_POST['email'], $_POST['password']);
        $user->save();
        $this->redirecionar(URL_RAIZ . 'store');
    }

    public function sucess() {
        $this->redirecionar(URL_RAIZ . 'store');
    }
}
?>