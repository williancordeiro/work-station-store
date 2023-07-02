<?php 
namespace Controller;

use \Model\Product;
use \Model\Category;
use \Model\User;
use \Framework\DW3Sessao;

class ProductController extends Controller {

    public function index() {
        $this->verifyLogin();
        $this->visao('sale/new.php', [
            'user' => $this->getUser(),
            'categorys' => Category::searchAll()
        ]);
    }

    public function bin() {
        $img = array_key_exists('image', $_FILES) ? $_FILES['image'] : null;

        $name = $_POST['name'];
        $price = $_POST['price'];
        $price = str_replace(',', '.', $price);
        $description = trim($_POST['description']);
        $category = $_POST['category'];
        $userId = DW3Sessao::get('user');
        $saleProduct = 0;


        $product = new Product($name, $price, $description, $category, $userId, $saleProduct, $img);

        $product->save();


        $this->redirecionar(URL_RAIZ . 'store');
    }
    
    // public function bin() {
    //     $img = array_key_exists('image', $_FILES) ? $_FILES['image'] : null;

    //     $product = new Product($_POST['name'], $_POST['price'], trim($_POST['description']), $_POST['category'], DW3Sessao::get('user'), $img);

    //     $product->save();
    //     $this->redirecionar(URL_RAIZ . 'store');
    // }
}
?>