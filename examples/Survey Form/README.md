# Astro Survey Form

A professional survey form built with the Astro framework using an Astro `.astro` file and an external CSS file.

The original Laravel Blade template and Laravel route requirements have been removed while preserving the survey questions, rating controls, validation, consent section, and design.

## Folder Structure

```text
survey-form/
├── README.md
├── style.css
└── survey.astro
```

## Form Fields

The survey includes:

- Full Name
- Email Address
- Overall Satisfaction Rating
- Product Usage Frequency
- Ease of Use Rating
- Favorite Product Feature
- Improvement Suggestions
- Recommendation Score
- Additional Comments
- Contact Permission
- Submit Survey button

## Required Fields

The following fields are required:

- Overall Satisfaction Rating
- Product Usage Frequency
- Ease of Use Rating
- Recommendation Score

The form uses native HTML `required` validation.

## SmartFormify Setup

Open:

```text
survey.astro
```

Update:

```astro
const endpointUrl = "YOUR_SMARTFORMIFY_ENDPOINT_URL";
```

Replace the placeholder with your SmartFormify endpoint URL.

The form submits using:

```html
method="POST"
```

The submission flow is:

```text
Astro Survey Form
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

## Testing

1. Configure your SmartFormify endpoint URL.
2. Open the survey page.
3. Select an overall satisfaction rating.
4. Select product usage frequency.
5. Select an ease-of-use rating.
6. Select a recommendation score.
7. Optionally enter comments and contact information.
8. Click **Submit Survey**.

> Note: This example provides the survey UI. It does not store responses, calculate survey results, generate reports, or provide survey analytics unless those workflows are configured through the connected endpoint.

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

Place `survey.astro` under an appropriate `src/pages/` location. The file location determines the page URL.

## Requirements

- Astro
- SmartFormify endpoint URL
- No additional packages

## Customization

Edit `survey.astro` to change:

- Survey questions
- Rating options
- Product usage options
- Recommendation options
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
- Rating controls
- Radio controls
- Button styling
- Responsive behavior
