<?php
require_once "../../global.php";
require_once "../../dao/don-hang.php";

//--------------------------------//

check_login();
extract($_REQUEST);

if (exist_param("chart")) {
    $VIEW_NAME = "chart.php";
} elseif (exist_param("btn_detail")){
    $id = $_REQUEST['order_id'];
    $trang_thai = trang_thai();
    // $list_don_hang_one =don_hang_one($order_id);
    // extract($list_don_hang_one);
    $VIEW_NAME = "chitietdonhang.php";
}
elseif(exist_param('btn_update')){
    $id = $_POST['order_id'];
    $trang_thai = $_POST['trang_thai'];
    update_don_hang($id,$trang_thai);
    $list_don_hang = list_don_hang();
    $VIEW_NAME ="list.php";
}
else{
    $list_don_hang = list_don_hang();
    $VIEW_NAME = "list.php";
}

require "../layout.php";
