PHP MVC with laravel
===

This setup from laravel , can run on cloud9.

### storage fix 
```bash
>> chmod -R o+w storage
```

### run migration to create sqlite db
```bash
>> php artisan migration:install
>> php artisan migrate
```