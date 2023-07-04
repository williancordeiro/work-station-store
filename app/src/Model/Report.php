<?php
namespace Model;

use \PDO;
use \Framework\DW3BancoDeDados;

class Report {
    const SEARCH_ALL = 'SELECT * FROM products p WHERE TRUE';

    public static function searchRegisters($filter = []) {
        $sqlWhere = '';
        $parameters = [];

        if (array_key_exists('productDescription', $filter) && $filter['productDescription'] != '') {
            $parameters[] = $filter['productDescription'];
            $sqlWhere .= ' AND p.description LIKE %?%';
        }

        if (array_key_exists('category', $filter) && $filter['category'] != '') {
            $parameters[] = $filter['category'];
            $sqlWhere .= 'AND p.id_category = ?';
        }

        if (array_key_exists('priceMin', $filter) && $filter['priceMin'] != '') {
            $parameters[] = $filter['priceMin'];
            $sqlWhere .= 'AND p.price >= ?';
        }

        if (array_key_exists('priceMax', $filter) && $filter['priceMax'] != '') {
            $parameters[] = $filter['priceMax'];
            $sqlWhere .= 'AND p.price >= ?';
        }

        $sql = self::SEARCH_ALL . $sqlWhere . ' ORDER BY p.name';
        $command = DW3BancoDeDados::prepare($sql);

        foreach ($parameters as $i => $parameter) {
            $command->bindValue($i+1, $parameter, PDO::PARAM_STR);
        }

        $command->execute();
        $registers = $command->fetchAll();

        return $registers;
    }
}
?>