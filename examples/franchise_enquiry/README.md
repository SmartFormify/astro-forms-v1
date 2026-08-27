# Astro Franchise Enquiry Form

A basic Franchise Enquiry form built with Astro that submits form data directly to a SmartFormify endpoint.


## Folder Structure

```text
franchise-enquiry-form/
├── README.md
├── style.css
└── franchise_enquiry.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Company Name
- Preferred Location
- Investment Range
- Business Experience
- Enquiry / Message

## SmartFormify Setup

Open:

```text
franchise_enquiry.astro
```

Update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Franchise Enquiry Form
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

Place `franchise_enquiry.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Franchise Enquiry page.
3. Enter the contact information.
4. Enter the company name.
5. Select or enter the preferred location.
6. Select the investment range.
7. Provide business experience.
8. Add the enquiry or message.
9. Submit the form.

> Note: This form provides the franchise enquiry UI and endpoint submission. It does not evaluate franchise applications, manage leads, process investments, or provide a franchise management system unless those workflows are configured through the connected endpoint.

## Customization

Edit `franchise_enquiry.astro` to customize:

- Location options
- Investment ranges
- Business experience options
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
