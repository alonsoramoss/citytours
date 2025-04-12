# City Tours
Sistema de gestión turística que permite el registro de usuarios, inicio de sesión y la venta de paquetes turísticos.

![citytours_github](https://github.com/user-attachments/assets/4097e117-0434-499d-85a7-ad5fbd56a187)

## Instalación y Configuración

#### 1. Clona el repositorio
    git clone https://github.com/alonsoramoss/citytours.git

#### 2. Instala dependencias
    composer install

#### 3. Crea el archivo de configuración
Copia el archivo .env.example a .env:

    cp .env.example .env

#### 4. Inicia Apache y MySQL en XAMPP
Abre el panel de control de XAMPP y activa los servicios de **Apache** y **MySQL**.

#### 5. Configura el archivo `.env` con los datos de conexión a MySQL
```sql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=citytours
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

#### 6. Genera la clave de la aplicación
    php artisan key:generate

#### 7. Migra las tablas a la base de datos
Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

    php artisan migrate
Si la base de datos `citytours` no existe en MySQL, también se creará.

#### 8. Inicia el servidor de desarrollo
    php artisan serve
