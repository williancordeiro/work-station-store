<?php
namespace Controller;

use \Model\Product;
use \Model\Category;
use \Framework\DW3Sessao;

class StoreController extends Controller {

    public function index() {

        $userId = DW3Sessao::get('user');

        $this->verifyLogin();
        $this->visao('store/store.php', [
            'user' => $this->getUser(),
            'products' => Product::searchAll(),
            'available' => Product::searchUserId($userId),
            'categorys' => Category::searchAll()
        ], 'store.php');
    }

}
?>