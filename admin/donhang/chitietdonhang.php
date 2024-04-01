<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Cập nhật đơn hàng</div>
            <div class="card-body">
                <form action="index.php?btn_update" method="POST" id="edit_donhang">
                    <div class="mb-3">
                        <label for="ma_loai" class="form-label">Mã đơn hàng</label>
                        <input type="text" name="order_id" class="form-control" disabled value="<?= $order_id ?>">
                    </div>
                    <div class="mb-3">
                            <select name="trang_thai" id="">
                            <?php
                                    $options='';
                                    foreach ($trang_thai as $key =>$value) {
                                        // echo '<pre>';
                                        // print_r($value);
                                        $options .='<option '.($value["id"] == $id_trang_thai ? 'selected': '').' value="'.$value["id"].'">'.$value["trang_thai"].'</option>';
                                        // echo htmlspecialchars($options);
                                    }
                                    echo $options;
                                ?>
                            </select>
                    </div>
                    <div class="mb-3 text-center">
                        <input type="hidden" name="order_id" value="<?= $order_id ?>">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="btn_update" value="Cập nhật" class="btn btn-primary mr-3">
                        <a href="index.php?btn_list"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
