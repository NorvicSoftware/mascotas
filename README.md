<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Aplicación de Adopción de Mascotas

## Tabla de Contenidos
- [Introducción](#introducción)
- [Características](#características)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Uso](#uso)
- [Licencia](#licencia)

## Introducción
¡Bienvenido a la Aplicación de Adopción de Mascotas! Desarrollado en el curso de Laravel 11 Intensivo, Esta aplicación está diseñada para la adopción de mascotas, Muestra las mascotas disponibles en diversos refugios. La aplicación permite a los usuarios navegar por las mascotas disponibles, ver información detallada y poder realizar solicitudes de adopción.

## Características
- **Registro de Refugios**: Registro de Refugios donde estaran las mascotas.
- **Registro de Personas**: Registro personas..
- **Listados de Mascotas**: Navegar, buscar y registrar mascotas.
- **Detalles de Mascotas**: Ver información detallada sobre cada mascota.
- **Solicitudes de Adopción**: Registrar solicitudes para adoptar mascotas.

## Instalación
Sigue estos pasos para configurar la aplicación en tu máquina local.

### Requisitos Previos
- PHP >= 8.2
- Composer
- Un servidor web como Apache o Nginx
- Una base de datos como SQLite o MySQL

### Pasos
1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/NorvicSoftware/mascotas
   Ingresamos al proyecto (cd mascotas)
   Instalamos las dependencias del proyecto (composer install)
   Crear el archivo de configuración .env (cp .env.example .env)
   Generamos la llave de la aplicación (php artisan key:generate)
   Ejecutamos las migraciones y los seeder (php artisan migrate --seed)
   Ejecutamos el servidor local (php artisan serve)

### Configuración de la Base de Datos
1. **SQLite**
```bash
   Crear el archivo "database.sqlite" en la carpeta 
   ```
2. **MySQL**

```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=mascotas-db
   DB_USERNAME=root
   DB_PASSWORD=
   ```


## Uso
- **Registro de Refugios**: Los usuarios pueden registrar refugios.
- **Registro de Mascotas**: Los usuarios pueden registrar Mascotas.
- **Ver Detalles de Mascotas**: Hacer clic en una mascota para ver información detallada mas la imagen de la mascota.
- **registro de personas**: Los usuarios pueden registrar personas.
- **Registrar Solicitudes de Adopción**: Llenar el formulario de adopción para registrar la adopción.


## Licencia
Este proyecto está licenciado bajo la Licencia MIT