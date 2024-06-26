<?php
if (empty($_SESSION['cart'])) {
    echo "Bạn đang không có sản phẩm nào trong giỏ hàng hãy thêm sản phẩm để có thể mua sắm";
} else {
    $totalAll = 0;
    foreach ($_SESSION['cart'] as $index => $item) {
        $totalOne = $item['don_gia'] * $item['sl'];
        $totalAll += $totalOne;
    }
?>
    <h5 class="alert-info mb-3 pt-3 pb-3 pl-sm-4 shadow-sm text-center" style="margin-top: 5rem; margin-bottom: 0rem">Giỏ hàng</h5>

    <div class="container">

        <?php if (isset($_SESSION['cart'])) { ?>
            <div class="row m-1 pb-5">
                <table class="table table-responsive-md">
                    <thead class="thead text-center">
                        <tr>
                            <th>Mã SP</th>
                            <th>Tên SP</th>
                            <th>Đơn giá</th>
                            <th style="width:6rem">Số lượng</th>
                            <th>Thành tiền</th>
                            <th></th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" id="giohang">

                        <?php foreach ($_SESSION['cart'] as $index => $item) : ?>
                            <tr>
                                <td><?= $index ?></td>
                                <td><?= $item['ten_hh'] ?></td>
                                <td><span><?= number_format($item['don_gia'], 0, ".") ?></span> đ <input type="hidden" class="don_gia_an" name="don_gia" value="<?= $item['don_gia'] ?>"></td>
                                <td class="pt-1 m-auto">
                                    <form action="delete-cart.php?update_sl" method="post">
                                        <input type="number" class="form-control sl" name="update_sl" onclick="so_luong()" value="<?= $item['sl'] ?>" min="1" max="10">
                                        <input type="hidden" class="form-control" name="ma_hh" value="<?= $index ?>">
                                    </form>
                                </td>
                                <td><span><?= number_format($totalOne, 0, ".") ?></span> đ <input type="hidden" class="don_gia_an" name="don_gia" value="<?= $item['don_gia'] ?>"></td>
                                <td></td>
                                <td class="pt-1 m-auto">
                                    <a onclick="return confirm('Bạn chắc chắn muốn xóa k??');" href="<?= $SITE_URL . "/cart/delete-cart.php?act=delete&id=" . $index ?>" class="btn btn-outline-danger"> <i class="fas fa-trash-alt "></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot id="tongdonhang">
                        <tr class="text-center">
                            <th colspan="5">Tổng thành tiền: </th>
                            <td class="  text-danger font-weight-bold"><span id="tong_thanh_tien"><?= number_format($totalAll, 0, ".") ?></span></td>
                        </tr>
                        <tr class="text-right">
                            <th colspan="7">
                                <a href="<?= $SITE_URL . "/cart/list-cart.php?form_invoice" ?>" class="btn btn-success">Thanh toán</a>
                                <a onclick="return confirm('Bạn chắc chắn muốn xóa tất cả k??');" href="<?= $SITE_URL . "/cart/delete-cart.php?act=deleteAll" ?>" class="btn btn-danger">Xóa tất cả</a>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        <?php } else { ?>
            <div class="row  m-1 pb-5">
                <h6 class="col-12">Không tồn tại sản phẩm nào trong giỏ hàng </h6>
                <a class="btn btn-outline-dark col-12" href="<?= $ROOT_URL ?>"> Về trang chủ</a>
            </div>
        <?php } ?>
    </div>
<?php } ?>
