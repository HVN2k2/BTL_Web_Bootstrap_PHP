<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    $sql = "UPDATE login_tbl SET user_password = ? WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $password, $username);

    if ($stmt->execute()) {
        echo "Cập nhật thông tin thành công.";
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    die('Phương thức yêu cầu không hợp lệ.');
}
?>
