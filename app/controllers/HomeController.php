<?php
namespace App\Controllers;
use App\Models\Product;
class HomeController extends BaseController{
    public function index(){
        $products = Product::all();

        $this->render('homepage.index', ['listItem' => $products]); //ten bien ton tai o file view
    }

   
    

}

?>