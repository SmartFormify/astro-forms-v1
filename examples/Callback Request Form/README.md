# Astro Callback Request Form

A professional callback request form built with Astro using an Astro `.astro` file and an external CSS file.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
callback-request-form/
├── README.md
├── style.css
└── callback_request.astro
```

## Form Fields

- First Name
- Last Name
- Email Address
- Phone Number
- Reason for Callback
- Preferred Date
- Preferred Time
- Preferred Contact Method
- Message
- Consent Checkbox

## Required Fields

The following fields are required:

- First Name
- Last Name
- Email Address
- Phone Number
- Reason for Callback
- Preferred Date
- Preferred Time
- Preferred Contact Method
- Consent

The form uses native HTML `required` validation and submits using `POST`.

## SmartFormify Setup

Open:

```text
callback_request.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify Endpoint URL.

Submission flow:

```text
Astro Callback Request Form
            ↓
SmartFormify Endpoint
            ↓
Submission Processing
            ↓
Email / Notifications / Response
```

No Laravel controller, route, PHP backend, Astro API route, or additional package is required.

## Hidden Field

Keep the SmartFormify silent bot-check field present and empty:

```html
<input type="hidden" name="notes_hqse" value="" />
```

## Testing

1. Configure the SmartFormify endpoint.
2. Open the callback request page.
3. Complete the required callback information.
4. Select the reason, preferred date, time, and contact method.
5. Add an optional message.
6. Accept the consent checkbox.
7. Click **Request a Callback**.

> Note: This form provides the callback request UI and endpoint submission. It does not schedule calls, store callback requests, send notifications, or manage a callback queue unless those workflows are configured through the connected endpoint.

## CSS

All styling is in:

```text
style.css
```

The Astro page references it with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating into an Astro project, place `style.css` in the project's `public/` directory if it should be served as `/style.css`.

## Setup

Place `callback_request.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Customization

Edit `callback_request.astro` to customize:

- Callback reasons
- Available dates
- Available time options
- Contact methods
- Form fields
- Labels
- Placeholders
- Button text
- Consent text
- SmartFormify endpoint

Edit `style.css` to customize colors, typography, spacing, layout, form controls, buttons, and responsive behavior.
