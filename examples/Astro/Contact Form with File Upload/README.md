# Astro Contact Form with File Upload

A contact form with file upload built with the Astro framework. It uses an Astro `.astro` page, an external CSS file, native HTML validation, and client-side file-size validation.

The original Laravel Blade template and Laravel route requirements have been removed.

## Folder Structure

```text
contact-form-with-file-upload/
├── README.md
├── style.css
└── contact_form_with_file_upload.astro
```

## Form Fields

The form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Subject
- Message
- Attachment
- Consent checkbox
- Send Message button

## File Upload

The attachment field accepts:

```text
PDF
DOC
DOCX
JPG
JPEG
PNG
```

The maximum file size is **10 MB**.

The form uses:

```html
enctype="multipart/form-data"
```

This is required when submitting a file through a standard HTML form.

The 10 MB limit is checked in the browser before submission.

## SmartFormify Setup

Open:

```text
contact_form_with_file_upload.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your SmartFormify endpoint URL.

The form uses:

```astro
<form
    action={endpointUrl}
    method="POST"
    enctype="multipart/form-data"
>
```

The submission flow is:

```text
Astro Contact Form
       ↓
SmartFormify Endpoint
       ↓
Submission Processing
       ↓
Email / Notifications / Response
```

No Laravel controller, Laravel route, custom API, or additional package is required.

## Hidden Field

The form includes the SmartFormify silent bot-check field:

```html
<input type="hidden" name="notes_hqse" value="">
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

## Setup

Place the three files into the appropriate location in your Astro project.

If the form page is placed directly under an Astro `src/pages` directory, the `.astro` filename determines its route.

For the stylesheet to be served as `/style.css`, place `style.css` in the Astro project's `public/` directory when integrating the files into an existing Astro project.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure your SmartFormify endpoint URL.
2. Open the Astro page in your browser.
3. Enter the required contact information.
4. Select an optional supported attachment.
5. Test a file larger than 10 MB to verify the client-side validation.
6. Check the consent checkbox.
7. Click **Send Message**.

## Customization

Edit `contact_form_with_file_upload.astro` to change:

- Form fields
- Labels
- Placeholders
- Contact information
- Button text
- Accepted file types
- File size limit
- Validation requirements

Edit `style.css` to change:

- Colors
- Typography
- Spacing
- Layout
- File upload appearance
- Responsive behavior
