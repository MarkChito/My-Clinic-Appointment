<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once "./application/models/model.php";
require_once "./application/controllers/controller.php";

// This is your View Page
require_once "./application/views/pages/index_view.php";