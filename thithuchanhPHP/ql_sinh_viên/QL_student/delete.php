<?php
session_start();
require_once 'connection.php';
// - lấy id từ url: crud_user/delete.php?id=1
// validate id hợp lệ : phải ồn tại tham số id và phải là số
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = 'ID k hợp lệ ';
    header('location: table-nhan-vien.php');
    exit();
}
$id = $_GET['id'];
// truy vấn CSDL để xóa user theo id: SOFT DELETE
//B1
$sql_delete = "DELETE FROM student WHERE id= $id";
//B2
$is_delete = mysqli_query($connection, $sql_delete);
if ($is_delete){
    $_SESSION['success'] = ' xóa thành công';
    header('location: table-sinh-vien.php');
    exit();
}else {
    $_SESSION['error']= ' xóa thất bại ';
    header('location: table-sinh-vien.php');
    exit();
}

?>
