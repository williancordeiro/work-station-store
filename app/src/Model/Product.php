<?php
namespace Model;

use \PDO;
use \Framework\DW3BancoDeDados;
use \Framework\DW3ImagemUpload;

class Product extends Model {
    const SEARCH_ALL = 'SELECT * FROM products ORDER BY name';
    const SEARCH_ID = 'SELECT * FROM products WHERE id = ?';
    const SEARCH_NAME = 'SELECT * FROM products WHERE name = ?';
    const SEARCH_USERID = 'SELECT * FROM products WHERE id_user = ?';

    const SEARCH_CATEGORY = 'SELECT name FROM product_type WHERE id = ?';

    const INSERT = 'INSERT INTO products(name, price, description, id_category, id_user, sale) VALUES (?, ?, ?, ?, ?, ?)';

    private $name;
    private $price;
    private $description;
    private $category;
    private $user;
    private $sale;
    private $id;
    private $image;

    public function __construct($name, $price, $description, $category, $user, $sale, $id = null, $image = null) {
        $this->setName($name);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setCategory($category);
        $this->setUser($user);
        $this->setSale($sale);
        $this->id = $id;
        $this->image = $image;
    }

    public function getId() {
        return $this->id;
    }

    private function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        $imageName = "{$this->id}.png";

        if (!DW3ImagemUpload::existe($imageName)) {
            $imageName = 'default.png';
        }

        return $imageName;
    }

    private function setPrice($price) {
        $this->price = $price;
    }

    public function getPrice() {
        return $this->price;
    }

    private function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    private function setCategory($category) {
        $this->category = $category;
    }

    public function getCategory() {
        $categoryId = $this->category;
        $command = DW3BancoDeDados::prepare(self::SEARCH_CATEGORY);
        $command->bindValue(1, $categoryId, PDO::PARAM_INT);
        $command->execute();
        $register = $command->fetch();
        
        if ($register) {
            return $register['name'];
        }
        
        return null;
    }

    private function setUser($user) {
        $this->user = $user;
    }

    public function getUser() {
        return $this->user;
    }

    private function setSale($sale) {
        $this->sale = $sale;
    }

    public function getSale() {
        return $this->sale;
    }

    public function save() {
        $this->insert();
        $this->saveImage();
    }

    private function insert() {
        DW3BancoDeDados::getPdo()->beginTransaction();

        $command = DW3BancoDeDados::prepare(self::INSERT);
        $command->bindValue(1, $this->name, PDO::PARAM_STR);
        $command->bindValue(2, $this->price, PDO::PARAM_STR);
        $command->bindValue(3, $this->description, PDO::PARAM_STR);
        $command->bindValue(4, $this->category, PDO::PARAM_STR);
        $command->bindValue(5, $this->user, PDO::PARAM_STR);
        $command->bindValue(6, $this->sale, PDO::PARAM_STR);
        $command->execute();

        $this->id = DW3BancoDeDados::getPdo()->lastInsertId();

        DW3BancoDeDados::getPdo()->commit();
    }

    private function saveImage() {

        if (DW3ImagemUpload::isValida($this->image)) {
            $completeName = PASTA_PUBLICO . "imgs/{$this->id}.png";
            DW3ImagemUpload::salvar($this->image, $completeName);
        }
    }


    public static function searchAll() {
        $registers = DW3BancoDeDados::query(self::SEARCH_ALL);
        $products = [];

        foreach ($registers as $register)
            $products[] = new Product($register['name'], $register['price'], $register['description'], $register['id_category'], $register['id_user'], $register['sale'], $register['id']);

        return $products;
    }

    public static function searchName($name) {
        $command = DW3BancoDeDados::prepare(self::SEARCH_NAME);
        $command->bindValue(1, $name, PDO::PARAM_STR);
        $command->execute();
        $register = $command->fetch();
        $products = null;

        if ($register) {
            $products = new Product($register['name'], $register['price'], $register['description'], $register['id_category'], $register['id_user'], $register['id']);
        }

        return $products;
    }

    public static function searchUserId($user) {
        $command = DW3BancoDeDados::prepare(self::SEARCH_USERID);
        $command->bindValue(1, $user, PDO::PARAM_INT);
        $command->execute();
        $registers = $command->fetchAll();
        $products = [];

        foreach ($registers as $register) {
            $products[] = new Product($register['name'], $register['price'], $register['description'], $register['id_category'], $register['id_user'], $register['id']);
        }

        return $products;
    }
}
?>