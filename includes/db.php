<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_password'] = "";
$db['db_name'] = "cms";

// Định nghĩa các hằng số từ mảng $db

if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
if (!defined('DB_USER')) define('DB_USER', 'root');
if (!defined('DB_PASSWORD')) define('DB_PASSWORD', '');
if (!defined('DB_NAME')) define('DB_NAME', 'cms');

// Kết nối đến cơ sở dữ liệu
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Kiểm tra xem kết nối có thành công hay không
if ($connection) {
    // print( "Connected successfully!");
} else {
    // In ra thông báo lỗi nếu có
    echo "Connection error: " . mysqli_connect_error();
}
