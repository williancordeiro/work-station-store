<?php
namespace Controller;

use \Model\User;

class RegisterController extends Controller {
    
    public function index() {
        $this->visao('register/register.php');
    }

    public function bin() {
        $user = new User($_POST['name'], $_POST['email'], $_POST['password']);
        
        if ($user->isValid()) {
            $user->save();
            $this->redirecionar(URL_RAIZ . 'store');
        } else {
            $this->setErros($user->getValidacaoErros());
            $this->visao('register/register.php');
        }
    }

    public function sucess() {
        $this->redirecionar(URL_RAIZ . 'store');
    }
}
?>