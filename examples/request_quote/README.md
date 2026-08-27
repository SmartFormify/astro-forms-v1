# Astro Request a Quote Form

A professional request-a-quote form built with Astro using an Astro `.astro` file and external CSS.

## Folder Structure

```text
request-quote-form/
├── README.md
├── style.css
└── request_quote.astro
```

## Form Fields

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
- Consent Checkbox
- Request a Quote button

Required fields:

- First Name
- Last Name
- Email Address
- Service
- Project Description
- Consent

Native HTML `required` validation is used.

## SmartFormify Setup

Open `request_quote.astro` and update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your SmartFormify Endpoint URL.

The form submits directly using `POST`:

```text
Astro Request a Quote Form
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

Place `request_quote.astro` under an appropriate `src/pages/` location. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify Endpoint URL
- No additional packages

## Customization

Edit `request_quote.astro` to change fields, service options, budget ranges, timeline options, labels, placeholders, consent text, or the SmartFormify endpoint.

Edit `style.css` to customize colors, typography, spacing, layout, controls, buttons, and responsive behavior.

> Note: This form provides the quote-request UI and endpoint submission. It does not calculate quotes, store requests, send emails, or provide quote management unless those workflows are configured through the connected endpoint.
