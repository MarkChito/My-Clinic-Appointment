<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['title'] = "The fastest way to consult your doctor.";
$_SESSION['current_page'] = "./";

// Call the visitors log
require_once "./logs/visitors_log.php";

// Call the Controller
require_once "./application/controllers/controller.php";

// This is your View Page
require_once "./application/views/pages/index_view.php";