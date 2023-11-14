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
        $username = "all_system_user";
        $password = "admin123";
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
}
