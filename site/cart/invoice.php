<?php

include "connect.php";


if (isset($_POST['btn_thanh_toan'])) {


    $ho_ten = $_POST['ho_ten'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $dia_chi = $_POST['dia_chi'];
    $phuong_thuc_tt = $_POST['phuong_thuc_tt'];

    $sql = "INSERT INTO `thong_tin_don_hang`(`ho_ten`, `email`, `sdt`, `dia_chi`, `phuong_thuc_tt`) VALUES 
    ('$ho_ten','$email','$sdt','$dia_chi','$phuong_thuc_tt')";
     $result = $conn->query($sql);    
    if (!empty($ho_ten) && !empty($email) && !empty($sdt) && !empty($dia_chi)) {

        

    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>



    <!DOCTYPE html>
    <html>

    <head>
        <title>Xác Nhận Hóa Đơn</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            .container {
                height: 200px;

            }
        </style>
    </head>

    <body>
        <div class="container">
            <h2 class="text-center">Xác Nhận Hóa Đơn</h2>
            <form class="col-6 m-auto">
                <div class="form-group">
                    <label for="ho_ten">Họ Tên:</label>
                    <span id="ho_ten" class="form-control-text"><?= $ho_ten ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <span id="email" class="form-control-text"><?= $email ?></span>
                </div>
                <div class="form-group">
                    <label for="sdt">Số Điện Thoại:</label>
                    <span id="tel" class="form-control-text"><?= $sdt ?></span>


                </div>
               
                <div class="form-group">
                    <label for="phuong_thuc_tt">Phương Thức Thanh Toán:</label>
                    <span  id="phuong_thuc_tt" class="form-control-text"><?= $phuong_thuc_tt ?></span>
                </div>
                <div class="form-group">
                    <label for="dia_chi">Địa chỉ :</label>

                    <span id="dia_chi" class="form-control-text" > <?= $dia_chi ?></span>
                </div>
            </form>

            <br>

            <div class="container mt-3">
                <h2>Chúng tôi sẽ gửi đến cho bạn mã QR hoặc STK ngân hàng nếu bạn không thanh toán bằng tiền mặt </h2>
                <div class="mt-4 p-5 bg-success text-white rounded">
        <h1>Đơn hàng của bạn đã được xác nhận</h1>
        <p>Cảm ơn bạn đã truy cập trang web của chúng tôi</p>
</div>
                <br>
                <a href="http://localhost:81/duan1/site/trang-chinh/index.php" class="btn btn-primary">Về trang chủ</a>
            </div>

        </div>
    </body>

    </html>