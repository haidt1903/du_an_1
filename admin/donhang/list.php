<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Xshop-Dự án </title>
  <link rel="icon" href="<?= $CONTENT_URL ?>/images/logo.png" type="image/gif" sizes="16x16">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css" type="text/css">
  <!-- Font awesome -->
  <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/all.min.css" type="text/css">
  <!-- Slick slider -->
  <!-- <link rel="stylesheet" href="css/slick.css" type="text/css">
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
    <script src="js/slick.min.js"></script> -->

  <!-- Custom -->
  <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/dashboard.css" type="text/css">
</head>

<body>
  <div class="page-title">
    <h4 class="mt-5 font-weight-bold text-center">Chi Tiết Đơn Hàng</h4>
  </div>
  <div class="container mt-3">
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>Mã KH</th>
          <th>Họ Tên</th>
          <th>Số điện thoại</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>PTTT</th>
          <th>Trạng thái</th>
          <th>Sửa</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($list_don_hang as $don_hang) {
          extract($don_hang);
          $detail = "index.php?btn_detail&order_id=" . $order_id;
        ?>
          <tr>


            <td><?= $order_id ?></td>
            <td><?= $ho_ten ?></td>
            <td><?= $sdt ?></td>
            <td><?= $email ?></td>
            <td><?= $dia_chi ?></td>
            <td><?= $phuong_thuc_tt ?></td>
            <td><?= $trang_thai?></td>
            <td class="text-end">
              <a href="<?= $detail ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
            </td>
            <td></td>

          </tr>
        <?php } ?>
      </tbody>
    </table>