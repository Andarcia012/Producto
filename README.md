# Proyecto Laravel: Gestión de Productos

Este proyecto es una aplicación Laravel que permite gestionar productos. La aplicación incluye funcionalidades para crear, leer, actualizar y eliminar (CRUD) productos.

## Requisitos Previos

- PHP >= 8
- Composer
- Laravel 8.x
- Base de datos MySQL o PostgreSQL

## Instalación

### 1. Instalar composer 

```composer install```

### 2. Configurar la base de datos

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Producto
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 3. Generar la Clave de la Aplicación
```php artisan key:generate```

### 4. Ejecutar Migraciones
```php artisan migrate```

### 5. Ejecución de la Aplicación
```php artisan serve```