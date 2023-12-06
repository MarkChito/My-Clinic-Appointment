<?php

include_once "./application/views/templates/header.php";
?>
<section id="our_team" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3" style="background-color: DodgerBlue;">
                <div class="row">
                    <h1 class="text-white">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
        <div class="container"  >
            <div class="col-md-12 py-3 border-bottom">
                <div class="row h1 fs-3" onclick="toggleAnswer('answer1')">What services do you offer?</div>
                <div class="col-md-12 fs-5 mb-5" id="answer1">We offer a variety of cutting-edge services to meet your needs. Explore our services page for more details.</div>
            </div>
            <div class="col-md-12 py-3 border-bottom">
                <div class="row h1 fs-3" onclick="toggleAnswer('answer2')">How do I schedule an appointment online?</div>
                <div class="col-md-12 fs-5 mb-5" id="answer2"><h4>You can easily schedule an appointment without creating a user account. Follow these steps:</h4>
                    <p>You click on our Book Now button available on our home page</p>
                    <p>Select a suitable date and time for your appointment.</p>
                    <p>Provide the necessary information to confirm your appointment.</p>
                    <p>A message with next step instructions will be sent to your provided contact method.</p>
                </div>
            </div>
            <div class="col-md-12 py-3 border-bottom">
                <div class="row h1 fs-3" onclick="toggleAnswer('answer3')">Can I cancel or reschedule an appointment?</div>
                <div class="col-md-12 fs-5 mb-5" id="answer3">Yes, you can cancel or reschedule appointments. Use the confirmation message you receive after booking to access cancellation and rescheduling options.</div>
            </div>
            <div class="col-md-12 py-3 border-bottom">
                <div class="row h1 fs-3" onclick="toggleAnswer('answer4')">Is my personal and health information secure on the website?</div>
                <div class="col-md-12 fs-5 mb-5" id="answer4">We take your privacy seriously. Our website employs advanced security measures to protect your personal and health information. We adhere to strict privacy policies and comply with relevant data protection regulations.</div>
            </div>
            <div class="col-md-12 py-3 border-bottom">
                <div class="row h1 fs-3" onclick="toggleAnswer('answer5')">How can I access my appointment details and medical records?</div>
                <div class="col-md-12 fs-5 mb-5" id="answer5">Your appointment details will be included in the confirmation email sent after booking.</div>
            </div>
            <div class="col-md-12 py-3 border-bottom">
                <div class="row h1 fs-3" onclick="toggleAnswer('answer6')">What should I do if I encounter technical issues during the appointment booking process?</div>
                <div class="col-md-12 fs-5 mb-5" id="answer6">If you experience technical issues, please reach out to our customer support team. They will assist you in resolving any problems and ensure a smooth appointment booking experience.</div>
            </div>
            <div class="col-md-12 py-3 border-bottom">
                <div class="row h1 fs-3" onclick="toggleAnswer('answer7')">Are virtual (telehealth) appointments available?</div>
                <div class="col-md-12 fs-5 mb-5" id="answer7">Yes, our website offers virtual appointments for select healthcare services. You can choose the option for a virtual consultation during the appointment booking process.</div>
            </div>
            <div class="col-md-12 py-3 border-bottom">
                <div class="row h1 fs-3" onclick="toggleAnswer('answer8')">How do I provide feedback about my appointment experience?</div>
                <div class="col-md-12 fs-5 mb-5" id="answer8">We welcome your feedback. After your appointment, you may receive a survey or feedback form via email. Additionally, you can contact our customer support team to share your thoughts or suggestions.</div>
            </div>
            <div class="col-md-12 py-3 border-bottom">
                <div class="row h1 fs-3" onclick="toggleAnswer('answer9')">What insurance plans are accepted by the clinics on the platform?</div>
                <div class="col-md-12 fs-5 mb-5" id="answer9">The accepted insurance plans may vary among healthcare providers. Please check with the specific clinic or healthcare professional during the appointment booking process or contact them directly for insurance-related inquiries.</div>
            </div>

        <!-- Add more FAQ items as needed -->

    </div>

    <script>
        function toggleAnswer(answerId) {
            var answer = document.getElementById(answerId);
            answer.style.display = (answer.style.display === 'none') ? 'block' : 'none';
        }
    </script>
        </div>
    </div>
</section>