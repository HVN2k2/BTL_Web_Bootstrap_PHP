
<?php

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
                    <h3 class="text-primary">QLNV</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img\admin.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Hồ Nhuận</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="home.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Trang chính</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Bảng</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="table_staff.php" class="dropdown-item">Nhân viên</a>
                            <a href="table_reason.php" class="dropdown-item">Nghỉ phép</a>
                            <a href="table_salary.php" class="dropdown-item">Lương</a>
                            <a href="table_account.php" class="dropdown-item">Tài khoản</a>
                        </div>
                    </div>
                    <a href="manager_staff.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Quản lý tài khoản</a>
                    <a href="details.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Sửa nhân viên</a>
                </div>
            </nav>
        </div>


        <div class="content">
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="home.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"></i></h2>
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
                                        <h6 class="fw-normal mb-0">Nhuận gửi cho bạn tin nhắn</h6>
                                        <small>15 phút trước</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/users.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Vương gửi cho bạn tin nhắn</h6>
                                        <small>20 phút trước</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/users.png" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Nam gửi cho bạn tin nhắn</h6>
                                        <small>10 phút trước</small>
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
                                <h6 class="fw-normal mb-0">Cập nhật hồ sơ</h6>
                                <small>10 phút trước</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Thêm mới người dùng</h6>
                                <small>10 phút trước</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Đổi mật khẩu</h6>
                                <small>10 phút trước</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Xem tất cả thông báo</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/admin.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Hồ Nhuận</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Trang cá nhân</a>
                            <a href="#" class="dropdown-item">Cài đặt</a>
                            <a href="#" class="dropdown-item">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </nav>
            <?php
            include 'connect.php';
            $user_id = $_GET['id'];
            $sql = "SELECT ten, ngay_sinh, gioi_tinh, so_dien_thoai, email, dia_chi, id_chuc_vu FROM nhan_vien_tbl WHERE id_nv='$user_id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                $user['id_nv'] = $user_id;
            } else {
                echo "0 results";
                exit;
            }
            $conn->close();
            ?>
            <div class="container">
                <h2>Chi tiết nhân viên</h2>
                <form action="update_user.php" method="post">
                    <div class="mb-3 mt-3">
                        <label for="ten" class="form-label">Tên:</label>
                        <input type="text" class="form-control" id="ten" placeholder="Tên nhân viên" name="ten" value="<?php echo $user['ten']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="ngay_sinh" class="form-label">Ngày sinh:</label>
                        <input type="date" class="form-control" id="ngay_sinh" placeholder="Ngày sinh" name="ngay_sinh" value="<?php echo $user['ngay_sinh']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="gioi_tinh" class="form-label">Giới tính:</label>
                        <select class="form-select" name="gioi_tinh">
                            <option value="Nam" <?php if ($user['gioi_tinh'] == 'Nam') echo 'selected'; ?>>Nam</option>
                            <option value="Nữ" <?php if ($user['gioi_tinh'] == 'Nữ') echo 'selected'; ?>>Nữ</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="so_dien_thoai" class="form-label">Số điện thoại:</label>
                        <input type="text" class="form-control" id="so_dien_thoai" placeholder="Số điện thoại" name="so_dien_thoai" value="<?php echo $user['so_dien_thoai']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $user['email']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="dia_chi" class="form-label">Địa chỉ:</label>
                        <input type="text" class="form-control" id="dia_chi" placeholder="Địa chỉ nhà" name="dia_chi" value="<?php echo $user['dia_chi']; ?>">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="id_chuc_vu" class="form-label">Chức vụ:</label>
                        <select name="id_chuc_vu" id="id_chuc_vu" class="form-select">
                            <option value="1" <?php if ($user['id_chuc_vu'] == '1') echo 'selected'; ?>>Project Manager</option>
                            <option value="2" <?php if ($user['id_chuc_vu'] == '2') echo 'selected'; ?>>Frontend Developer</option>
                            <option value="3" <?php if ($user['id_chuc_vu'] == '3') echo 'selected'; ?>>Backend Developer</option>
                            <option value="4" <?php if ($user['id_chuc_vu'] == '4') echo 'selected'; ?>>Tester</option>
                            <option value="5" <?php if ($user['id_chuc_vu'] == '5') echo 'selected'; ?>>Human Resources</option>
                            <option value="6" <?php if ($user['id_chuc_vu'] == '6') echo 'selected'; ?>>Accountant</option>
                            <option value="7" <?php if ($user['id_chuc_vu'] == '7') echo 'selected'; ?>>Business Analyst</option>
                            <option value="8" <?php if ($user['id_chuc_vu'] == '8') echo 'selected'; ?>>Marketing</option>
                        </select>
                    </div>
                    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user['id_nv']); ?>">
                    <button type="submit" class="btn btn-sm btn-primary">Sửa</button>
                </form>
            </div>
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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