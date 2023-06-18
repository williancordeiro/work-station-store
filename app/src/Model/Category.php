<?php
namespace Model;

use \PDO;
use \Framework\DW3BancoDeDados;
use \Framework\DW3ImagemUpload;

class Category extends Model {

    const SEARCH_ALL = 'SELECT * FROM product_type ORDER BY id';
    const SEARCH_ID = 'SELECT * FROM product_type WHERE id = ?';
    const SEARCH_NAME = 'SELECT * FROM product_type WHERE name = ?';

    private $id;
    private $name;

    public function __construct($name, $id = null) {
        $this->id = $id;
        $this->setName($name);
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    private function setName($name) {
        $this->name = $name;
    }

    public static function searchAll() {
        $registers = DW3BancoDeDados::query(self::SEARCH_ALL);
        $category = [];

        foreach ($registers as $register)
            $category[] = new Category($register['name'], $register['id']);

        return $category;
    }

}
?>