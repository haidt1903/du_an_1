<?php
require_once "../../dao/pdo.php";
require_once "../../dao/loai.php";
require "../../global.php";
check_login();


// chech_login();

extract($_REQUEST);
if (exist_param("btn_list")) {

    //show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_insert")) {
    #lấy dữ liệu từ form
    $ten_loai=$_POST['ten_loai'];
    
    


    //insert vào db
    loai_insert($ten_loai);

    //show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "list.php";

} else if (exist_param("btn_edit")) {
    #lấy dữ liệu từ form
    $ma_loai = $_REQUEST['ma_loai'];
    $loai_info = loai_select_by_id($ma_loai);
    extract($loai_info);

    //show dữ liệu
    $items = loai_select_all();
    $VIEW_NAME = "edit.php";
} else if (exist_param("btn_delete")) {

    $ma_loai = $_REQUEST['ma_loai'];
    loai_delete($ma_loai);
    //hiển thị danh sách

    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_delete_all")) {
    try {
        $arr_ma_loai = $_POST['ma_loai'];
        loai_delete($arr_ma_loai);
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else if (exist_param("btn_update")) {

    $ma_loai = $_POST['ma_loai'];
    $ten_loai = $_POST['ten_loai'];
    loai_update($ma_loai, $ten_loai);
    $up_hinh = save_file("up_hinh", "$UPLOAD_URL/products/");
    $hinh_anh = strlen($up_hinh) > 0 ? $up_hinh : $hinh_anh;
    //hiển thị danh sách

    $items = loai_select_all();
    $VIEW_NAME = "list.php";
} else {
    $VIEW_NAME = "add.php";
}
require "../layout.php";