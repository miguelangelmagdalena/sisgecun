<?php

use Illuminate\Database\Seeder;

class RolesTableCustomizationsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrador',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-13 17:42:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Usuario Normal',
                'created_at' => '2018-08-13 13:29:11',
                'updated_at' => '2018-08-22 12:31:38',
            ),
        ));
        
        
    }
}