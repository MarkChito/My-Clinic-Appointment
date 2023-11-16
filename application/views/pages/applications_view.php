<?php
if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
    $_SESSION['error'] = array(
        "error_type" => "403 - Forbidden",
        "error_message" => "You don't have authorization to view this page."
    );

    header("Location: ../../error");

    exit();
}

include_once "./application/views/templates/header.php";
?>

<section id="our_team" class="mt-5">
    <div class="container px-5">
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
                    <th class="d-none">Description</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $applications = $controller->get_applications_data() ?>
                <?php if ($applications) : ?>
                    <?php foreach ($applications as $application) : ?>
                        <?php
                        $status = $application->status;
                        $badge_color = null;

                        switch ($status) {
                            case "Pending":
                                $badge_color = "success";

                                break;
                            case "Approved":
                                $badge_color = "primary";

                                break;
                            case "Rejected":
                                $badge_color = "danger";

                                break;
                            default:
                                break;
                        }
                        ?>

                        <tr>
                            <td class="last_name">
                                <a title="View Details" href="javascript:void(0)" class="view_application_details" data-bs-toggle="modal" data-bs-target="#application_details">
                                    <?= $application->last_name ?>
                                </a>
                            </td>
                            <td class="first_name"><?= $application->first_name ?></td>
                            <td class="email_address"><?= $application->email_address ?></td>
                            <td class="mobile_number"><?= $application->mobile_number ?></td>
                            <td class="medical_license_number"><?= $application->medical_license_number ?></td>
                            <td class="specialization"><?= $application->specialization ?></td>
                            <td class="description d-none"><?= $application->description ?></td>
                            <td class="status">
                                <span class="badge rounded-pill bg-<?= $badge_color ?>"><?= $status ?></span>
                            </td>
                            <td class="text-center">
                                <div class="approve_reject_btn">
                                    <i title="Approve Application" application_id="<?= $application->id ?>" class="<?= $status == 'Pending' ? 'btn_approve' : null ?> fas fa-thumbs-up text-<?= $status == 'Pending' ? 'primary' : 'muted' ?> me-2" role="<?= $status == 'Pending' ? 'button' : 'none' ?>"></i>
                                    <i title="Reject Application" application_id="<?= $application->id ?>" class="<?= $status == 'Pending' ? 'btn_reject' : null ?> fas fa-thumbs-down text-<?= $status == 'Pending' ? 'danger' : 'muted' ?>" role="<?= $status == 'Pending' ? 'button' : 'none' ?>"></i>
                                </div>
                                <div class="d-none small_loader">
                                    <span class="spinner-border spinner-border-sm text-success" role="status" aria-hidden="true"></span>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</section>

<?php include_once "./application/views/templates/footer.php"; ?>