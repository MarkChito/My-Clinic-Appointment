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

<?php if (!isset($_SESSION['id'])) : ?>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xl-6">
                    <div class="mb-5 mb-lg-0 text-center text-xl-start">
                        <h1 class="display-1 1h-1 mb-3">The fastest way to consult your doctor.</h1>
                        <p class="lead fw-normal text-muted mb-5">Your health is our priority, and MyClinicAppointment makes it easy anytime, anywhere, and everywhere!</p>
                        <div class="d-flex flex-column flex-xl-row align-items-center">
                            <button class="btn btn-primary rounded-pill mb-2 me-2 mb-xl-0 d-flex justify-content-center align-items-center" style="width: 125px;" data-bs-toggle="modal" data-bs-target="#book_now">
                                <span class="d-flex align-items-center text-center">
                                    <i class="fas fa-book me-2"></i>
                                    <span class="small">Book Now</span>
                                </span>
                            </button>
                            <button class="btn btn-primary rounded-pill mb-2 me-2 mb-xl-0 d-flex justify-content-center align-items-center" style="width: 125px;" data-bs-toggle="modal" data-bs-target="#join_us">
                                <span class="d-flex align-items-center text-center">
                                    <i class="fas fa-users me-2"></i>
                                    <span class="small">Join Us</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <!-- Logo -->
                    <img src="./assets/img/logo.png" alt="..." class="w-100">
                </div>
            </div>
        </div>
    </header>

    <!-- About Us, Our Commitment, Why Choose Us -->
    <aside class=" bg-gradient-primary-to-secondary" id="about_us">
        <div class="container px-5">
            <div class="h1 fs-1 text-white text-lg-center text-start">About Us</div>
            <div class="fs-5 text-white mb-5">"Welcome to MyClinicAppointment, where we are dedicated to revolutionizing the way you access healthcare. Our mission is to make healthcare convenient, accessible, and patient-centered. Whether you're seeking a routine check-up or specialized care, we are here to streamline the appointment process for you."</div>
        </div>
        <div class="container px-5">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="h1 fs-1 text-white mb-1">Our Commitment</div>
                    <div class="fs-5 text-white mb-5">At MyClinicAppointment, we prioritize your well-being. Our commitment is to provide a seamless online experience that connects you with qualified healthcare professionals. We understand the importance of timely access to medical care, and our platform is designed to make scheduling appointments quick and hassle-free.</div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="h1 fs-1 text-white mb-1">Why Choose Us</div>
                    <div class="fs-5 text-white mb-5">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <b>Convenience:</b> Schedule appointments from the comfort of your home, eliminating the need for long waiting times and tedious paperwork.
                            </div>
                            <div class="col-12 mb-2">
                                <b>Quality Care:</b> We partner with a network of trusted healthcare providers who are committed to delivering high-quality, patient-centric care.
                            </div>
                            <div class="col-12">
                                <b>Accessibility:</b> Our platform is designed to be user-friendly, ensuring that everyone can easily navigate and schedule appointments, regardless of their technical expertise.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Our Team -->
    <section id="our_team" class="bg-light">
        <div class="container px-5">
            <div class="h1 fs-1 text-center mb-5">Meet Our Team</div>

            <div class="row gx-5 align-items-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xxl-3 col-md-6 col-12 text-center">
                            <img class="img-thumbnail mb-2" src="assets/img/team/kate.png" style="width:100%; height:300px;">
                            <h3 class="font-alt mb-0">Katherine Tungol</h3>
                            <p>Project Lead</p>
                        </div>
                        <div class="col-xxl-3 col-md-6 col-12 text-center">
                            <img class="img-thumbnail mb-2" src="assets/img/team/errol.png" style="width:100%; height:300px;">
                            <h3 class="font-alt mb-0">Errol Valencia</h3>
                            <p>Project Editor</p>
                        </div>
                        <div class="col-xxl-3 col-md-6 col-12 text-center">
                            <img class="img-thumbnail mb-2" src="assets/img/team/nario.png" style="width:100%; height:300px;">
                            <h3 class="font-alt mb-0">Emmanuel Nario</h3>
                            <p>Project Editor</p>
                        </div>
                        <div class="col-xxl-3 col-md-6 col-12 text-center">
                            <img class="img-thumbnail mb-2" src="assets/img/team/erica.png" style="width:100%; height:300px;">
                            <h3 class="font-alt mb-0">Erica Mamanao</h3>
                            <p>Project Team Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-xxl-3 col-md-6 col-12 text-center">
                            <img class="img-thumbnail mb-2" src="assets/img/team/errianie.png" style="width:100%; height:300px;">
                            <h3 class="font-alt mb-0">Errianie Opima</h3>
                            <p>Project Team Member</p>
                        </div>
                        <div class="col-xxl-3 col-md-6 col-12 text-center">
                            <img class="img-thumbnail mb-2" src="assets/img/team/rica.png" style="width:100%; height:300px;">
                            <h3 class="font-alt mb-0">Rica Sobretodo</h3>
                            <p>Project Team Member</p>
                        </div>
                        <div class="col-xxl-3 col-md-6 col-12 text-center">
                            <img class="img-thumbnail mb-2" src="assets/img/team/marc.png" style="width:100%; height:300px;">
                            <h3 class="font-alt mb-0">Marc San Antonio</h3>
                            <p>Project Team Member</p>
                        </div>
                        <div class="col-xxl-3 col-md-6 col-12 text-center">
                            <img class="img-thumbnail mb-2" src="assets/img/team/namy.png" style="width:100%; height:300px;">
                            <h3 class="font-alt mb-0">Namy Baldado</h3>
                            <p>Project Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Doctors -->
    <section class="bg-gradient-primary-to-secondary" id="our_doctors">
        <div class="container px-5">
            <div class="h1 fs-1 text-center mb-5 text-white">Meet Our Doctors</div>

            <div id="doctorCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/munchkin.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Munchkin</h3>
                                        <p class="truncate-lines ">Dr. Munchkin is a highly skilled and compassionate pediatrician with over 10 years of experience. She completed her medical degree at Harvard University and completed her pediatric residency at ABC Hospital. Dr. Munchkin is board-certified in pediatrics and is an active member of the Norway Academy of Pediatrics.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/team/errol.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Sugarplum</h3>
                                        <p class="truncate-lines ">Dr. Sugarplum is a dedicated and experienced obstetrician-gynecologist (OB-GYN) with a passion for providing comprehensive care to women throughout all stages of their lives. She received her medical degree from Harvard University and completed her residency training in Obstetrics and Gynecology at RRS Hospital.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/emillia.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Emillia Lawrence</h3>
                                        <p class="truncate-lines ">Dr. Emillia Lawrence is a dedicated healthcare professional with a passion for holistic patient care. With over 15 years of experience, Dr. Lawrence has honed her skills in diagnosing and treating a wide range of medical conditions while also providing empathetic and effective counseling to her patients.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/doo.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Doo</h3>
                                        <p class="truncate-lines ">Dr. Doo has a special interest in mental health and has helped numerous individuals navigate through life's challenges. With a career spanning over two decades, he continues to make a positive impact on the lives of those he serves.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/james.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. James Reynor</h3>
                                        <p class="truncate-lines ">Dr. James Reynor is a versatile healthcare provider who believes in addressing both the physical and emotional well-being of his patients. He holds degrees in medicine and psychology, allowing him to offer a unique blend of medical expertise and counseling support.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/carter.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Carter</h3>
                                        <p class="truncate-lines ">Dr. Carter has a keen interest in mental health and has assisted numerous individuals in overcoming personal challenges. Her extensive knowledge and empathetic demeanor have made her a trusted figure in her community.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/agnes.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Agnes Mendoza</h3>
                                        <p class="truncate-lines ">She is a doctor who has been in practice for over 12 years.ver her achievements she use a system of alternative medicine based on the theory that diseases can be successfully treated or prevented without the use of drugs, by techniques such as control of diet, exercise, and massage.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/robert.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Robert Tan</h3>
                                        <p class="truncate-lines ">Over the course of his career, Dr. Tan treat both acute and chronic conditions from arthritis to ear infections (otitis media), from HIV to asthma, from congestive heart failure to hepatitis. N.D.s treat the whole.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/benaro.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Benaro</h3>
                                        <p class="truncate-lines ">Dr. Benaro is a registered dietitian (RD) who founded "NutriVitality." With a Master's degree in Nutrition, she offers a holistic approach to nutrition and wellness.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/sarah.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Sarah</h3>
                                        <p class="truncate-lines ">Sarah's practice focuses on whole-food nutrition, mindful eating, and helping clients achieve their health goals through balanced, sustainable dietary choices.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/ward.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Ward</h3>
                                        <p class="truncate-lines ">Dr. Ward's practice aims to unlock the potential of genetic insights to enhance clients' health and well-being. In the realm of modern healthcare, Dr. Ward pioneers innovative practices by harnessing the power of genetic insights. Her visionary approach empowers clients to understand and optimize their genetic makeup, fostering a proactive and personalized path to well-being.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/amber.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Amber</h3>
                                        <p class="truncate-lines ">Dr. Amber, a licensed neuropsychologist, heads the Brain Wellness Center, specializing in assessing and treating neurological conditions and cognitive disorders through comprehensive assessments and cognitive rehabilitation programs, fostering enhanced cognitive functioning and quality of life for her clients.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/shakira.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Shakira</h3>
                                        <p class="truncate-lines ">Dr. Shakira, a licensed sport psychologist, operates Peak Performance Psychology, specializing in enhancing athletes' mental game across all levels, offering performance techniques, mental toughness training, and stress management, including services for sports teams and organizations aiming for a competitive edge.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/mhine.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Mhine</h3>
                                        <p class="truncate-lines ">Dr. Mhine, a licensed clinical psychologist, specializing in holistic mental health, mindfulness, and alternative therapies, offering individual and group sessions for stress reduction, self-care, and personal growth, with a focus on the mind-body connection and techniques like meditation, yoga, and nutritional counseling.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-8 mb-xxl-0 mb-3 text-center">
                                <div class="card">
                                    <div class="card-header bg-gradient-primary-to-secondary">
                                        <img src="assets/img/doctors/baya.png" class="rounded-circle border bg-light" alt="Doctor 1" width="100px" height="100px">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="font-alt">Dr. Baya</h3>
                                        <p class="truncate-lines ">Over the course of his career, Dr. Baya has helped thousands of patients achieve their desired results. He treat both acute and chronic conditions from arthritis to ear infections (otitis media), from HIV to asthma, from congestive heart failure to hepatitis.</p>
                                        <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0 btn_see_more" data-bs-toggle="modal" data-bs-target="#doctor">See More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#doctorCarousel" data-bs-slide="prev" style="color: black;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#doctorCarousel" data-bs-slide="next" style="color: black;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- How it Works -->
    <section class="cta" id="how_it_works">
        <div class="cta-content">
            <div class="container px-5">
                <div class="h1 fs-1 text-center text-white mb-0">How it Works</div>
                <div class="fs-4 text-white text-center mb-5">Schedule Your Online Appointment in Three Simple Steps</div>

                <div class="row gx-3 justify-content-center">
                    <div class="col-xl-6 mb-5 mb-lg-0">
                        <div class="col-xl-auto">
                            <div class="h5 fs-3 text-white">Find Your Ideal Doctor</div>
                            <p class="lead fw-normal text-white "> Browse through our curated list of qualified healthcare professionals. Filter by specialization and availability to find the perfect match for your healthcare needs. Each doctor's profile includes a brief introduction, areas of expertise, and available appointment slots. </p>
                        </div>
                        <div class="col-xl-auto">
                            <div class="h5 fs-3 text-white">Book Your Appointment</div>
                            <p class="lead fw-normal text-white "> Provide essential details such as your name and contact information. Your information is encrypted and confidential,
                                ensuring your privacy and security. Select a convenient date and time from the available slots on the doctor's calendar. </p>
                        </div>
                        <div class="col-xl-auto">
                            <div class="h5 fs-3 text-white">Make A Payment</div>
                            <p class="lead fw-normal text-white ">Cayment, if applicable. You will receive a confirmation email with all the details of your scheduled appointment.</p>
                        </div>
                    </div>

                    <div class="col-xl-6 mt-2">
                        <img class="img-fluid w-100 h-100" src="assets/img/appointment-bg.png" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="bg-light" id="contact_us">
        <div class="container px-5">
            <div class="h1 fs-1 text-center text-dark mb-5">Contact Us</div>

            <div class="row gx-3 justify-content-center">
                <div class="col-xl-6 mb-5">
                    <div class="h5 fs-3 text-dark">Send us a Message</div>
                    <form id="contact_us_form" action="javascript:void(0)">
                        <div class="mb-3">
                            <label for="contact_us_name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="contact_us_name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact_us_email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="contact_us_email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact_us_message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="contact_us_message" rows="8" placeholder="Type your message here" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" id="contact_us_submit">Send Message</button>
                    </form>
                </div>

                <div class="col-xl-6">
                    <div class="h5 fs-3 text-dark">Visit us in Our Office</div>
                    <div class="mt-3">
                        <?php if (!$isLocalhost) : ?>
                            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.3286187910985!2d121.1390722759424!3d14.750506773387253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bbe8733338e5%3A0xc845d7b6001522e1!2sColegio%20de%20Montalban!5e0!3m2!1sen!2sph!4v1699791309462!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <?php else : ?>
                            <img class="img-fluid w-100 h-100" src="./assets/img/map.png" alt="sample map">
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; MyClinicAppointment 2023. All Rights Reserved.</div>
                <a href="privacy.php" target="_blank">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="tnx.php" target="_blank">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="faq.php" target="_blank">FAQ</a>
            </div>
        </div>
    </footer>
    <?php elseif ($_SESSION["usertype"]=="doctor"):?>
        <?php include_once "./application/views/pages/doctor_view.php"; ?>
<?php else : ?>
    <!-- Admin Interface -->
    <?php include_once "./application/views/pages/home_admin_view.php"; ?>
<?php endif ?>

<?php include_once "./application/views/templates/footer.php"; ?>