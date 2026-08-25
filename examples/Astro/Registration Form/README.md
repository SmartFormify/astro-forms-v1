# Astro Registration Form

A professional registration form built with the Astro framework using an Astro `.astro` file and an external CSS file.

The original Laravel Blade template and Laravel route requirements have been removed while preserving the registration form fields, validation, and design.

## Folder Structure

```text
registration-form/
├── README.md
├── style.css
└── registration.astro
```

## Form Fields

The registration form includes:

- First Name
- Last Name
- Email Address
- Phone Number
- Account Type
- Password
- Confirm Password
- Terms and Privacy Policy checkbox
- Create Account button

## Validation

The form uses native HTML validation.

Required fields include:

- First Name
- Last Name
- Email Address
- Account Type
- Password
- Confirm Password
- Terms and Privacy Policy

The password requires a minimum of 8 characters.

## SmartFormify Setup

Open:

```text
registration.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your SmartFormify endpoint URL.

The form uses:

```html
method="POST"
```

The submission flow is:

```text
Astro Registration Form
          ↓
SmartFormify Endpoint
          ↓
Submission Processing
          ↓
Email / Notifications / Response
```

No Laravel controller, Laravel route, database logic, custom API, or additional package is required.

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

When integrating these three files into an Astro project, place `style.css` in the project's `public/` directory if you want it served at `/style.css`.

## Setup

Copy the files into your Astro project.

Place `registration.astro` under an appropriate `src/pages/` location. The file location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure your SmartFormify endpoint URL.
2. Open the registration page.
3. Enter the required information.
4. Select an account type.
5. Enter a password with at least 8 characters.
6. Confirm the password.
7. Accept the Terms and Privacy Policy.
8. Click **Create Account**.

## Customization

Edit `registration.astro` to change:

- Form fields
- Account type options
- Labels
- Placeholders
- Button text
- Terms and privacy links
- Validation requirements
- SmartFormify endpoint URL

Edit `style.css` to change:

- Colors
- Typography
- Spacing
- Card layout
- Button styling
- Responsive behavior
