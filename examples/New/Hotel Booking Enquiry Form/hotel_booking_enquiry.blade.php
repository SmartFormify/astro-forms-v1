<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Hotel Booking Enquiry</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
</head>

<body>

    <main class="form-container">

        <h1>Hotel Booking Enquiry</h1>

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
                <label for="check_in">Check-in Date</label>

                <input
                    type="date"
                    id="check_in"
                    name="check_in"
                    required
                >
            </div>

            <div class="form-group">
                <label for="check_out">Check-out Date</label>

                <input
                    type="date"
                    id="check_out"
                    name="check_out"
                    required
                >
            </div>

            <div class="form-group">
                <label for="guests">Number of Guests</label>

                <input
                    type="number"
                    id="guests"
                    name="guests"
                    min="1"
                    required
                >
            </div>

            <div class="form-group">
                <label for="rooms">Number of Rooms</label>

                <input
                    type="number"
                    id="rooms"
                    name="rooms"
                    min="1"
                    required
                >
            </div>

            <div class="form-group">
                <label for="room_type">Room Type</label>

                <select
                    id="room_type"
                    name="room_type"
                    required
                >
                    <option value="">Select room type</option>
                    <option value="single">Single Room</option>
                    <option value="double">Double Room</option>
                    <option value="twin">Twin Room</option>
                    <option value="suite">Suite</option>
                    <option value="family">Family Room</option>
                </select>
            </div>

            <div class="form-group">
                <label for="meal_plan">Meal Preference</label>

                <select
                    id="meal_plan"
                    name="meal_plan"
                >
                    <option value="">Select meal preference</option>
                    <option value="room_only">Room Only</option>
                    <option value="breakfast">Breakfast Included</option>
                    <option value="half_board">Half Board</option>
                    <option value="full_board">Full Board</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Special Requests</label>

                <textarea
                    id="message"
                    name="message"
                    placeholder="Let us know about any special requests or requirements."
                ></textarea>
            </div>

            <button type="submit">
                Submit Booking Enquiry
            </button>

        </form>

    </main>

</body>
</html>