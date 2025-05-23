# ✈️ City Tours
Sistema de gestión turística que permite a los usuarios registrarse, iniciar sesión, explorar paquetes turísticos y gestionar usuarios registrados.

![citytours_github](https://github.com/user-attachments/assets/32f6f527-72ba-4d32-968f-8ad54ae39a16)

## 🛠️ Tecnologías
- ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
- ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
- ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
- ![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)
- ![CSS](https://img.shields.io/badge/CSS-663399?style=for-the-badge)
- ![XAMPP](https://img.shields.io/badge/Xampp-F37623?style=for-the-badge&logo=xampp&logoColor=white)

## ⚙️ Instalación y Configuración
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
