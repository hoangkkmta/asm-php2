<?php
namespace App\Controllers;
use App\Models\Product;
class HomeController extends BaseController{
    public function index(){
        $products = Product::all();
        $msg = isset($_GET['msg']) ? $_GET['msg'] : null;

        $this->render('homepage.index', ['listItem' => $products,
                                         'errMsg' => $msg
        
                                         ]); //ten bien ton tai o file view
    }

   
    

}

?>