<?php
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";

require_once './vendor/autoload.php';
require_once './commons/database-config.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
switch ($url) {
    case '/':
        $ctr = new HomeController();
         $ctr->index();
        break;
    
    case 'add-product':
        $ctr = new ProductController();
         $ctr->addForm();
        break; 

     case 'save-add-product':
        $ctr = new ProductController();
         $ctr->saveadd();
        break;

    case 'remove-product':
        $ctr = new ProductController();
        $ctr->remove();
         break; 

     case 'edit-product':
        $ctr = new ProductController();
         $ctr->editForm();
         break;
         
     case 'save-edit-product':
        $ctr = new ProductController();
        $ctr->saveEdit();
         break;
    case 'categories':
        $ctr = new CategoryController();
         $ctr->showCategory();
        break;
    

    case 'add-categories':
        $ctr = new CategoryController();
        echo $ctr->addForm();
        break;

     case 'save-add-cate':
        $ctr = new CategoryController();
        $ctr->saveadd();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}

?>