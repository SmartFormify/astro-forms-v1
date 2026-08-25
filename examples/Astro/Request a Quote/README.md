# Laravel Request a Quote Form

A professional Laravel quote request form built with a Blade template, external CSS, and a web route. The form allows potential customers to provide their contact information, project requirements, estimated budget, expected timeline, and additional details.

## Files

```text
request-quote-form/
├── resources/
│   └── views/
│       └── request_quote.blade.php
│
├── public/
│   └── css/
│       └── style.css
│
└── routes/
    └── web.php
```

### `request_quote.blade.php`

Contains the quote request form UI.

The form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Service
- Estimated Budget
- Expected Timeline
- Project Name
- Project Description
- Additional Notes
- Consent checkbox
- Request a Quote button

The following fields are required:

- First Name
- Last Name
- Email Address
- Service
- Project Description
- Consent

The form uses HTML `required` validation and is submitted using the `POST` method.

The external stylesheet is loaded using Laravel's `asset()` helper:

```blade
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
```

### `style.css`

Contains the external styling for the quote request form, including:

- Quote card layout
- Section headers
- Form fields
- Select controls
- Textareas
- Consent section
- Submit button
- Hover and focus states
- Responsive mobile layout

### `web.php`

Defines the route used to display the quote request form:

```php
Route::view('/request-quote', 'request_quote');
```

## Setup

1. Create or open a Laravel project.

2. Place `request_quote.blade.php` in:

```text
resources/views/
```

3. Place `style.css` in:

```text
public/css/
```

4. Add the provided route to:

```text
routes/web.php
```

5. Start the Laravel development server:

```bash
php artisan serve
```

6. Open the quote request form in your browser:

```text
http://127.0.0.1:8000/request-quote
```

## Testing

Open:

```text
http://127.0.0.1:8000/request-quote
```

Complete the required project information.

The following fields are required:

- First Name
- Last Name
- Email Address
- Service
- Project Description
- Consent

You can optionally provide:

- Phone Number
- Estimated Budget
- Expected Timeline
- Project Name
- Additional Notes

Click **Request a Quote** to test the form submission.

> Note: This example provides the quote request UI and Laravel route. It does not calculate quotes, store requests, send emails, or create a quote management system unless additional Laravel backend functionality is added.

## Form Submission with SmartFormify

The quote request form contains a placeholder SmartFormify endpoint:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="quote-form"
>
```

If you already have a **SmartFormify endpoint URL**, you can connect the form without creating a Laravel controller or custom API integration.

The basic flow is:

```text
Laravel Request a Quote Form
            ↓
SmartFormify Endpoint URL
            ↓
Submission Processing
            ↓
Email / Notifications / Response
```

### SmartFormify Setup

Follow these steps to connect the quote request form with SmartFormify:

1. **Sign up or log in to SmartFormify.**
2. Go to the **Endpoints** section.
3. Click **Create Endpoint**.
4. Enter the required endpoint details and create your endpoint.
5. After the endpoint is created, **copy the Endpoint URL**.
6. Open:

```text
resources/views/request_quote.blade.php
```

7. Find:

```html
action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
```

8. Replace it with your copied SmartFormify Endpoint URL.

For example:

```html
<form
    action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
    method="POST"
    class="quote-form"
>
```

Keep the form method as:

```html
method="POST"
```

Make sure the input `name` attributes match the fields expected by your SmartFormify endpoint.

> **Note:** The Laravel files in this example provide the quote request form UI and route. SmartFormify can be used to handle the submission workflow when a valid endpoint is configured.

## Requirements

- PHP
- Composer
- Laravel

## Customization

You can customize the form by editing:

```text
resources/views/request_quote.blade.php
```

You can customize the visual design by editing:

```text
public/css/style.css
```

You can change:

- Form fields
- Service options
- Budget ranges
- Timeline options
- Labels
- Placeholders
- Button text
- Colors
- Layout
- Responsive styles
- Consent text
- SmartFormify endpoint URL