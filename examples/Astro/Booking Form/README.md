# Astro Booking Form

A professional booking form built with the Astro framework using an Astro `.astro` file and an external CSS file.

The original Laravel Blade template and Laravel route requirements have been removed while preserving the booking form fields, validation, and design.

## Folder Structure

```text
booking-form/
├── README.md
├── style.css
└── booking.astro
```

## Form Fields

The booking form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Service
- Preferred Date
- Preferred Time
- Number of People
- Notes
- Booking consent
- Request Appointment button

Required fields include:

- First Name
- Last Name
- Email Address
- Phone Number
- Service
- Preferred Date
- Preferred Time
- Booking consent

The form uses native HTML `required` validation.

## SmartFormify Setup

Open:

```text
booking.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your SmartFormify endpoint URL.

The form submits using:

```html
method="POST"
```

The submission flow is:

```text
Astro Booking Form
        ↓
SmartFormify Endpoint
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```

No Laravel controller, Laravel route, custom API, or additional package is required.

## Hidden Field

The form includes the SmartFormify silent bot-check field:

```html
<input type="hidden" name="notes_hqse" value="" />
```

Keep this field present and empty.

## Availability

This form is a booking request UI only. It does **not** check real-time availability, store appointments, send confirmation emails, or manage a calendar unless those workflows are configured through the connected backend/endpoint.

## CSS

All styling is contained in:

```text
style.css
```

The Astro page references the stylesheet with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating these three files into an Astro project, place `style.css` in the project's `public/` directory if you want it served at `/style.css`.

## Setup

Copy the files into your Astro project.

Place `booking.astro` under an appropriate `src/pages/` location. The file location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure your SmartFormify endpoint URL.
2. Open the booking page.
3. Enter the required contact information.
4. Select a service.
5. Choose a preferred date and time.
6. Select the number of people.
7. Add optional notes.
8. Accept the booking consent.
9. Click **Request Appointment**.

## Customization

Edit `booking.astro` to change:

- Form fields
- Service options
- Available time options
- Number of people options
- Labels
- Placeholders
- Button text
- Consent text
- SmartFormify endpoint URL

Edit `style.css` to change:

- Colors
- Typography
- Spacing
- Card layout
- Form controls
- Button styling
- Responsive behavior
