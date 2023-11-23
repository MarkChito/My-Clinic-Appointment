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

            if (isset($_POST['update_appointment'])) {
                $this->update_appointment();
            }

            if (isset($_POST['join_us'])) {
                $this->join_us();
            }

            if (isset($_POST['book_now'])) {
                $this->book_now();
            }

            if (isset($_POST['contact_us'])) {
                $this->contact_us();
            }

            if (isset($_POST['new_admin'])) {
                $this->new_admin();
            }

            if (isset($_POST['delete_admin'])) {
                $this->delete_admin();
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

    function get_messages_data()
    {
        $messages = $this->model->mod_get_messages_data();

        return $messages;
    }

    function get_administrators_data()
    {
        $administrators = $this->model->mod_get_administrators_data();

        return $administrators;
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

    function update_appointment()
    {
        $id = $_POST['id'];
        $status = $_POST['status'];

        $updated = $this->model->mod_update_appointment($status, $id);

        if ($updated) {
            $_SESSION['error'] = array(
                "error_type" => "success",
                "error_title" => "Success",
                "error_message" => "Appointment " . $status . "!"
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

        $added = $this->model->mod_add_application($first_name, $last_name, $email_address, $mobile_number, $medical_license_number, $specialization, $description);

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

    function book_now()
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email_address = $_POST['email_address'];
        $mobile_number = $_POST['mobile_number'];
        $appointment_date = $_POST['appointment_date'];
        $contact_method = $_POST['contact_method'];
        $reasons = $_POST['reasons'];
        $payment_method = $_POST['payment_method'];

        $added = $this->model->mod_add_appointment($first_name, $last_name, $email_address, $mobile_number, $appointment_date, $contact_method, $reasons, $payment_method);

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

    function contact_us()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $added = $this->model->mod_add_message($name, $email, $message);

        if ($added) {
            $_SESSION['error'] = array(
                "error_type" => "success",
                "error_title" => "Success",
                "error_message" => "Your message has been submitted successfully!"
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

    function new_admin()
    {
        $name = $_POST["new_admin_name"];
        $username = $_POST["new_admin_username"];
        $password = $_POST["new_admin_password"];
        $image = $_FILES["new_admin_image"];

        $username_exists = $this->model->mod_get_useraccount_data($username);

        if ($username_exists) {
            echo json_encode(false);
        } else {
            if ($this->upload_image($image)) {
                $added = $this->model->mod_add_new_admin($name, $username, password_hash($password, PASSWORD_BCRYPT), basename($image["name"]));

                if ($added) {
                    $_SESSION['error'] = array(
                        "error_type" => "success",
                        "error_title" => "Success",
                        "error_message" => "Administrator is added successfully!"
                    );
                } else {
                    $_SESSION['error'] = array(
                        "error_type" => "error",
                        "error_title" => "Oops..",
                        "error_message" => "There is an error while processing your request!"
                    );
                }
            } else {
                $_SESSION['error'] = array(
                    "error_type" => "error",
                    "error_title" => "Oops..",
                    "error_message" => "There is an error while processing your request!"
                );
            }

            echo json_encode(true);
        }
    }

    function delete_admin()
    {
        $id = $_POST["id"];

        $deleted = $this->model->mod_delete_admin($id);

        if ($deleted) {
            $_SESSION['error'] = array(
                "error_type" => "success",
                "error_title" => "Success",
                "error_message" => "Administrator is deleted successfully!"
            );
        } else {
            $_SESSION['error'] = array(
                "error_type" => "error",
                "error_title" => "Oops..",
                "error_message" => "There is an error while processing your request!"
            );
        }

        echo json_encode(true);
    }

    private function upload_image($image)
    {
        $targetDirectory = "../../assets/img/admins/";
        $targetFile = $targetDirectory . basename($image["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $check = getimagesize($image["tmp_name"]);

        if ($check) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }

        $allowedExtensions = array("jpg", "jpeg", "png");

        if (!in_array($imageFileType, $allowedExtensions)) {
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            return false;
        } else {
            if (move_uploaded_file($image["tmp_name"], $targetFile)) {
                return true;
            } else {
                return false;
            }
        }
    }
}

$controller = new controller();
