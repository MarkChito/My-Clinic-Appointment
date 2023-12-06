<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    $_SESSION['error'] = array(
        "error_type" => "403 - Forbidden",
        "error_message" => "You don't have authorization to view this page."
    );

    header("Location: ../../error");

    exit();
}

$admins = $controller->get_administrators_data_by_id($_SESSION["id"]);
?>
<section id="our_team" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3" style="background-image: linear-gradient(to right, blue, green);">
                <div class="row">
                    <div class="col-md-3">
                        <img src="./assets/img/default_image_user.png" alt="Admin Image" class="rounded-circle bg-white" style="width: 200px ; height: 200px;">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <h1 class="text-white text-center">Welcome back, Admin <?= $admins[0]->name ?>!</h1>
                    </div>
                    <div class="col-md-2">
                        <div class="float-end">
                            <img src="./assets/notifbell.png" alt="Notification Bell Icon" width="30">
                            <span id="notification-count" style="color:White;">0</span>
                            &nbsp;
                            <img src="./assets/email.png" alt="message Icon" width="30">
                            <span id="message-count" style="color:White;">0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-md-12">
                <h1 class="modal-title font-alt text-gradient">General Account Settings</h1>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <strong>Name: </strong><span><?= $admins[0]->name ?></span>
                        </div>
                        <div class="col-md-12 mb-2">
                            <strong>Email: </strong><span></span>
                        </div>
                        <div class="col-md-12 mb-2">
                            <strong>Mobile Number: </strong><span>09123456789</span>
                        </div>
                        <div class="col-md-12 mb-2">
                            <strong>Payroll: </strong><span></span>
                        </div>
                        <div class="col-md-12 mb-2">
                            <strong>Username: </strong><span><?= $admins[0]->username ?></span>
                        </div>
                        <div class="col-md-12 mb-2">
                            <strong>Password: </strong><span>**********</span>
                        </div>
                        <div class="col-md-12 mb-2">
                            <strong>Image: </strong><span><?= $admins[0]->image ?></span>
                        </div>
                        <div class="col-md-12 mb-2">
                            <button type="button" class="btn btn-primary float-end">Change Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>