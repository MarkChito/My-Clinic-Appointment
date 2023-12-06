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
                        <img src="./assets/img/doctors/<?= $admins[0]->image ?>" alt="Admin Image" class="rounded-circle bg-white" style="width: 200px ; height: 200px;">
                        
                    </div>
                    <div class="col-md-7 d-flex align-items-center">
                        <h1 class="text-white text-center">Welcome back, <?= $doctors_info[0]->name ?></h1>
                    </div>
                    <div class="col-md-2">
                        <div class="float-end">
                            <img src="./assets/notifbell.png" alt="Notification Bell Icon" width="30" role="button" id="btn_notification" data-bs-toggle="modal" data-bs-target="#notifications_list">
                            <span id="notification-count" style="color:White;"><?= count($notifications) ?></span>
                            &nbsp;
                            <img src="./assets/email.png" alt="message Icon" width="30">
                            <span id="message-count" style="color:White;">0</span>
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
                            <h3>My Profile <u style="font-size:medium; color:#343a40;">edit</u></h3>
                            <div class="col-md-12 mb-2">
                                <strong>Name: </strong><span><?= $doctors_info[0]->name ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Date of Birth: </strong><span>01/01/1980</span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Gender: </strong><span>Female</span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Email: </strong><span><?= $doctors_info[0]->email ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Mobile Number: </strong><span><?= $doctors_info[0]->mobile_num ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Payroll: </strong><span><?= $doctors_info[0]->payment ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Username: </strong><span><?= $admins[0]->username ?></span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Password: </strong><span>**********</span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Fee: </strong><span>500</span>
                            </div>
                            <div class="col-md-12 mb-2">
                                <strong>Specialization: </strong><span>surgery</span>
                            </div>
                        </div>
                        <div class="col-6" style="border-left: 2px solid #ddd;">
                            <h3>My Schedule <a href="#" id="doctor_schedule_date_and_time_edit" style="font-size:medium; color:#343a40;" data-bs-toggle="modal" data-bs-target="#update_doctor_schedule_by_date_and_time">edit</a></h3>
                            <div class="row">
                                <div class="col-3">
                                    <div class="col-md-12 mb-2">
                                        <strong>Monoday</strong>
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
                                <div class="col-5">
                                    <div class="col-md-12">
                                        <p class="mb-2">08:00 AM - 11:00 AM</p><i class="fas fa-edit ms-2 d-none" style="color:blue;"></i>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mb-2">08:00 AM - 11:00 AM</p><i class="fas fa-edit ms-2 d-none" style="color:blue;"></i>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mb-2">08:00 AM - 11:00 AM</p><i class="fas fa-edit ms-2 d-none" style="color:blue;"></i>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mb-2">08:00 AM - 11:00 AM</p><i class="fas fa-edit ms-2 d-none" style="color:blue;"></i>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mb-2">08:00 AM - 11:00 AM</p><i class="fas fa-edit ms-2 d-none" style="color:blue;"></i>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mb-2">08:00 AM - 11:00 AM</p><i class="fas fa-edit ms-2 d-none" style="color:blue;"></i>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="mb-2">08:00 AM - 11:00 AM</p><i class="fas fa-edit ms-2 d-none" style="color:blue;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1 class="h3 mt-4 text-gray-800">Doctor Schedule Management</h1>
                <span id="message"></span>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                            <div class="col">
                                <h6 class="m-0 font-weight-bold text-primary">Doctor Schedule List</h6>
                            </div>
                            <div class="col" align="right">
                                <button type="button" name="add_exam" id="add_doctor_schedule" class="btn btn-success btn-circle btn-sm"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="doctor_schedule_table" width="100%" cellspacing="0">
                                <thread>
                                    <tr>
                                        <th>Doctor Name</th>
                                        <th>Schedule Date</th>
                                        <th>Schedule Day</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Consulting Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thread>
                                <tbody>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>