# Astro Complaint Form

A basic Complaint form built with Astro that submits form data directly to a SmartFormify endpoint.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
complaint-form/
├── README.md
├── style.css
└── complaint_form.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Complaint Type
- Order / Reference Number
- Complaint Subject
- Complaint Details
- Preferred Resolution

## SmartFormify Setup

Open:

```text
complaint_form.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Complaint Form
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

Place `complaint_form.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure your SmartFormify endpoint.
2. Open the Complaint page.
3. Complete the complaint information.
4. Submit the form.
5. Verify the submission in your SmartFormify workflow.

> Note: This form provides the complaint UI and endpoint submission. It does not create a complaint management system, ticket queue, notifications, or resolution workflow by itself.

## Customization

Edit `complaint_form.astro` to customize:

- Complaint types
- Preferred resolution options
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
