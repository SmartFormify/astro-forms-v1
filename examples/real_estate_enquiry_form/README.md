# Astro Real Estate Enquiry Form

A basic Real Estate Enquiry form built with Astro that submits form data directly to a SmartFormify endpoint.


## Folder Structure

```text
real-estate-enquiry-form/
├── README.md
├── style.css
└── real_estate_enquiry.astro
```

## Form Fields

- Full Name
- Email
- Phone
- Enquiry Type
- Property Type
- Preferred Location
- Budget Range
- Bedrooms
- Additional Requirements

## SmartFormify Setup

Open:

```text
real_estate_enquiry.astro
```

Update:

```astro
const endpointUrl = "https://api.smartformify.com/fe/YOUR_ENDPOINT_KEY";
```

Replace the placeholder with your actual SmartFormify endpoint.

The form submits directly using `POST`:

```text
Astro Real Estate Enquiry Form
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

Place `real_estate_enquiry.astro` under an appropriate `src/pages/` location in your Astro project. Its location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Testing

1. Configure the SmartFormify endpoint.
2. Open the Real Estate Enquiry page.
3. Enter the contact information.
4. Select the enquiry type.
5. Select the property type.
6. Enter the preferred location.
7. Select the budget range.
8. Select the number of bedrooms.
9. Add additional requirements.
10. Submit the form.

> Note: This form provides the real estate enquiry UI and endpoint submission. It does not search properties, calculate mortgages, manage listings, or provide a property management system unless those workflows are configured through the connected endpoint.

## Customization

Edit `real_estate_enquiry.astro` to customize:

- Enquiry type options
- Property type options
- Location options
- Budget ranges
- Bedroom options
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
