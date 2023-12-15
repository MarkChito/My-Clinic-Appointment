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

<div style="position:absolute; top:25%; left:35%;" class="align-items-center">
    <div class="container px-0" style="width:500px; box-shadow: 10px 20px 20px 5px rgba(0,0,0,0.3);">
        <div class="modal-header bg-gradient-primary-to-secondary p-4" style="border-top-left-radius:10px; border-top-right-radius:10px;">
            <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Administrator Login</h5>
            <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body border-0 p-4">
            <form id="login_form" action="javascript:void(0)">
                <div class="form-floating mb-3">
                    <input class="form-control" id="login_username" type="text" placeholder="..." value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : null ?>" required />
                    <label for="login_username">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="login_password" type="password" placeholder="..." value="<?= isset($_SESSION['password']) ? $_SESSION['password'] : null ?>" required />
                    <label for="login_password">Password</label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary rounded-pill btn-lg" id="login_submit" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include_once "./application/views/templates/footer.php"; ?>