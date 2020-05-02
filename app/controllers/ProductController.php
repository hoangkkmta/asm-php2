<?php
namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
class ProductController extends BaseController{
   
   
    public function addForm(){
        // lấy dữ liệu từ bảng danh mục
        $cates = Category::all();
        $this->render('product.add-form', ['cates' => $cates]);
    }

    public function saveadd(){
        $requestData = $_POST;
        $imgFile = $_FILES['image'];

        $model = new Product();

        $model->fill($requestData);

        $filename = "";
        // nếu có ảnh up lên thì lưu ảnh
        if($imgFile['size'] > 0){
            $filename = uniqid() . '-' . $imgFile['name'];
            move_uploaded_file($imgFile['tmp_name'], './public/uploads/' . $filename);
            $filename = 'public/uploads/' . $filename;
        }
        $model->image = $filename;
        $model->save();
        header('location: ./');
    }


}

?>