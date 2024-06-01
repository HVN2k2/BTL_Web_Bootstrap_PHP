
<?php
session_start();
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
                            <a href="#" class="dropdown-item">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </nav>

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/ptit1.jpg" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="img/ptit2.jpg" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="img\ptit3.jpg" class="d-block w-100" alt="Slide 3">
                    </div>
                    <div class="carousel-item">
                        <img src="img\ptit4.jpg" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Trước</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sau</span>
                </a>
            </div>
            <div class="container-flulid">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Thông tin tổng quan</h2>
                        <p>Đây là một số thông tin tổng quan về công ty chúng tôi</p>
                        <ul>
                            <li>Tên công ty: Công ty phần mềm HVN</li>
                            <li>Mô tả công ty: TechX là một công ty công nghệ tiên phong trong việc phát triển các giải pháp và dịch vụ công nghệ sáng tạo để giải quyết các thách thức kỹ thuật và kinh doanh đa dạng.</li>
                            <li>Lĩnh vực hoạt động: Cung cấp các giải pháp và dịch vụ trong các lĩnh vực như trí tuệ nhân tạo (AI), học máy, big data, IoT (Internet of Things), blockchain và phát triển phần mềm.</li>
                            <li>Mục tiêu: TechX cam kết mang lại giá trị tối đa cho khách hàng thông qua việc cung cấp các giải pháp công nghệ tiên tiến và dịch vụ tùy chỉnh, giúp họ tối ưu hóa hiệu suất và tăng cường sức cạnh tranh.</li>
                            <li>Sứ mệnh: Xây dựng một tương lai kỹ thuật số thông minh và bền vững bằng cách phát triển công nghệ đột phá và ứng dụng chúng vào các lĩnh vực quan trọng như y tế, giáo dục, sản xuất và năng lượng.</li>
                            <li>Văn hóa doanh nghiệp: TechX thúc đẩy một văn hóa đổi mới, sáng tạo và hợp tác, nơi mỗi cá nhân được khuyến khích để thúc đẩy sự phát triển cá nhân và công ty.</li>
                        </ul>
                    </div>
                </div>
            </div>
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