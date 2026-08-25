<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Donation Enquiry</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/donation_enquiry.css') }}"
    >
</head>

<body>

    <main class="form-container">

        <h1>Donation Enquiry</h1>

        <form
            action="https://api.smartformify.com/YOUR_FORM_ENDPOINT"
            method="POST"
        >

            <div class="form-group">
                <label for="name">Name</label>

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
                >
            </div>

            <div class="form-group">
                <label for="donation_type">Donation Type</label>

                <select
                    id="donation_type"
                    name="donation_type"
                    required
                >
                    <option value="">Select donation type</option>
                    <option value="one_time">One-time Donation</option>
                    <option value="monthly">Monthly Donation</option>
                    <option value="in_kind">In-kind Donation</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="amount">Donation Amount</label>

                <input
                    type="number"
                    id="amount"
                    name="amount"
                    min="0"
                    step="0.01"
                >
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