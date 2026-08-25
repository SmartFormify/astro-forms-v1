# Astro Product Enquiry Form

A basic Product Enquiry form built with Astro that submits form data directly to a SmartFormify endpoint.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
product-enquiry-form/
├── README.md
├── style.css
└── product_enquiry.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Product
- Quantity
- Budget Range
- Enquiry / Message

## SmartFormify Setup

Open:

```text
product_enquiry.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Product Enquiry Form
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

Place `product_enquiry.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Product Enquiry page.
3. Enter the contact information.
4. Select the product.
5. Enter the quantity.
6. Select the budget range.
7. Add the enquiry or message.
8. Submit the form.

> Note: This form provides the product enquiry UI and endpoint submission. It does not manage product inventory, pricing, orders, payments, or enquiry management unless those workflows are configured through the connected endpoint.

## Customization

Edit `product_enquiry.astro` to customize:

- Product options
- Quantity options
- Budget ranges
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
