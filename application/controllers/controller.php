<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    $_SESSION['error'] = array(
        "error_type" => "403 - Forbidden",
        "error_message" => "You don't have authorization to view this page."
    );

    header("Location: ../../error");
    
    exit();
}

class server
{
    function __construct()
    {
        $this->model = new model();
    }

    function get_applications_data()
    {
        $applications = $this->model->mod_get_application_data();

        return $applications;
    }
}
