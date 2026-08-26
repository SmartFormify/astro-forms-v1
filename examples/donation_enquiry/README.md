# Astro Donation Enquiry Form

A basic Donation Enquiry form built with Astro that submits form data directly to a SmartFormify endpoint.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
donation-enquiry-form/
├── README.md
├── style.css
└── donation_enquiry.astro
```

## Form Fields

- Name
- Email
- Phone
- Donation Type
- Donation Amount
- Enquiry / Message

## SmartFormify Setup

Open:

```text
donation_enquiry.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Donation Enquiry Form
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

Place `donation_enquiry.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Donation Enquiry page.
3. Enter the donor information.
4. Select the donation type.
5. Enter the donation amount if applicable.
6. Add the enquiry or message.
7. Submit the form.
8. Verify the submission in your SmartFormify workflow.

> Note: This form provides the donation enquiry UI and endpoint submission. It does not process payments, create donations, issue receipts, or manage donor records unless those workflows are configured through the connected endpoint.

## Customization

Edit `donation_enquiry.astro` to customize:

- Donation type options
- Donation amount options
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
