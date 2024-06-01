<?php
include 'connect.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = intval($_GET['id']);
    $new_status = intval($_GET['status']);
    
    $sql = "UPDATE nghi_phep SET trang_thai = ? WHERE id_nhanvien = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $new_status, $id);
    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "Lỗi: " . $conn->error;
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo "Dữ liệu không hợp lệ.";
}
?>
