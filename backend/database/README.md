# Existing schema

The included baseline migration reproduces the legacy schema exactly, including custom IDs and nullable role field. For a production cutover, point this API at the existing Travel Express database instead of running the baseline migration. Generate Sanctum's `personal_access_tokens` migration with `php artisan install:api`.
