<?php

use Illuminate\Database\Seeder;

class PasswordResetsTableCustomizationsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'miguelangelmagdalena@gmail.com',
                'token' => '$2y$10$85Na1BK7JWhGlJFV.RHQL.A.Vo/ZTUcA..RT4BInU/.zt24qfAx6.',
                'created_at' => '2018-08-27 19:30:17',
            ),
        ));
        
        
    }
}