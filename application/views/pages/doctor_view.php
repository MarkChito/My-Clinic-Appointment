<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    $_SESSION['error'] = array(
        "error_type" => "403 - Forbidden",
        "error_message" => "You don't have authorization to view this page."
    );

    header("Location: ../../error");

    exit();
}
$doctors_info = $controller->get_doctors_data_by_id($_SESSION["id"]);
$admins = $controller->get_administrators_data_by_id($_SESSION["id"]);
$notifications = $controller->get_notifications_data_by_id($_SESSION["id"]);
$notifications_all = $controller->get_notifications($_SESSION["id"]);
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3" style="background-image: linear-gradient(to right, blue, green);">
                <div class="row">
                    <div class="col-md-3">
                        <img src="./assets/img/admins/<?= $admins[0]->image ?>" alt="Admin Image" class="rounded-circle bg-white" style="width: 200px ; height: 200px;">

                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <h1 class="text-white text-center">Welcome back, <?= $doctors_info[0]->name ?></h1>
                    </div>
                    <div class="col-md-2">
                        <div class="float-end">
                            <img src="./assets/notifbell.png" alt="Notification Bell Icon" width="30" role="button" id="btn_notification" data-bs-toggle="modal" data-bs-target="#notifications_list">
                            <span id="notification-count" style="color:White;"><?= count($notifications) ?></span>
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="d-flex">
                            <h3 class="d-flex me-2">My Profile</h3>
                                <a href="javascript:void(0)" doctor_id="<?= $admins[0]->id ?>" doctor_name="<?= $doctors_info[0]->name ?>" doctor_email="<?= $doctors_info[0]->email ?>" doctor_mobile_number="<?= $doctors_info[0]->mobile_num ?>" doctor_username="<?= $admins[0]->username ?>" doctor_specialization="<?= $doctors_info[0]->specialization ?>" doctor_image="<?= $admins[0]->image ?>" doctor_payment="<?= $doctors_info[0]->payment ?>" id="btn_my_profile" title="Update Profile"  data-bs-toggle="modal" data-bs-target="#update_doctor_profile">
                                    <i class="fas fa-edit"></i>
                                </a>                            
                        </div>
                            <div class="col-md-12 mb-2">
                                <strong>Name: </strong><span><?= $doctors_info[0]->name ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Date of Birth: </strong><span>Not Yet Available</span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Gender: </strong><span>Not Yet Available</span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Email: </strong><span><?= $doctors_info[0]->email ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Mobile Number: </strong><span><?= $doctors_info[0]->mobile_num ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Fee: </strong><span>₱<?= number_format($doctors_info[0]->payment, 2) ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Username: </strong><span><?= $admins[0]->username ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Password: </strong><span>**********</span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Specialization: </strong><span><?= $doctors_info[0]->specialization ?></span>
                            </div>
                        </div>
                        <div class="col-6" style="border-left: 2px solid #ddd;">
                            <div class="d-flex">
                                <h3 class="d-flex me-2">My Schedule</h3>
                                <a href="javascript:void(0)" title="Edit Schedule" id="doctor_schedule_date_and_time_edit" data-bs-toggle="modal" data-bs-target="#update_doctor_schedule_by_date_and_time">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="col-md-12 mb-2">
                                        <strong>Monday</strong>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <strong>Tuesday</strong>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <strong>Wednesday</strong>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <strong>Thursday</strong>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <strong>Friday</strong>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <strong>Saturday</strong>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <strong>Sunday</strong>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <?php $days_of_week = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday') ?>
                                    <?php foreach ($days_of_week as $day) : ?>
                                        <div class="col-md-12">
                                            <?php $week_monday = $controller->check_week($_SESSION["id"], $day) ?>
                                            <?php if ($week_monday) : ?>
                                                <p class="mb-2"><?= date('h:i A', strtotime($week_monday[0]->time_in)) ?> - <?= date('h:i A', strtotime($week_monday[0]->time_out)) ?></p>
                                            <?php else : ?>
                                                <p class="mb-2">Not Yet Available</p>
                                            <?php endif ?>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>