# Astro Customer Review Form

A basic Customer Review form built with Astro that submits form data directly to a SmartFormify endpoint.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
customer-review-form/
├── README.md
├── style.css
└── customer_review.astro
```

## Form Fields

- Full Name
- Email
- Overall Rating
- Service / Product
- Review
- Would You Recommend Us?

## SmartFormify Setup

Open:

```text
customer_review.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Customer Review Form
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

Place `customer_review.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Customer Review page.
3. Enter the customer information.
4. Select an overall rating.
5. Select the service or product.
6. Enter the review.
7. Select whether you would recommend the business.
8. Submit the form.

> Note: This form provides the customer review UI and endpoint submission. It does not publish reviews, calculate review statistics, or provide a review management system unless those workflows are configured through the connected endpoint.

## Customization

Edit `customer_review.astro` to customize:

- Rating options
- Service / Product options
- Recommendation options
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
