# Astro Feedback Form

A professional feedback form built with the Astro framework using an Astro `.astro` file and an external CSS file.

The original feedback form fields and options are preserved. Laravel Blade syntax, Laravel routes, PHP, Composer, and `php artisan` requirements have been removed.

## Folder Structure

```text
feedback-form/
├── README.md
├── style.css
└── feedback.astro
```

## Form Fields

The feedback form includes:

- Full Name
- Email Address
- Feedback Type
- Experience Rating
- Feedback Message
- Recommendation
- Contact Permission
- Submit Feedback button

Required fields:

- Feedback Type
- Experience Rating
- Feedback Message

Native HTML `required` validation is used.

## SmartFormify Setup

Open:

```text
feedback.astro
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
Astro Feedback Form
        ↓
SmartFormify Endpoint
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```

No Laravel controller, Laravel route, custom backend, or additional package is required.

## Hidden Field

The form includes the SmartFormify silent bot-check field:

```html
<input type="hidden" name="notes_hqse" value="" />
```

Keep this field present and empty.

## CSS

All visual styling is contained in:

```text
style.css
```

The Astro page loads the stylesheet with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating this three-file form into an Astro project, place `style.css` in the project's `public/` directory if you want it served at `/style.css`.

## Setup

Copy these files into your Astro project.

The `.astro` file can be placed under `src/pages/` or another appropriate Astro page location. Its location determines the URL route.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Set your SmartFormify endpoint URL.
2. Open the feedback page in your Astro project.
3. Select a feedback type.
4. Select an experience rating.
5. Enter the required feedback message.
6. Optionally provide your name, email, recommendation, and contact permission.
7. Click **Submit Feedback**.

## Customization

Edit `feedback.astro` to change:

- Form fields
- Feedback type options
- Rating options
- Recommendation options
- Labels
- Placeholders
- Button text
- Consent text
- SmartFormify endpoint

Edit `style.css` to change:

- Colors
- Typography
- Spacing
- Card layout
- Rating controls
- Button styling
- Responsive behavior
