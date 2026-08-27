# Astro Bug Report Form

A basic Bug Report form built with Astro that submits form data directly to a SmartFormify endpoint.

## Folder Structure

```text
bug-report/
├── README.md
├── style.css
└── bug_report.astro
```

## Form Fields

- Full Name
- Email
- Bug Title
- Bug Category
- Severity
- Page URL
- Bug Description
- Steps to Reproduce
- Expected Result
- Actual Result

## SmartFormify Setup

Open `bug_report.astro` and update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Bug Report Form
        ↓
SmartFormify Endpoint
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```


## Hidden Field

Keep this SmartFormify silent bot-check field present and empty:

```html
```

## CSS

All styling is in `style.css`.

The Astro page references it with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating into an Astro project, place `style.css` in the project's `public/` directory if it should be served as `/style.css`.

## Setup

Place `bug_report.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Bug Report page.
3. Complete the bug information.
4. Submit the form.
5. Verify the submission in your SmartFormify workflow.

## Customization

Edit `bug_report.astro` to change fields, bug categories, severity options, labels, placeholders, button text, or the SmartFormify endpoint.

Edit `style.css` to customize colors, typography, spacing, form width, inputs, buttons, and responsive behavior.

> Note: This form provides the UI and endpoint submission. It does not create a bug-tracking system or issue management workflow by itself.
