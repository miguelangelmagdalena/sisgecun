# Avaluos

## Instalacion
    
### Iniciar
    - Iniciar Apache

    - Iniciar MySQL

    - Dentro del directoria raíz ejecutar el servidor (<http://127.0.0.1:8000>)
        php artisan serve
    
    - Algunas veces hay que resetiar la llave de configuracion de laravel
        php artisan key:generate

        Copiar  en archivo .env en el directorio raíz
        APP_KEY=base64:nvMdiXJElgDz05uICX4R1RJZsH7MLaAC/egQE9sxYyk=


### Configurar la BD
    - Import SQL (.BD_EXPORT_avaluosbd.sql)

    - Modificar archivo .env en el directorio raíz
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=homestead
        DB_USERNAME=homestead
        DB_PASSWORD=

