## Instalación del proyecto

Sigue estos pasos después de clonar el repositorio:

1. Instala las dependencias de PHP:

   ```bash
   composer install
   ```

2. Instala las dependencias de Node.js:

   ```bash
   npm install
   ```

3. Copia el archivo de entorno y genera la clave de la aplicación:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   En Windows, si no tienes `cp`, usa:

   ```powershell
   copy .env.example .env
   php artisan key:generate
   ```

4. Configura la base de datos en `.env` según tu entorno local.

5. Ejecuta las migraciones si quieres crear las tablas de la base de datos:

   ```bash
   php artisan migrate
   ```

6. Inicia el servidor de desarrollo:

   ```bash
   php artisan serve
   ```
