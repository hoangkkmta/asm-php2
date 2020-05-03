<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController{

    public function showCategory(){
        $category = Category::all();
        $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
        $this->render('categories.category', ['listItem' => $category,'errMsg' => $msg]); //ten bien ton tai o file view
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
    public function editForm(){
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;
        if(!$removeId){
            header("location: ./?msg=không đủ thông tin để xóa");
            die;
        }
        // kiểm tra xem id có thật hay không
        $model = Category::find($removeId);
        
        if(!$model){
            $msg = "id không tồn tại!";
            header("location: ./?msg=$msg");
            die;
        }
        
        $cates = Category::all();
        $this->render('categories.edit-form', [
                                                'cates' => $cates,
                                                'model' => $model
                                            ]);

    }

    public function saveEdit(){
        $id = $_GET['id'];
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if(!$id){
            header("location: ./?msg=không đủ thông tin để xóa");
            die;
        }
        // kiểm tra xem id có thật hay không
        $model = Category::find($id);
        
        if(!$model){
            $msg = "id không tồn tại!";
            header("location: ./?msg=$msg");
            die;
        }
        $requestData = $_POST;
        $model->fill($requestData);
        $model->save();
        header("location: ./categories?msg=$msg");

        
    }
    public function removes(){
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;
        if(!$removeId){
            header("location: ./?msg=không đủ thông tin để xóa");
            die;
        }
        // kiểm tra xem id có thật hay không
        $model = Category::find($removeId);
        
        if(!$model){
            $msg = "id không tồn tại!";
        }else{
            Category::destroy($removeId);
            $msg = "Xóa sản phẩm thành công";
        }

        header("location: ./categories?msg=$msg");
        die;
    }

}

?>