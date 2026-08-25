<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product Enquiry</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
</head>

<body>

    <main class="form-container">

        <h1>Product Enquiry</h1>

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
                <label for="product">Product</label>

                <input
                    type="text"
                    id="product"
                    name="product"
                    placeholder="Enter product name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>

                <input
                    type="number"
                    id="quantity"
                    name="quantity"
                    min="1"
                >
            </div>

            <div class="form-group">
                <label for="budget">Budget Range</label>

                <select
                    id="budget"
                    name="budget"
                >
                    <option value="">Select budget range</option>
                    <option value="under_500">Under $500</option>
                    <option value="500_1000">$500 - $1,000</option>
                    <option value="1000_5000">$1,000 - $5,000</option>
                    <option value="5000_plus">$5,000+</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Enquiry / Message</label>

                <textarea
                    id="message"
                    name="message"
                    placeholder="Tell us what you would like to know about the product."
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