<?php
namespace Model;

use \PDO;
use \Framework\DW3BancoDeDados;
use \Framework\DW3ImagemUpload;

class Sale extends Model {
    const SEARCH_ALL = 'SELECT * FROM sale ORDER BY id';
    const SEARCH_BY_USERID = 'SELECT * FROM products p JOIN sale s WHERE s.id_user_seller = ?';

    const INSERT = 'INSERT INTO sale(id_product, id_user_seller) VALUES (?, ?)';

    const SALE_TRUE = 'UPDATE products SET sale = ? where id = ?';

    private $id;
    private $product;
    private $seller;

    public function __construct($product, $seller, $id = null) {
        $this->id = $id;
        $this->setProduct($product);
        $this->setSeller($seller);
    }

    private function setProduct($product) {
        $this->product = $product;
    }

    public function getProduct() {
        return $this->product;
    }

    private function setSeller($seller) {
        $this->seller = $seller;
    }

    public function getSeller() {
        return $this->seller;
    }

    public function saveSale() {
        $this->insert();
    }

    private function insert() {
        DW3BancoDeDados::getPdo()->beginTransaction();

        $command = DW3BancoDeDados::prepare(self::INSERT);
        $command->bindValue(1, $this->product, PDO::PARAM_STR);
        $command->bindValue(2, $this->seller, PDO::PARAM_STR);
        $command->execute();

        $this->id = DW3BancoDeDados::getPdo()->lastInsertId();

        $this->saleTrue(true);

        DW3BancoDeDados::getPdo()->commit();
    }

    private static function searchAll() {
        $registers = DW3BancoDeDados::query(self::SEARCH_ALL);
        $sales = [];

        foreach ($registers as $register)
            $sales[] = new Product($register['id_product'], $register['id_user_seller'], $register['id']);

        return $sales;
    }

    public static function searchSalesByUserId($user) {
        $command= DW3BancoDeDados::prepare(self::SEARCH_BY_USERID);
        $command->bindValue(1, $user, PDO::PARAM_INT);
        $command->execute();

        $registers =  $command->fetchAll();
        
        $sales = [];

        foreach ($registers as $register) {
            $sales[] = new Product($register['name'], $register['price'], $register['description'], $register['id_category'], $register['id_user'], $register['id']);
        }

        return $sales;
    }

    public function saleTrue($status) {
        $command = DW3BancoDeDados::prepare(self::SALE_TRUE);
        $command->bindValue(1, $status, PDO::PARAM_BOOL);
        $command->bindValue(2, $this->product, PDO::PARAM_INT);
        $command->execute();
    }
}
?>