# 🚀 CRUD-APP (API Backend con Laravel)

Este repositorio contiene el código fuente de la aplicación **CRUD-APP**, una API backend desarrollada con **Laravel**. Esta API está diseñada para proporcionar las funcionalidades CRUD (Crear, Leer, Actualizar, Eliminar) necesarias para interactuar con una aplicación frontend (como [CRUD-FRONT de Angular](https://github.com/Ricardojpq/CRUD-FRONT)) o cualquier otro cliente que necesite gestionar recursos.

---

### ✨ Características Principales

* **API RESTful:** Implementación de endpoints RESTful para operaciones CRUD.
* **Base de Datos Relacional:** Configurable para trabajar con diferentes bases de datos (por defecto, SQLite, MySQL o PostgreSQL).
* **Validación de Datos:** Reglas de validación robustas para asegurar la integridad de los datos.
* **Autenticación (Opcional/Configurable):** Capacidad para integrar sistemas de autenticación si se requiere.
* **Estructura Modular:** Organización de código limpia y escalable siguiendo las mejores prácticas de Laravel.

---

### 📋 Requisitos Previos

Asegúrate de tener las siguientes herramientas instaladas en tu sistema antes de comenzar:

* **PHP:** Versión 8.1 o superior.
* **Composer:** Gestor de dependencias para PHP. [Descargar Composer](https://getcomposer.org/download/).

---

### 🚀 Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en tu entorno local:

1.  **Clona el repositorio:**

    ```bash
    git clone [https://github.com/Ricardojpq/CRUD-APP.git](https://github.com/Ricardojpq/CRUD-APP.git)
    ```

2.  **Navega al directorio del proyecto:**

    ```bash
    cd CRUD-APP
    ```

3.  **Instala las dependencias de PHP con Composer:**

    ```bash
    composer install
    ```


### ▶️ Uso de la Aplicación

#### Iniciar el Servidor de Desarrollo

Para ejecutar la aplicación utilizando el servidor de desarrollo integrado de PHP (útil para pruebas y desarrollo local):

```bash
php composer run dev
