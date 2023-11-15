<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['id']))
{
    $_SESSION['error'] = array(
        "error_type" => "error",
        "error_title" => "Login Required",
        "error_message" => "You need to login first!"
    );

    header("Location: ./");
    
    exit();
}

require_once "./application/controllers/controller.php";

$_SESSION['title'] = "Messages";
$_SESSION['current_page'] = "messages";

// This is your View Page
require_once "./application/views/pages/messages_view.php";