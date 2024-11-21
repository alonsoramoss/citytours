# City Tours
Sistema de gestión turística con Laravel, permite el registro de usuarios, inicio de sesión y la venta de paquetes turísticos.

### Pasos para utilizar la aplicación web

#### 1. Clonar el repositorio
    git clone https://github.com/alonsoramoss/citytours.git

#### 2. Instalar dependencias
    composer install

#### 3. Configurar el archivo .env
Copia el archivo .env.example a .env:

    cp .env.example .env

Luego, abre el archivo `.env` y configura los siguientes detalles:
- **Base de datos**: Configura `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD` según tu entorno.

#### 4. Generar la clave de aplicación
Genera una nueva clave y colócala en `APP_KEY`:
    
    php artisan key:generate

#### 5. Migrar las tablas a la base de datos
Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

    php artisan migrate

#### 6. Iniciar el servidor

    php artisan serve
