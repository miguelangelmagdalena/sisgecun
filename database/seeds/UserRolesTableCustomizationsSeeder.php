<?php

use Illuminate\Database\Seeder;

class UserRolesTableCustomizationsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_roles')->delete();
        
        
        
    }
}