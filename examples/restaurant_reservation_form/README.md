# Astro Restaurant Reservation Form

A basic Restaurant Reservation form built with Astro that submits form data directly to a SmartFormify endpoint.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
restaurant-reservation-form/
├── README.md
├── style.css
└── restaurant_reservation.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Reservation Date
- Reservation Time
- Number of Guests
- Seating Preference
- Special Occasion
- Special Requests

## SmartFormify Setup

Open `restaurant_reservation.astro` and update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Restaurant Reservation Form
             ↓
SmartFormify Endpoint
             ↓
Submission Processing
             ↓
Email / Notifications / Response
```

No Laravel route, PHP controller, Astro API route, or additional package is required.

## Hidden Field

Keep this SmartFormify silent bot-check field present and empty:

```html
<input type="hidden" name="notes_hqse" value="" />
```

## CSS

All styling is contained in `style.css`.

The Astro page references it with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating into an Astro project, place `style.css` in the project's `public/` directory if it should be served as `/style.css`.

## Setup

Place `restaurant_reservation.astro` under an appropriate `src/pages/` location in your Astro project.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Restaurant Reservation page.
3. Enter the guest information.
4. Choose a reservation date and time.
5. Select the number of guests.
6. Select a seating preference.
7. Select a special occasion if applicable.
8. Add special requests.
9. Submit the form.

> Note: This form provides the reservation UI and endpoint submission. It does not check real-time table availability, create reservations in a restaurant system, process payments, or manage seating unless those workflows are configured through the connected endpoint.

## Customization

Edit `restaurant_reservation.astro` to customize date/time fields, guest options, seating preferences, special occasions, labels, placeholders, button text, and the SmartFormify endpoint.

Edit `style.css` to customize colors, typography, spacing, form width, inputs, buttons, and responsive behavior.
