# Prueba técnica-backend

Este proyecto fue probado utilizando XAMPP, pero cualquier tipo de servidor apache debería funcionar en su aplicación.

## Instrucciones de instalación y uso

1-Clonar y/o descargar el proyecto backendlaravel desde el repositorio GitHub entregado.

2-Para la ejecución de la aplicación, previamente debe encontrarse instalado php y laravel en su ordenador y posteriormente, instalar las dependencias de php mediante el siguiente comando en la consola de esta misma aplicación:
```
composer install
```

3-Se debe crear una nueva base de datos en MySQL de nombre `db_mundo_test`.

4-Revisar que el archivo `.env` posea la misma información en los campos `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD` (vacío por defecto) en su gestor, los campos `DB_HOST` y `DB_PORT` son los entregados en este último por defecto.

Luego, realizar las migraciones de las tablas de la base de datos mediante el siguiente comando en consola:

```
php artisan migrate
```

5-Las tablas puedes ser rellenadas manualmente en la base de datos, pero a modo de prueba, para utilizar un llenado preestablecido, cargar el seeder con el siguiente comando:

```
php artisan db:seed --class=DatabaseSeeder
```

6-Finalmente, dejar funcionando y en uso el backend mediante el siguiente comando:

```
php artisan serve
```

En consola nos entregará que la apliación se estará ejecutando en `http://127.0.0.1:8000` (accesible) o en donde este se encuentre configurado.

Para detener su ejecución, presionar Ctrl+C.

-----------------------------------------
Sebastián Navarrete Catril
-----------------------------------------
