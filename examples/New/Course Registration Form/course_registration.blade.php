<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Course Registration</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
</head>

<body>

    <main class="form-container">

        <h1>Course Registration</h1>

        <form
            action="https://api.smartformify.com/YOUR_FORM_ENDPOINT"
            method="POST"
        >

            <div class="form-group">
                <label for="name">Full Name</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>

                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    required
                >
            </div>

            <div class="form-group">
                <label for="course">Select Course</label>

                <select
                    id="course"
                    name="course"
                    required
                >
                    <option value="">Select a course</option>
                    <option value="web_development">
                        Web Development
                    </option>
                    <option value="digital_marketing">
                        Digital Marketing
                    </option>
                    <option value="graphic_design">
                        Graphic Design
                    </option>
                    <option value="data_science">
                        Data Science
                    </option>
                    <option value="business_management">
                        Business Management
                    </option>
                    <option value="other">
                        Other
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="education">Highest Education</label>

                <select
                    id="education"
                    name="education"
                    required
                >
                    <option value="">Select education level</option>
                    <option value="high_school">High School</option>
                    <option value="diploma">Diploma</option>
                    <option value="bachelors">Bachelor's Degree</option>
                    <option value="masters">Master's Degree</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="learning_mode">Preferred Learning Mode</label>

                <select
                    id="learning_mode"
                    name="learning_mode"
                    required
                >
                    <option value="">Select learning mode</option>
                    <option value="online">Online</option>
                    <option value="offline">Offline</option>
                    <option value="hybrid">Hybrid</option>
                </select>
            </div>

            <div class="form-group">
                <label for="start_date">Preferred Start Date</label>

                <input
                    type="date"
                    id="start_date"
                    name="start_date"
                >
            </div>

            <div class="form-group">
                <label for="message">Additional Information</label>

                <textarea
                    id="message"
                    name="message"
                    placeholder="Tell us anything else about your registration."
                ></textarea>
            </div>

            <button type="submit">
                Register for Course
            </button>

        </form>

    </main>

</body>
</html>