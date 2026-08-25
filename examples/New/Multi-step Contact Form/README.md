# Laravel Blade Multi-Step Form

A basic multi-step contact form built with **Laravel Blade** and **JavaScript**, submitting form data directly to a **SmartFormify endpoint**.

## Folder Structure

```text
multi-step-form/
├── README.md
├── routes/
│   └── web.php
└── resources/
    └── views/
        └── multi_step_form.blade.php
```

## How It Works

The form has three steps:

1. Personal Information — Name, Email
2. Contact Details — Phone, Subject
3. Message — Message

The JavaScript controls the steps, and the completed form is submitted directly to SmartFormify.

```text
Step 1 → Step 2 → Step 3 → Submit → SmartFormify
```

## Setup

### 1. Add the Route

In `routes/web.php`:

```php
use Illuminate\Support\Facades\Route;

Route::view('/multi-step-form', 'multi_step_form');
```

### 2. Add the Blade File

Create:

```text
resources/views/multi_step_form.blade.php
```

Add the multi-step form code.

### 3. Add Your SmartFormify Endpoint

Update the form action:

```html
<form
    action="https://api.smartformify.com/YOUR_FORM_ENDPOINT"
    method="POST"
>
```

Replace `YOUR_FORM_ENDPOINT` with your actual SmartFormify endpoint.

### 4. Run Laravel

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000/multi-step-form
```

## Note

This is a basic example. Laravel serves the Blade view, JavaScript handles the multi-step UI, and the browser submits the completed form directly to SmartFormify.

No controller or additional Laravel packages are required.
