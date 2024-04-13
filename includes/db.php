<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_password'] = "";
$db['db_name'] = "cms";

// Định nghĩa các hằng số từ mảng $db
foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

// Kết nối đến cơ sở dữ liệu
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Kiểm tra xem kết nối có thành công hay không
if ($connection) {
    echo "Connected successfully!";
} else {
    // In ra thông báo lỗi nếu có
    echo "Connection error: " . mysqli_connect_error();
}
