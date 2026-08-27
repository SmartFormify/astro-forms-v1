# Astro Volunteer Registration Form

A basic Volunteer Registration form built with Astro that submits form data directly to a SmartFormify endpoint.


## Folder Structure

```text
volunteer-registration-form/
├── README.md
├── style.css
└── volunteer_registration.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Age
- Availability
- Area of Interest
- About Yourself

## SmartFormify Setup

Open:

```text
volunteer_registration.astro
```

Update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Volunteer Registration Form
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

## CSS

All styling is contained in:

```text
style.css
```

The Astro page references it with:

```html
<link rel="stylesheet" href="/style.css">
```

When integrating into an Astro project, place `style.css` in the project's `public/` directory if it should be served as `/style.css`.

## Setup

Place `volunteer_registration.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Volunteer Registration page.
3. Enter the volunteer information.
4. Select availability and area of interest.
5. Add information about yourself.
6. Submit the form.
7. Verify the submission in your SmartFormify workflow.

> Note: This form provides the volunteer registration UI and endpoint submission. It does not manage volunteer applications, scheduling, volunteer records, or placement unless those workflows are configured through the connected endpoint.

## Customization

Edit `volunteer_registration.astro` to customize:

- Availability options
- Area of interest options
- Form fields
- Labels
- Placeholders
- Button text
- SmartFormify endpoint

Edit `style.css` to customize:

- Colors
- Typography
- Spacing
- Form width
- Input styles
- Button styles
- Responsive behavior
