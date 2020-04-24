<?php
namespace App\Controllers;
class ProductController{
   

    public function addForm(){
        // $products = Product::all();
        // header('location: /');
        // die;
        include_once './app/views/addproduct.php';
    }


}

?>