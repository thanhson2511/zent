<?php require "products.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>  

<div class="container">
    <h2>Products table</h2>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach( $products as $key => $product )  { ?>
                <tr>
                    <td><?php echo $product['MaSP'] ?></td>
                    <td><?php echo $product['TenSP'] ?></td>
                    <td><?php echo number_format($product['GiaBan']) ?></td>
                    <td><?php echo $product['SoLuong'] ?></td>
                    <td><img style="width: 20%;height: 10%;" src="<?php echo $product['Anh'] ?>" ></td>

                    <td>
                        <a href="addToCart.php?msp=<?php echo $product['MaSP'] ?>" title=""><button type="button" class="btn btn-primary">Add to card</button></a>
                    </td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
        <!-- <a href="cart_detail.php" title=""><button type="button" class="btn btn-info">thanh toan</button></a> -->
    </div>

</div>

</body>
</html>