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
        <h3>Quản lý sản phẩm</h3>
        <table class="table table-stripped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
            </thead>
            <tbody>
                <?php $__currentLoopData = $listItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($pro->id); ?></td>
                        <td><?php echo e($pro->name); ?></td>
                        <td><?php echo e($pro->price); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    
    
</body>
</html><?php /**PATH C:\xampp\htdocs\php\asm-php2\app\views/homepage/index.blade.php ENDPATH**/ ?>