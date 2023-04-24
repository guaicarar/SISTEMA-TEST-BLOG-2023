<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Clonación del Sistema
1. Abrir una nueva ventana en Visual Studio Code  ``` Archivo\Nueva Ventana ```

2. Dar click en; ```repositorio remoto en una carpeta local```

3. Luego en la parte superior de visual studio code se pega el siguiente link:
```
    https://github.com/guaicarar/SISTEMA-TEST-BLOG-2023.git
```
4. Luego se le da click en; ```Dirección URL de repositorio```

5. Luego se elige la carpeta donde se desea guardar el repositorio, y click en; ```seleccionar como destino del repositorio```

6. Por último, aparece una ventana de diálogo diciendo; ¿ Desea abrir el repositorio clonado ?, y se le da click en; ```abrir```

## Instalación

1. Levantar los servicios del servidor local(Xampp); ```Apache``` y ``` MySQL```

2. Agregar Composer

```javascript
composer install
```

3. Crear el fichero ``` .env ``` en la raíz del proyecto y asignar lo siguiente;
``` 
    APP_NAME=Blogs
    APP_ENV=local
    APP_KEY=base64:4+J4zanzRPDv9iNdRATo5hstPWSG7w7wR9oRX/m3HNc=
    APP_DEBUG=true
    APP_URL=http://localhost

    LOG_CHANNEL=stack
    LOG_DEPRECATIONS_CHANNEL=null
    LOG_LEVEL=debug

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=appblogs
    DB_USERNAME=root
    DB_PASSWORD=

    BROADCAST_DRIVER=log
    CACHE_DRIVER=file
    FILESYSTEM_DISK=local
    QUEUE_CONNECTION=sync
    SESSION_DRIVER=file
    SESSION_LIFETIME=120

    MEMCACHED_HOST=127.0.0.1

    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=rutarnanalfagaref@gmail.com
    MAIL_PASSWORD=gekbtbdsfvbdidsw
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=rutarnanalfagaref@gmail.com
    MAIL_FROM_NAME="${APP_NAME}"


    AWS_ACCESS_KEY_ID=
    AWS_SECRET_ACCESS_KEY=
    AWS_DEFAULT_REGION=us-east-1
    AWS_BUCKET=
    AWS_USE_PATH_STYLE_ENDPOINT=false

    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_HOST=
    PUSHER_PORT=443
    PUSHER_SCHEME=https
    PUSHER_APP_CLUSTER=mt1

    VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    VITE_PUSHER_HOST="${PUSHER_HOST}"
    VITE_PUSHER_PORT="${PUSHER_PORT}"
    VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
    VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
4. Crear en phpmyadmin un nueva base de datos con el siguiente nombre; ```appblogs``` 

5. Generar migraciones
```
    php artisan migrate
```
6. Agregar el siguiente comando
```
    npm install --save-dev vite laravel-vite-plugin
```
7. Agregar el siguiente comando en la terminal
```
    npm run build
```
8. Por último, ejecutar el sistema
```
    php artisan serve
```

## Tecnologías utilizadas

- **[Xampp v3.3.0](https://vehikl.com/)**
- **[Laravel 10.8.0](https://vehikl.com/)**
- **[Visual Studio Code](https://vehikl.com/)**
- **[Bootstrap 5.2.3](https://vehikl.com/)**


## License

El marco de Laravel es un software de código abierto con licencia bajo el [MIT license](https://opensource.org/licenses/MIT).
