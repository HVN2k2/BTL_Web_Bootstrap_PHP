<?php
session_start();
include "connect.php";

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["ten"];
    $ngay_sinh = $_POST["ngay_sinh"];
    $dia_chi = $_POST["diachi"];
    $vitri = $_POST["vitri"];
    $email = $_POST["email"];
    $gioitinh = $_POST["gioitinh"];
    $trangthai = "0";
    $sdt = $_POST["sdt"];

    $sql = "INSERT INTO candidate_tbl (ten, ngaysinh, quequan, vitri, email, gioitinh, trangthai, sdt) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssssssss", $name, $ngay_sinh, $dia_chi, $vitri, $email, $gioitinh, $trangthai, $sdt);
        if ($stmt->execute()) {
            $success = "Đăng ký thành công!";
        } else {
            $error = "Lỗi: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $error = "Lỗi: " . $conn->error;
    }
}

mysqli_close($conn);

if ($error != '') {
    echo "<p style='color:red;'>$error</p>";
}
if ($success != '') {
    echo "<p style='color:green;'>$success</p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>QLNV</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>


        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="home.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">HVN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Trang chính</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Tuyển dụng</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="information.php" class="dropdown-item">Thông tin ứng tuyển</a>
                            <a href="aplication.php" class="dropdown-item">Đăng kí ứng tuyển</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="content">
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="home.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Tìm kiếm">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Tin nhắn</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/users.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Tạo tài khoản thành công!</h6>
                                        <small>1 phút trước</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Xem tất cả</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Thông báo</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Đăng nhập thành công!</h6>
                                <small>1 phút trước</small>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/users.png" alt="" style="width: 40px; height: 40px;">
                            <?php if(isset($_SESSION['username'])): ?>
                                <span class="d-none d-lg-inline-flex"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                            <?php endif; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Trang cá nhân</a>
                            <a href="#" class="dropdown-item">Cài đặt</a>
                            <a href="login.php" class="dropdown-item">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Thông tin ứng viên</h6>
                            <?php
                                if ($error != '') {
                                    echo "<p style='color:red;'>$error</p>";
                                }
                                if ($success != '') {
                                    echo "<p style='color:green;'>$success</p>";
                                }
                            ?>
                            <form action="aplication.php" method="post" id="registrationForm">
                                <div class="input-group mb-3">
                                    <span class="input-group-text span-size">Ứng viên</span>
                                    <input type="text" class="form-control" placeholder="Họ và tên" name="ten" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text span-size">Sđt</span>
                                    <input type="text" class="form-control" placeholder="Sđt" name="sdt" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text span-size">Ngày sinh</span>
                                    <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text span-size">Quê quán</span>
                                    <input type="text" class="form-control" placeholder="Quê quán" name="diachi" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text span-size">Vị trí ứng tuyển</span>
                                    <select class="form-select" name="vitri" required>
                                        <option value="Project Manager">Project Manager</option>
                                        <option value="Frontend Developer">Frontend Developer</option>
                                        <option value="Backend Developer">Backend Developer</option>
                                        <option value="Tester">Tester</option>
                                        <option value="Human Resources">Human Resources</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="Business Analyst">Business Analyst</option>
                                        <option value="Marketing">Marketing</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text span-size">Email</span>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text span-size">Giới tính</span>
                                    <select class="form-select" name="gioitinh" required>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="submit" class="btn btn-primary" value="Đăng ký">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    $('#registrationForm').on('submit', function(event){
                        event.preventDefault(); // Ngăn chặn form submit mặc định
                        $.ajax({
                            url: 'aplication.php',
                            method: 'POST',
                            data: $(this).serialize(),
                            success: function(data){
                                $('#message').html(data); // Hiển thị phản hồi từ PHP
                            }
                        });
                    });
                });
            </script>
            <footer class="footer mt-auto py-3 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Công ty phần mềm HVN</h5>
                            <p>Đây là một công ty phần mềm tiên phong trong việc phát triển các giải pháp công nghệ sáng tạo.</p>
                        </div>
                        <div class="col-md-3">
                            <h5>Liên kết nhanh</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="link-secondary" href="index.php">Trang chủ</a></li>
                                <li><a class="link-secondary" href="#">Giới thiệu</a></li>
                                <li><a class="link-secondary" href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5>Liên hệ</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="link-secondary" href="#">Địa chỉ: Hà Đông, Hà Nội</a></li>
                                <li><a class="link-secondary" href="#">Email: honhuan2k2@gmail.com</a></li>
                                <li><a class="link-secondary" href="#">Điện thoại: 0396709083</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>