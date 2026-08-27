# Astro Testimonial Form

A basic Testimonial form built with Astro that submits form data directly to a SmartFormify endpoint.


## Folder Structure

```text
testimonial-form/
├── README.md
├── style.css
└── testimonial_form.astro
```

## Form Fields

- Full Name
- Email
- Company Name
- Job Title / Role
- Rating
- Testimonial
- Publishing Permission

## SmartFormify Setup

Open:

```text
testimonial_form.astro
```

Update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Testimonial Form
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

Place `testimonial_form.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Testimonial page.
3. Enter the customer information.
4. Select a rating.
5. Enter the testimonial.
6. Select the publishing permission.
7. Submit the form.

> Note: This form provides the testimonial UI and endpoint submission. It does not publish testimonials, moderate reviews, or manage a testimonial library unless those workflows are configured through the connected endpoint.

## Customization

Edit `testimonial_form.astro` to customize:

- Rating options
- Publishing permission options
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
