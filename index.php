<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['title'] = "The fastest way to consult your doctor.";
$_SESSION['current_page'] = "./";

// This is your View Page
require_once "./application/views/pages/index_view.php";