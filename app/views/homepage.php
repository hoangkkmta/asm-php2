<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
  <h1>Danh sách sản phẩm</h1>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Cate_id</th>
            <th>Price</th>
            <th>Short_desc</th>
            <th>Detail</th>
            <th>Star</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Views</th>
        </thead>
        <tbody>
            <?php foreach($products as $pro):?>
                <tr>
                    <td><?= $pro['id']?></td>
                    <td><?= $pro['name']?></td>
                    <td><img src="<?= $pro['image']?>" alt="" width="90px"></td>
                    <td><?= $pro['cate_id']?></td>
                    <td><?= $pro['price']?></td>
                    <td><?= $pro['short_desc']?></td>
                    <td><?= $pro['detail']?></td>
                    <td><?= $pro['star']?></td>
                    <td><?= $pro['created_at']?></td>
                    <td><?= $pro['updated_at']?></td>
                    <td><?= $pro['views']?></td>
                   
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    
</body>
</html>