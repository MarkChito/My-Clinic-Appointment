<?php
$isLocalhost = false;

if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'localhost') {
    $isLocalhost = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="MyClinicAppointment - The fastest way to consult your doctor." />
    <meta name="author" content="" />

    <title>MyClinicAppointment - <?= isset($_SESSION['title']) ? $_SESSION['title'] : 'The fastest way to consult your doctor.' ?></title>

    <link rel="icon" type="image/x-icon" href="./assets/favicon.png" />

    <!-- Core theme CSS (includes Bootstrap) -->
    <link href="./plugins/datatables/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="./plugins/fontawesome/css/all.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="<?= !isset($_SESSION['id']) ? '#page-top' : './' ?>">
                <img class="img-fluid" src="assets/img/logo.png" alt="" width="25px" height="25px">
                <div class="d-xxl-inline d-xl-inline d-lg-inline d-md-inline d-sm-inline d-none">
                    <span class="text-danger">My</span><span class="text-primary">Clinic</span><span class="text-success">Appointment</span>
                </div>
                <div class="d-inline d-xxl-none d-xl-none d-lg-none d-md-none d-sm-none">
                    <span class="text-danger">M</span><span class="text-primary">C</span><span class="text-success">A</span>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php if (!isset($_SESSION['id'])) : ?>
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#about_us">About Us</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#our_team">Our Team</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#our_doctors">Our Doctors</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#how_it_works">How it Works</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#contact_us">Contact Us</a></li>
                    </ul>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#login">
                        <span class="d-flex align-items-center">
                            <i class="fas fa-key me-2"></i>
                            <span class="small">Login</span>
                        </span>
                    </button>
                <?php else : ?>
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <?php if ($_SESSION["usertype"] == "admin") : ?>
                            <li class="nav-item"><a class="nav-link me-lg-3 <?= isset($_SESSION['current_page']) && $_SESSION['current_page'] == 'administrators' ? 'active' : null ?>" href="administrators">Administrators</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3 <?= isset($_SESSION['current_page']) && $_SESSION['current_page'] == 'applications' ? 'active' : null ?>" href="applications">Applications</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3 <?= isset($_SESSION['current_page']) && $_SESSION['current_page'] == 'appointments' ? 'active' : null ?>" href="appointments">Appointments</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3 <?= isset($_SESSION['current_page']) && $_SESSION['current_page'] == 'messages' ? 'active' : null ?>" href="messages">Messages</a></li>

                        <?php elseif ($_SESSION["usertype"] == "admin2") : ?>
                            <li class="nav-item"><a class="nav-link me-lg-3 <?= isset($_SESSION['current_page']) && $_SESSION['current_page'] == 'applications' ? 'active' : null ?>" href="applications">Applications</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3 <?= isset($_SESSION['current_page']) && $_SESSION['current_page'] == 'appointments' ? 'active' : null ?>" href="appointments">Appointments</a></li>
                            <li class="nav-item"><a class="nav-link me-lg-3 <?= isset($_SESSION['current_page']) && $_SESSION['current_page'] == 'messages' ? 'active' : null ?>" href="messages">Messages</a></li>

                            <?php elseif ($_SESSION["usertype"] == "doctor") : ?>
                            <li class="nav-item"><a class="nav-link me-lg-3 <?= isset($_SESSION['current_page']) && $_SESSION['current_page'] == 'appointments' ? 'active' : null ?>" href="appointments">Appointments</a></li>
                        <?php endif ?>
                    </ul>
                    <form action="./application/controllers/controller.php" method="POST">
                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" type="submit" id="btn_logout" name="logout">
                            <span class="d-flex align-items-center">
                                <i class="fas fa-sign-out-alt me-2"></i>
                                <span class="small">Logout</span>
                            </span>
                        </button>
                    </form>
                <?php endif ?>
            </div>
        </div>
    </nav>