<?php
session_start();
include "connect.php"; // Kết nối cơ sở dữ liệu

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Truy vấn để lấy thông tin tài khoản và loại người dùng
    $sql = "SELECT username, user_password, user_type FROM login_tbl WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($username, $user_password, $user_type);
        $stmt->fetch();
        // So sánh mật khẩu
        if ($user_password == $pass) {
            // Đăng nhập thành công
            $_SESSION['username'] = $user;
            $success = "Đăng nhập thành công!";

            // Kiểm tra loại người dùng và điều hướng
            if ($user_type == 1) {
                header("Location: home.php");
                exit();
            } else {
                header("Location: home_user.php");
                exit();
            }
        } else {
            // Sai mật khẩu
            $error = "Sai tên tài khoản hoặc mật khẩu.";
        }
    } else {
        // Không tìm thấy tài khoản
        $error = "Sai tên tài khoản hoặc mật khẩu.";
    }

    $stmt->close();
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function redirectToHome() {
            setTimeout(function() {
                window.location.href = 'home.php';
            }, 500);
        }
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3>Đăng nhập</h3>
                    </div>
                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <?php if ($success): ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                        <script>
                            redirectToHome();
                        </script>
                    <?php endif; ?>
                    <form action="login.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Tên tài khoản" required>
                            <label for="floatingInput">Tài khoản</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Mật khẩu" required>
                            <label for="floatingPassword">Mật khẩu</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="#">Quên mật khẩu</a>
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Đăng nhập</button>
                        <p class="text-center mb-0">Không có tài khoản? <a href="signup.php">Đăng kí</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
