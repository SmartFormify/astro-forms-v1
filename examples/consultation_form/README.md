# Astro Consultation Form

A basic Consultation form built with Astro that submits form data directly to a SmartFormify endpoint.


## Folder Structure

```text
consultation-form/
├── README.md
├── style.css
└── consultation_form.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Consultation Type
- Preferred Date
- Preferred Time
- Company / Organization
- Consultation Details

## SmartFormify Setup

Open:

```text
consultation_form.astro
```

Update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Consultation Form
          ↓
SmartFormify Endpoint
          ↓
Submission Processing
          ↓
Email / Notifications / Response
```


## Hidden Field

The form includes the SmartFormify silent bot-check field:

```html
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

Place `consultation_form.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Consultation page.
3. Complete the consultation information.
4. Select the consultation type.
5. Choose a preferred date and time.
6. Submit the form.
7. Verify the submission in your SmartFormify workflow.

> Note: This form provides the consultation UI and endpoint submission. It does not schedule consultations, store requests, send notifications, or manage a consultation calendar unless those workflows are configured through the connected endpoint.

## Customization

Edit `consultation_form.astro` to customize:

- Consultation types
- Available dates
- Available time options
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
