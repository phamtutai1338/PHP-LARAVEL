<?php
const DB_HOST ='localhost';
const DB_USERNAME = 'root';
const DB_PASWORD = '';
const DB_NAME ='quan_ly';
const DB_PORT = 3306;

$connection = mysqli_connect(DB_HOST, DB_USERNAME,DB_PASWORD,DB_NAME,DB_PORT);
if (!$connection){
    die('lỗi kết nối :'. mysqli_connect());
}
//echo 'kết nối thành công';

?>