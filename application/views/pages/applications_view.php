<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    $_SESSION['error'] = array(
        "error_type" => "403 - Forbidden",
        "error_message" => "You don't have authorization to view this page."
    );

    header("Location: ../../error");

    exit();
}

$server = new server();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="MyClinicAppointment - The fastest way to consult your doctor." />
    <meta name="author" content="" />

    <title>MyClinicAppointment - Applications</title>

    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap 5-->
    <link rel="stylesheet" href="./plugins/bootstrap/css/bootstrap.min.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="./plugins/datatables/css/dataTables.bootstrap5.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="./plugins/fontawesome/css/all.min.css">
</head>

<body>
    <div class="container mt-5">

        <h2 class="mb-4">Applications</h2>
        <table id="applications_table" class="table table-striped w-100 border">
            <thead>
                <tr>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email Address</th>
                    <th>Mobile Number</th>
                    <th>Medical License Number</th>
                    <th>Specialization</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $applications = $server->get_applications_data() ?>
                <?php if ($applications) : ?>
                    <?php foreach ($applications as $application) : ?>
                        <tr>
                            <td><?= $application->last_name ?></td>
                            <td><?= $application->first_name ?></td>
                            <td><?= $application->email_address ?></td>
                            <td><?= $application->mobile_number ?></td>
                            <td><?= $application->medical_license_number ?></td>
                            <td><?= $application->specialization ?></td>
                            <td><i class="fas fa-user"></i></td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
    </div>
    
    <!-- JQuery -->
    <script src="./plugins/jquery/js/jquery.min.js"></script>
    <!-- Datatables -->
    <script src="./plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/datatables/js/dataTables.bootstrap5.min.js"></script>
    <!-- FontAwesome -->
    <script src="./plugins/fontawesome/js/all.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#applications_table').DataTable();
        });
    </script>
</body>

</html>