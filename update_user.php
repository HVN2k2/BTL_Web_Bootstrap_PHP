<?php
include 'connect.php';

$user_id = $_POST['user_id'];
$ten = $_POST['ten'];
$ngay_sinh = $_POST['ngay_sinh'];
$gioi_tinh = $_POST['gioi_tinh'];
$so_dien_thoai = $_POST['so_dien_thoai'];
$email = $_POST['email'];
$dia_chi = $_POST['dia_chi'];
$id_chuc_vu = $_POST['id_chuc_vu'];

$sql = "UPDATE nhan_vien_tbl SET 
    ten='$ten', 
    ngay_sinh='$ngay_sinh', 
    gioi_tinh='$gioi_tinh', 
    so_dien_thoai='$so_dien_thoai', 
    email='$email', 
    dia_chi='$dia_chi', 
    id_chuc_vu='$id_chuc_vu' 
WHERE id_nv='$user_id'";

if ($conn->query($sql) === TRUE) {
    echo "Cập nhật thành công!";
    header("Location: details.php?id=$user_id");
    exit();
} else {
    echo "Cập nhật thất bại! " . $conn->error;
}

$conn->close();
?>
