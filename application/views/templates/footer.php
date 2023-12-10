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
                    <div class="form-floating mb-3">
                        <h5>Upload Documents</h5>
                        <input class="form-control" type="file" id="fileInput" name="fileInput" accept=".pdf, .doc, .docx, .txt">
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
                    <div class="row">
                        <div class="col-auto mb-3">
                            <div class="form-floating">
                                <small class="text-success">
                                    <strong>Note:</strong>
                                    Welcome to MyClinicAppointment Online Specialty Consultation Scheduler.
                                    This form is for sending your appointment request, which will still be process and confirmed by the MyClinicAppointment staff. After sending your request, allow our team to review your request for 2-4 hours (within the operational hours of 8AM to 5PM) to contact you via email, call or text.
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="mb-lg-3 mb-0">
                        <p class="h5 fs-5">Patient Details</p>
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
                        <div class="row mb-lg-3 mb-0">
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="book_now_dob" type="date" placeholder="MM/DD/YYYY" required />
                                    <label for="book_now_dob">Date of Birth (MM/DD/YYYY)</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <select class="form-select" id="book_now_gender" required>
                                        <option value="" disabled selected>Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <label for="book_now_gender">Gender</label>
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
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="book_now_doctor_specialization" required>
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
                                    <label for="book_now_doctor_specialization">Specialization</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="book_now_doctor_name" disabled required>
                                        <option value="" disabled selected>Choose...</option>
                                    </select>
                                    <label for="book_now_doctor_name">Doctor</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-lg-3 mb-0">
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="book_now_appointment_date" type="date" required />
                                    <label for="book_now_appointment_date">Appointment Date</label>
                                </div>
                                <small class="text-danger d-none" id="error_book_now_appointment_date">Invalid Appointment Date</small>
                            </div>
                            <div class="col-lg-6 col-12 mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <input class="form-control" id="book_now_appointment_time" type="time" required />
                                    <label for="book_now_appointment_time">Appointment Time</label>
                                </div>
                                <small class="text-danger d-none" id="error_book_now_appointment_time">Time should be between 8 AM and 5 PM</small>
                            </div>
                        </div>
                        <div class="row mb-lg-3 mb-0">
                            <div class="col mb-lg-0 mb-3">
                                <div class="form-floating">
                                    <select class="form-select" id="book_now_contact_method" required>
                                        <option value="" disabled selected>Choose...</option>
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
                                    <textarea class="form-control" id="book_now_reasons" style="height: 6rem;" placeholder="..." required></textarea>
                                    <label for="book_now_reasons">Reason/s for arranging this appointment</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TNC&PP -->
                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" id="privacy_and_terms" required />
                        <label class="form-check-label" for="privacy_and_terms">
                            I have read, understood, and accepted the <a href="privacy.php" target="_blank">Privacy Policy</a> and <a href="tnx.php" target="_blank">Terms & Conditions</a>.
                        </label>
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
                <div class="col-12 py-3">
                    <h3>Select a Message Template</h3>
                    <form>
                        <label for="template">
                            <h5>Choose a template:</h5>
                        </label>
                        <select id="template" name="template">
                            <option value="template1">Request for Additional Documents</option>
                            <option value="template2">Important Announcement</option>
                            <option value="template3">Thank you letter</option>
                        </select>
                        <br>
                        <label for="message">Your Message:</label>
                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="Write your message here..."></textarea>
                        <br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary rounded-pill" data-bs-dismiss="modal">Send</button>
                        </div>
                        <script>
                            var templateDropdown = document.getElementById('template');
                            var messageTextarea = document.getElementById('message');
                            templateDropdown.addEventListener('change', function() {
                                var selectedTemplate = templateDropdown.value;
                                switch (selectedTemplate) {
                                    case 'template1':
                                        messageTextarea.value = 'Subject: Request for Additional Documents - Doctors Application\n\nDear [Recipient].,\n\nI trust this letter finds you well. We appreciate the time and effort you have invested in your application at our website. We have carefully reviewed your initial submission and are interested in moving forward with your application.\n\nHowever, to proceed with the evaluation process, we kindly request the submission of the following additional documents:\n\n [Insert Needed Document]\n\nKindly submit the requested documents to our official email address\nEmail: myclinicappointment.123@gmail.com\nAnd feel free to contact us at our website Contact Us Page if you have any questions or need further clarification.\n\nSincerely,\nMyClinicAppointment Staff\n\n This email is system generated. Do not reply.';
                                        break;
                                    case 'template2':
                                        messageTextarea.value = 'Subject: Important Announcement\n\nDear [Recipient],\n\nI am writing to inform you about [important information].\n\nPlease feel free to contact us at our website Contact Us Page if you have any questions or need further clarification.\n\nBest regards,\nMyClinicAppointment Staff';
                                        break;
                                    case 'template3':
                                        messageTextarea.value = 'Dear [Recipient],\n\nThank you for your recent [action]. Your [efforts/contribution] are greatly appreciated.\n\nKind regards,\nMyClinicAppointment Staff';
                                        break;
                                    default:
                                        messageTextarea.value = ''; // Default to an empty message
                                }
                            });
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Appointils Modal -->
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

<!-- Admin Modal -->
<div class="modal fade" id="admin_details" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Administrator Details</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <div class="card">
                    <div class="card-header bg-gradient-primary-to-secondary text-center">
                        <img id="admin_image_display" class="rounded-circle border bg-light" alt="Doctor 1" width="200px" height="200px">
                    </div>
                    <div class="card-body">

                        <div class="mb-2">
                            <strong style="display: inline-block; margin-right: 5px;">Name:</strong>
                            <p id="admin_name" class="inline-value" style="display: inline;"></p>
                        </div>

                        <div class="mb-2">
                            <strong style="display: inline-block; margin-right: 5px;">Email:</strong>
                            <p id="admin_email" class="inline-value" style="display: inline;"></p>
                        </div>

                        <div class="mb-2">
                            <strong style="display: inline-block; margin-right: 5px;">Username:</strong>
                            <p id="admin_username" class="inline-value" style="display: inline;"></p>
                        </div>

                        <div class="mb-2">
                            <strong style="display: inline-block; margin-right: 5px;">Password:</strong>
                            <p id="admin_password" class="inline-value text-muted" style="display: inline;">********************</p>
                        </div>

                        <div>
                            <strong style="display: inline-block; margin-right: 5px;">Image:</strong>
                            <p id="admin_image" class="inline-value" style="display: inline;"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- New Admin Modal -->
<div class="modal fade" id="new_administrator" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">New Administrator</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form id="new_admin_form" action="javascript:void(0)">
                    <div class="mb-3">
                        <div class="text-center">
                            <img id="new_admin_image_display" class="rounded-circle border" width="200px" height="200px" src="./assets/img/default_image_user.png">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <input type="file" id="new_admin_image" class="form-control" accept=".jpg, .jpeg, .png" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="new_admin_name" type="text" placeholder="..." required />
                        <label for="new_admin_name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="new_admin_username" type="text" placeholder="..." required />
                        <label for="new_admin_username">Username</label>
                        <small class="text-danger d-none" id="new_admin_error_username">Username already exists!</small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="new_admin_password" type="password" placeholder="..." required />
                        <label for="new_admin_password">Password</label>
                        <small class="text-danger d-none" id="new_admin_error_password">Password do not match!</small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="new_admin_confirm_password" type="password" placeholder="..." required />
                        <label for="new_admin_confirm_password">Confirm Password</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary rounded-pill btn-lg" id="new_admin_submit" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Admin Modal -->
<div class="modal fade" id="update_administrator" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Update Administrator</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form id="update_admin_form" action="javascript:void(0)">
                    <div class="mb-3">
                        <div class="text-center">
                            <img id="update_admin_image_display" class="rounded-circle border" width="200px" height="200px" src="./assets/img/default_image_user.png">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <input type="file" id="update_admin_image" class="form-control" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_admin_name" type="text" placeholder="..." required />
                        <label for="update_admin_name">Name</label>
                    </div>
                    <!--
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_admin_email" type="email" placeholder="..." required />
                        <label for="update_admin_name">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_admin_number" type="number" placeholder="..." required />
                        <label for="update_admin_name">Mobile Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_admin_payroll" type="text" placeholder="..." required />
                        <label for="update_admin_name">payroll</label>
                    </div>

                        -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_admin_username" type="text" placeholder="..." required />
                        <label for="update_admin_username">Username</label>
                        <small class="text-danger d-none" id="update_admin_error_username">Username already exists!</small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_admin_password" type="password" placeholder="..." />
                        <label for="update_admin_password">Password</label>
                        <small class="text-danger d-none" id="update_admin_error_password">Password do not match!</small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_admin_confirm_password" type="password" placeholder="..." />
                        <label for="update_admin_confirm_password">Confirm Password</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary rounded-pill btn-lg" id="update_admin_submit" type="submit">Submit</button>
                        <input type="hidden" id="update_admin_old_username">
                        <input type="hidden" id="update_admin_id">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Home Admin Modal -->
<div class="modal fade" id="update_home_administrator" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Update Administrator</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form id="update_home_admin_form" action="javascript:void(0)">
                    <div class="mb-3">
                        <div class="text-center">
                            <img id="update_home_admin_image_display" class="rounded-circle border" width="200px" height="200px" src="./assets/img/default_image_user.png">
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <input type="file" id="update_home_admin_image" class="form-control" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_home_admin_name" type="text" placeholder="..." required />
                        <label for="update_home_admin_name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_home_admin_email" type="email" placeholder="..." required />
                        <label for="update_home_admin_name">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_home_admin_mobile_number" type="text" placeholder="..." required />
                        <label for="update_home_admin_name">Mobile Number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_home_admin_username" type="text" placeholder="..." required />
                        <label for="update_home_admin_username">Username</label>
                        <small class="text-danger d-none" id="update_home_admin_error_username">Username already exists!</small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_home_admin_password" type="password" placeholder="..." />
                        <label for="update_home_admin_password">Password</label>
                        <small class="text-danger d-none" id="update_home_admin_error_password">Password do not match!</small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="update_home_admin_confirm_password" type="password" placeholder="..." />
                        <label for="update_home_admin_confirm_password">Confirm Password</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary rounded-pill btn-lg" id="update_home_admin_admin_submit" type="submit">Submit</button>
                        <input type="hidden" id="update_home_admin_old_username">
                        <input type="hidden" id="update_home_admin_id">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Doctor's Temporary User Account Modal -->
<div class="modal fade" id="doctor_temp_useraccount" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Doctor Temporary Account</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form id="doctor_temp_useraccount_form" action="./application/controllers/controller.php" method="POST">
                    <div class="form-floating mb-3">
                        <input class="form-control" name="doctor_temp_useraccount_username" id="doctor_temp_useraccount_username" type="text" placeholder="..." required />
                        <label for="doctor_temp_useraccount_username">Username</label>
                        <small class="text-danger d-none" id="doctor_temp_useraccount_error_username">Username already exists</small>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="doctor_temp_useraccount_password" id="doctor_temp_useraccount_password" type="password" placeholder="..." required />
                        <label for="doctor_temp_useraccount_password">Password</label>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="doctor_temp_useraccount_id" id="doctor_temp_useraccount_id">
                        <input type="hidden" name="doctor_temp_useraccount_name" id="doctor_temp_useraccount_name">
                        <input type="hidden" name="doctor_temp_useraccount_email" id="doctor_temp_useraccount_email">
                        <input type="hidden" name="doctor_temp_useraccount_mobile_num" id="doctor_temp_useraccount_mobile_num">
                        <input type="hidden" name="doctor_temp_useraccount_specialization" id="doctor_temp_useraccount_specialization">
                        <input type="hidden" name="approve_application" value="true">
                        <button type="submit" class="btn btn-primary rounded-pill btn-lg" id="doctor_temp_useraccount_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Doctor's Schedule Modal -->
<div class="modal fade" id="update_doctor_schedule_by_date_and_time" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">My Schedule</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form id="update_doctor_schedule_form" action="javascript:void(0)">
                    <div class="form-floating mb-3">
                        <div class="col-lg-12 col-12">
                            <p class="h5 fs-5">Weekly Schedule</p>
                            <div class="mt-3">
                                <select class="form-select py-3" id="update_doctor_schedule_by_date_and_time_week" required>
                                    <option value disabled selected>-- Select Day --</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mt-3">
                        <div class="col-lg-12 col-12">
                            <p class="h5 fs-5">Start Time</p>
                        </div>
                        <div class="mt-3">
                            <input class="form-control py-3" id="update_doctor_schedule_by_date_and_time_time_in" type="time" required>
                        </div>
                    </div>
                    <div class="form-floating mt-3">
                        <div class="col-lg-12 col-12">
                            <p class="h5 fs-5">End Time</p>
                        </div>
                        <div class="mt-3">
                            <input class="form-control py-3" id="update_doctor_schedule_by_date_and_time_time_out" type="time" required>
                        </div>
                    </div>

                    <input type="hidden" id="update_doctor_schedule_by_date_and_time_useraccount_id">

                    <div class="d-grid mt-3"><button class="btn btn-primary rounded-pill btn-lg" id="update_doctor_schedule_by_date_and_time_submit" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Notifications List Modal -->
<div class="modal fade" id="notifications_list" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Notifications</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <ul class="list-group">
                    <?php foreach ($notifications_all as $notification) : ?>
                        <li class="list-group-item <?= $notification->status == 'unclicked' ? 'unread' : 'read' ?>">
                            <a href="#" class="text-decoration-none">
                                <h5 class="mb-1"><?= $notification->title ?></h5>
                                <p class="mb-1"><?= $notification->details ?></p>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger rounded-pill" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Update Doctor's Profile Modal -->
<div class="modal fade" id="update_doctor_profile" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary-to-secondary p-4">
                <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Edit Profile</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form id="update_doctor_form" action="javascript:void(0)">
                    <div class="text-center">
                        <img id="update_doctor_image_display" class="rounded-circle border" width="200px" height="200px" src="./assets/img/default_image_user.png">
                    </div>
                    <div class="form-group mt-3 mb-3">
                        <div class="input-group">
                            <input type="file" id="update_doctor_image" class="form-control" accept=".jpg, .jpeg, .png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="update_doctor_name" type="text" placeholder="..." />
                                <label for="update_doctor_name">Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="update_doctor_email" type="email" placeholder="@gmail.com" />
                                <label for="update_doctor_email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="update_doctor_contact" type="tel" placeholder="123-456-7890" />
                                <label for="update_doctor_contact">Contact Number</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="update_doctor_fee" type="tel" placeholder="5000" />
                                <label for="update_doctor_contact">Consulatant Fee</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="update_doctor_specialization" required>
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
                                <label for="update_doctor_specialization">Specialization</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="update_doctor_username" type="text" placeholder="..." />
                                <label for="update_doctor_username">Username</label>
                                <small class="text-danger d-none" id="update_doctor_error_username">Username already exists!</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="update_doctor_password" type="password" placeholder="..." />
                                <label for="update_doctor_password">Password</label>
                                <small class="text-danger d-none" id="update_doctor_error_password">Password do not match!</small>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="update_doctor_confirm_password" type="password" placeholder="..." />
                                <label for="update_doctor_confirm_password">Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary rounded-pill btn-lg" id="update_doctor_submit" type="submit">Submit</button>
                        <input type="hidden" id="update_doctor_old_username">
                        <input type="hidden" id="update_doctor_id">
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
        var id = "<?= isset($_SESSION['id']) ? $_SESSION['id'] : null ?>";

        var server = "./application/controllers/controller.php";

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
            var parent_tr = $(this).parent("div").parent("td").parent("tr");
            var parent_td = $(this).parent("div").parent("td");
            var approve_reject_btn = parent_td.find(".approve_reject_btn");

            var id = $(this).attr("application_id");
            var last_name = $(this).attr("application_last_name");
            var first_name = $(this).attr("application_first_name");
            var email = $(this).attr("application_email");
            var mobile_num = $(this).attr("application_mobile_number");
            var specialization = $(this).attr("application_specialization");

            $("#doctor_temp_useraccount_id").val(id);
            $("#doctor_temp_useraccount_name").val(first_name + " " + last_name);
            $("#doctor_temp_useraccount_email").val(email);
            $("#doctor_temp_useraccount_mobile_num").val(mobile_num);
            $("#doctor_temp_useraccount_specialization").val(specialization);
        })

        $("#doctor_temp_useraccount_form").submit(function() {
            $("#doctor_temp_useraccount_submit").text("Processing Request...");
            $("#doctor_temp_useraccount_submit").attr("disabled", true);
        })

        $("#doctor_temp_useraccount_username").keypress(function() {
            $("#doctor_temp_useraccount_error_username").addClass("d-none");
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
            var doctor_specialization = $("#book_now_doctor_specialization");
            var doctor_name = $("#book_now_doctor_name");
            var appointment_date = $("#book_now_appointment_date");
            var appointment_time = $("#book_now_appointment_time");
            var contact_method = $("#book_now_contact_method");
            var reasons = $("#book_now_reasons");
            var submit = $("#book_now_submit");

            if (validate_date(appointment_date.val())) {
                if (validateTime(appointment_time.val())) {
                    var formData = new FormData();

                    formData.append('first_name', first_name.val());
                    formData.append('last_name', last_name.val());
                    formData.append('email_address', email_address.val());
                    formData.append('mobile_number', mobile_number.val());
                    formData.append('doctor_specialization', doctor_specialization.val());
                    formData.append('doctor_name', doctor_name.val());
                    formData.append('appointment_date', appointment_date.val());
                    formData.append('appointment_time', appointment_time.val());
                    formData.append('contact_method', contact_method.val());
                    formData.append('reasons', reasons.val());
                    formData.append('book_now', true);

                    first_name.attr("disabled", true);
                    last_name.attr("disabled", true);
                    email_address.attr("disabled", true);
                    mobile_number.attr("disabled", true);
                    doctor_specialization.attr("disabled", true);
                    doctor_name.attr("disabled", true);
                    appointment_date.attr("disabled", true);
                    appointment_time.attr("disabled", true);
                    contact_method.attr("disabled", true);
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
                } else {
                    $("#error_book_now_appointment_time").removeClass("d-none");
                }
            } else {
                $("#error_book_now_appointment_date").removeClass("d-none");
            }
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

        $(".view_admin_details").click(function() {
            var parent_tr = $(this).parent("td").parent("tr");
            var name = parent_tr.children("td.name").children("a").text();
            var username = parent_tr.children("td.username").text();
            var image = parent_tr.children("td.image").text();

            $("#admin_image").text(image ? image : "Not Yet Available");
            $("#admin_name").text(name);
            $("#admin_username").text(username);

            if (!image) {
                image = "./assets/img/default_image_user.png";
            } else {
                image = "./assets/img/admins/" + image;
            }

            $("#admin_image_display").attr("src", image);
        })

        $("#update_home_admin").click(function() {
            var id = $(this).attr("admin_id");
            var name = $(this).attr("admin_name");
            var email = $(this).attr("admin_email");
            var mobile_number = $(this).attr("admin_mobile_number");
            var username = $(this).attr("admin_username");
            var image = $(this).attr("admin_image");

            $("#update_home_admin_id").val(id);
            $("#update_home_admin_name").val(name);
            $("#update_home_admin_email").val(email);
            $("#update_home_admin_mobile_number").val(mobile_number);
            $("#update_home_admin_username").val(username);
            $("#update_home_admin_old_username").val(username);

            $("#update_home_admin_image_display").attr("src", "./assets/img/admins/" + image);
        })

        $("#new_admin_image").change(function() {
            var image = $("#new_admin_image")[0].files[0];

            $('#new_admin_image_display').attr('src', window.URL.createObjectURL(image));
        })

        $("#new_admin_form").submit(function() {
            var name = $("#new_admin_name").val();
            var username = $("#new_admin_username").val();
            var password = $("#new_admin_password").val();
            var confirm_password = $("#new_admin_confirm_password").val();
            var image = $("#new_admin_image")[0].files[0];

            var errors = 0;

            if (password != confirm_password) {
                $("#new_admin_error_password").removeClass("d-none");

                errors++;
            }

            if (errors == 0) {
                $("#new_admin_submit").text("Processing Request...");
                $("#new_admin_submit").attr("disabled", true);

                var formData = new FormData();

                formData.append('new_admin_name', name);
                formData.append('new_admin_username', username);
                formData.append('new_admin_password', password);
                formData.append('new_admin_image', image);
                formData.append('new_admin', true);

                $.ajax({
                    url: './application/controllers/controller.php',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response) {
                            location.href = "./administrators";
                        } else {
                            $("#new_admin_error_username").removeClass("d-none");

                            $("#new_admin_submit").text("Submit");
                            $("#new_admin_submit").removeAttr("disabled");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }
        })

        $("#new_admin_username").on("keypress", function() {
            $("#new_admin_error_username").addClass("d-none");
        })

        $("#new_admin_password").on("keypress", function() {
            $("#new_admin_error_password").addClass("d-none");
        })

        $("#new_admin_confirm_password").on("keypress", function() {
            $("#new_admin_error_password").addClass("d-none");
        })

        $(".update_admin").click(function() {
            var parent_tr = $(this).parent("td").parent("tr");
            var name = parent_tr.children("td.name").children("a").text();
            var username = parent_tr.children("td.username").text();
            var image = parent_tr.children("td.image").text();
            var id = $(this).attr("administrator_id");

            $("#update_admin_id").val(id);
            $("#update_admin_name").val(name);
            $("#update_admin_username").val(username);
            $("#update_admin_old_username").val(username);
            $("#update_admin_image_display").attr("src", "./assets/img/admins/" + image);
        })

        $("#update_admin_image").change(function() {
            var image = $("#update_admin_image")[0].files[0];

            $('#update_admin_image_display').attr('src', window.URL.createObjectURL(image));
        })

        $("#update_home_admin_image").change(function() {
            var image = $("#update_home_admin_image")[0].files[0];

            $('#update_home_admin_image_display').attr('src', window.URL.createObjectURL(image));
        })

        $("#update_doctor_image").change(function() {
            var image = $("#update_doctor_image")[0].files[0];

            $('#update_doctor_image_display').attr('src', window.URL.createObjectURL(image));
        })

        $("#update_admin_form").submit(function() {
            var id = $("#update_admin_id").val();
            var name = $("#update_admin_name").val();
            var username = $("#update_admin_username").val();
            var old_username = $("#update_admin_old_username").val();
            var password = $("#update_admin_password").val();
            var confirm_password = $("#update_admin_confirm_password").val();
            var image = $("#update_admin_image")[0].files[0];

            var errors = 0;

            if ((password || confirm_password) && (password != confirm_password)) {
                $("#update_admin_error_password").removeClass("d-none");

                errors++;
            }

            if (errors == 0) {
                $("#update_admin_submit").text("Processing Request...");
                $("#update_admin_submit").attr("disabled", true);

                var formData = new FormData();

                formData.append('update_admin_id', id);
                formData.append('update_admin_name', name);
                formData.append('update_admin_username', username);
                formData.append('update_admin_old_username', old_username);
                formData.append('update_admin_password', password);
                formData.append('update_admin_image', image);
                formData.append('update_admin', true);

                $.ajax({
                    url: './application/controllers/controller.php',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response) {
                            location.href = "./administrators";
                        } else {
                            $("#update_admin_error_username").removeClass("d-none");

                            $("#update_admin_submit").text("Submit");
                            $("#update_admin_submit").removeAttr("disabled");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }
        })

        $("#update_home_admin_form").submit(function() {
            var home_id = $("#update_home_admin_id").val();
            var home_name = $("#update_home_admin_name").val();
            var home_email = $("#update_home_admin_email").val();
            var home_mobile_number = $("#update_home_admin_mobile_number").val();
            var home_username = $("#update_home_admin_username").val();
            var home_old_username = $("#update_home_admin_old_username").val();
            var home_password = $("#update_home_admin_password").val();
            var home_confirm_password = $("#update_home_admin_confirm_password").val();
            var home_image = $("#update_home_admin_image")[0].files[0];

            var errors = 0;

            if ((home_password || home_confirm_password) && (home_password != home_confirm_password)) {
                $("#update_home_admin_error_password").removeClass("d-none");

                errors++;
            }

            if (errors == 0) {
                $("#update_home_admin_submit").text("Processing Request...");
                $("#update_home_admin_submit").attr("disabled", true);

                var formData = new FormData();

                formData.append('update_admin_id', home_id);
                formData.append('update_admin_name', home_name);
                formData.append('update_admin_email', home_email);
                formData.append('update_admin_mobile_number', home_mobile_number);
                formData.append('update_admin_username', home_username);
                formData.append('update_admin_old_username', home_old_username);
                formData.append('update_admin_password', home_password);
                formData.append('update_admin_image', home_image);
                formData.append('update_admin', true);

                $.ajax({
                    url: './application/controllers/controller.php',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response) {
                            location.href = "./";
                        } else {
                            $("#update_home_admin_error_username").removeClass("d-none");

                            $("#update_home_admin_home_submit").text("Submit");
                            $("#update_home_admin_home_submit").removeAttr("disabled");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }
        })

        $("#update_admin_username").on("keypress", function() {
            $("#update_admin_error_username").addClass("d-none");
        })

        $("#update_admin_password").on("keypress", function() {
            $("#update_admin_error_password").addClass("d-none");
        })

        $("#update_admin_confirm_password").on("keypress", function() {
            $("#update_admin_error_password").addClass("d-none");
        })

        $(".delete_admin").click(function() {
            var id = $(this).attr("administrator_id");

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    var formData = new FormData();

                    formData.append('id', id);
                    formData.append('delete_admin', true);

                    $.ajax({
                        url: './application/controllers/controller.php',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            location.href = "./administrators"
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                }
            });
        })

        $("#book_now_doctor_specialization").change(function() {
            $("#book_now_doctor_name").removeAttr("disabled");

            var specialization = $(this).val();

            var formData = new FormData();

            formData.append('specialization', specialization);
            formData.append('get_doctor_specialization', true);

            $.ajax({
                url: server,
                data: formData,
                type: 'POST',
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#book_now_doctor_name').empty();

                    $('#book_now_doctor_name').append($('<option>', {
                        value: null,
                        text: "Choose...",
                        disabled: true,
                        selected: true
                    }));
                    if (response) {
                        for (const user of response) {
                            $('#book_now_doctor_name').append($('<option>', {
                                value: user.useraccount_id,
                                text: user.name
                            }));
                        }
                    } else {
                        console.log("test");
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        })

        $("#btn_notification").click(function() {
            console.log("Pressed!");
        })

        $("#doctor_schedule_date_and_time_edit").click(function() {
            var useraccount_id = id;

            $("#update_doctor_schedule_by_date_and_time_useraccount_id").val(useraccount_id);
        })

        $("#update_doctor_schedule_form").submit(function() {
            var useraccount_id = $("#update_doctor_schedule_by_date_and_time_useraccount_id");
            var week = $("#update_doctor_schedule_by_date_and_time_week");
            var time_in = $("#update_doctor_schedule_by_date_and_time_time_in");
            var time_out = $("#update_doctor_schedule_by_date_and_time_time_out");
            var submit = $("#update_doctor_schedule_by_date_and_time_submit");

            submit.text("Processing Request...");
            submit.attr("disabled", true);

            week.attr("disabled", true);
            time_in.attr("disabled", true);
            time_out.attr("disabled", true);

            var formData = new FormData();

            formData.append('useraccount_id', useraccount_id.val());
            formData.append('week', week.val());
            formData.append('time_in', time_in.val());
            formData.append('time_out', time_out.val());
            formData.append('update_doctor_schedule', true);

            $.ajax({
                url: server,
                data: formData,
                type: 'POST',
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function(response) {
                    location.href = "./"
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        })

        $("#book_now_appointment_date").change(function() {
            $("#error_book_now_appointment_date").addClass("d-none");
        })

        $("#book_now_appointment_time").change(function() {
            $("#error_book_now_appointment_time").addClass("d-none");
        })

        $("#btn_my_profile").click(function() {
            var id = $(this).attr("doctor_id");
            var name = $(this).attr("doctor_name");
            var email = $(this).attr("doctor_email");
            var mobile_number = $(this).attr("doctor_mobile_number");
            var payment = $(this).attr("doctor_payment");
            var username = $(this).attr("doctor_username");
            var specialization = $(this).attr("doctor_specialization");
            var image = $(this).attr("doctor_image");

            $("#update_doctor_name").val(name);
            $("#update_doctor_email").val(email);
            $("#update_doctor_contact").val(mobile_number);
            $("#update_doctor_fee").val(payment);
            $("#update_doctor_specialization").val(specialization);
            $("#update_doctor_username").val(username);

            $("#update_doctor_id").val(id);
            $("#update_doctor_old_username").val(username);

            $("#update_doctor_image_display").attr("src", "./assets/img/admins/" + image);
        })

        $("#update_doctor_form").submit(function() {
            var id = $("#update_doctor_id").val();
            var name = $("#update_doctor_name").val();
            var email = $("#update_doctor_email").val();
            var mobile_number = $("#update_doctor_contact").val();
            var payment = $("#update_doctor_fee").val();
            var specialization = $("#update_doctor_specialization").val();
            var username = $("#update_doctor_username").val();
            var password = $("#update_doctor_password").val();
            var confirm_password = $("#update_doctor_confirm_password").val();
            var old_username = $("#update_doctor_old_username").val();
            var image = $("#update_doctor_image")[0].files[0];

            if (password == confirm_password) {
                $("#update_doctor_submit").html("Processing Request...");
                $("#update_doctor_submit").attr("disabled", true);

                var formData = new FormData();

                formData.append('id', id);
                formData.append('name', name);
                formData.append('email', email);
                formData.append('mobile_number', mobile_number);
                formData.append('payment', payment);
                formData.append('specialization', specialization);
                formData.append('username', username);
                formData.append('password', password);
                formData.append('old_username', old_username);
                formData.append('image', image);
                formData.append('update_doctor', true);

                $.ajax({
                    url: server,
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response) {
                            location.href = "./";
                        } else {
                            $("#update_doctor_error_username").removeClass("d-none");
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            } else {
                $("#update_doctor_error_password").removeClass("d-none");
            }
        })

        $("#update_doctor_username").keypress(function() {
            $("#update_doctor_error_username").addClass("d-none");
        })

        $("#update_doctor_password").keypress(function() {
            $("#update_doctor_error_password").addClass("d-none");
        })

        $("#update_doctor_confirm_password").keypress(function() {
            $("#update_doctor_error_password").addClass("d-none");
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

        function validate_date(date) {
            var inputDate = new Date(date);
            var currentDate = new Date();

            if (inputDate < currentDate) {
                return false;
            } else {
                return true;
            }
        }

        function validateTime(time) {
            const startTime = new Date();
            startTime.setHours(8, 0, 0); // Set start time to 8:00 AM

            const endTime = new Date();
            endTime.setHours(17, 0, 0); // Set end time to 5:00 PM

            const userTime = new Date();
            const timeParts = time.split(':');
            userTime.setHours(parseInt(timeParts[0]), parseInt(timeParts[1]), 0); // Parse user input time

            if (userTime >= startTime && userTime <= endTime) {
                return true;
            } else {
                return false;
            }
        }
    })
</script>
</body>

</html>

<?php unset($_SESSION['error']) ?>