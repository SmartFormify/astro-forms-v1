# Astro Contact Form

A simple contact form built with Astro using only an `.astro` file and an external CSS file.

## Folder Structure

```text
contact-form/
├── README.md
├── style.css
└── contact_form.astro
```

## Form Fields

- Full Name
- Email Address
- Subject
- Message
- Send Message button

The form uses native HTML `required` validation.

## SmartFormify Setup

Open `contact_form.astro` and update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_FORM_ENDPOINT";
```

Replace the placeholder with your SmartFormify endpoint URL.

The form submits directly to the endpoint:

```text
Astro Contact Form
       ↓
SmartFormify Endpoint
       ↓
Submission Processing
```

No Laravel route, controller, PHP backend, Astro API route, or additional package is required.

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

The Astro form references it with:

```html
<link rel="stylesheet" href="/style.css" />
```

If this three-file folder is copied into the root of an Astro site's `public` directory, the stylesheet can be served as `/style.css`. If the form is placed elsewhere in an Astro project, adjust the stylesheet path according to the project's public/static-file setup.

## Requirements

- Astro project
- SmartFormify endpoint URL
- No additional packages

## Customization

Edit `contact_form.astro` to change form fields, labels, placeholders, or button text.

Edit `style.css` to change colors, spacing, typography, layout, or responsive behavior.
