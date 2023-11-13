<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    $_SESSION['error'] = array(
        "error_type" => "403 - Forbidden",
        "error_message" => "You don't have authorization to view this page."
    );

    header("Location: ../../error");

    exit();
}

if (!isset($_SESSION['error']))
{
    header("Location: ./");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="MyClinicAppointment - The fastest way to consult your doctor." />
    <meta name="author" content="" />

    <title><?= isset($_SESSION['error']) ? $_SESSION['error']['error_type'] : null ?></title>

    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .error-container {
            text-align: center;
        }

        .error-image {
            width: 200px;
            margin-bottom: 20px;
        }

        h1 {
            color: #dc3545;
        }

        p {
            font-size: 18px;
        }

        .btn-back {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="error-container">
        <?php
        $error_logo = null;

        if (isset($_SESSION['error'])) {
            if ($_SESSION['error']['error_type'] == "Database Error") {
                $error_logo = "db_error.png";
            }

            if ($_SESSION['error']['error_type'] == "403 - Forbidden") {
                $error_logo = "403_error.png";
            }
        }
        ?>

        <img class="error-image" src="assets/img/errors/<?= $error_logo ?>" alt="Error">
        <h1><?= isset($_SESSION['error']) ? $_SESSION['error']['error_type'] : null ?></h1>
        <p><?= isset($_SESSION['error']) ? $_SESSION['error']['error_message'] : null ?></p>
        <a href="./" class="btn-back">Go Back Home</a>
    </div>
</body>

</html>

<?php unset($_SESSION['error']); ?>