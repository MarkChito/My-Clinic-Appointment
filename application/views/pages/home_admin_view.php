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
                        <img src="./assets/img/admins/<?= $admins[0]->image ?>" alt="Admin Image" class="rounded-circle bg-white" style="width: 200px ; height: 200px;">
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <h1 class="text-white text-center">Welcome back, Admin <?= $admins[0]->name ?>!</h1>
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
                            <strong>Email: </strong><span><?= $admins[0]->email ?></span>
                        </div>
                        <div class="col-md-12 mb-2">
                            <strong>Mobile Number: </strong><span><?= $admins[0]->mobile_number ?></span>
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
                            <button type="button" id="update_home_admin" admin_id="<?= $admins[0]->id ?>" admin_name="<?= $admins[0]->name ?>" admin_email="<?= $admins[0]->email ?>" admin_mobile_number="<?= $admins[0]->mobile_number ?>" admin_username="<?= $admins[0]->username ?>" admin_image="<?= $admins[0]->image ?>" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#update_home_administrator">Update Information</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>