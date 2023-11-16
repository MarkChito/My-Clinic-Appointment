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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php $messages = $controller->get_messages_data() ?>
                <?php if ($messages) : ?>
                    <?php foreach ($messages as $message) : ?>
                        <tr>
                            <td class="name">
                                <a title="View Details" href="javascript:void(0)" class="view_message_details" data-bs-toggle="modal" data-bs-target="#message_details">
                                    <?= $message->name ?>
                                </a>
                            </td>
                            <td class="email"><?= $message->email ?></td>
                            <td class="message text-truncate"><?= $message->message ?></td>                
                        </tr>
                    <?php endforeach ?>
                <?php endif ?>
            </tbody>
        </table>
    </div>
</section>

<?php include_once "./application/views/templates/footer.php"; ?>