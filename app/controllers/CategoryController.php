<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController{

    public function showCategory(){
        $category = Category::all();
        $this->render('categories.category', ['listItem' => $category]); //ten bien ton tai o file view
    }
    
    public function addForm(){       
       
        $this->render('categories.add-form', []);
    }
    
    public function saveadd(){
        $requestData = $_POST;
        $model = new Category();
        $model->fill($requestData);      
        $model->save();
        header('location: ./categories');
    }
    

}

?>