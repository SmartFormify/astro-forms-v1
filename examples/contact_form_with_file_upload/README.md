# Astro Contact Form with File Upload

A responsive contact form built with **Astro** that submits contact information and an optional file attachment directly to a SmartFormify endpoint.

## Folder Structure

```text
contact_form_with_file_upload/
├── README.md
├── style.css
└── contact_form_with_file_upload.astro
```

## Form Fields

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

Accepted file types:

```text
PDF, DOC, DOCX, JPG, JPEG, PNG
```

Maximum file size:

```text
10 MB
```

The form uses:

```html
enctype="multipart/form-data"
```

Client-side JavaScript validates the selected file type and size before submission.

## SmartFormify Setup

Open:

```text
src/pages/contact_form_with_file_upload.astro
```

Set:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits using:

```html
<form
  action={endpointUrl}
  method="POST"
  enctype="multipart/form-data"
>
```

The flow is:

```text
Astro Contact Form
       ↓
SmartFormify Endpoint
       ↓
Submission Processing
       ↓
Email / Notifications / Response
```

## Environment Variable

You can configure the endpoint through `.env`:

```env
SMARTFORMIFY_ENDPOINT_URL=YOUR_SMARTFORMIFY_ENDPOINT_URL
```

Then use it in the Astro page:

```astro
const endpointUrl = import.meta.env.SMARTFORMIFY_ENDPOINT_URL;
```

## CSS

Styling is in:

```text
public/style.css
```

Astro serves it from:

```html
<link rel="stylesheet" href="/style.css" />
```

## Setup

Install dependencies:

```bash
npm install
```

Start development:

```bash
npm run dev
```

Open the Astro development URL, normally:

```text
http://localhost:4321/
```

Build:

```bash
npm run build
```

Preview:

```bash
npm run preview
```

## Testing

1. Configure the SmartFormify endpoint.
2. Start the Astro development server.
3. Open the contact form.
4. Enter the required contact information.
5. Enter the subject and message.
6. Optionally select a PDF, DOC, DOCX, JPG, JPEG, or PNG file.
7. Keep the file at or below 10 MB.
8. Accept the consent checkbox.
9. Click **Send Message**.
10. Verify the submission and attachment in SmartFormify.

> Note: This example provides the Astro form UI, client-side file validation, and SmartFormify submission. It does not provide custom database storage, email handling, or server-side file processing.

## Requirements

- Node.js
- Astro
- SmartFormify endpoint URL
- No additional packages

## Customization

Edit:

```text
src/pages/contact_form_with_file_upload.astro
```

to customize:

- Form fields
- Labels
- Placeholders
- Button text
- Contact information
- Accepted file types
- File size limit
- Validation requirements
- SmartFormify endpoint

Edit:

```text
public/style.css
```

to customize:

- Colors
- Typography
- Layout
- Form spacing
- File-upload area
- Button styles
- Responsive behavior

## Laravel to Astro Conversion

This project completely replaces the original Laravel implementation with Astro.

- Blade template → `.astro` page
- `resources/views/` → `src/pages/`
- Laravel `routes/web.php` → Astro file-based routing
- `php artisan serve` → `npm run dev`
- Laravel backend instructions → Astro setup
- Blade form → Astro HTML
- Laravel-specific assumptions → direct SmartFormify POST

The original contact fields, multipart file upload, accepted file types, 10 MB client-side validation, consent requirement, responsive styling, and SmartFormify workflow are retained.
