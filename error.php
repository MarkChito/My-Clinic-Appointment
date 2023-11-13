<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// This is your View Page
require_once "./application/views/errors/error_view.php";