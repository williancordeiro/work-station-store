<?php
namespace Model;

use \PDO;
use \Framework\DW3BancoDeDados;

class User extends Model {
    
    const SEARCH_ID = ' SELECT * FROM users WHERE id = ?';
    const SEARCH_NAME = 'SELECT * FROM users WHERE name = ?';
    const SEARCH_EMAIL = 'SELECT * FROM users WHERE email = ? LIMIT 1';
    const INSERT = 'INSERT INTO users(name, email, password) VALUES (?, ?, ?)';

    private $id;
    private $name;
    private $email;
    private $password;
    private $passwordCrypto;

    public function __construct($name, $email, $passwordCrypto, $id = null) {
        $this->name = $name;
        $this->email = $email;
        $this->passwordCrypto = $passwordCrypto;
        if ($passwordCrypto != null)
            $this->password = password_hash($passwordCrypto, PASSWORD_BCRYPT);
        
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function verifyPassword($passwordCrypto) {
        return password_verify($passwordCrypto, $this->password);
    }

    public function save() {
        $this->insert();
    }

    private function insert() {
        DW3BancoDeDados::getPdo()->beginTransaction();
        $command = DW3BancoDeDados::prepare(self::INSERT);
        $command->bindValue(1, $this->name, PDO::PARAM_STR);
        $command->bindValue(2, $this->email, PDO::PARAM_STR);
        $command->bindValue(3, $this->password, PDO::PARAM_STR);
        $command->execute();
        $this->id = DW3BancoDeDados::getPdo()->lastInsertId();
        DW3BancoDeDados::getPdo()->commit();
    }

    public static function searchId($id) {
        $command = DW3BancoDeDados::prepare(self::SEARCH_ID);
        $command->bindValue(1, $id, PDO::PARAM_INT);
        $command->execute();
        $register = $command->fetch();
        return new User(
            $register['name'],
            null,
            $register['id']
        );
    }

    public static function searchName($name) {
        $command = DW3BancoDeDados::prepare(self::SEARCH_NAME);
        $command->bindValue(1, $name, PDO::PARAM_STR);
        $command->execute();
        $register = $command->fetch();
        $user = null;
        if ($register) {
            $user = new User(
                $register['name'],
                null,
                $register['id']
            );
            $user->password_get_info = $register['password'];
        }
        return $user;
    }

    public static function searchEmail($email) {
        $command = DW3BancoDeDados::prepare(self::SEARCH_EMAIL);
        $command->bindValue(1, $email, PDO::PARAM_STR);
        $command->execute();
        $object = null;
        $register = $command->fetch();
        if ($register) {
            $object = new User(
                $register['email'],
                '',
                null,
                $register['id']
            );
            $object->password = $register['password'];
        }
        return $object;
    }

    protected function verifyErrors() {
        
        if (strlen($this->name) < 3)
            $this->setErroMensagem('name', 'Deve ter no mínimo 3 caracteres.');

        if (strlen($this->email) < 3)
            $this->setErroMensagem('email', 'Deve ter no mínimo 3 caracteres.');

        if (strlen($this->passwordCrypto) < 3)
            $this->setErroMensagem('password', 'Deve ter no mínimo 3 caracteres.');
    }
}
?>