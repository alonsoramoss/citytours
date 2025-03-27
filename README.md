# City Tours
Sistema de gestión turística con Laravel, permite el registro de usuarios, inicio de sesión y la venta de paquetes turísticos.

### Pasos para utilizar la aplicación web

#### 1. Clonar el repositorio
    git clone https://github.com/alonsoramoss/citytours.git

#### 2. Instalar dependencias
    composer install

#### 3. Crear el archivo de configuración
Copia el archivo .env.example a .env:

    cp .env.example .env

#### 4. Iniciar Apache y MySQL en XAMPP
Abre el panel de control de XAMPP y activa los servicios de **Apache** y **MySQL**.

#### 5. Configurar el archivo `.env` con los datos de conexión a MySQL
```sql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=citytours
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

#### 6. Generar la clave de la aplicación
    php artisan key:generate

#### 7. Migrar las tablas a la base de datos
Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

    php artisan migrate
Si la base de datos `citytours` no existe en MySQL, también se creará.

#### 8. Iniciar el servidor de desarrollo
    php artisan serve
