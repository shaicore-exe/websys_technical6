# SHAI POS — TFA1 Laravel Rebuild

This is a Laravel rebuild of the TFA1 POS application. It currently uses static PHP arrays for the customer and user account pages.

## Pages

- `/` — landing page
- `/about` — project information
- `/customers` — customer accounts
- `/users` — user accounts

## Run locally

Make sure PHP 8.2+ and Composer are installed, then run these commands from the project folder:

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan serve
```

On macOS/Linux, use `cp .env.example .env` instead of `copy .env.example .env`.

Open `http://127.0.0.1:8000` in a browser. The four navigation links should lead to all four routes.

