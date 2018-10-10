<?php

use Illuminate\Database\Seeder;

class DataTypesTableCustomizationsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '\\App\\Http\\Controllers\\Voyager\\UserController',
                'description' => 'Este Bread de User tiene una vista y un controllador custom.',
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-21 03:23:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'ciudad',
                'slug' => 'ciudad',
                'display_name_singular' => 'Ciudad',
                'display_name_plural' => 'Ciudades',
                'icon' => NULL,
                'model_name' => 'App\\Ciudad',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"nombre","order_display_column":"nombre"}',
                'created_at' => '2018-08-13 21:21:30',
                'updated_at' => '2018-08-13 21:30:59',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'ciudades',
                'slug' => 'ciudades',
                'display_name_singular' => 'Ciudade',
                'display_name_plural' => 'Ciudades',
                'icon' => NULL,
                'model_name' => 'App\\Ciudad',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-08-13 21:36:15',
                'updated_at' => '2018-08-13 21:36:15',
            ),
            5 => 
            array (
                'id' => 12,
                'name' => 'states',
                'slug' => 'states',
                'display_name_singular' => 'Estado',
                'display_name_plural' => 'Estados',
                'icon' => NULL,
                'model_name' => 'App\\State',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"estado","order_display_column":"estado"}',
                'created_at' => '2018-08-13 23:18:03',
                'updated_at' => '2018-08-14 01:25:08',
            ),
            6 => 
            array (
                'id' => 13,
                'name' => 'municipios',
                'slug' => 'municipios',
                'display_name_singular' => 'Municipio',
                'display_name_plural' => 'Municipios',
                'icon' => NULL,
                'model_name' => 'App\\Municipio',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"municipio"}',
                'created_at' => '2018-08-14 00:33:28',
                'updated_at' => '2018-08-14 03:31:03',
            ),
            7 => 
            array (
                'id' => 14,
                'name' => 'parroquias',
                'slug' => 'parroquias',
                'display_name_singular' => 'Parroquia',
                'display_name_plural' => 'Parroquias',
                'icon' => NULL,
                'model_name' => 'App\\Parroquia',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-08-14 01:04:41',
                'updated_at' => '2018-08-14 03:37:32',
            ),
        ));
        
        
    }
}