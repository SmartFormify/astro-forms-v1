# Astro Lead Generation Form

A professional lead generation form built with the Astro framework using an Astro `.astro` file and an external CSS file.


## Folder Structure

```text
lead-generation-form/
├── README.md
├── style.css
└── lead_generation.astro
```

## Form Fields

The form includes:

- First Name
- Last Name
- Work Email
- Phone Number
- Company Name
- Company Size
- Industry
- Primary Interest
- Additional Message
- Consent Checkbox
- Get Started button

## Required Fields

The following fields are required:

- First Name
- Last Name
- Work Email
- Company Name
- Primary Interest
- Consent

The form uses native HTML `required` validation.

## SmartFormify Setup

Open:

```text
lead_generation.astro
```

Update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your SmartFormify endpoint URL.

The form submits using:

```html
method="POST"
```

The submission flow is:

```text
Astro Lead Generation Form
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

## Testing

1. Configure your SmartFormify endpoint URL.
2. Open the lead generation page.
3. Complete the required fields.
4. Optionally enter phone number, company size, industry, and additional message.
5. Accept the consent checkbox.
6. Click **Get Started**.

> Note: This example provides the lead generation form UI. It does not store leads, send emails, connect to a CRM, or provide lead analytics unless those workflows are configured through the connected endpoint.

## CSS

All styling is contained in:

```text
style.css
```

The Astro page references the stylesheet with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating these files into an Astro project, place `style.css` in the project's `public/` directory if you want it served at `/style.css`.

## Setup

Copy the files into your Astro project.

Place `lead_generation.astro` under an appropriate `src/pages/` location. The file location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Customization

Edit `lead_generation.astro` to change:

- Company size options
- Industry options
- Interest options
- Form fields
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
- Form controls
- Button styling
- Responsive behavior
