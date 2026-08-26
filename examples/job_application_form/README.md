# Astro Job Application Form

A professional job application form built with Astro using an `.astro` page and an external CSS file.

The original Laravel Blade template and Laravel route requirements have been removed while preserving the job application fields, resume upload, validation, and responsive design.

## Folder Structure

```text
job-application-form/
├── README.md
├── style.css
└── job_application.astro
```

## Form Fields

- First Name
- Last Name
- Email Address
- Phone Number
- Position
- Experience
- Portfolio / LinkedIn URL
- Cover Letter
- Resume / CV
- Application consent
- Submit Application button

## Resume Upload

Accepted resume formats:

```text
PDF
DOC
DOCX
```

Maximum resume size: **10 MB**.

The form uses:

```html
method="POST"
enctype="multipart/form-data"
```

`multipart/form-data` is required when submitting the resume file.

## SmartFormify Setup

Open:

```text
job_application.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your SmartFormify endpoint URL.

The form submits directly to the configured endpoint.

```text
Astro Job Application Form
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
<input type="hidden" name="notes_hqse" value="" />
```

Keep this field present and empty.

## File Validation

The included client-side validation checks that the selected resume does not exceed **10 MB**.

## CSS

All styling is contained in:

```text
style.css
```

The Astro page references it with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating these files into an Astro project, place `style.css` in the project's `public/` directory if it should be served at `/style.css`.

## Setup

Place `job_application.astro` under an appropriate `src/pages/` location in your Astro project.

The `.astro` file location determines its URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint URL.
2. Open the job application page.
3. Complete the required fields.
4. Select a position and experience level.
5. Enter the cover letter.
6. Upload a PDF, DOC, or DOCX resume.
7. Confirm the resume is no larger than 10 MB.
8. Accept the application consent.
9. Click **Submit Application**.

## Customization

Edit `job_application.astro` to change:

- Form fields
- Position options
- Experience options
- Accepted resume file types
- File size limit
- Labels
- Placeholders
- Button text
- Consent text
- SmartFormify endpoint URL

Edit `style.css` to change:

- Colors
- Typography
- Spacing
- Card layout
- File upload appearance
- Button styling
- Responsive behavior
