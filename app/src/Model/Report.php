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
            $sqlWhere .= ' AND p.description = ?';
        }
    }
}
?>