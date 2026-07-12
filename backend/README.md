# Travel Express API Backend

## Database setup

Update the values in .env to point at the existing Travel Express MySQL database before running migrations.

Example:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=travel_express
DB_USERNAME=root
DB_PASSWORD=
```

## Legacy assets

Run the following command once the backend is configured:

```bash
php artisan travel:sync-legacy-assets
```

This copies the legacy public images and uploads into the backend public folder so existing image references keep working.
