# ERP Core

Laravel 11 ERP foundation with authentication, dashboard layout, and role-based access control.

## Features

- **Laravel Breeze** (Blade) — login, registration, password reset, profile
- **ERP dashboard** — sidebar layout with admin and staff areas
- **Roles** — `admin` and `staff` with middleware protection
- **User management** — admin listing of system users

## Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
php artisan serve
```

Run `php artisan db:seed` only on a fresh database if you need demo accounts.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
