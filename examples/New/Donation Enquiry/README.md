# Laravel Blade Donation Enquiry Form

A basic **Donation Enquiry** form built with Laravel Blade that submits form data directly to a **SmartFormify endpoint**.

## Folder Structure

```text
donation-enquiry/
├── README.md
├── routes/
│   └── web.php
└── resources/
    └── views/
        └── donation_enquiry.blade.php
```

## Form Fields

* Name
* Email
* Phone
* Donation Type
* Donation Amount
* Enquiry / Message

## Setup

### 1. Add the Route

In `routes/web.php`:

```php
use Illuminate\Support\Facades\Route;

Route::view('/donation-enquiry', 'donation_enquiry');
```

### 2. Add the Blade File

Create:

```text
resources/views/donation_enquiry.blade.php
```

Add the Donation Enquiry form code.

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
http://127.0.0.1:8000/donation-enquiry
```

## Note

This is a basic Laravel Blade example. Laravel serves the Blade view, while the browser submits the completed form directly to SmartFormify.

No controller or additional Laravel packages are required.
