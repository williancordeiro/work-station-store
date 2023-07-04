<?php
namespace Controller;

use \Model\Product;
use \Model\Category;
use \Model\Sale;
use \Model\User;
use \Framework\DW3Sessao;

class ReportController extends Controller {

    public function purchases() {
        $userId = DW3Sessao::get('user');

        $this->verifyLogin();
        $this->visao('report/purchases.php', [
            'user' => $this->getUser(),
            'shopping' => Sale::searchSalesByUserId($userId),
            'categorys' => Category::searchAll()
        ]);
    }

    public function sales() {
        $userId = DW3Sessao::get('user');

        $this->verifyLogin();
        $this->visao('report/sales.php', [
            'user' => $this->getUser(),
            'products' => Product::searchUserId($userId),
            'categorys' => Category::searchAll()
        ]);
    }

}
?>