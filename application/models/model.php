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

    function mod_get_appointments_data()
    {
        $query = "SELECT * FROM `tbl_myclinicappointment_appointments`";
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
        // $query = "SELECT * FROM `tbl_myclinicappointment_useraccounts` WHERE `id` != '" . $_SESSION['id'] . "'";
        $query = "SELECT * FROM `tbl_myclinicappointment_useraccounts`";
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

    function mod_add_appointment($first_name, $last_name, $email_address, $mobile_number, $appointment_date, $contact_method, $reasons, $payment_method)
    {
        $query = "INSERT INTO `tbl_myclinicappointment_appointments` (`id`, `first_name`, `last_name`, `email_address`, `mobile_number`, `appointment_date`, `contact_method`, `reasons`, `payment_method`, `status`) VALUES (NULL, '" . $first_name . "', '" . $last_name . "', '" . $email_address . "', '" . $mobile_number . "', '" . $appointment_date . "', '" . $contact_method . "', '" . $reasons . "', '" . $payment_method . "', 'Pending')";
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

    function mod_add_new_admin($name, $username, $password, $image)
    {
        $query = "INSERT INTO `tbl_myclinicappointment_useraccounts` (`id`, `name`, `username`, `password`, `image`, `user_type`) VALUES (NULL, '" . $name . "', '" . $username . "', '" . $password . "', '" . $image . "', 'admin')";
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
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '". $name ."', `username` = '". $username ."', `password` = '". $password ."', `image` = '". $image ."' WHERE `id` = '". $id ."'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    function mod_update_new_admin_with_image_no_password($name, $username, $image, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '". $name ."', `username` = '". $username ."', `image` = '". $image ."' WHERE `id` = '". $id ."'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    function mod_update_new_admin_no_image_with_password($name, $username, $password, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '". $name ."', `username` = '". $username ."', `password` = '". $password ."' WHERE `id` = '". $id ."'";
        $query_result = $this->mysqli->query($query);

        if ($query_result && $this->mysqli->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    function mod_update_new_admin_no_image_no_password($name, $username, $id)
    {
        $query = "UPDATE `tbl_myclinicappointment_useraccounts` SET `name` = '". $name ."', `username` = '". $username ."' WHERE `id` = '". $id ."'";
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
