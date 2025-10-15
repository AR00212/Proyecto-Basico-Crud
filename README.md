# Proyecto-Basico-Crud

Este proyecto es un **CRUD básico de administración de empresas** desarrollado con **Laravel**, usando Blade como motor de plantillas y Bootstrap para el diseño. Incluye gestión de usuarios con roles y autenticación básica.

---

## 📋 Requisitos

- PHP >= 8.1  
- Composer  
- MySQL  
- Node.js & npm (opcional, para assets y Tailwind/Vite)  
- Laravel 10 (o versión compatible)

---

## ⚡ Instalación

1. Clona el repositorio:

```bash
git clone https://github.com/AR00212/Proyecto-Basico-Crud.git
cd Proyecto-Basico-Crud
````

2. Instala dependencias de PHP:

```bash
composer install
```

3. Copia el archivo de entorno y configúralo:

```bash
cp .env.example .env
```

Edita `.env` con tus datos de base de datos:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

4. Genera la clave de la aplicación:

```bash
php artisan key:generate
```

5. Ejecuta migraciones y seeders (para crear tablas y usuarios iniciales):

```bash
php artisan migrate --seed
```

---

## 🚀 Servidor de desarrollo

Inicia el servidor local de Laravel:

```bash
php artisan serve
```

Abre tu navegador en: [http://localhost:8000](http://localhost:8000)

---

## 🗂 Estructura principal

* `app/Models` → Modelos de Laravel (por ejemplo, `User.php`, `Empresa.php`)
* `app/Http/Controllers` → Controladores de la aplicación
* `resources/views` → Vistas Blade
* `routes/web.php` → Rutas web
* `database/migrations` → Migraciones de base de datos
* `database/seeders` → Seeders para datos iniciales

---

## 🧑‍💻 Usuarios predefinidos

El proyecto incluye usuarios de ejemplo:

| Nombre      | Email                                                   | Rol         |
| ----------- | ------------------------------------------------------- | ----------- |
| Super Admin | [superadmin@ejemplo.com](mailto:superadmin@ejemplo.com) | super_admin |
| Cliente     | [ariel@gmail.com](mailto:ariel@gmail.com)               | cliente     |

> Puedes crear nuevos usuarios desde la interfaz de administración o usando **Artisan Tinker**.

---

## 🔧 Comandos útiles

* `php artisan migrate` → Ejecutar migraciones
* `php artisan db:seed` → Ejecutar seeders
* `php artisan tinker` → Consola interactiva de Laravel
* `php artisan make:controller NombreController` → Crear controlador
* `php artisan make:model NombreModelo -m` → Crear modelo con migración

---

## 📦 Frontend

Si tu proyecto usa **Vite / Tailwind / Bootstrap**, instala las dependencias de Node.js:

```bash
npm install
npm run dev
```

---

## 📝 Notas

* Este proyecto es una base para aprender Laravel CRUD y autenticación con roles.
* Se recomienda usar **SSH** para subir cambios a GitHub en lugar de tokens en la URL por seguridad.

---

## 📜 Licencia

Este proyecto es **libre para uso educativo y personal**.

