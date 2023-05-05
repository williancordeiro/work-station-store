<?php
namespace Model;

use \PDO;
use \Framework\DW3BancoDeDados;
use \Framework\DW3ImagemUpload;

class User extends Model {
    const BUSCAR_POR_EMAIL = 'SELECT * FROM users WHERE email = ? LIMIT 1';
    const INSERIR = 'INSERT INTO users(first_name, last_name ,email, password) VALUES (?, ?, ?, ?)';
    private $id_user;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $passwordPlane;

    public function __construct($first_name, $last_name, $email, $passwordPlane, $id =  null) {
        $this->id = $id;
        $this->firts_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->passwordPlane = $passwordPlane;
        
        if ($passwordPlane != null)
            $this->password = password_hash($passwordPlane, PASSWORD_BCRYPT);
    }

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        $this->firts_name;
    }

    public function getLastName() {
        $this->last_name;
    }

    public function getEmail() {
        $this->email;
    }

    public function verifyPassword($passwordPlane) {
        return password_verify($passwordPlane, $this->password);
    }

    protected function verifyErrors() {
        if (strlen($this->first_name) < 3) {
            $this->setErrorMensagem('nome', 'Deve conter no mínimo 3 caracteres.');
        }

        if (strlen($this->last_name) < 3) {
            $this->setErrorMensagem('sobrenome', 'Deve conter no mínimo 3 caracteres.');
        }

        if (strlen($this->email) < 3) {
            $this->setErrorMensagem('email', 'Deve conter no mínimo 3 caracteres.');
        }

        if (strlen($this->passwordPlane) < 3) {
            $this->setErrorMensagem('senha', 'Deve conter no mínimo 3 caracteres.');
        }
    }

    public function save() {
        $this->insert();
    }

    private function insert() {
        DW3BancoDeDados::getPdo()->beginTransaction();

        $comando = DW3BancoDeDados::prepare(self::INSERIR);
        $comando->bindValue(1, $this->first_name, PDO::PARAM_STR);
        $comando->bindValue(2, $this->last_name, PDO::PARAM_STR);
        $comando->bindValue(3, $this->email, PDO::PARAM_STR);
        $comando->bindValue(4, $this->password, PDO::PARAM_STR);
        $this->id = DW3BancoDeDados::getPdo()->lastInsertId();
        DW3BancoDeDados::getPdo()->commit();
    }

    public static function searchEmail($email) {
        $comando = DW3BancoDeDados::prepare(self::BUSCAR_POR_EMAIL);
        $comando->bindValue(1, $email, PDO::PARAM_STR);
        $comando->execute();
        $objeto = null;
        $registro = $comando->fetch();
        if ($registro) {
            $objeto = new User(
                $registro['email'],
                '',
                null,
                $registro['id']
            );
            $objeto->senha = $registro['senha'];
        }
        return $objeto;
    }
}
?>