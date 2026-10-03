# Mi API de Productos - Proyecto Laravel

Esta es una API REST básica para la gestión de productos, desarrollada con **Laravel 13**.

## Características
- Endpoint para listar productos (`GET /api/productos`).
- Endpoint para crear productos (`POST /api/productos`).
- Estructura MVC completa.

## Tecnologías Utilizadas
- PHP 8.5
- Laravel 13
- SQLite (base de datos por defecto para desarrollo)
- Composer

## Requisitos Previos
- PHP >= 8.3
- Composer
- Git

## Instalación
Sigue estos pasos para ejecutar el proyecto localmente:

1.  **Clona el repositorio:**
    ```bash
    git clone https://github.com/perezneyda260-creator/laravel-api.git

2. **Entrar al directorio:**
    cd laravel-api

3. **Instala las dependencias en PHP:**
   composer install

4. **Copia el archivo de entorno y genera la clave:**
   cp .env.example .env
   php artisan key:generate

5. **Crea la base de datos y ejecuta las migraciones:**
   touch database/database.sqlite
   php artisan migrate

6. **Inicia el servidor de desarrollo:**
   php artisan serve

## USO
Una vez iniciado el servidor, visita http://127.0.0.1:8000/api/productos para ver la lista de productos.

## LICENCIA 
Este proyecto es de codigo abierto. 