<?php
namespace Model;

use \PDO;
use \Framework\DW3BancoDeDados;
use \Framework\DW3ImagemUpload;

class Sale extends Model {
    const SEARCH_ALL = 'SELECT * FROM sale ORDER BY id';

    const INSERT = 'INSERT INTO sale(id_product, id_user) VALUES (?, ?)';

    private $id;
    private $product;
    private $user;

    public function __construct($product, $user, $id = null) {
        $this->id = $id;
        $this->setProduct($product);
        $this->setUser($user);
    }

    private function setProduct($product) {
        $this->product = $product;
    }

    public function getProduct() {
        return $this->product;
    }

    private function setUser($user) {
        $this->user = $user;
    }

    public function getUser() {
        return $this->user;
    }

    private function insert() {
        DW3BancoDeDados::getPdo()->beginTransaction();

        $command = DW3BancoDeDados::prepare(self::INSERT);
        $command->bindValue(1, $this->product, PDO::PARAM_STR);
        $command->bindValue(2, $this->user, PDO::PARAM_STR);
        $command->execute();

        $this->id = DW3BancoDeDados::getPdo()->lastInsertId();

        DW3BancoDeDados::getPdo()->commit();
    }

    public static function searchAll() {
        $registers = DW3BancoDeDados::query(self::SEARCH_ALL);
        $sales = [];

        foreach ($registers as $register)
            $sales[] = new Product($register['id_product'], $register['id_user'], $register['id']);

        return $sales;
    }
}
?>