# gta
Testing IONOS Git

## Database configuration

Copy `.env.example` to `.env` for local development and replace the placeholder values with the MySQL or MariaDB credentials supplied by IONOS. The application can create a connection with:

```php
require_once __DIR__ . '/config/database.php';

$database = databaseConnection();
```

For IONOS Deploy Now, add `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, `DB_PASSWORD`, and `DB_CHARSET` as project environment variables in the Deploy Now dashboard. Keep `.env` out of Git and use a strong, unique database password.