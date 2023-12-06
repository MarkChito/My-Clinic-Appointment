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
        <div class="row">
            <div class="col-6">
                <h2 class="mb-4">Administrators</h2>
            </div>
            <div class="col-6">
                <button type="button" class="float-end btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#new_administrator">
                    <span class="fas fa-plus me-1"></span>
                    New Administrator
                </button>
            </div>
        </div>
        <table id="applications_table" class="table table-striped w-100 border">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Image</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $administrators = $controller->get_administrators_data() ?>
                <?php if ($administrators) : ?>
                    <?php foreach ($administrators as $administrator) : ?>

                        <tr>
                            <td class="name">
                                <a title="View Details" href="javascript:void(0)" class="view_admin_details" data-bs-toggle="modal" data-bs-target="#admin_details"><?= $administrator->name ?></a>
                            </td>
                            <td class="username"><?= $administrator->username ?></td>
                            <td class="password">**********</td>
                            <td class="image text-truncate"><?= $administrator->image ?></td>
                            <td class="text-center">
                                <i title="Update Administrator Info" administrator_id="<?= $administrator->id ?>" class="fas fa-pencil-alt text-primary me-1 update_admin" role="button" data-bs-toggle="modal" data-bs-target="#update_administrator"></i>
                                <i title="Delete Administrator" administrator_id="<?= $administrator->id ?>" class="fas fa-trash-alt text-danger delete_admin" role="button"></i>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</section>

<?php include_once "./application/views/templates/footer.php"; ?>