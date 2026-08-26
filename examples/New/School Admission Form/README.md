# Astro School Admission Form

A basic School Admission form built with Astro that submits form data directly to a SmartFormify endpoint.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
school-admission-form/
├── README.md
├── style.css
└── school_admission.astro
```

## Form Fields

- Student Name
- Date of Birth
- Gender
- Applying for Class
- Parent / Guardian Name
- Parent / Guardian Email
- Parent / Guardian Phone
- Address
- Previous School
- Additional Information

## SmartFormify Setup

Open:

```text
school_admission.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro School Admission Form
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

Place `school_admission.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the School Admission page.
3. Enter the student information.
4. Select gender and the applying class.
5. Enter the parent / guardian information.
6. Enter the address and previous school.
7. Add additional information if required.
8. Submit the form.

> Note: This form provides the school admission UI and endpoint submission. It does not process admissions, verify documents, manage student records, or provide an admission management system unless those workflows are configured through the connected endpoint.

## Customization

Edit `school_admission.astro` to customize:

- Gender options
- Class options
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
