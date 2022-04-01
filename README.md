# Mindcoding

## Launch the project
```bash
composer install
```

### Tailwind
```bash
npm install
npm run watch
```

### Database
Use what you prefer, but by default is sqlite
```bash
touch database/database.sqlite
php artisan migrate:fresh --seed
```

### Accessing the dashboard
You have to add this in your .env file

```env
ADMIN_EMAIL = youremail
ADMIN_PASSWORD = yourpassword
```

And then execute 
```bash
php artisan migrate:fresh --seed
```

## Tech used
- Laravel 9.6
- Tailwind 3.0.23
- Livewire 2.10
