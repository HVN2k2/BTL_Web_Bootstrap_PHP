<?php
include 'connect.php';

$nhanvien_sql = "SELECT id_nhanvien, ten FROM nhanvien";
$nhanvien_result = $conn->query($nhanvien_sql);
$nhanvien_arr = array();
if ($nhanvien_result->num_rows > 0) {
    while ($nhanvien_row = $nhanvien_result->fetch_assoc()) {
        $nhanvien_arr[$nhanvien_row['id_nhanvien']] = $nhanvien_row['ten'];
    }
}
?>
