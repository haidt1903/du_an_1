<?php
    $localhost = 'localhost';
    $databaseName = 'duan1';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$localhost;dbname=$databaseName", $username, $password);
    if ($conn) {
        // echo 'Kết nối thành công';
    }
    else {
        echo 'thất bại';
    }
?>