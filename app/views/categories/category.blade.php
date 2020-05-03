<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <nav class="nav">
            <a class="nav-link" href="./">Quản lý sản phẩm</a>
           
            <a class="nav-link" href="./add-product">Thêm sản phẩm</a>
            <a class="nav-link" href="./categories">Quản lý danh mục</a>
            <a class="nav-link" href="./add-categories">Thêm danh mục</a>
        </nav>
        <h3>Quản lý danh mục</h3>
        <p class="text-danger">{{$errMsg}}</p>
        <table class="table table-stripped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>
                    <a href="./add-categories" class="btn btn-success">Add new</a>
                </th>
                
            </thead>
            <tbody>
                @foreach($listItem as $cate)
                    <tr>
                        <td>{{$cate->id}}</td>
                        <td>{{$cate->cate_name}}</td>
                        <td>
                            <a href="./edit-categories?id={{$cate->id}}" class="btn btn-primary">Edit</a>
                            <a href="./remove-categories?id={{$cate->id}}" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    
</body>
</html>