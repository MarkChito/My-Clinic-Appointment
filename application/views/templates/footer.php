<!-- Join Us Modal -->
<div class="modal fade" id="join_us" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Application Form</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form id="join_us_form">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_first_name" type="text" placeholder="..." required />
                        <label for="join_us_first_name">First name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_last_name" type="text" placeholder="..." required />
                        <label for="join_us_last_name">Last name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_email" type="email" placeholder="..." required />
                        <label for="join_us_email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_mobile_number" type="tel" placeholder="..." required />
                        <label for="join_us_mobile_number">Mobile number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_medical_license_number" type="number" placeholder="..." required />
                        <label for="join_us_medical_license_number">Medical License Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="book_now_specialization" required>
                            <option value="" disabled selected>Choose...</option>
                            <option value="Internal Medicine">Internal Medicine</option>
                            <option value="Surgery">Surgery</option>
                            <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                            <option value="Pediatrics">Pediatrics</option>
                            <option value="Psychiatry">Psychiatry</option>
                            <option value="Anesthesiology">Anesthesiology</option>
                            <option value="Radiology">Radiology</option>
                            <option value="Ophthalmology">Ophthalmology</option>
                            <option value="Otolaryngology">Otolaryngology</option>
                            <option value="Emergency Medicine">Emergency Medicine</option>
                            <option value="Pathology">Pathology</option>
                            <option value="Neurology">Neurology</option>
                            <option value="Allergy and Immunology">Allergy and Immunology</option>
                            <option value="Infectious Disease">Infectious Disease</option>
                            <option value="Physical Medicine and Rehabilitation">Physical Medicine and Rehabilitation</option>
                            <option value="Endocrinology">Endocrinology</option>
                            <option value="Hematology">Hematology</option>
                            <option value="Oncology">Oncology</option>
                            <option value="Nuclear Medicine">Nuclear Medicine</option>
                        </select>
                        <label for="book_now_specialization">Specialization</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="join_us_message" type="text" placeholder="..." style="height: 10rem" required></textarea>
                        <label for="join_us_message">Tell me about yourself</label>
                    </div>

                    <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Book Now Modal -->
<div class="modal fade" id="book_now" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Book Appointment Form</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form id="book_now_form">
                    <!-- Personal Information -->
                    <div class="mb-lg-3 mb-0">
                        <label class="form-label h5 fs-5">Personal Information</label>
                        <div class="row mb-lg-3 mb-0">
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="book_now_first_name" type="text" placeholder="..." required />
                                    <label for="book_now_first_name">First name</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="book_now_last_name" type="text" placeholder="..." required />
                                    <label for="book_now_last_name">Last name</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="book_now_email" type="email" placeholder="..." required />
                                    <label for="book_now_email">Email address</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="book_now_mobile_number" type="tel" placeholder="..." required />
                                    <label for="book_now_mobile_number">Mobile number</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Appointment Details -->
                    <div class="mb-lg-3 mb-0">
                        <label class="form-label h5 fs-5">Appointment Details</label>
                        <div class="row mb-lg-3 mb-0">
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="book_now_appointment_date" type="datetime-local" required />
                                    <label for="book_now_appointment_date">Appointment Date</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <select class="form-select" id="book_now_contact_method" required>
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="Video Call">Video Call</option>
                                        <option value="Phone Call">Phone Call</option>
                                        <option value="Email">Email</option>
                                        <option value="SMS">SMS</option>
                                    </select>
                                    <label for="book_now_contact_method">How do you like to be contacted</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-lg-3 mb-0">
                            <div class="col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" id="book_now_checkup_concerns" style="height: 10rem;" placeholder="..." required></textarea>
                                    <label for="book_now_checkup_concerns">Reason/s for arranging this appointment</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Payment Options -->
                    <div class="mb-3">
                        <label class="form-label h5 fs-5">Payment Method</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_option" id="payment_gcash" value="gcash" required />
                            <label class="form-check-label" for="payment_gcash">
                                GCash
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_option" id="payment_paymaya" value="paymaya" required />
                            <label class="form-check-label" for="payment_paymaya">
                                PayMaya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_option" id="payment_credit_card" value="credit_card" required />
                            <label class="form-check-label" for="payment_credit_card">
                                Credit Card or Visa/Mastercard
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_option" id="payment_paypal" value="paypal" required />
                            <label class="form-check-label" for="payment_paypal">
                                Paypal
                            </label>
                        </div>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="book_now_submitButton" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Doctor Modal -->
<div class="modal fade" id="doctor" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Who is <span id="about_doctor_name"></span>?</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <div class="card">
                    <div class="card-header bg-gradient-primary-to-secondary text-center">
                        <img id="doctor_image" class="rounded-circle border bg-light" alt="Doctor 1" width="200px" height="200px">
                    </div>
                    <div class="card-body">
                        <h3 id="doctor_name" class="font-alt text-center"></h3>
                        <p id="doctor_description" class=""></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
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

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="login_remember_me" <?= isset($_SESSION['remember_me']) ? 'checked' : null ?> />
                            <label class="form-check-label" for="login_remember_me">Remember Me</label>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary rounded-pill btn-lg" id="login_submit" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JS -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- JQuery -->
<script src="./plugins/jquery/js/jquery.min.js"></script>
<!-- SweetAlert -->
<script src="./plugins/sweetalert/js/sweetalert2@11.js"></script>
<!-- Datatables -->
<script src="./plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="./plugins/datatables/js/dataTables.bootstrap5.min.js"></script>
<!-- Font Awesome -->
<script src="./plugins/fontawesome/js/all.js"></script>
<!-- Core theme JS -->
<script src="./assets/js/scripts.js"></script>

<!-- Custom Scripts -->
<script>
    $(document).ready(function() {
        var error = <?= isset($_SESSION['error']) ? json_encode($_SESSION['error']) : json_encode(array()) ?>;

        if (error.length != 0) {
            sweetalert(error);
        }

        $("#applications_table").DataTable();

        $(".btn_see_more").click(function() {
            var parent_card = $(this).parent("div").parent("div");

            var doctor_image = parent_card.children("div").children("img").attr("src");
            var doctor_name = parent_card.children("div").children("h3").text();
            var doctor_description = parent_card.children("div").children("p").text();

            $("#about_doctor_name").text(doctor_name);
            $("#doctor_image").attr("src", doctor_image);
            $("#doctor_name").text(doctor_name);
            $("#doctor_description").text(doctor_description);
        })

        $(".btn_approve").click(function() {
            var parent_td = $(this).parent("div").parent("td");
            var approve_reject_btn = parent_td.find(".approve_reject_btn");
            var small_loader = parent_td.find(".small_loader");

            approve_reject_btn.addClass("d-none");
            small_loader.removeClass("d-none");

            var id = $(this).attr("application_id");

            var formData = new FormData();

            formData.append('id', id);
            formData.append('status', 'Approved');
            formData.append('update_application', true);

            $.ajax({
                url: './application/controllers/controller.php',
                data: formData,
                type: 'POST',
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function(response) {
                    location.href = "./applications";
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        })

        $(".btn_reject").click(function() {
            var parent_td = $(this).parent("div").parent("td");
            var approve_reject_btn = parent_td.find(".approve_reject_btn");
            var small_loader = parent_td.find(".small_loader");

            approve_reject_btn.addClass("d-none");
            small_loader.removeClass("d-none");

            var id = $(this).attr("application_id");

            var formData = new FormData();

            formData.append('id', id);
            formData.append('status', 'Rejected');
            formData.append('update_application', true);

            $.ajax({
                url: './application/controllers/controller.php',
                data: formData,
                type: 'POST',
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function(response) {
                    location.href = "./applications";
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        })

        $("#login_form").submit(function() {
            var username = $("#login_username").val();
            var password = $("#login_password").val();
            var remember_me = "off";

            if ($("#login_remember_me").is(":checked")) {
                remember_me = "on";
            }

            var formData = new FormData();

            formData.append('login_username', username);
            formData.append('login_password', password);
            formData.append('login_remember_me', remember_me);
            formData.append('login', true);

            $("#login_username").attr("disabled", true);
            $("#login_password").attr("disabled", true);
            $("#login_remember_me").attr("disabled", true);

            $("#login_submit").attr("disabled", true);
            $("#login_submit").text("Processing Request...");

            $.ajax({
                url: './application/controllers/controller.php',
                data: formData,
                type: 'POST',
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function(response) {
                    location.href = "./";
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        })

        function sweetalert(data) {
            Swal.fire({
                title: data.error_title,
                text: data.error_message,
                icon: data.error_type
            });
        }
    })
</script>
</body>

</html>

<?php unset($_SESSION['error']) ?>