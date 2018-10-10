<?php

use Illuminate\Database\Seeder;

class UsersTableCustomizationsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$Bdte22LQ7DMRxiAtojqoQeP6Ve3/22LFiFrXG8AVxFtn3DLjQRumq',
                'remember_token' => '9ey6V5DSiEgjSBT5w0K8bw4tj7xZZRNMnv3dapQwlNSwOsSaSiPtjOATxn0v',
                'settings' => '{"locale":"es"}',
                'created_at' => '2018-08-13 13:29:13',
                'updated_at' => '2018-08-13 14:48:45',
                'id_estado' => NULL,
                'id_municipio' => NULL,
                'id_parroquia' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Miguel Angel4',
                'email' => 'miguelangelmagdalena@gmail.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$xtUGjucdtQeCZXtzjduFiujvgQTLsiJDz.PO0Hp/8QP9mGhVF7SEi',
                'remember_token' => '3MIHTIm5Y0Cf1e4THnkz6o69redH7ihynoHXSsQeIrvPGN3sYTISQkuL6Srb',
                'settings' => NULL,
                'created_at' => '2018-08-15 18:24:33',
                'updated_at' => '2018-08-27 18:56:03',
                'id_estado' => NULL,
                'id_municipio' => NULL,
                'id_parroquia' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Miguel Magdalena',
                'email' => 'miguelmagdalena@gmail.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$FqU0hTDwBsB3Fngl7jN8Fue1kfP/nmmQblOsIQu2uF6C.gm2DHbPK',
                'remember_token' => '6pve11857dpcTUoM8mb1hrShGczZkRwrsf6Fd3xY0BcyV6p6mONrR21TkL0k',
                'settings' => NULL,
                'created_at' => '2018-08-26 02:51:59',
                'updated_at' => '2018-08-26 02:51:59',
                'id_estado' => 24,
                'id_municipio' => NULL,
                'id_parroquia' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'role_id' => 2,
                'name' => 'Miguel Magdalena',
                'email' => 'miguelaagdalena@gmail.com',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$JnMMpyDmKHHbhh9z3m6Du.lxU77PI13CkV037xUGsfDEXf5sSii12',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2018-08-26 21:19:34',
                'updated_at' => '2018-08-26 21:19:34',
                'id_estado' => 24,
                'id_municipio' => NULL,
                'id_parroquia' => NULL,
            ),
        ));
        
        
    }
}