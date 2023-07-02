<?php
namespace Controller;

use \Model\Product;
use \Model\Category;
use \Model\Sale;
use \Model\User;
use \Framework\DW3Sessao;

class StoreController extends Controller {

    public function index() {

        $userId = DW3Sessao::get('user');

        $this->verifyLogin();
        $this->visao('store/store.php', [
            'user' => $this->getUser(),
            'products' => Product::searchAll(),
            'available' => Product::searchUserId($userId),
            'shopping' => Sale::searchSalesByUserId($userId),
            'categorys' => Category::searchAll()
        ], 'store.php');
    }

    public function saleComplete() {
        $productId = $_POST['productId'];
        $sellerId = DW3Sessao::get('user');

        $sale = new Sale($productId, $sellerId);
        $sale->saveSale();
        $this->redirecionar(URL_RAIZ . 'store');
    }

}
?>