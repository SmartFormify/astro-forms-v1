# Astro Contact Form

A professional, responsive Contact Form built with Astro, plain HTML, and an external CSS stylesheet.

This example is designed for a blog and form-example collection. The form does not require a custom backend, API route, form library or additional package for submission. It can send form data directly to a SmartFormify endpoint.

## Files

``` text
contact-form/
├── index.astro
├── style.css
└── README.md
```

### `index.astro`

Contains the complete Astro Contact Form UI and imports the external stylesheet.

The form includes:

-   Full Name
-   Email Address
-   Subject
-   Message
-   Send Message button

The form uses HTML `required` validation and submits using the `POST`
method.

The stylesheet is imported in Astro frontmatter:

``` astro
---
import './style.css';
---
```

### `style.css`

Contains the complete responsive styling for the Contact Form.

The design supports:

-   Desktop
-   Tablet
-   Mobile
-   Accessible focus states
-   Responsive form layout
-   Professional form card
-   Contact information section
-   Responsive typography and spacing

### `README.md`

Documents the form structure, setup, SmartFormify configuration,
testing, and customization.

## Setup

This form is intended to be added to an Astro project.

No separate backend or form package is required for the form itself.

Place the form folder inside:

``` text
src/pages/forms/
```

The final structure is:

``` text
src/
└── pages/
    └── forms/
        └── contact-form/
            ├── index.astro
            ├── style.css
            └── README.md
```

Because the page is named `index.astro`, Astro will expose it as:

``` text
/forms/contact-form/
```

## SmartFormify Form Submission

The Contact Form can submit directly to a SmartFormify endpoint.

The basic flow is:

``` text
Astro Contact Form
        ↓
SmartFormify Endpoint URL
        ↓
Submission Processing
        ↓
Email / Notifications / Response
```

This keeps the Astro example simple because no custom server-side
form-processing code is required.

### SmartFormify Setup

1.  Sign up or log in to SmartFormify.
2.  Go to the **Endpoints** section.
3.  Create an endpoint.
4.  Configure the endpoint as required.
5.  Copy the generated **Endpoint URL**.
6.  Open `index.astro`.
7.  Replace the placeholder endpoint with your actual SmartFormify
    endpoint.

For example:

``` astro
<form
  action="YOUR_SMARTFORMIFY_ENDPOINT_URL"
  method="POST"
>
```

Or, if the endpoint is stored in an Astro variable:

``` astro
---
const endpointUrl = 'YOUR_SMARTFORMIFY_ENDPOINT_URL';
---
```

Then:

``` astro
<form action={endpointUrl} method="POST">
```

Do not add a custom API route or backend handler when the goal is to
submit directly to the SmartFormify endpoint.

## SmartFormify Hidden Field

The form includes the SmartFormify silent bot-check field:

``` html
<input
  type="hidden"
  name="notes_hqse"
  value=""
/>
```

The `notes_hqse` field should always be present and empty.

Do not add validation to this field.

## Form Fields

The standard fields are:

``` text
name
email
subject
message
notes_hqse
```

Example:

``` html
<input
  type="text"
  name="name"
  required
/>

<input
  type="email"
  name="email"
  required
/>

<input
  type="text"
  name="subject"
  required
/>

<textarea
  name="message"
  required
></textarea>

<input
  type="hidden"
  name="notes_hqse"
  value=""
/>
```

## Testing

After adding the form to an Astro project:

1.  Start the Astro development server.
2.  Open the Contact Form page.
3.  Enter values into the required fields.
4.  Click **Send Message**.
5.  Verify that the submission reaches the configured SmartFormify
    endpoint.

The form page is available at:

``` text
/forms/contact-form/
```

The exact local URL depends on the Astro project configuration.

## Requirements

The Contact Form itself does not require:

-   Laravel
-   PHP
-   Composer
-   A custom backend
-   A custom API route
-   React
-   Vue
-   Svelte
-   Axios
-   jQuery
-   A form-handling package

It only requires an Astro project in which the form folder can be
placed.

The submission backend is handled by the configured SmartFormify
endpoint.

## Customization

You can customize the form by editing:

``` text
contact-form/index.astro
```

You can customize the design by editing:

``` text
contact-form/style.css
```

For example, you can change:

-   Form fields
-   Labels
-   Placeholders
-   Button text
-   Colors
-   Typography
-   Spacing
-   Layout
-   Contact information
-   Responsive breakpoints
-   Validation requirements

Keep the CSS in the external `style.css` file so the example remains
clean and reusable.

## Adding More Astro Forms

Each form should have its own folder under:

``` text
src/pages/forms/
```

For example:

``` text
src/pages/forms/
├── contact-form/
        ├── index.astro
        ├── style.css
        └── README.md

```

This structure keeps every form example independent and makes the
collection easy to maintain.

## Important

Before publishing or using the form, replace:

``` text
YOUR_SMARTFORMIFY_ENDPOINT_URL
```

with the actual SmartFormify endpoint URL.

Do not add a custom backend when direct SmartFormify submission is the
intended integration.
