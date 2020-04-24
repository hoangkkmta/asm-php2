<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController{

    public function showCategory(){
        $category = Category::all();
        // header('location: /');
        // die;
        include_once './app/views/showcategory.php';
    }
    public function addForm(){
        include_once './app/views/addcategory.php';
    }

    

}

?>