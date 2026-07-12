# Travel Express — modernized workspace

The original Laravel 8 application remains at the workspace root as the migration source. The completed target source is split into [`backend`](backend) (Laravel REST API) and [`frontend`](frontend) (React JavaScript SPA).

## Run

1. Install PHP **8.2 or newer**; the current PHP 8.1 installation cannot run Laravel 12.
2. Create a Laravel 12 skeleton in `backend` (preserving the supplied `app`, `routes`, and `bootstrap` files), run `composer require laravel/sanctum`, then `php artisan install:api`.
3. Copy the legacy migrations listed in `backend/database/README.md`, configure `backend/.env`, migrate a copy of the existing database, and copy `public/images` plus `public/uploads` to `backend/public`.
4. From `frontend`, copy `.env.example` to `.env`, run `npm.cmd install`, then `npm.cmd run dev`.

## Validation checklist

- Public packages and tours render from `GET /api/v1/packages` and `/tours`.
- Register, login, logout, and authenticated profile updates return JSON and use bearer tokens.
- A booking computes `persons × price`, preserves optional tour/package IDs, and appears in My Bookings.
- An admin can search, create, update, and delete users/tours/packages; can list bookings and change their status.
- A non-admin receives HTTP 403 on every `/api/v1/admin/*` endpoint and is redirected away from React admin routes.
