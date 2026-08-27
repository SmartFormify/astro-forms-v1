# Astro Newsletter Signup Form

A professional newsletter signup form built with the Astro framework using an Astro `.astro` file and an external CSS file.


## Folder Structure

```text
newsletter-form/
├── README.md
├── style.css
└── newsletter.astro
```

## Form Fields

The newsletter form includes:

- Email Address
- Name
- Newsletter consent checkbox
- Subscribe to Newsletter button

Required fields:

- Email Address
- Newsletter consent

## SmartFormify Setup

Open:

```text
newsletter.astro
```

Update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your SmartFormify endpoint URL.

The form uses:

```html
method="POST"
```

The submission flow is:

```text
Astro Newsletter Form
          ↓
SmartFormify Endpoint
          ↓
Submission Processing
          ↓
Email / Notifications / Response
```


> Note: This form provides the newsletter signup UI. It does not itself store subscribers, send newsletters, or connect to a mailing-list service. Those workflows must be handled by the configured backend/endpoint.

## Hidden Field

The form includes the SmartFormify silent bot-check field:

```html
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

When integrating these files into an Astro project, place `style.css` in the project's `public/` directory if you want it served at `/style.css`.

## Setup

Copy the files into your Astro project.

Place `newsletter.astro` under an appropriate `src/pages/` location. The file location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure your SmartFormify endpoint URL.
2. Open the newsletter page.
3. Enter an email address.
4. Optionally enter a name.
5. Accept the newsletter consent.
6. Click **Subscribe to Newsletter**.

## Customization

Edit `newsletter.astro` to change:

- Form fields
- Labels
- Placeholders
- Button text
- Consent text
- Privacy note
- SmartFormify endpoint URL

Edit `style.css` to change:

- Colors
- Typography
- Spacing
- Card layout
- Button styling
- Responsive behavior
