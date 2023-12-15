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

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class model
{
    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "all_system_database";

        $mysqli = new mysqli($servername, $username, $password, $database);

        if ($mysqli->connect_error) {
            $_SESSION['error'] = array(
                "error_type" => "Database Error",
                "error_message" => $mysqli->connect_error
            );

            header("Location: ../../error");

            exit();
        }

        $this->mysqli = $mysqli;
    }

    function mod_get_application_data()
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_applications`";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_check_week($useraccount_id, $week)
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_doctors_schedule` WHERE `useraccount_id` = '" . $useraccount_id . "' AND `week` = '" . $week . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_get_appointments_data($id)
    {
        if ($_SESSION['usertype'] == 'admin' || $_SESSION['usertype'] == 'admin2') {

            $query = "SELECT * FROM `tbl_myclinicappointment_appointments`";
        } else {
            $query = "SELECT * FROM `tbl_myclinicappointment_appointments` WHERE `doctor_name` = '" . $id . "'";
        }
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_get_messages_data()
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_messages`";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_get_useraccount_data($username)
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_useraccounts` WHERE `username` = '" . $username . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_get_administrators_data()
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_useraccounts` WHERE `user_type` != 'doctor' AND `id` != '" . $_SESSION['id'] . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_get_administrators_data_by_id($id)
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_useraccounts` WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_get_notifications_data_by_id($id)
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_notifications` WHERE `useraccount_id` = '" . $id . "' AND `status` = 'unclicked'";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_get_notifications($id)
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_notifications` WHERE `useraccount_id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_get_doctors_data_by_id($useraccount_id)
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_doctors` WHERE `useraccount_id` = '" . $useraccount_id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_get_doctors_data_by_specialization($specialization)
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_doctors` WHERE `specialization` = '" . $specialization . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result) {
            $results = array();

            while ($row = $query_result->fetch_assoc()) {
                $results[] = (object) $row;
            }

            $query_result->close();

            return $results;
        } else {
            return null;
        }
    }

    function mod_add_application($first_name, $last_name, $email_address, $mobile_number, $medical_license_number, $specialization, $description)
    {
        $query = "INSERT INTO `tbl_myclinicappointment_applications` (`id`, `first_name`, `last_name`, `email_address`, `mobile_number`, `medical_license_number`, `specialization`, `description`, `status`) VALUES (NULL, '" . $first_name . "', '" . $last_name . "', '" . $email_address . "', '" . $mobile_number . "', '" . $medical_license_number . "', '" . $specialization . "', '" . $description . "', 'Pending')";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_add_appointment($first_name, $last_name, $email_address, $mobile_number, $doctor_specialization, $doctor_name, $appointment_date, $appointment_time, $contact_method, $reasons)
    {
        $query = "INSERT INTO `tbl_myclinicappointment_appointments` (`id`, `first_name`, `last_name`, `email_address`, `mobile_number`, `doctor_specialization`, `doctor_name`, `appointment_date`, `appointment_time`, `contact_method`, `reasons`, `status`) VALUES (NULL, '" . $first_name . "', '" . $last_name . "', '" . $email_address . "', '" . $mobile_number . "', '" . $doctor_specialization . "', '" . $doctor_name . "', '" . $appointment_date . "', '" . $appointment_time . "', '" . $contact_method . "', '" . $reasons . "', 'Pending')";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_add_message($name, $email, $message)
    {
        $query = "INSERT INTO `tbl_myclinicappointment_messages` (`id`, `name`, `email`, `message`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $message . "')";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_add_doctor_schedule($useraccount_id, $week, $time_in, $time_out)
    {
        $query = "INSERT INTO `tbl_myclinicappointment_doctors_schedule` (`id`, `useraccount_id`, `week`, `time_in`, `time_out`) VALUES (NULL, '" . $useraccount_id . "', '" . $week . "', '" . $time_in . "', '" . $time_out . "')";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_add_new_admin($name, $username, $password, $image)
    {
        $query = "INSERT INTO `tbl_myclinicappointment_useraccounts` (`id`, `name`, `username`, `password`, `image`, `user_type`) VALUES (NULL, '" . $name . "', '" . $username . "', '" . $password . "', '" . $image . "', 'admin2')";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_add_new_doctor($name, $email, $mobile_number, $username, $password, $image)
    {
        $query = "INSERT INTO `tbl_myclinicappointment_useraccounts` (`id`, `name`, `email`, `mobile_number`, `username`, `password`, `image`, `user_type`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $mobile_number . "', '" . $username . "', '" . $password . "', '" . $image . "', 'doctor')";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_add_doctor($useraccount_id, $name, $email, $mobile_num, $specialization)
    {
        $query = "INSERT INTO `tbl_myclinicappointment_doctors` (`id`, `useraccount_id`, `name`, `email`, `mobile_num`, `specialization`) VALUES (NULL, '" . $useraccount_id . "', '" . $name . "', '" . $email . "', '" . $mobile_num . "', '" . $specialization . "')";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_application($status, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_applications` SET `status` = '" . $status . "' WHERE `tbl_myclinicappointment_applications`.`id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_doctor_schedule($useraccount_id, $week, $time_in, $time_out)
    {
        $query = "UPDATE `tbl_myclinicappointment_doctors_schedule` SET `time_in` = '" . $time_in . "', `time_out` = '" . $time_out . "' WHERE `useraccount_id` = '" . $useraccount_id . "' AND `week` = '" . $week . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_appointment($status, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_appointments` SET `status` = '" . $status . "' WHERE `tbl_myclinicappointment_appointments`.`id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_new_admin($name, $username, $password, $image, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '" . $name . "', `username` = '" . $username . "', `password` = '" . $password . "', `image` = '" . $image . "' WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_doctor_useraccount_with_image_and_password($name, $email, $mobile_number, $username,  $password, $image, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '" . $name . "', `email` = '" . $email . "', `mobile_number` = '" . $mobile_number . "', `username` = '" . $username . "', `password` = '" . $password . "', `image` = '" . $image . "' WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_doctor_useraccount_with_no_image_and_password($name, $email, $mobile_number, $username, $password, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '" . $name . "', `email` = '" . $email . "', `mobile_number` = '" . $mobile_number . "', `username` = '" . $username . "', `password` = '" . $password . "' WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_doctor_useraccount_with_image_and_no_password($name, $email, $mobile_number, $username, $image, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '" . $name . "', `email` = '" . $email . "', `mobile_number` = '" . $mobile_number . "', `username` = '" . $username . "', `image` = '" . $image . "' WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_doctor_useraccount_with_no_image_and_no_password($name, $email, $mobile_number, $username, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '" . $name . "', `email` = '" . $email . "', `mobile_number` = '" . $mobile_number . "', `username` = '" . $username . "' WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_doctor($name, $email, $date_of_birth, $gender, $mobile_number, $mode_of_payment, $payment, $specialization, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_doctors` SET `name` = '" . $name . "',`date_of_birth` = '" . $date_of_birth . "',`gender` = '" . $gender . "', `email` = '" . $email . "', `mobile_num` = '" . $mobile_number . "', `payment` = '" . $payment . "', `mode_of_payment` = '" . $mode_of_payment . "', `specialization` = '" . $specialization . "' WHERE `useraccount_id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_new_admin_with_image_no_password($name, $username, $email, $mobile_number, $image, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '" . $name . "', `username` = '" . $username . "', `email` = '" . $email . "', `mobile_number` = '" . $mobile_number . "', `image` = '" . $image . "' WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_new_admin_no_image_with_password($name, $username, $email, $mobile_number, $password, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '" . $name . "', `username` = '" . $username . "', `email` = '" . $email . "', `mobile_number` = '" . $mobile_number . "', `password` = '" . $password . "' WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_update_new_admin_no_image_no_password($name, $email, $mobile_number, $username, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '" . $name . "', `email` = '" . $email . "', `mobile_number` = '" . $mobile_number . "', `username` = '" . $username . "' WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    function mod_delete_admin($id)
    {
        $query = "DELETE FROM `tbl_myclinicappointment_useraccounts` WHERE `id` = '" . $id . "'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}

class email
{
    function Send($name, $email, $subject, $message, $file_attachment)
    {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        try {
            // SMTP configuration for Gmail
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'myclinicappointment.123@gmail.com';
            $mail->Password   = 'jopccmtulyrfewuz';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
            $mail->isHTML(true);
            $mail->setFrom('myclinicappointment.123@gmail.com', 'My Clinic Appointment');
            $mail->addAddress($email, $name);
            $mail->Subject = $subject;
            $mail->Body = $message;

            if ($file_attachment) {
                if (isset($file_attachment) && $file_attachment['error'] == UPLOAD_ERR_OK) {
                    $file_name = $file_attachment['name'];
                    $file_path = $file_attachment['tmp_name'];

                    $mail->addAttachment($file_path, $file_name);
                }
            }

            // Send the email
            $mail->send();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
