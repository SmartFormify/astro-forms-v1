# Laravel Blade Product Enquiry Form

A basic **Product Enquiry** form built with Laravel Blade that submits form data directly to a **SmartFormify endpoint**.

## Folder Structure

```text
product-enquiry/
├── README.md
├── routes/
│   └── web.php
├── resources/
│   └── views/
│       └── product_enquiry.blade.php
└── public/
    └── css/
        └── style.css
```

## Form Fields

* Full Name
* Email
* Phone
* Product
* Quantity
* Budget Range
* Enquiry / Message

## Setup

### 1. Add the Route

In `routes/web.php`:

```php
use Illuminate\Support\Facades\Route;

Route::view('/product-enquiry', 'product_enquiry');
```

### 2. Add the Blade File

Create:

```text
resources/views/product_enquiry.blade.php
```

Add the Product Enquiry form code.

### 3. Add the CSS File

Create:

```text
public/css/product_enquiry.css
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
http://127.0.0.1:8000/product-enquiry
```

## Note

This is a basic Laravel Blade example. Laravel serves the Blade view, the external CSS file handles styling, and the browser submits the completed form directly to SmartFormify.

No controller or additional Laravel packages are required.
