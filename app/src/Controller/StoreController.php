<?php
namespace Controller;

class StoreController extends Controller {

    public function index() {

        $this->verifyLogin();
        $this->visao('store/store.php');
    }

    public function new() {
        
        $this->visao('sale/new.php');
    }
}
?>