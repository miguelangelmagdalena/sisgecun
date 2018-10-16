/*
* Migraciones https://laravel.com/docs/5.7/migrations#foreign-key-constraints
*/
php artisan migrate:refresh
php artisan migrate:refresh --seed
php artisan migrate:refresh --seed --path="database/migrations/sisgecun"

/*
* Seed NO FUNCIONANDO POR EL ORDER (BUSCAR COMO SIN REVISION DE CLAVE FORANEA) https://laravel.com/docs/5.7/seeding
*/
php artisan db:seed
php artisan db:seed --class=UsersTableSeeder

/*
* Generamos migracion para todas las tablas en nuestra DB https://github.com/Xethron/migrations-generator
*/
php artisan migrate:generate --path="database/migrations/sisgecun"

/*
* Generamos migracion para todas las tablas en nuestra DB https://github.com/Xethron/migrations-generator
*/
php artisan migrate:generate

/*
* Creamos seed para las tablas listadas https://github.com/orangehill/iseed
*/
php artisan iseed data_rows,data_types,menus,menu_items,migrations,password_resets,permissions,permission_role,roles,settings,users,user_roles