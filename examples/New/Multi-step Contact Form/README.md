# Astro Multi-Step Contact Form

A basic multi-step contact form built with **Astro** and JavaScript, submitting the completed form directly to a **SmartFormify endpoint**.

The original Laravel Blade implementation has been converted to Astro. Laravel routes, PHP, Composer, Blade syntax, and `php artisan` requirements have been removed.

## Folder Structure

```text
multi-step-contact-form/
├── README.md
├── style.css
└── multi_step_form.astro
```

## How It Works

The form has three steps:

1. **Personal Information** — Name, Email
2. **Contact Details** — Phone, Subject
3. **Message** — Message

JavaScript controls the step navigation.

The flow is:

```text
Step 1 → Step 2 → Step 3 → Submit → SmartFormify
```

## SmartFormify Setup

Open:

```text
multi_step_form.astro
```

Update the Astro frontmatter:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The completed form is submitted with:

```html
method="POST"
```

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

The Astro page references the stylesheet with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating into an Astro project, place `style.css` in the project's `public/` directory if it should be served as `/style.css`.

## Setup

Place `multi_step_form.astro` under an appropriate `src/pages/` location in your Astro project.

Its location determines the page URL.

No Astro API route or additional package is required.

## Requirements

- Astro
- JavaScript
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the multi-step contact form.
3. Complete Step 1.
4. Continue to Step 2.
5. Complete Step 2.
6. Continue to Step 3.
7. Enter the message.
8. Submit the completed form.
9. Verify the submission in your SmartFormify workflow.

## Customization

Edit `multi_step_form.astro` to customize:

- Step titles
- Form fields
- Labels
- Placeholders
- Navigation buttons
- Validation
- SmartFormify endpoint

Edit `style.css` to customize:

- Colors
- Typography
- Spacing
- Form width
- Step indicator
- Input styles
- Button styles
- Responsive behavior
