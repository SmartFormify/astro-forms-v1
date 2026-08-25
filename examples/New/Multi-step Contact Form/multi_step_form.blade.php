<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Multi-Step Contact Form</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
</head>

<body>

    <main class="form-container">

        <h1>Contact Us</h1>

        <div class="step-indicator">
            Step <span id="currentStep">1</span> of 3
        </div>

        <form
            action="https://api.smartformify.com/YOUR_FORM_ENDPOINT"
            method="POST"
            id="multiStepForm"
        >

            <!-- Step 1 -->
            <div class="step active">

                <h2>Personal Information</h2>

                <label for="name">Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    required
                >

                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >

                <div class="buttons">
                    <span></span>

                    <button type="button" onclick="nextStep()">
                        Next
                    </button>
                </div>

            </div>

            <!-- Step 2 -->
            <div class="step">

                <h2>Contact Details</h2>

                <label for="phone">Phone</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    required
                >

                <label for="subject">Subject</label>
                <input
                    type="text"
                    id="subject"
                    name="subject"
                    required
                >

                <div class="buttons">

                    <button type="button" onclick="previousStep()">
                        Back
                    </button>

                    <button type="button" onclick="nextStep()">
                        Next
                    </button>

                </div>

            </div>

            <!-- Step 3 -->
            <div class="step">

                <h2>Your Message</h2>

                <label for="message">Message</label>

                <textarea
                    id="message"
                    name="message"
                    rows="6"
                    required
                ></textarea>

                <div class="buttons">

                    <button type="button" onclick="previousStep()">
                        Back
                    </button>

                    <button type="submit">
                        Submit
                    </button>

                </div>

            </div>

        </form>

    </main>

    <script>
        let currentStep = 0;

        const steps = document.querySelectorAll('.step');
        const currentStepText = document.getElementById('currentStep');

        function showStep(step) {
            steps.forEach((element, index) => {
                element.classList.toggle('active', index === step);
            });

            currentStepText.textContent = step + 1;
        }

        function nextStep() {
            const currentInputs =
                steps[currentStep].querySelectorAll('input, textarea');

            for (const input of currentInputs) {
                if (!input.checkValidity()) {
                    input.reportValidity();
                    return;
                }
            }

            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function previousStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }
    </script>

</body>
</html>