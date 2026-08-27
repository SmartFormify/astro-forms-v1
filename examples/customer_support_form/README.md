# Astro Customer Support Form

A professional customer support form built with the Astro framework using an Astro `.astro` file and an external CSS file.


## Folder Structure

```text
customer-support-form/
├── README.md
├── style.css
└── customer_support.astro
```

## Form Fields

The form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Support Category
- Priority
- Order / Account ID
- Subject
- Support Message
- Additional Notes
- Contact Permission
- Submit Support Request button

## Required Fields

The following fields are required:

- First Name
- Last Name
- Email Address
- Support Category
- Priority
- Subject
- Support Message

The form uses native HTML `required` validation.

## SmartFormify Setup

Open:

```text
customer_support.astro
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
Astro Customer Support Form
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
2. Open the customer support page.
3. Complete the required support information.
4. Optionally enter phone number, Order / Account ID, and additional notes.
5. Select the contact permission option if needed.
6. Click **Submit Support Request**.

> Note: This example provides the customer support form UI. It does not create support tickets, store requests, send emails, or provide a support dashboard unless those workflows are configured through the connected backend/endpoint.

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

Place `customer_support.astro` under an appropriate `src/pages/` location. The file location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Customization

Edit `customer_support.astro` to change:

- Support categories
- Priority options
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
