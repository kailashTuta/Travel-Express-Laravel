# Travel Express modernization plan

## Phase 1 — Architecture assessment

The legacy Laravel 8 application contains public package and tour browsing, booking, authentication, user profiles and bookings, and administration of users, tours, packages, and booking statuses.  Its data schema and custom primary keys (`t_id`, `p_id`, and `booking_id`) are retained.

The target is a two-project workspace:

```
backend/   Laravel 12 REST API
frontend/  React 19 + Vite JavaScript SPA
```

Legacy route behaviour maps to `/api/v1` resources and equivalent client routes. Authentication uses Laravel Sanctum bearer tokens. No Blade rendering routes are carried into `backend`.

## Phase 2 — Backend API

The API uses form requests, JSON resources, policies, Sanctum authentication, API versioning, and a booking service for total-price calculation. Existing table names, IDs, fields, validation rules, and admin role semantics are preserved.

## Phase 3 — React client

The client uses React Router, Axios, an auth context, reusable public/admin layouts, and pages matching the legacy navigation. It sends `multipart/form-data` for legacy image uploads.

## Phase 4 — Cutover validation

Install dependencies on PHP 8.2+ and Node 24 LTS, run migrations against a copy of the current database, migrate existing public uploads, then execute the API and browser test checklists in `README.md`.
