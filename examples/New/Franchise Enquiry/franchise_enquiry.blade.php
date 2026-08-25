<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Franchise Enquiry</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
</head>

<body>

    <main class="form-container">

        <h1>Franchise Enquiry</h1>

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
                <label for="company">Company Name</label>

                <input
                    type="text"
                    id="company"
                    name="company"
                >
            </div>

            <div class="form-group">
                <label for="location">Preferred Location</label>

                <input
                    type="text"
                    id="location"
                    name="location"
                    required
                >
            </div>

            <div class="form-group">
                <label for="investment">Investment Range</label>

                <select
                    id="investment"
                    name="investment"
                    required
                >
                    <option value="">Select investment range</option>
                    <option value="under_25k">Under $25,000</option>
                    <option value="25k_50k">$25,000 - $50,000</option>
                    <option value="50k_100k">$50,000 - $100,000</option>
                    <option value="100k_plus">$100,000+</option>
                </select>
            </div>

            <div class="form-group">
                <label for="experience">Business Experience</label>

                <textarea
                    id="experience"
                    name="experience"
                    placeholder="Tell us about your business experience."
                ></textarea>
            </div>

            <div class="form-group">
                <label for="message">Enquiry / Message</label>

                <textarea
                    id="message"
                    name="message"
                    required
                ></textarea>
            </div>

            <button type="submit">
                Submit Enquiry
            </button>

        </form>

    </main>

</body>
</html>