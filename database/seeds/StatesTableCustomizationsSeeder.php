<?php

use Illuminate\Database\Seeder;

class StatesTableCustomizationsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'estado' => 'Amazonas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-X',
            ),
            1 => 
            array (
                'id' => 2,
                'estado' => 'Anzoátegui',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-B',
            ),
            2 => 
            array (
                'id' => 3,
                'estado' => 'Apure',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-C',
            ),
            3 => 
            array (
                'id' => 4,
                'estado' => 'Aragua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-D',
            ),
            4 => 
            array (
                'id' => 5,
                'estado' => 'Barinas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-E',
            ),
            5 => 
            array (
                'id' => 6,
                'estado' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-F',
            ),
            6 => 
            array (
                'id' => 7,
                'estado' => 'Carabobo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-G',
            ),
            7 => 
            array (
                'id' => 8,
                'estado' => 'Cojedes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-H',
            ),
            8 => 
            array (
                'id' => 9,
                'estado' => 'Delta Amacuro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-Y',
            ),
            9 => 
            array (
                'id' => 10,
                'estado' => 'Falcón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-I',
            ),
            10 => 
            array (
                'id' => 11,
                'estado' => 'Guárico',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-J',
            ),
            11 => 
            array (
                'id' => 12,
                'estado' => 'Lara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-K',
            ),
            12 => 
            array (
                'id' => 13,
                'estado' => 'Mérida',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-L',
            ),
            13 => 
            array (
                'id' => 14,
                'estado' => 'Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-M',
            ),
            14 => 
            array (
                'id' => 15,
                'estado' => 'Monagas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-N',
            ),
            15 => 
            array (
                'id' => 16,
                'estado' => 'Nueva Esparta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-O',
            ),
            16 => 
            array (
                'id' => 17,
                'estado' => 'Portuguesa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-P',
            ),
            17 => 
            array (
                'id' => 18,
                'estado' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-R',
            ),
            18 => 
            array (
                'id' => 19,
                'estado' => 'Táchira',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-S',
            ),
            19 => 
            array (
                'id' => 20,
                'estado' => 'Trujillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-T',
            ),
            20 => 
            array (
                'id' => 21,
                'estado' => 'Vargas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-W',
            ),
            21 => 
            array (
                'id' => 22,
                'estado' => 'Yaracuy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-U',
            ),
            22 => 
            array (
                'id' => 23,
                'estado' => 'Zulia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-V',
            ),
            23 => 
            array (
                'id' => 24,
                'estado' => 'Distrito Capital',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-A',
            ),
            24 => 
            array (
                'id' => 25,
                'estado' => 'Dependencias Federales',
                'created_at' => NULL,
                'updated_at' => NULL,
                'iso_3166_2' => 'VE-Z',
            ),
        ));
        
        
    }
}