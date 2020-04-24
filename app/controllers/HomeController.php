<?php
namespace App\Controllers;
use App\Models\Product;
class HomeController{

    public function showDetail(){
        $products = Product::all();
        // header('location: /');
        // die;
        include_once './app/views/homepage.php';
    }

    

}

?>