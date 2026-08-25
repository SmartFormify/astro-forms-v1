# Astro Login UI Form

A professional login UI form built with the Astro framework using an Astro `.astro` file and an external CSS file.

The original Laravel Blade template and Laravel route requirements have been removed while preserving the login fields, remember-me option, forgot-password link, create-account link, validation, and design.

## Folder Structure

```text
login-form/
├── README.md
├── style.css
└── login.astro
```

## Form Fields

The login form includes:

- Email Address
- Password
- Forgot Password link
- Remember Me checkbox
- Sign In button
- Create Account link

The email and password fields use native HTML `required` validation.

## SmartFormify Setup

Open:

```text
login.astro
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
Astro Login Form
        ↓
SmartFormify Endpoint
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```

No Laravel controller, Laravel route, custom API, database logic, or additional package is required for the form UI.

> Note: This example provides the login UI. It does not authenticate users, validate credentials against a database, create sessions, or implement an authentication system.

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

When integrating these files into an Astro project, place `style.css` in the project's `public/` directory if you want it served at `/style.css`.

## Setup

Copy the files into your Astro project.

Place `login.astro` under an appropriate `src/pages/` location. The file location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure your SmartFormify endpoint URL.
2. Open the login page.
3. Enter an email address.
4. Enter a password.
5. Optionally select **Remember Me**.
6. Click **Sign In**.

The **Forgot Password** and **Create Account** links can be connected to the appropriate pages in your Astro project.

## Customization

Edit `login.astro` to change:

- Form fields
- Labels
- Placeholders
- Button text
- Forgot Password URL
- Create Account URL
- Validation requirements
- SmartFormify endpoint URL

Edit `style.css` to change:

- Colors
- Typography
- Spacing
- Card layout
- Button styling
- Responsive behavior
