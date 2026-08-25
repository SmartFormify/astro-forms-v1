# Laravel Blade Customer Review Form

A basic **Customer Review** form built with Laravel Blade that submits form data directly to a **SmartFormify endpoint**.

## Folder Structure

```text
customer-review/
├── README.md
├── routes/
│   └── web.php
├── resources/
│   └── views/
│       └── customer_review.blade.php
└── public/
    └── css/
        └── style.css
```

## Form Fields

* Full Name
* Email
* Overall Rating
* Service / Product
* Review
* Would You Recommend Us?

## Setup

### 1. Add the Route

In `routes/web.php`:

```php
use Illuminate\Support\Facades\Route;

Route::view('/customer-review', 'customer_review');
```

### 2. Add the Blade File

Create:

```text
resources/views/customer_review.blade.php
```

Add the Customer Review form code.

### 3. Add the CSS File

Create:

```text
public/css/customer_review.css
```

The Blade file loads the stylesheet using:

```blade
<link
    rel="stylesheet"
    href="{{ asset('css/style.css') }}"
>
```

### 4. Add Your SmartFormify Endpoint

Update the form action:

```html
<form
    action="https://api.smartformify.com/YOUR_FORM_ENDPOINT"
    method="POST"
>
```

Replace `YOUR_FORM_ENDPOINT` with your actual SmartFormify endpoint.

### 5. Run Laravel

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000/customer-review
```

## Note

This is a basic Laravel Blade example. Laravel serves the Blade view, the external CSS file handles styling, and the browser submits the completed form directly to SmartFormify.

No controller or additional Laravel packages are required.
