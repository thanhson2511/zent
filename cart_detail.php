<?php
/**
 * Created by PhpStorm.
 * User: conghoan
 * Date: 3/20/20
 * Time: 08:54
 */

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h2>cart</h2>
    <div class="container">
        <a class="btn btn-success" href="cart.php" title="">Quay la trang sp</a>

        <table class="table">
            <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá tiền</th>
                <th width="100px">Số lượng</th>
                <th>Hình ảnh</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $sum = 0; ?>
            <?php foreach( $_SESSION['products'] as $key => $product )  {
                // Tính tổng số tiền của giỏ hàng
                $sum += $product['SoLuong']*$product['GiaBan'];
                ?>
                <tr>
                    <td><?php echo $product['MaSP'] ?></td>
                    <td><?php echo $product['TenSP'] ?></td>
                    <td><?php echo number_format($product['GiaBan'] )?>VND</td>
                    <td>
                        <?php echo $product['SoLuong'] ?>
                    </td>

                    <td><img style="width: 20%;height: 10%;" src="<?php echo $product['Anh'] ?>" ></td>
                    <td><?php echo $product['time'] ?></td>

                    <td>
                        <a class="btn btn-danger" href="cart_delete.php?msp=<?php echo $product['MaSP'] ?>" title="">xoa gio hang</a>
                    </td>
                </tr>



            <?php } ?>

            <tr>
                <td colspan="2" style="color:red"> Tong tien</td>
                <td colspan="5" ><?php echo number_format($sum); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>