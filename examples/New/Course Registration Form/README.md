# Astro Course Registration Form

A basic Course Registration form built with Astro that submits form data directly to a SmartFormify endpoint.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
course-registration-form/
├── README.md
├── style.css
└── course_registration.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Course
- Highest Education
- Preferred Learning Mode
- Preferred Start Date
- Additional Information

## SmartFormify Setup

Open:

```text
course_registration.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Course Registration Form
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

Place `course_registration.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Course Registration page.
3. Complete the registration information.
4. Select a course.
5. Select the highest education level.
6. Select the preferred learning mode.
7. Choose a preferred start date.
8. Add optional information.
9. Submit the form.

> Note: This form provides the course registration UI and endpoint submission. It does not enroll students, process payments, manage course capacity, or maintain a registration system unless those workflows are configured through the connected endpoint.

## Customization

Edit `course_registration.astro` to customize:

- Course options
- Education options
- Learning mode options
- Available dates
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
