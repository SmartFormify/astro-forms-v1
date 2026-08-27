# Astro Hotel Booking Enquiry Form

A basic Hotel Booking Enquiry form built with Astro that submits form data directly to a SmartFormify endpoint.


## Folder Structure

```text
hotel-booking-enquiry/
├── README.md
├── style.css
└── hotel_booking_enquiry.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Check-in Date
- Check-out Date
- Number of Guests
- Number of Rooms
- Room Type
- Meal Preference
- Special Requests

## SmartFormify Setup

Open:

```text
hotel_booking_enquiry.astro
```

Update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Hotel Booking Enquiry Form
             ↓
SmartFormify Endpoint
             ↓
Submission Processing
             ↓
Email / Notifications / Response
```


## Hidden Field

The form includes the SmartFormify silent bot-check field:

```html
```

Keep this field present and empty.

## CSS

All styling is contained in:

```text
style.css
```

The Astro page references it with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating into an Astro project, place `style.css` in the project's `public/` directory if it should be served as `/style.css`.

## Setup

Place `hotel_booking_enquiry.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Hotel Booking Enquiry page.
3. Enter the guest information.
4. Select check-in and check-out dates.
5. Select the number of guests and rooms.
6. Select the room type.
7. Select the meal preference.
8. Add any special requests.
9. Submit the form.

> Note: This form provides the hotel booking enquiry UI and endpoint submission. It does not check real-time room availability, process payments, create reservations, or manage hotel inventory unless those workflows are configured through the connected endpoint.

## Customization

Edit `hotel_booking_enquiry.astro` to customize:

- Date fields
- Guest and room options
- Room types
- Meal preferences
- Form fields
- Labels
- Placeholders
- Button text
- SmartFormify endpoint

Edit `style.css` to customize:

- Colors
- Typography
- Spacing
- Form width
- Input styles
- Button styles
- Responsive behavior
