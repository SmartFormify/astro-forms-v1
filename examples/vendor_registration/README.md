# Astro Vendor Registration Form

A basic Vendor Registration form built with Astro that submits form data directly to a SmartFormify endpoint.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
vendor-registration-form/
├── README.md
├── style.css
└── vendor_registration.astro
```

## Form Fields

- Business Name
- Contact Person
- Email
- Phone
- Business Type
- Website
- Business Location
- Products / Services
- Additional Information

## SmartFormify Setup

Open:

```text
vendor_registration.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Vendor Registration Form
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

Place `vendor_registration.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Vendor Registration page.
3. Enter the business information.
4. Enter the contact person and contact details.
5. Select the business type.
6. Add the website and business location.
7. Describe the products / services.
8. Add additional information if required.
9. Submit the form.

> Note: This form provides the vendor registration UI and endpoint submission. It does not approve vendors, verify businesses, manage vendor accounts, or provide a vendor management system unless those workflows are configured through the connected endpoint.

## Customization

Edit `vendor_registration.astro` to customize:

- Business type options
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
