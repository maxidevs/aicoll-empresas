<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Aicoll Empresas CRUD

¡**Aicoll Companies CRUD**! 🚀

Este proyecto es una aplicación web desarrollada en Laravel, que implementa un CRUD completo de empresas. Además, la página de bienvenida replica la landing page de la empresa reclutadora, con algunos ajustes visuales para la versión de escritorio.

## Características principales

- CRUD de empresas (crear, ver, editar, eliminar)
- Página de bienvenida copiada del home de aicoll y con algunas modificaciones visuales para la versión de escritorio
- Uso de Laravel, Bootstrap y TailwindCSS para la estructura visual rapida
- Uso de DataTables para la presentación de la tabla de empresas

## Requisitos

- PHP >= 8.2
- Composer
- Node.js y npm
- MySQL o cualquier base de datos compatible con Laravel

## Instalación y configuración

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/maxidevs/aicoll-empresas.git
   cd aicoll-empresas
   ```

2. **Instala las dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Instala las dependencias de Node:**
   ```bash
   npm install
   ```

4. **Copia el archivo de entorno y configura tus variables:**
   ```bash
   cp .env.example .env
   # Edita .env con tus credenciales de base de datos
   ```

5. **Genera la clave de la aplicación:**
   ```bash
   php artisan key:generate
   ```

6. **Ejecuta las migraciones:**
   ```bash
   php artisan migrate
   ```

7. **Carga datos de empresas de ejemplo (opcional):**
   ```bash
   php artisan db:seed --class=CompaniesSeeder
   ```

8. **Compila los assets:**
   ```bash
   npm run build
   # o para desarrollo
   npm run dev
   ```

9. **Inicia el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```

---

## Estructura del proyecto

- `app/Models/Company.php`: Modelo principal de empresas
- `resources/views/companies/`: Vistas Blade para CRUD
- `database/seeders/CompaniesSeeder.php`: Seeder de empresas
- `public/landingpage/`: Recursos de la landing page original

## Tests

El proyecto incluye tests sencillos de tipo Feature para el CRUD de empresas, usando PHPUnit. Puedes ejecutarlos con:

```bash
php artisan test
```

Los tests cubren:
- Creación de empresa
- Validación de NIT duplicado
- Actualización de empresa
- Eliminación de empresa inactiva
- Prevencion de eliminación de empresa activa

## Créditos

Desarrollado por Max Jimenez para el proceso de selección de Aicoll Development Department.

---
