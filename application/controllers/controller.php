<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once "../models/model.php";
} else {
    if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
        $_SESSION['error'] = array(
            "error_type" => "403 - Forbidden",
            "error_message" => "You don't have authorization to view this page."
        );

        header("Location: ../../error");

        exit();
    }

    require_once "./application/models/model.php";
}

class controller
{
    function __construct()
    {
        $this->model = new model();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['login'])) {
                $this->login();
            }

            if (isset($_POST['logout'])) {
                $this->logout();
            }

            if (isset($_POST['update_application'])) {
                $this->update_application();
            }
            
            if (isset($_POST['join_us'])) {
                $this->join_us();
            }
        }
    }

    function get_applications_data()
    {
        $applications = $this->model->mod_get_application_data();

        return $applications;
    }
    
    function get_appointments_data()
    {
        $appointments = $this->model->mod_get_appointments_data();

        return $appointments;
    }

    function login()
    {
        $username = $_POST['login_username'];
        $password = $_POST['login_password'];
        $remember_me = $_POST['login_remember_me'];

        $useraccount = $this->model->mod_get_useraccount_data($username);

        if ($useraccount) {
            $db_id = $useraccount[0]->id;
            $db_password = $useraccount[0]->password;

            if (password_verify($password, $db_password)) {
                $_SESSION['id'] = $db_id;

                $_SESSION['error'] = array(
                    "error_type" => "success",
                    "error_title" => "Success",
                    "error_message" => "Login Successful!"
                );

                if ($remember_me == "on") {
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                } else {
                    unset($_SESSION['username']);
                    unset($_SESSION['password']);
                }
            } else {
                $_SESSION['error'] = array(
                    "error_type" => "error",
                    "error_title" => "Oops..",
                    "error_message" => "Invalid Username or Password!"
                );
            }
        } else {
            $_SESSION['error'] = array(
                "error_type" => "error",
                "error_title" => "Oops..",
                "error_message" => "Invalid Username or Password!"
            );
        }

        echo json_encode(true);
    }

    function logout()
    {
        unset($_SESSION['id']);

        $_SESSION['error'] = array(
            "error_type" => "success",
            "error_title" => "Success",
            "error_message" => "You had been signed out."
        );

        header("Location: ../../");
    }

    function update_application()
    {
        $id = $_POST['id'];
        $status = $_POST['status'];

        $updated = $this->model->mod_update_application($status, $id);

        if ($updated) {
            $_SESSION['error'] = array(
                "error_type" => "success",
                "error_title" => "Success",
                "error_message" => "Application " . $status . "!"
            );
        } else {
            $_SESSION['error'] = array(
                "error_type" => "error",
                "error_title" => "Oops..",
                "error_message" => "There is an error while processing your request."
            );
        }

        echo json_encode(true);
    }
    
    function join_us()
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email_address = $_POST['email_address'];
        $mobile_number = $_POST['mobile_number'];
        $medical_license_number = $_POST['medical_license_number'];
        $specialization = $_POST['specialization'];
        $description = $_POST['description'];

        $added = $this->model->mod_add_application($first_name, $last_name,$email_address, $mobile_number, $medical_license_number, $specialization, $description);

        if ($added) {
            $_SESSION['error'] = array(
                "error_type" => "success",
                "error_title" => "Success",
                "error_message" => "Application is added to the Database!"
            );
        } else {
            $_SESSION['error'] = array(
                "error_type" => "error",
                "error_title" => "Oops..",
                "error_message" => "There is an error while processing your request."
            );
        }

        echo json_encode(true);
    }
}

$controller = new controller();
