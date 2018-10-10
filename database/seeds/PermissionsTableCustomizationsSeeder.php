<?php

use Illuminate\Database\Seeder;

class PermissionsTableCustomizationsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 13:29:11',
            ),
            25 => 
            array (
                'id' => 41,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-08-13 13:29:14',
                'updated_at' => '2018-08-13 13:29:14',
            ),
            26 => 
            array (
                'id' => 57,
                'key' => 'browse_states',
                'table_name' => 'states',
                'created_at' => '2018-08-13 23:18:04',
                'updated_at' => '2018-08-13 23:18:04',
            ),
            27 => 
            array (
                'id' => 58,
                'key' => 'read_states',
                'table_name' => 'states',
                'created_at' => '2018-08-13 23:18:04',
                'updated_at' => '2018-08-13 23:18:04',
            ),
            28 => 
            array (
                'id' => 59,
                'key' => 'edit_states',
                'table_name' => 'states',
                'created_at' => '2018-08-13 23:18:04',
                'updated_at' => '2018-08-13 23:18:04',
            ),
            29 => 
            array (
                'id' => 60,
                'key' => 'add_states',
                'table_name' => 'states',
                'created_at' => '2018-08-13 23:18:04',
                'updated_at' => '2018-08-13 23:18:04',
            ),
            30 => 
            array (
                'id' => 61,
                'key' => 'delete_states',
                'table_name' => 'states',
                'created_at' => '2018-08-13 23:18:04',
                'updated_at' => '2018-08-13 23:18:04',
            ),
            31 => 
            array (
                'id' => 62,
                'key' => 'browse_municipios',
                'table_name' => 'municipios',
                'created_at' => '2018-08-14 00:33:28',
                'updated_at' => '2018-08-14 00:33:28',
            ),
            32 => 
            array (
                'id' => 63,
                'key' => 'read_municipios',
                'table_name' => 'municipios',
                'created_at' => '2018-08-14 00:33:28',
                'updated_at' => '2018-08-14 00:33:28',
            ),
            33 => 
            array (
                'id' => 64,
                'key' => 'edit_municipios',
                'table_name' => 'municipios',
                'created_at' => '2018-08-14 00:33:28',
                'updated_at' => '2018-08-14 00:33:28',
            ),
            34 => 
            array (
                'id' => 65,
                'key' => 'add_municipios',
                'table_name' => 'municipios',
                'created_at' => '2018-08-14 00:33:28',
                'updated_at' => '2018-08-14 00:33:28',
            ),
            35 => 
            array (
                'id' => 66,
                'key' => 'delete_municipios',
                'table_name' => 'municipios',
                'created_at' => '2018-08-14 00:33:28',
                'updated_at' => '2018-08-14 00:33:28',
            ),
            36 => 
            array (
                'id' => 67,
                'key' => 'browse_parroquias',
                'table_name' => 'parroquias',
                'created_at' => '2018-08-14 01:04:41',
                'updated_at' => '2018-08-14 01:04:41',
            ),
            37 => 
            array (
                'id' => 68,
                'key' => 'read_parroquias',
                'table_name' => 'parroquias',
                'created_at' => '2018-08-14 01:04:41',
                'updated_at' => '2018-08-14 01:04:41',
            ),
            38 => 
            array (
                'id' => 69,
                'key' => 'edit_parroquias',
                'table_name' => 'parroquias',
                'created_at' => '2018-08-14 01:04:41',
                'updated_at' => '2018-08-14 01:04:41',
            ),
            39 => 
            array (
                'id' => 70,
                'key' => 'add_parroquias',
                'table_name' => 'parroquias',
                'created_at' => '2018-08-14 01:04:41',
                'updated_at' => '2018-08-14 01:04:41',
            ),
            40 => 
            array (
                'id' => 71,
                'key' => 'delete_parroquias',
                'table_name' => 'parroquias',
                'created_at' => '2018-08-14 01:04:41',
                'updated_at' => '2018-08-14 01:04:41',
            ),
        ));
        
        
    }
}