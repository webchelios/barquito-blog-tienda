# Instalación
```
composer install
```
Crear una base de datos llamada barquito-db, al igual que el DB_DATABASE=barquito-db en el archivo .env
```
php artisan migrate
```
```
php artisan key:generate
```
```
php artisan migrate --seed
```

## Solución a posibles problemas relacionados al cache
Laravel compila y cache las vistas para mejor rendimiento. A veces no se actualizan automáticamente
´´´
php artisan view:clear && php artisan cache:clear && php artisan config:clear
´´´