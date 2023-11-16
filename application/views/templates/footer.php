<!-- Join Us Modal -->
<div class="modal fade" id="join_us" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Application Form</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form id="join_us_form" action="javascript:void(0)">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_first_name" type="text" placeholder="..." required />
                        <label for="join_us_first_name">First Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_last_name" type="text" placeholder="..." required />
                        <label for="join_us_last_name">Last Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_email_address" type="email" placeholder="..." required />
                        <label for="join_us_email_address">Email Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_mobile_number" type="tel" placeholder="..." required />
                        <label for="join_us_mobile_number">Mobile Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="join_us_medical_license_number" type="number" placeholder="..." required />
                        <label for="join_us_medical_license_number">Medical License Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="join_us_specialization" required>
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
                        <label for="join_us_specialization">Specialization</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="join_us_description" type="text" placeholder="..." style="height: 10rem" required></textarea>
                        <label for="join_us_description">Tell me about yourself</label>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary rounded-pill btn-lg" id="join_us_submit" type="submit">Submit</button>
                    </div>
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
                <form id="book_now_form" action="javascript:void(0)">
                    <!-- Personal Information -->
                    <div class="mb-lg-3 mb-0">
                        <p class="h5 fs-5">Personal Information</p>
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
                                    <input class="form-control" id="book_now_email_address" type="email" placeholder="..." required />
                                    <label for="book_now_email_address">Email address</label>
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
                        <p class="h5 fs-5">Appointment Details</p>
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
                                    <textarea class="form-control" id="book_now_reasons" style="height: 10rem;" placeholder="..." required></textarea>
                                    <label for="book_now_reasons">Reason/s for arranging this appointment</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Payment Options -->
                    <div class="mb-3">
                        <p class="h5 fs-5">Payment Method</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment_gcash" value="Gcash" required />
                            <label class="form-check-label" for="payment_gcash">
                                GCash
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment_paymaya" value="Paymaya" required />
                            <label class="form-check-label" for="payment_paymaya">
                                PayMaya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment_credit_card" value="Credit Card or Visa/Mastercard" required />
                            <label class="form-check-label" for="payment_credit_card">
                                Credit Card or Visa/Mastercard
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="payment_paypal" value="Paypal" required />
                            <label class="form-check-label" for="payment_paypal">
                                Paypal
                            </label>
                        </div>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="book_now_submit" type="submit">Submit</button></div>
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
                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
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

<!-- Application Details Modal -->
<div class="modal fade" id="application_details" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Application Details</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <div class="row mb-xl-3 mb-0">
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>First Name:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="application_details_first_name"></span>
                    </div>
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Last Name:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="application_details_last_name"></span>
                    </div>
                </div>
                <div class="row mb-xl-3 mb-0">
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Email Address:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="application_details_email_address"></span>
                    </div>
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Mobile Number:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="application_details_mobile_number"></span>
                    </div>
                </div>
                <div class="row mb-xl-3 mb-0">
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Medical License Number:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="application_details_medical_license_number"></span>
                    </div>
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Specialization:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="application_details_specialization"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <strong>Description:</strong>
                        <textarea id="application_details_description" class="form-control" rows="5" readonly></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Appointment Details Modal -->
<div class="modal fade" id="appointment_details" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Appointment Details</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <div class="row mb-xl-3 mb-0">
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>First Name:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="appointment_details_first_name"></span>
                    </div>
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Last Name:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="appointment_details_last_name"></span>
                    </div>
                </div>
                <div class="row mb-xl-3 mb-0">
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Email Address:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="appointment_details_email_address"></span>
                    </div>
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Mobile Number:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="appointment_details_mobile_number"></span>
                    </div>
                </div>
                <div class="row mb-xl-3 mb-0">
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Appointment Date:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="appointment_details_appointment_date"></span>
                    </div>
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Contact Method:</strong>
                    </div>
                    <div class="col-xl-4 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="appointment_details_contact_method"></span>
                    </div>
                </div>
                <div class="row mb-xl-3 mb-0">
                    <div class="col-xl-2 col-md-6 col-12">
                        <strong>Payment Method:</strong>
                    </div>
                    <div class="col-xl-10 col-md-6 col-12 mb-xl-0 mb-3">
                        <span id="appointment_details_payment_method"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <strong>Reasons:</strong>
                        <textarea id="appointment_details_reasons" class="form-control" rows="5" readonly></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Message Details Modal -->
<div class="modal fade" id="message_details" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Message Details</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4" id="applicant_details">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <strong>Name:</strong>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <span id="message_details_name"></span>
                    </div>
                    <div class="col-lg-6 col-12">
                        <strong>Email Address:</strong>
                    </div>
                    <div class="col-lg-6 col-12 mb-3">
                        <span id="message_details_email"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <strong>Message:</strong>
                        <textarea id="message_details_message" class="form-control" rows="5" readonly></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
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

        $("#join_us_form").submit(function() {
            var first_name = $("#join_us_first_name");
            var last_name = $("#join_us_last_name");
            var email_address = $("#join_us_email_address");
            var mobile_number = $("#join_us_mobile_number");
            var medical_license_number = $("#join_us_medical_license_number");
            var specialization = $("#join_us_specialization");
            var description = $("#join_us_description");
            var submit = $("#join_us_submit");

            var formData = new FormData();

            formData.append('first_name', first_name.val());
            formData.append('last_name', last_name.val());
            formData.append('email_address', email_address.val());
            formData.append('mobile_number', mobile_number.val());
            formData.append('medical_license_number', medical_license_number.val());
            formData.append('specialization', specialization.val());
            formData.append('description', description.val());
            formData.append('join_us', true);

            first_name.attr("disabled", true);
            last_name.attr("disabled", true);
            email_address.attr("disabled", true);
            mobile_number.attr("disabled", true);
            medical_license_number.attr("disabled", true);
            specialization.attr("disabled", true);
            description.attr("disabled", true);

            submit.attr("disabled", true);
            submit.text("Processing Request...");

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

        $(".btn_appointments_approve").click(function() {
            var parent_td = $(this).parent("div").parent("td");
            var approve_reject_btn = parent_td.find(".approve_reject_btn");
            var small_loader = parent_td.find(".small_loader");

            approve_reject_btn.addClass("d-none");
            small_loader.removeClass("d-none");

            var id = $(this).attr("application_id");

            var formData = new FormData();

            formData.append('id', id);
            formData.append('status', 'Approved');
            formData.append('update_appointment', true);

            $.ajax({
                url: './application/controllers/controller.php',
                data: formData,
                type: 'POST',
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function(response) {
                    location.href = "./appointments";
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        })

        $(".btn_appointments_reject").click(function() {
            var parent_td = $(this).parent("div").parent("td");
            var approve_reject_btn = parent_td.find(".approve_reject_btn");
            var small_loader = parent_td.find(".small_loader");

            approve_reject_btn.addClass("d-none");
            small_loader.removeClass("d-none");

            var id = $(this).attr("application_id");

            var formData = new FormData();

            formData.append('id', id);
            formData.append('status', 'Rejected');
            formData.append('update_appointment', true);

            $.ajax({
                url: './application/controllers/controller.php',
                data: formData,
                type: 'POST',
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function(response) {
                    location.href = "./appointments";
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        })

        $("#book_now_form").submit(function() {
            var first_name = $("#book_now_first_name");
            var last_name = $("#book_now_last_name");
            var email_address = $("#book_now_email_address");
            var mobile_number = $("#book_now_mobile_number");
            var appointment_date = $("#book_now_appointment_date");
            var contact_method = $("#book_now_contact_method");
            var payment_method = $("input[name='payment_method']");
            var reasons = $("#book_now_reasons");
            var submit = $("#book_now_submit");

            var formData = new FormData();

            formData.append('first_name', first_name.val());
            formData.append('last_name', last_name.val());
            formData.append('email_address', email_address.val());
            formData.append('mobile_number', mobile_number.val());
            formData.append('appointment_date', formatDate(appointment_date.val()));
            formData.append('contact_method', contact_method.val());
            formData.append('reasons', reasons.val());
            formData.append('payment_method', $("input[name='payment_method']:checked").val());
            formData.append('book_now', true);

            first_name.attr("disabled", true);
            last_name.attr("disabled", true);
            email_address.attr("disabled", true);
            mobile_number.attr("disabled", true);
            appointment_date.attr("disabled", true);
            contact_method.attr("disabled", true);
            payment_method.attr("disabled", true);
            reasons.attr("disabled", true);

            submit.attr("disabled", true);
            submit.text("Processing Request...");

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

        $("#contact_us_form").submit(function() {
            var name = $("#contact_us_name");
            var email = $("#contact_us_email");
            var message = $("#contact_us_message");
            var submit = $("#contact_us_submit");

            var formData = new FormData();

            formData.append('name', name.val());
            formData.append('email', email.val());
            formData.append('message', message.val());
            formData.append('contact_us', true);

            name.attr("disabled", true);
            email.attr("disabled", true);
            message.attr("disabled", true);

            submit.attr("disabled", true);
            submit.text("Processing Request...");

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

        $(".view_application_details").click(function() {
            var parent_tr = $(this).parent("td").parent("tr");
            var last_name = parent_tr.children("td.last_name").children("a").text();
            var first_name = parent_tr.children("td.first_name").text();
            var email_address = parent_tr.children("td.email_address").text();
            var mobile_number = parent_tr.children("td.mobile_number").text();
            var medical_license_number = parent_tr.children("td.medical_license_number").text();
            var specialization = parent_tr.children("td.specialization").text();
            var description = parent_tr.children("td.description").text();

            $("#application_details_first_name").text(first_name);
            $("#application_details_last_name").text(last_name);
            $("#application_details_email_address").text(email_address);
            $("#application_details_mobile_number").text(mobile_number);
            $("#application_details_medical_license_number").text(medical_license_number);
            $("#application_details_specialization").text(specialization);
            $("#application_details_description").text(description);
        })

        $(".view_appointment_details").click(function() {
            var parent_tr = $(this).parent("td").parent("tr");
            var last_name = parent_tr.children("td.last_name").children("a").text();
            var first_name = parent_tr.children("td.first_name").text();
            var email_address = parent_tr.children("td.email_address").text();
            var mobile_number = parent_tr.children("td.mobile_number").text();
            var appointment_date = parent_tr.children("td.appointment_date").text();
            var contact_method = parent_tr.children("td.contact_method").text();
            var reasons = parent_tr.children("td.reasons").text();
            var payment_method = parent_tr.children("td.payment_method").text();

            $("#appointment_details_first_name").text(first_name);
            $("#appointment_details_last_name").text(last_name);
            $("#appointment_details_email_address").text(email_address);
            $("#appointment_details_mobile_number").text(mobile_number);
            $("#appointment_details_appointment_date").text(appointment_date);
            $("#appointment_details_contact_method").text(contact_method);
            $("#appointment_details_reasons").text(reasons);
            $("#appointment_details_payment_method").text(payment_method);
        })

        $(".view_message_details").click(function() {
            var parent_tr = $(this).parent("td").parent("tr");
            var name = parent_tr.children("td.name").children("a").text();
            var email = parent_tr.children("td.email").text();
            var message = parent_tr.children("td.message").text();

            $("#message_details_name").text(name);
            $("#message_details_email").text(email);
            $("#message_details_message").text(message);
        })

        function formatDate(inputDate) {
            const months = [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ];

            const date = new Date(inputDate);
            const monthName = months[date.getMonth()];
            const day = date.getDate();
            const year = date.getFullYear();
            let hours = date.getHours();
            const minutes = (date.getMinutes() < 10 ? '0' : '') + date.getMinutes();
            const amOrPm = hours >= 12 ? 'PM' : 'AM';

            // Convert hours to 12-hour format
            hours = hours % 12 || 12;

            const formattedDate = `${monthName} ${day}, ${year} ${hours}:${minutes} ${amOrPm}`;
            return formattedDate;
        }

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