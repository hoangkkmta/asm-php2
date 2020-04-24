<?php
namespace App\Models;
use PDO;
class BaseModel{

    function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=polymvc;charset=utf8", 
                            "root", "");
    }

    static function all(){
        $model = new static;
        // câu sql
        $query = "select * from " . $model->table;
        // thực thi câu lệnh sql
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        // lấy toàn bộ dữ liệu trả về từ câu lệnh
        return $stmt->fetchAll();
    }

   
   
}


?>