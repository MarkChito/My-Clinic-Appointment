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
        $this->email = new email();

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

            if (isset($_POST['update_admin'])) {
                $this->update_admin();
            }

            if (isset($_POST['delete_admin'])) {
                $this->delete_admin();
            }

            if (isset($_POST['approve_application'])) {
                $this->approve_application();
            }

            if (isset($_POST['get_doctor_specialization'])) {
                $this->get_doctors_data_by_specialization();
            }

            if (isset($_POST['update_doctor_schedule'])) {
                $this->update_doctor_schedule();
            }
        }
    }

    function get_applications_data()
    {
        $applications = $this->model->mod_get_application_data();

        return $applications;
    }

    function get_appointments_data($id)
    {
        $appointments = $this->model->mod_get_appointments_data($id);

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

    function get_administrators_data_by_id($id)
    {
        $administrators = $this->model->mod_get_administrators_data_by_id($id);

        return $administrators;
    }

    function get_notifications_data_by_id($id)
    {
        $notification = $this->model->mod_get_notifications_data_by_id($id);

        return $notification;
    }

    function get_notifications($id)
    {
        $notification = $this->model->mod_get_notifications($id);

        return $notification;
    }
    
    function check_week($useraccount_id, $week)
    {
        $week = $this->model->mod_check_week($useraccount_id, $week);

        return $week;
    }

    function get_doctors_data_by_specialization()
    {
        $specialization = $_POST['specialization'];
        $specializationz = $this->model->mod_get_doctors_data_by_specialization($specialization);

        echo json_encode($specializationz);
    }

    function get_doctors_data_by_id($useraccount_id)
    {
        $doctors = $this->model->mod_get_doctors_data_by_id($useraccount_id);

        return $doctors;
    }

    function login()
    {
        $username = $_POST['login_username'];
        $password = $_POST['login_password'];
        $remember_me = $_POST['login_remember_me'];

        $useraccount = $this->model->mod_get_useraccount_data($username);

        if ($useraccount) {
            $db_id = $useraccount[0]->id;
            $db_username = $useraccount[0]->username;
            $db_password = $useraccount[0]->password;
            $db_usertype = $useraccount[0]->user_type;

            if (password_verify($password, $db_password) && $username == $db_username) {
                $_SESSION['id'] = $db_id;
                $_SESSION['usertype'] = $db_usertype;

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
                "error_message" => "Application Approved!"
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
        $doctor_specialization = $_POST['doctor_specialization'];
        $doctor_name = $_POST['doctor_name'];
        $appointment_date = $_POST['appointment_date'];
        $contact_method = $_POST['contact_method'];
        $reasons = $_POST['reasons'];

        $added = $this->model->mod_add_appointment($first_name, $last_name, $email_address, $mobile_number, $doctor_specialization, $doctor_name, $appointment_date, $contact_method, $reasons);

        if ($added) {
            $_SESSION['error'] = array(
                "error_type" => "success",
                "error_title" => "Success",
                "error_message" => "Application Approved!"
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

    function update_doctor_schedule()
    {
        $useraccount_id = $_POST["useraccount_id"];
        $week = $_POST["week"];
        $time_in = $_POST["time_in"];
        $time_out = $_POST["time_out"];

        $week_exists = $this->model->mod_check_week($useraccount_id, $week);

        if ($week_exists) {
            // Update
            $update_doctor_schedule = $this->model->mod_update_doctor_schedule($useraccount_id, $week, $time_in, $time_out);

            if ($update_doctor_schedule) {
                $_SESSION['error'] = array(
                    "error_type" => "success",
                    "error_title" => "Success",
                    "error_message" => "Doctor schedule is updated!"
                );
            } else {
                $_SESSION['error'] = array(
                    "error_type" => "error",
                    "error_title" => "Oops..",
                    "error_message" => "There is an error while processing your request!"
                );
            }
        } else {
            // Insert
            $add_doctor_schedule = $this->model->mod_add_doctor_schedule($useraccount_id, $week, $time_in, $time_out);

            if ($add_doctor_schedule) {
                $_SESSION['error'] = array(
                    "error_type" => "success",
                    "error_title" => "Success",
                    "error_message" => "Doctor schedule is added!"
                );
            } else {
                $_SESSION['error'] = array(
                    "error_type" => "error",
                    "error_title" => "Oops..",
                    "error_message" => "There is an error while processing your request!"
                );
            }
        }

        echo json_encode(true);
    }

    function update_admin()
    {
        $id = $_POST["update_admin_id"];
        $name = $_POST["update_admin_name"];
        $username = $_POST["update_admin_username"];
        $old_username = $_POST["update_admin_old_username"];
        $password = $_POST["update_admin_password"];
        $image = isset($_FILES["update_admin_image"]) ? $_FILES["update_admin_image"] : null;

        $username_exists = $this->model->mod_get_useraccount_data($username);

        if ($username_exists && ($username != $old_username)) {
            echo json_encode(false);
        } else {
            if ($image && $password) {
                if ($this->upload_image($image)) {
                    $updated = $this->model->mod_update_new_admin($name, $username, password_hash($password, PASSWORD_BCRYPT), basename($image["name"]), $id);

                    if ($updated) {
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
            } else if ($image && !$password) {
                if ($this->upload_image($image)) {
                    $updated = $this->model->mod_update_new_admin_with_image_no_password($name, $username, basename($image["name"]), $id);

                    if ($updated) {
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
            } else if (!$image && $password) {
                $updated = $this->model->mod_update_new_admin_no_image_with_password($name, $username, password_hash($password, PASSWORD_BCRYPT), $id);

                if ($updated) {
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
                $updated = $this->model->mod_update_new_admin_no_image_no_password($name, $username, $id);

                if ($updated) {
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

    function approve_application()
    {
        $application_id = $_POST["doctor_temp_useraccount_id"];
        $name = $_POST["doctor_temp_useraccount_name"];
        $username = $_POST["doctor_temp_useraccount_username"];
        $password = $_POST["doctor_temp_useraccount_password"];
        $email = $_POST["doctor_temp_useraccount_email"];
        $mobile_num = $_POST["doctor_temp_useraccount_mobile_num"];
        $specialization = $_POST["doctor_temp_useraccount_specialization"];
        $status = "Approved";
        $image = "default_image_user.png";

        $username_exists = $this->model->mod_get_useraccount_data($username);

        if ($username_exists) {
            $_SESSION['error'] = array(
                "error_type" => "error",
                "error_title" => "Oops..",
                "error_message" => "Username already exists!"
            );
        } else {
            $this->model->mod_update_application($status, $application_id);
            $this->model->mod_add_new_doctor($name, $username, password_hash($password, PASSWORD_BCRYPT), $image);

            $recently_added_doctor = $this->model->mod_get_useraccount_data($username);

            if ($recently_added_doctor) {
                $useraccount_id = $recently_added_doctor[0]->id;

                $doctor_added = $this->model->mod_add_doctor($useraccount_id, $name, $email, $mobile_num, $specialization);

                $subject = "Your Application has been approved!";
                $message = "Congratratulations!, this is your temporary email and password. <br><br><strong>Username:</strong>" . $username . "<br><strong>Password:</strong>" . $password;

                if ($doctor_added) {
                    $send_success = $this->email->Send($name, $email, $subject, $message);

                    $email_message = "check you email.";

                    if (!$send_success) {
                        $email_message = "but email is not sent. Please contact us in our \"Contact Us\" page.";
                    }

                    $_SESSION['error'] = array(
                        "error_type" => "success",
                        "error_title" => "Success",
                        "error_message" => "Doctor is added successfully, " . $email_message
                    );
                } else {
                    $_SESSION['error'] = array(
                        "error_type" => "error",
                        "error_title" => "Oops..",
                        "error_message" => "There is an error while processing your request!"
                    );
                }
            }

            header("Location: ../../applications");
        }
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
