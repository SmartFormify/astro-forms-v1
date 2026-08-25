# Astro Event Registration Form

A basic Event Registration form built with Astro that submits form data directly to a SmartFormify endpoint.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
event-registration-form/
├── README.md
├── style.css
└── event_registration.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Event
- Event Date
- Number of Attendees
- Ticket Type
- Company / Organization
- Additional Information

## SmartFormify Setup

Open:

```text
event_registration.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Event Registration Form
            ↓
SmartFormify Endpoint
            ↓
Submission Processing
            ↓
Email / Notifications / Response
```

No Laravel route, PHP controller, Astro API route, or additional package is required.

## Hidden Field

The form includes the SmartFormify silent bot-check field:

```html
<input type="hidden" name="notes_hqse" value="" />
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

Place `event_registration.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Event Registration page.
3. Enter the attendee information.
4. Select an event.
5. Choose the event date.
6. Select the number of attendees.
7. Select the ticket type.
8. Optionally enter company / organization and additional information.
9. Submit the form.

> Note: This form provides the event registration UI and endpoint submission. It does not manage event capacity, ticket inventory, payments, confirmations, or attendee records unless those workflows are configured through the connected endpoint.

## Customization

Edit `event_registration.astro` to customize:

- Event options
- Event dates
- Attendee options
- Ticket types
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
