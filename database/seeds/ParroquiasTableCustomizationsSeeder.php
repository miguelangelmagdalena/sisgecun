<?php

use Illuminate\Database\Seeder;

class ParroquiasTableCustomizationsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parroquias')->delete();
        
        \DB::table('parroquias')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parroquia' => 'Alto Orinoco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'parroquia' => 'Huachamacare Acanaña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'parroquia' => 'Marawaka Toky Shamanaña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'parroquia' => 'Mavaka Mavaka',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'parroquia' => 'Sierra Parima Parimabé',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'parroquia' => 'Ucata Laja Lisa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'parroquia' => 'Yapacana Macuruco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'parroquia' => 'Caname Guarinuma',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'parroquia' => 'Fernando Girón Tovar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'parroquia' => 'Luis Alberto Gómez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 3,
            ),
            10 => 
            array (
                'id' => 11,
                'parroquia' => 'Pahueña Limón de Parhueña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 3,
            ),
            11 => 
            array (
                'id' => 12,
                'parroquia' => 'Platanillal Platanillal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 3,
            ),
            12 => 
            array (
                'id' => 13,
                'parroquia' => 'Samariapo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 4,
            ),
            13 => 
            array (
                'id' => 14,
                'parroquia' => 'Sipapo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 4,
            ),
            14 => 
            array (
                'id' => 15,
                'parroquia' => 'Munduapo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 4,
            ),
            15 => 
            array (
                'id' => 16,
                'parroquia' => 'Guayapo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 4,
            ),
            16 => 
            array (
                'id' => 17,
                'parroquia' => 'Alto Ventuari',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 5,
            ),
            17 => 
            array (
                'id' => 18,
                'parroquia' => 'Medio Ventuari',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 5,
            ),
            18 => 
            array (
                'id' => 19,
                'parroquia' => 'Bajo Ventuari',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 5,
            ),
            19 => 
            array (
                'id' => 20,
                'parroquia' => 'Victorino',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 6,
            ),
            20 => 
            array (
                'id' => 21,
                'parroquia' => 'Comunidad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 6,
            ),
            21 => 
            array (
                'id' => 22,
                'parroquia' => 'Casiquiare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 7,
            ),
            22 => 
            array (
                'id' => 23,
                'parroquia' => 'Cocuy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 7,
            ),
            23 => 
            array (
                'id' => 24,
                'parroquia' => 'San Carlos de Río Negro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 7,
            ),
            24 => 
            array (
                'id' => 25,
                'parroquia' => 'Solano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 7,
            ),
            25 => 
            array (
                'id' => 26,
                'parroquia' => 'Anaco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 8,
            ),
            26 => 
            array (
                'id' => 27,
                'parroquia' => 'San Joaquín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 8,
            ),
            27 => 
            array (
                'id' => 28,
                'parroquia' => 'Cachipo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 9,
            ),
            28 => 
            array (
                'id' => 29,
                'parroquia' => 'Aragua de Barcelona',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 9,
            ),
            29 => 
            array (
                'id' => 30,
                'parroquia' => 'Lechería',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 11,
            ),
            30 => 
            array (
                'id' => 31,
                'parroquia' => 'El Morro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 11,
            ),
            31 => 
            array (
                'id' => 32,
                'parroquia' => 'Puerto Píritu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 12,
            ),
            32 => 
            array (
                'id' => 33,
                'parroquia' => 'San Miguel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 12,
            ),
            33 => 
            array (
                'id' => 34,
                'parroquia' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 12,
            ),
            34 => 
            array (
                'id' => 35,
                'parroquia' => 'Valle de Guanape',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 13,
            ),
            35 => 
            array (
                'id' => 36,
                'parroquia' => 'Santa Bárbara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 13,
            ),
            36 => 
            array (
                'id' => 37,
                'parroquia' => 'El Chaparro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 14,
            ),
            37 => 
            array (
                'id' => 38,
                'parroquia' => 'Tomás Alfaro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 14,
            ),
            38 => 
            array (
                'id' => 39,
                'parroquia' => 'Calatrava',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 14,
            ),
            39 => 
            array (
                'id' => 40,
                'parroquia' => 'Guanta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 15,
            ),
            40 => 
            array (
                'id' => 41,
                'parroquia' => 'Chorrerón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 15,
            ),
            41 => 
            array (
                'id' => 42,
                'parroquia' => 'Mamo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 16,
            ),
            42 => 
            array (
                'id' => 43,
                'parroquia' => 'Soledad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 16,
            ),
            43 => 
            array (
                'id' => 44,
                'parroquia' => 'Mapire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 17,
            ),
            44 => 
            array (
                'id' => 45,
                'parroquia' => 'Piar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 17,
            ),
            45 => 
            array (
                'id' => 46,
                'parroquia' => 'Santa Clara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 17,
            ),
            46 => 
            array (
                'id' => 47,
                'parroquia' => 'San Diego de Cabrutica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 17,
            ),
            47 => 
            array (
                'id' => 48,
                'parroquia' => 'Uverito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 17,
            ),
            48 => 
            array (
                'id' => 49,
                'parroquia' => 'Zuata',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 17,
            ),
            49 => 
            array (
                'id' => 50,
                'parroquia' => 'Puerto La Cruz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 18,
            ),
            50 => 
            array (
                'id' => 51,
                'parroquia' => 'Pozuelos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 18,
            ),
            51 => 
            array (
                'id' => 52,
                'parroquia' => 'Onoto',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 19,
            ),
            52 => 
            array (
                'id' => 53,
                'parroquia' => 'San Pablo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 19,
            ),
            53 => 
            array (
                'id' => 54,
                'parroquia' => 'San Mateo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 20,
            ),
            54 => 
            array (
                'id' => 55,
                'parroquia' => 'El Carito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 20,
            ),
            55 => 
            array (
                'id' => 56,
                'parroquia' => 'Santa Inés',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 20,
            ),
            56 => 
            array (
                'id' => 57,
                'parroquia' => 'La Romereña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 20,
            ),
            57 => 
            array (
                'id' => 58,
                'parroquia' => 'Atapirire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 21,
            ),
            58 => 
            array (
                'id' => 59,
                'parroquia' => 'Boca del Pao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 21,
            ),
            59 => 
            array (
                'id' => 60,
                'parroquia' => 'El Pao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 21,
            ),
            60 => 
            array (
                'id' => 61,
                'parroquia' => 'Pariaguán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 21,
            ),
            61 => 
            array (
                'id' => 62,
                'parroquia' => 'Cantaura',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 22,
            ),
            62 => 
            array (
                'id' => 63,
                'parroquia' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 22,
            ),
            63 => 
            array (
                'id' => 64,
                'parroquia' => 'Santa Rosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 22,
            ),
            64 => 
            array (
                'id' => 65,
                'parroquia' => 'Urica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 22,
            ),
            65 => 
            array (
                'id' => 66,
                'parroquia' => 'Píritu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 23,
            ),
            66 => 
            array (
                'id' => 67,
                'parroquia' => 'San Francisco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 23,
            ),
            67 => 
            array (
                'id' => 68,
                'parroquia' => 'San José de Guanipa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 24,
            ),
            68 => 
            array (
                'id' => 69,
                'parroquia' => 'Boca de Uchire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 25,
            ),
            69 => 
            array (
                'id' => 70,
                'parroquia' => 'Boca de Chávez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 25,
            ),
            70 => 
            array (
                'id' => 71,
                'parroquia' => 'Pueblo Nuevo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 26,
            ),
            71 => 
            array (
                'id' => 72,
                'parroquia' => 'Santa Ana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 26,
            ),
            72 => 
            array (
                'id' => 73,
                'parroquia' => 'Bergantín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 27,
            ),
            73 => 
            array (
                'id' => 74,
                'parroquia' => 'Caigua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 27,
            ),
            74 => 
            array (
                'id' => 75,
                'parroquia' => 'El Carmen',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 27,
            ),
            75 => 
            array (
                'id' => 76,
                'parroquia' => 'El Pilar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 27,
            ),
            76 => 
            array (
                'id' => 77,
                'parroquia' => 'Naricual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 27,
            ),
            77 => 
            array (
                'id' => 78,
                'parroquia' => 'San Crsitóbal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 27,
            ),
            78 => 
            array (
                'id' => 79,
                'parroquia' => 'Edmundo Barrios',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 28,
            ),
            79 => 
            array (
                'id' => 80,
                'parroquia' => 'Miguel Otero Silva',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 28,
            ),
            80 => 
            array (
                'id' => 81,
                'parroquia' => 'Achaguas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 29,
            ),
            81 => 
            array (
                'id' => 82,
                'parroquia' => 'Apurito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 29,
            ),
            82 => 
            array (
                'id' => 83,
                'parroquia' => 'El Yagual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 29,
            ),
            83 => 
            array (
                'id' => 84,
                'parroquia' => 'Guachara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 29,
            ),
            84 => 
            array (
                'id' => 85,
                'parroquia' => 'Mucuritas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 29,
            ),
            85 => 
            array (
                'id' => 86,
                'parroquia' => 'Queseras del medio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 29,
            ),
            86 => 
            array (
                'id' => 87,
                'parroquia' => 'Biruaca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 30,
            ),
            87 => 
            array (
                'id' => 88,
                'parroquia' => 'Bruzual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 31,
            ),
            88 => 
            array (
                'id' => 89,
                'parroquia' => 'Mantecal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 31,
            ),
            89 => 
            array (
                'id' => 90,
                'parroquia' => 'Quintero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 31,
            ),
            90 => 
            array (
                'id' => 91,
                'parroquia' => 'Rincón Hondo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 31,
            ),
            91 => 
            array (
                'id' => 92,
                'parroquia' => 'San Vicente',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 31,
            ),
            92 => 
            array (
                'id' => 93,
                'parroquia' => 'Guasdualito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 32,
            ),
            93 => 
            array (
                'id' => 94,
                'parroquia' => 'Aramendi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 32,
            ),
            94 => 
            array (
                'id' => 95,
                'parroquia' => 'El Amparo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 32,
            ),
            95 => 
            array (
                'id' => 96,
                'parroquia' => 'San Camilo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 32,
            ),
            96 => 
            array (
                'id' => 97,
                'parroquia' => 'Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 32,
            ),
            97 => 
            array (
                'id' => 98,
                'parroquia' => 'San Juan de Payara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 33,
            ),
            98 => 
            array (
                'id' => 99,
                'parroquia' => 'Codazzi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 33,
            ),
            99 => 
            array (
                'id' => 100,
                'parroquia' => 'Cunaviche',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 33,
            ),
            100 => 
            array (
                'id' => 101,
                'parroquia' => 'Elorza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 34,
            ),
            101 => 
            array (
                'id' => 102,
                'parroquia' => 'La Trinidad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 34,
            ),
            102 => 
            array (
                'id' => 103,
                'parroquia' => 'San Fernando',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 35,
            ),
            103 => 
            array (
                'id' => 104,
                'parroquia' => 'El Recreo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 35,
            ),
            104 => 
            array (
                'id' => 105,
                'parroquia' => 'Peñalver',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 35,
            ),
            105 => 
            array (
                'id' => 106,
                'parroquia' => 'San Rafael de Atamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 35,
            ),
            106 => 
            array (
                'id' => 107,
                'parroquia' => 'Pedro José Ovalles',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 36,
            ),
            107 => 
            array (
                'id' => 108,
                'parroquia' => 'Joaquín Crespo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 36,
            ),
            108 => 
            array (
                'id' => 109,
                'parroquia' => 'José Casanova Godoy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 36,
            ),
            109 => 
            array (
                'id' => 110,
                'parroquia' => 'Madre María de San José',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 36,
            ),
            110 => 
            array (
                'id' => 111,
                'parroquia' => 'Andrés Eloy Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 36,
            ),
            111 => 
            array (
                'id' => 112,
                'parroquia' => 'Los Tacarigua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 36,
            ),
            112 => 
            array (
                'id' => 113,
                'parroquia' => 'Las Delicias',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 36,
            ),
            113 => 
            array (
                'id' => 114,
                'parroquia' => 'Choroní',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 36,
            ),
            114 => 
            array (
                'id' => 115,
                'parroquia' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 37,
            ),
            115 => 
            array (
                'id' => 116,
                'parroquia' => 'Camatagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 38,
            ),
            116 => 
            array (
                'id' => 117,
                'parroquia' => 'Carmen de Cura',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 38,
            ),
            117 => 
            array (
                'id' => 118,
                'parroquia' => 'Santa Rita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 39,
            ),
            118 => 
            array (
                'id' => 119,
                'parroquia' => 'Francisco de Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 39,
            ),
            119 => 
            array (
                'id' => 120,
                'parroquia' => 'Moseñor Feliciano González',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 39,
            ),
            120 => 
            array (
                'id' => 121,
                'parroquia' => 'Santa Cruz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 40,
            ),
            121 => 
            array (
                'id' => 122,
                'parroquia' => 'José Félix Ribas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 41,
            ),
            122 => 
            array (
                'id' => 123,
                'parroquia' => 'Castor Nieves Ríos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 41,
            ),
            123 => 
            array (
                'id' => 124,
                'parroquia' => 'Las Guacamayas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 41,
            ),
            124 => 
            array (
                'id' => 125,
                'parroquia' => 'Pao de Zárate',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 41,
            ),
            125 => 
            array (
                'id' => 126,
                'parroquia' => 'Zuata',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 41,
            ),
            126 => 
            array (
                'id' => 127,
                'parroquia' => 'José Rafael Revenga',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 42,
            ),
            127 => 
            array (
                'id' => 128,
                'parroquia' => 'Palo Negro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 43,
            ),
            128 => 
            array (
                'id' => 129,
                'parroquia' => 'San Martín de Porres',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 43,
            ),
            129 => 
            array (
                'id' => 130,
                'parroquia' => 'El Limón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 44,
            ),
            130 => 
            array (
                'id' => 131,
                'parroquia' => 'Caña de Azúcar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 44,
            ),
            131 => 
            array (
                'id' => 132,
                'parroquia' => 'Ocumare de la Costa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 45,
            ),
            132 => 
            array (
                'id' => 133,
                'parroquia' => 'San Casimiro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 46,
            ),
            133 => 
            array (
                'id' => 134,
                'parroquia' => 'Güiripa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 46,
            ),
            134 => 
            array (
                'id' => 135,
                'parroquia' => 'Ollas de Caramacate',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 46,
            ),
            135 => 
            array (
                'id' => 136,
                'parroquia' => 'Valle Morín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 46,
            ),
            136 => 
            array (
                'id' => 137,
                'parroquia' => 'San Sebastían',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 47,
            ),
            137 => 
            array (
                'id' => 138,
                'parroquia' => 'Turmero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 48,
            ),
            138 => 
            array (
                'id' => 139,
                'parroquia' => 'Arevalo Aponte',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 48,
            ),
            139 => 
            array (
                'id' => 140,
                'parroquia' => 'Chuao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 48,
            ),
            140 => 
            array (
                'id' => 141,
                'parroquia' => 'Samán de Güere',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 48,
            ),
            141 => 
            array (
                'id' => 142,
                'parroquia' => 'Alfredo Pacheco Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 48,
            ),
            142 => 
            array (
                'id' => 143,
                'parroquia' => 'Santos Michelena',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 49,
            ),
            143 => 
            array (
                'id' => 144,
                'parroquia' => 'Tiara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 49,
            ),
            144 => 
            array (
                'id' => 145,
                'parroquia' => 'Cagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 50,
            ),
            145 => 
            array (
                'id' => 146,
                'parroquia' => 'Bella Vista',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 50,
            ),
            146 => 
            array (
                'id' => 147,
                'parroquia' => 'Tovar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 51,
            ),
            147 => 
            array (
                'id' => 148,
                'parroquia' => 'Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 52,
            ),
            148 => 
            array (
                'id' => 149,
                'parroquia' => 'Las Peñitas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 52,
            ),
            149 => 
            array (
                'id' => 150,
                'parroquia' => 'San Francisco de Cara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 52,
            ),
            150 => 
            array (
                'id' => 151,
                'parroquia' => 'Taguay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 52,
            ),
            151 => 
            array (
                'id' => 152,
                'parroquia' => 'Zamora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 53,
            ),
            152 => 
            array (
                'id' => 153,
                'parroquia' => 'Magdaleno',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 53,
            ),
            153 => 
            array (
                'id' => 154,
                'parroquia' => 'San Francisco de Asís',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 53,
            ),
            154 => 
            array (
                'id' => 155,
                'parroquia' => 'Valles de Tucutunemo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 53,
            ),
            155 => 
            array (
                'id' => 156,
                'parroquia' => 'Augusto Mijares',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 53,
            ),
            156 => 
            array (
                'id' => 157,
                'parroquia' => 'Sabaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 54,
            ),
            157 => 
            array (
                'id' => 158,
                'parroquia' => 'Juan Antonio Rodríguez Domínguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 54,
            ),
            158 => 
            array (
                'id' => 159,
                'parroquia' => 'El Cantón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 55,
            ),
            159 => 
            array (
                'id' => 160,
                'parroquia' => 'Santa Cruz de Guacas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 55,
            ),
            160 => 
            array (
                'id' => 161,
                'parroquia' => 'Puerto Vivas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 55,
            ),
            161 => 
            array (
                'id' => 162,
                'parroquia' => 'Ticoporo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 56,
            ),
            162 => 
            array (
                'id' => 163,
                'parroquia' => 'Nicolás Pulido',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 56,
            ),
            163 => 
            array (
                'id' => 164,
                'parroquia' => 'Andrés Bello',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 56,
            ),
            164 => 
            array (
                'id' => 165,
                'parroquia' => 'Arismendi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 57,
            ),
            165 => 
            array (
                'id' => 166,
                'parroquia' => 'Guadarrama',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 57,
            ),
            166 => 
            array (
                'id' => 167,
                'parroquia' => 'La Unión',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 57,
            ),
            167 => 
            array (
                'id' => 168,
                'parroquia' => 'San Antonio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 57,
            ),
            168 => 
            array (
                'id' => 169,
                'parroquia' => 'Barinas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            169 => 
            array (
                'id' => 170,
                'parroquia' => 'Alberto Arvelo Larriva',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            170 => 
            array (
                'id' => 171,
                'parroquia' => 'San Silvestre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            171 => 
            array (
                'id' => 172,
                'parroquia' => 'Santa Inés',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            172 => 
            array (
                'id' => 173,
                'parroquia' => 'Santa Lucía',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            173 => 
            array (
                'id' => 174,
                'parroquia' => 'Torumos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            174 => 
            array (
                'id' => 175,
                'parroquia' => 'El Carmen',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            175 => 
            array (
                'id' => 176,
                'parroquia' => 'Rómulo Betancourt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            176 => 
            array (
                'id' => 177,
                'parroquia' => 'Corazón de Jesús',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            177 => 
            array (
                'id' => 178,
                'parroquia' => 'Ramón Ignacio Méndez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            178 => 
            array (
                'id' => 179,
                'parroquia' => 'Alto Barinas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            179 => 
            array (
                'id' => 180,
                'parroquia' => 'Manuel Palacio Fajardo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            180 => 
            array (
                'id' => 181,
                'parroquia' => 'Juan Antonio Rodríguez Domínguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            181 => 
            array (
                'id' => 182,
                'parroquia' => 'Dominga Ortiz de Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 58,
            ),
            182 => 
            array (
                'id' => 183,
                'parroquia' => 'Barinitas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 59,
            ),
            183 => 
            array (
                'id' => 184,
                'parroquia' => 'Altamira de Cáceres',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 59,
            ),
            184 => 
            array (
                'id' => 185,
                'parroquia' => 'Calderas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 59,
            ),
            185 => 
            array (
                'id' => 186,
                'parroquia' => 'Barrancas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 60,
            ),
            186 => 
            array (
                'id' => 187,
                'parroquia' => 'El Socorro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 60,
            ),
            187 => 
            array (
                'id' => 188,
                'parroquia' => 'Mazparrito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 60,
            ),
            188 => 
            array (
                'id' => 189,
                'parroquia' => 'Santa Bárbara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 61,
            ),
            189 => 
            array (
                'id' => 190,
                'parroquia' => 'Pedro Briceño Méndez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 61,
            ),
            190 => 
            array (
                'id' => 191,
                'parroquia' => 'Ramón Ignacio Méndez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 61,
            ),
            191 => 
            array (
                'id' => 192,
                'parroquia' => 'José Ignacio del Pumar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 61,
            ),
            192 => 
            array (
                'id' => 193,
                'parroquia' => 'Obispos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 62,
            ),
            193 => 
            array (
                'id' => 194,
                'parroquia' => 'Guasimitos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 62,
            ),
            194 => 
            array (
                'id' => 195,
                'parroquia' => 'El Real',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 62,
            ),
            195 => 
            array (
                'id' => 196,
                'parroquia' => 'La Luz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 62,
            ),
            196 => 
            array (
                'id' => 197,
                'parroquia' => 'Ciudad Bolívia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 63,
            ),
            197 => 
            array (
                'id' => 198,
                'parroquia' => 'José Ignacio Briceño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 63,
            ),
            198 => 
            array (
                'id' => 199,
                'parroquia' => 'José Félix Ribas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 63,
            ),
            199 => 
            array (
                'id' => 200,
                'parroquia' => 'Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 63,
            ),
            200 => 
            array (
                'id' => 201,
                'parroquia' => 'Libertad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 64,
            ),
            201 => 
            array (
                'id' => 202,
                'parroquia' => 'Dolores',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 64,
            ),
            202 => 
            array (
                'id' => 203,
                'parroquia' => 'Santa Rosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 64,
            ),
            203 => 
            array (
                'id' => 204,
                'parroquia' => 'Palacio Fajardo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 64,
            ),
            204 => 
            array (
                'id' => 205,
                'parroquia' => 'Ciudad de Nutrias',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 65,
            ),
            205 => 
            array (
                'id' => 206,
                'parroquia' => 'El Regalo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 65,
            ),
            206 => 
            array (
                'id' => 207,
                'parroquia' => 'Puerto Nutrias',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 65,
            ),
            207 => 
            array (
                'id' => 208,
                'parroquia' => 'Santa Catalina',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 65,
            ),
            208 => 
            array (
                'id' => 209,
                'parroquia' => 'Cachamay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            209 => 
            array (
                'id' => 210,
                'parroquia' => 'Chirica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            210 => 
            array (
                'id' => 211,
                'parroquia' => 'Dalla Costa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            211 => 
            array (
                'id' => 212,
                'parroquia' => 'Once de Abril',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            212 => 
            array (
                'id' => 213,
                'parroquia' => 'Simón Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            213 => 
            array (
                'id' => 214,
                'parroquia' => 'Unare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            214 => 
            array (
                'id' => 215,
                'parroquia' => 'Universidad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            215 => 
            array (
                'id' => 216,
                'parroquia' => 'Vista al Sol',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            216 => 
            array (
                'id' => 217,
                'parroquia' => 'Pozo Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            217 => 
            array (
                'id' => 218,
                'parroquia' => 'Yocoima',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            218 => 
            array (
                'id' => 219,
                'parroquia' => '5 de Julio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 66,
            ),
            219 => 
            array (
                'id' => 220,
                'parroquia' => 'Cedeño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 67,
            ),
            220 => 
            array (
                'id' => 221,
                'parroquia' => 'Altagracia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 67,
            ),
            221 => 
            array (
                'id' => 222,
                'parroquia' => 'Ascensión Farreras',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 67,
            ),
            222 => 
            array (
                'id' => 223,
                'parroquia' => 'Guaniamo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 67,
            ),
            223 => 
            array (
                'id' => 224,
                'parroquia' => 'La Urbana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 67,
            ),
            224 => 
            array (
                'id' => 225,
                'parroquia' => 'Pijiguaos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 67,
            ),
            225 => 
            array (
                'id' => 226,
                'parroquia' => 'El Callao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 68,
            ),
            226 => 
            array (
                'id' => 227,
                'parroquia' => 'Gran Sabana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 69,
            ),
            227 => 
            array (
                'id' => 228,
                'parroquia' => 'Ikabarú',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 69,
            ),
            228 => 
            array (
                'id' => 229,
                'parroquia' => 'Catedral',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 70,
            ),
            229 => 
            array (
                'id' => 230,
                'parroquia' => 'Zea',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 70,
            ),
            230 => 
            array (
                'id' => 231,
                'parroquia' => 'Orinoco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 70,
            ),
            231 => 
            array (
                'id' => 232,
                'parroquia' => 'José Antonio Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 70,
            ),
            232 => 
            array (
                'id' => 233,
                'parroquia' => 'Marhuanta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 70,
            ),
            233 => 
            array (
                'id' => 234,
                'parroquia' => 'Agua Salada',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 70,
            ),
            234 => 
            array (
                'id' => 235,
                'parroquia' => 'Vista Hermosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 70,
            ),
            235 => 
            array (
                'id' => 236,
                'parroquia' => 'La Sabanita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 70,
            ),
            236 => 
            array (
                'id' => 237,
                'parroquia' => 'Panapana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 70,
            ),
            237 => 
            array (
                'id' => 238,
                'parroquia' => 'Andrés Eloy Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 71,
            ),
            238 => 
            array (
                'id' => 239,
                'parroquia' => 'Pedro Cova',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 71,
            ),
            239 => 
            array (
                'id' => 240,
                'parroquia' => 'Raúl Leoni',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 72,
            ),
            240 => 
            array (
                'id' => 241,
                'parroquia' => 'Barceloneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 72,
            ),
            241 => 
            array (
                'id' => 242,
                'parroquia' => 'Santa Bárbara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 72,
            ),
            242 => 
            array (
                'id' => 243,
                'parroquia' => 'San Francisco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 72,
            ),
            243 => 
            array (
                'id' => 244,
                'parroquia' => 'Roscio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 73,
            ),
            244 => 
            array (
                'id' => 245,
                'parroquia' => 'Salóm',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 73,
            ),
            245 => 
            array (
                'id' => 246,
                'parroquia' => 'Sifontes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 74,
            ),
            246 => 
            array (
                'id' => 247,
                'parroquia' => 'Dalla Costa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 74,
            ),
            247 => 
            array (
                'id' => 248,
                'parroquia' => 'San Isidro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 74,
            ),
            248 => 
            array (
                'id' => 249,
                'parroquia' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 75,
            ),
            249 => 
            array (
                'id' => 250,
                'parroquia' => 'Aripao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 75,
            ),
            250 => 
            array (
                'id' => 251,
                'parroquia' => 'Guarataro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 75,
            ),
            251 => 
            array (
                'id' => 252,
                'parroquia' => 'Las Majadas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 75,
            ),
            252 => 
            array (
                'id' => 253,
                'parroquia' => 'Moitaco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 75,
            ),
            253 => 
            array (
                'id' => 254,
                'parroquia' => 'Padre Pedro Chien',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 76,
            ),
            254 => 
            array (
                'id' => 255,
                'parroquia' => 'Río Grande',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 76,
            ),
            255 => 
            array (
                'id' => 256,
                'parroquia' => 'Bejuma',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 77,
            ),
            256 => 
            array (
                'id' => 257,
                'parroquia' => 'Canoabo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 77,
            ),
            257 => 
            array (
                'id' => 258,
                'parroquia' => 'Simón Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 77,
            ),
            258 => 
            array (
                'id' => 259,
                'parroquia' => 'Güigüe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 78,
            ),
            259 => 
            array (
                'id' => 260,
                'parroquia' => 'Carabobo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 78,
            ),
            260 => 
            array (
                'id' => 261,
                'parroquia' => 'Tacarigua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 78,
            ),
            261 => 
            array (
                'id' => 262,
                'parroquia' => 'Mariara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 79,
            ),
            262 => 
            array (
                'id' => 263,
                'parroquia' => 'Aguas Calientes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 79,
            ),
            263 => 
            array (
                'id' => 264,
                'parroquia' => 'Ciudad Alianza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 80,
            ),
            264 => 
            array (
                'id' => 265,
                'parroquia' => 'Guacara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 80,
            ),
            265 => 
            array (
                'id' => 266,
                'parroquia' => 'Yagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 80,
            ),
            266 => 
            array (
                'id' => 267,
                'parroquia' => 'Morón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 81,
            ),
            267 => 
            array (
                'id' => 268,
                'parroquia' => 'Yagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 81,
            ),
            268 => 
            array (
                'id' => 269,
                'parroquia' => 'Tocuyito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 82,
            ),
            269 => 
            array (
                'id' => 270,
                'parroquia' => 'Independencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 82,
            ),
            270 => 
            array (
                'id' => 271,
                'parroquia' => 'Los Guayos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 83,
            ),
            271 => 
            array (
                'id' => 272,
                'parroquia' => 'Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 84,
            ),
            272 => 
            array (
                'id' => 273,
                'parroquia' => 'Montalbán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 85,
            ),
            273 => 
            array (
                'id' => 274,
                'parroquia' => 'Naguanagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 86,
            ),
            274 => 
            array (
                'id' => 275,
                'parroquia' => 'Bartolomé Salóm',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 87,
            ),
            275 => 
            array (
                'id' => 276,
                'parroquia' => 'Democracia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 87,
            ),
            276 => 
            array (
                'id' => 277,
                'parroquia' => 'Fraternidad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 87,
            ),
            277 => 
            array (
                'id' => 278,
                'parroquia' => 'Goaigoaza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 87,
            ),
            278 => 
            array (
                'id' => 279,
                'parroquia' => 'Juan José Flores',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 87,
            ),
            279 => 
            array (
                'id' => 280,
                'parroquia' => 'Unión',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 87,
            ),
            280 => 
            array (
                'id' => 281,
                'parroquia' => 'Borburata',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 87,
            ),
            281 => 
            array (
                'id' => 282,
                'parroquia' => 'Patanemo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 87,
            ),
            282 => 
            array (
                'id' => 283,
                'parroquia' => 'San Diego',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 88,
            ),
            283 => 
            array (
                'id' => 284,
                'parroquia' => 'San Joaquín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 89,
            ),
            284 => 
            array (
                'id' => 285,
                'parroquia' => 'Candelaria',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 90,
            ),
            285 => 
            array (
                'id' => 286,
                'parroquia' => 'Catedral',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 90,
            ),
            286 => 
            array (
                'id' => 287,
                'parroquia' => 'El Socorro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 90,
            ),
            287 => 
            array (
                'id' => 288,
                'parroquia' => 'Miguel Peña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 90,
            ),
            288 => 
            array (
                'id' => 289,
                'parroquia' => 'Rafael Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 90,
            ),
            289 => 
            array (
                'id' => 290,
                'parroquia' => 'San Blas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 90,
            ),
            290 => 
            array (
                'id' => 291,
                'parroquia' => 'San José',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 90,
            ),
            291 => 
            array (
                'id' => 292,
                'parroquia' => 'Santa Rosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 90,
            ),
            292 => 
            array (
                'id' => 293,
                'parroquia' => 'Negro Primero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 90,
            ),
            293 => 
            array (
                'id' => 294,
                'parroquia' => 'Cojedes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 91,
            ),
            294 => 
            array (
                'id' => 295,
                'parroquia' => 'Juan de Mata Suárez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 91,
            ),
            295 => 
            array (
                'id' => 296,
                'parroquia' => 'Tinaquillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 92,
            ),
            296 => 
            array (
                'id' => 297,
                'parroquia' => 'El Baúl',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 93,
            ),
            297 => 
            array (
                'id' => 298,
                'parroquia' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 93,
            ),
            298 => 
            array (
                'id' => 299,
                'parroquia' => 'La Aguadita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 94,
            ),
            299 => 
            array (
                'id' => 300,
                'parroquia' => 'Macapo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 94,
            ),
            300 => 
            array (
                'id' => 301,
                'parroquia' => 'El Pao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 95,
            ),
            301 => 
            array (
                'id' => 302,
                'parroquia' => 'El Amparo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 96,
            ),
            302 => 
            array (
                'id' => 303,
                'parroquia' => 'Libertad de Cojedes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 96,
            ),
            303 => 
            array (
                'id' => 304,
                'parroquia' => 'Rómulo Gallegos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 97,
            ),
            304 => 
            array (
                'id' => 305,
                'parroquia' => 'San Carlos de Austria',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 98,
            ),
            305 => 
            array (
                'id' => 306,
                'parroquia' => 'Juan Ángel Bravo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 98,
            ),
            306 => 
            array (
                'id' => 307,
                'parroquia' => 'Manuel Manrique',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 98,
            ),
            307 => 
            array (
                'id' => 308,
                'parroquia' => 'General en Jefe José Laurencio Silva',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 99,
            ),
            308 => 
            array (
                'id' => 309,
                'parroquia' => 'Curiapo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 100,
            ),
            309 => 
            array (
                'id' => 310,
                'parroquia' => 'Almirante Luis Brión',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 100,
            ),
            310 => 
            array (
                'id' => 311,
                'parroquia' => 'Francisco Aniceto Lugo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 100,
            ),
            311 => 
            array (
                'id' => 312,
                'parroquia' => 'Manuel Renaud',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 100,
            ),
            312 => 
            array (
                'id' => 313,
                'parroquia' => 'Padre Barral',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 100,
            ),
            313 => 
            array (
                'id' => 314,
                'parroquia' => 'Santos de Abelgas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 100,
            ),
            314 => 
            array (
                'id' => 315,
                'parroquia' => 'Imataca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 101,
            ),
            315 => 
            array (
                'id' => 316,
                'parroquia' => 'Cinco de Julio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 101,
            ),
            316 => 
            array (
                'id' => 317,
                'parroquia' => 'Juan Bautista Arismendi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 101,
            ),
            317 => 
            array (
                'id' => 318,
                'parroquia' => 'Manuel Piar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 101,
            ),
            318 => 
            array (
                'id' => 319,
                'parroquia' => 'Rómulo Gallegos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 101,
            ),
            319 => 
            array (
                'id' => 320,
                'parroquia' => 'Pedernales',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 102,
            ),
            320 => 
            array (
                'id' => 321,
                'parroquia' => 'Luis Beltrán Prieto Figueroa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 102,
            ),
            321 => 
            array (
                'id' => 322,
            'parroquia' => 'San José (Delta Amacuro)',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 103,
            ),
            322 => 
            array (
                'id' => 323,
                'parroquia' => 'José Vidal Marcano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 103,
            ),
            323 => 
            array (
                'id' => 324,
                'parroquia' => 'Juan Millán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 103,
            ),
            324 => 
            array (
                'id' => 325,
                'parroquia' => 'Leonardo Ruíz Pineda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 103,
            ),
            325 => 
            array (
                'id' => 326,
                'parroquia' => 'Mariscal Antonio José de Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 103,
            ),
            326 => 
            array (
                'id' => 327,
                'parroquia' => 'Monseñor Argimiro García',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 103,
            ),
            327 => 
            array (
                'id' => 328,
            'parroquia' => 'San Rafael (Delta Amacuro)',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 103,
            ),
            328 => 
            array (
                'id' => 329,
                'parroquia' => 'Virgen del Valle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 103,
            ),
            329 => 
            array (
                'id' => 330,
                'parroquia' => 'Clarines',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 10,
            ),
            330 => 
            array (
                'id' => 331,
                'parroquia' => 'Guanape',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 10,
            ),
            331 => 
            array (
                'id' => 332,
                'parroquia' => 'Sabana de Uchire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 10,
            ),
            332 => 
            array (
                'id' => 333,
                'parroquia' => 'Capadare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 104,
            ),
            333 => 
            array (
                'id' => 334,
                'parroquia' => 'La Pastora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 104,
            ),
            334 => 
            array (
                'id' => 335,
                'parroquia' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 104,
            ),
            335 => 
            array (
                'id' => 336,
                'parroquia' => 'San Juan de los Cayos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 104,
            ),
            336 => 
            array (
                'id' => 337,
                'parroquia' => 'Aracua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 105,
            ),
            337 => 
            array (
                'id' => 338,
                'parroquia' => 'La Peña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 105,
            ),
            338 => 
            array (
                'id' => 339,
                'parroquia' => 'San Luis',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 105,
            ),
            339 => 
            array (
                'id' => 340,
                'parroquia' => 'Bariro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 106,
            ),
            340 => 
            array (
                'id' => 341,
                'parroquia' => 'Borojó',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 106,
            ),
            341 => 
            array (
                'id' => 342,
                'parroquia' => 'Capatárida',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 106,
            ),
            342 => 
            array (
                'id' => 343,
                'parroquia' => 'Guajiro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 106,
            ),
            343 => 
            array (
                'id' => 344,
                'parroquia' => 'Seque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 106,
            ),
            344 => 
            array (
                'id' => 345,
                'parroquia' => 'Zazárida',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 106,
            ),
            345 => 
            array (
                'id' => 346,
                'parroquia' => 'Valle de Eroa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 106,
            ),
            346 => 
            array (
                'id' => 347,
                'parroquia' => 'Cacique Manaure',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 107,
            ),
            347 => 
            array (
                'id' => 348,
                'parroquia' => 'Norte',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 108,
            ),
            348 => 
            array (
                'id' => 349,
                'parroquia' => 'Carirubana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 108,
            ),
            349 => 
            array (
                'id' => 350,
                'parroquia' => 'Santa Ana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 108,
            ),
            350 => 
            array (
                'id' => 351,
                'parroquia' => 'Urbana Punta Cardón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 108,
            ),
            351 => 
            array (
                'id' => 352,
                'parroquia' => 'La Vela de Coro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 109,
            ),
            352 => 
            array (
                'id' => 353,
                'parroquia' => 'Acurigua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 109,
            ),
            353 => 
            array (
                'id' => 354,
                'parroquia' => 'Guaibacoa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 109,
            ),
            354 => 
            array (
                'id' => 355,
                'parroquia' => 'Las Calderas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 109,
            ),
            355 => 
            array (
                'id' => 356,
                'parroquia' => 'Macoruca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 109,
            ),
            356 => 
            array (
                'id' => 357,
                'parroquia' => 'Dabajuro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 110,
            ),
            357 => 
            array (
                'id' => 358,
                'parroquia' => 'Agua Clara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 111,
            ),
            358 => 
            array (
                'id' => 359,
                'parroquia' => 'Avaria',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 111,
            ),
            359 => 
            array (
                'id' => 360,
                'parroquia' => 'Pedregal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 111,
            ),
            360 => 
            array (
                'id' => 361,
                'parroquia' => 'Piedra Grande',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 111,
            ),
            361 => 
            array (
                'id' => 362,
                'parroquia' => 'Purureche',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 111,
            ),
            362 => 
            array (
                'id' => 363,
                'parroquia' => 'Adaure',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 112,
            ),
            363 => 
            array (
                'id' => 364,
                'parroquia' => 'Adícora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 112,
            ),
            364 => 
            array (
                'id' => 365,
                'parroquia' => 'Baraived',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 112,
            ),
            365 => 
            array (
                'id' => 366,
                'parroquia' => 'Buena Vista',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 112,
            ),
            366 => 
            array (
                'id' => 367,
                'parroquia' => 'Jadacaquiva',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 112,
            ),
            367 => 
            array (
                'id' => 368,
                'parroquia' => 'El Vínculo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 112,
            ),
            368 => 
            array (
                'id' => 369,
                'parroquia' => 'El Hato',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 112,
            ),
            369 => 
            array (
                'id' => 370,
                'parroquia' => 'Moruy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 112,
            ),
            370 => 
            array (
                'id' => 371,
                'parroquia' => 'Pueblo Nuevo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 112,
            ),
            371 => 
            array (
                'id' => 372,
                'parroquia' => 'Agua Larga',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 113,
            ),
            372 => 
            array (
                'id' => 373,
                'parroquia' => 'El Paují',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 113,
            ),
            373 => 
            array (
                'id' => 374,
                'parroquia' => 'Independencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 113,
            ),
            374 => 
            array (
                'id' => 375,
                'parroquia' => 'Mapararí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 113,
            ),
            375 => 
            array (
                'id' => 376,
                'parroquia' => 'Agua Linda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 114,
            ),
            376 => 
            array (
                'id' => 377,
                'parroquia' => 'Araurima',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 114,
            ),
            377 => 
            array (
                'id' => 378,
                'parroquia' => 'Jacura',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 114,
            ),
            378 => 
            array (
                'id' => 379,
                'parroquia' => 'Tucacas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 115,
            ),
            379 => 
            array (
                'id' => 380,
                'parroquia' => 'Boca de Aroa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 115,
            ),
            380 => 
            array (
                'id' => 381,
                'parroquia' => 'Los Taques',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 116,
            ),
            381 => 
            array (
                'id' => 382,
                'parroquia' => 'Judibana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 116,
            ),
            382 => 
            array (
                'id' => 383,
                'parroquia' => 'Mene de Mauroa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 117,
            ),
            383 => 
            array (
                'id' => 384,
                'parroquia' => 'San Félix',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 117,
            ),
            384 => 
            array (
                'id' => 385,
                'parroquia' => 'Casigua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 117,
            ),
            385 => 
            array (
                'id' => 386,
                'parroquia' => 'Guzmán Guillermo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 118,
            ),
            386 => 
            array (
                'id' => 387,
                'parroquia' => 'Mitare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 118,
            ),
            387 => 
            array (
                'id' => 388,
                'parroquia' => 'Río Seco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 118,
            ),
            388 => 
            array (
                'id' => 389,
                'parroquia' => 'Sabaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 118,
            ),
            389 => 
            array (
                'id' => 390,
                'parroquia' => 'San Antonio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 118,
            ),
            390 => 
            array (
                'id' => 391,
                'parroquia' => 'San Gabriel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 118,
            ),
            391 => 
            array (
                'id' => 392,
                'parroquia' => 'Santa Ana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 118,
            ),
            392 => 
            array (
                'id' => 393,
                'parroquia' => 'Boca del Tocuyo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 119,
            ),
            393 => 
            array (
                'id' => 394,
                'parroquia' => 'Chichiriviche',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 119,
            ),
            394 => 
            array (
                'id' => 395,
                'parroquia' => 'Tocuyo de la Costa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 119,
            ),
            395 => 
            array (
                'id' => 396,
                'parroquia' => 'Palmasola',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 120,
            ),
            396 => 
            array (
                'id' => 397,
                'parroquia' => 'Cabure',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 121,
            ),
            397 => 
            array (
                'id' => 398,
                'parroquia' => 'Colina',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 121,
            ),
            398 => 
            array (
                'id' => 399,
                'parroquia' => 'Curimagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 121,
            ),
            399 => 
            array (
                'id' => 400,
                'parroquia' => 'San José de la Costa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 122,
            ),
            400 => 
            array (
                'id' => 401,
                'parroquia' => 'Píritu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 122,
            ),
            401 => 
            array (
                'id' => 402,
                'parroquia' => 'San Francisco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 123,
            ),
            402 => 
            array (
                'id' => 403,
                'parroquia' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 124,
            ),
            403 => 
            array (
                'id' => 404,
                'parroquia' => 'Pecaya',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 124,
            ),
            404 => 
            array (
                'id' => 405,
                'parroquia' => 'Tocópero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 125,
            ),
            405 => 
            array (
                'id' => 406,
                'parroquia' => 'El Charal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 126,
            ),
            406 => 
            array (
                'id' => 407,
                'parroquia' => 'Las Vegas del Tuy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 126,
            ),
            407 => 
            array (
                'id' => 408,
                'parroquia' => 'Santa Cruz de Bucaral',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 126,
            ),
            408 => 
            array (
                'id' => 409,
                'parroquia' => 'Bruzual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 127,
            ),
            409 => 
            array (
                'id' => 410,
                'parroquia' => 'Urumaco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 127,
            ),
            410 => 
            array (
                'id' => 411,
                'parroquia' => 'Puerto Cumarebo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 128,
            ),
            411 => 
            array (
                'id' => 412,
                'parroquia' => 'La Ciénaga',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 128,
            ),
            412 => 
            array (
                'id' => 413,
                'parroquia' => 'La Soledad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 128,
            ),
            413 => 
            array (
                'id' => 414,
                'parroquia' => 'Pueblo Cumarebo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 128,
            ),
            414 => 
            array (
                'id' => 415,
                'parroquia' => 'Zazárida',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 128,
            ),
            415 => 
            array (
                'id' => 416,
                'parroquia' => 'Churuguara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 113,
            ),
            416 => 
            array (
                'id' => 417,
                'parroquia' => 'Camaguán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 129,
            ),
            417 => 
            array (
                'id' => 418,
                'parroquia' => 'Puerto Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 129,
            ),
            418 => 
            array (
                'id' => 419,
                'parroquia' => 'Uverito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 129,
            ),
            419 => 
            array (
                'id' => 420,
                'parroquia' => 'Chaguaramas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 130,
            ),
            420 => 
            array (
                'id' => 421,
                'parroquia' => 'El Socorro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 131,
            ),
            421 => 
            array (
                'id' => 422,
                'parroquia' => 'Tucupido',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 132,
            ),
            422 => 
            array (
                'id' => 423,
                'parroquia' => 'San Rafael de Laya',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 132,
            ),
            423 => 
            array (
                'id' => 424,
                'parroquia' => 'Altagracia de Orituco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 133,
            ),
            424 => 
            array (
                'id' => 425,
                'parroquia' => 'San Rafael de Orituco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 133,
            ),
            425 => 
            array (
                'id' => 426,
                'parroquia' => 'San Francisco Javier de Lezama',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 133,
            ),
            426 => 
            array (
                'id' => 427,
                'parroquia' => 'Paso Real de Macaira',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 133,
            ),
            427 => 
            array (
                'id' => 428,
                'parroquia' => 'Carlos Soublette',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 133,
            ),
            428 => 
            array (
                'id' => 429,
                'parroquia' => 'San Francisco de Macaira',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 133,
            ),
            429 => 
            array (
                'id' => 430,
                'parroquia' => 'Libertad de Orituco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 133,
            ),
            430 => 
            array (
                'id' => 431,
                'parroquia' => 'Cantaclaro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 134,
            ),
            431 => 
            array (
                'id' => 432,
                'parroquia' => 'San Juan de los Morros',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 134,
            ),
            432 => 
            array (
                'id' => 433,
                'parroquia' => 'Parapara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 134,
            ),
            433 => 
            array (
                'id' => 434,
                'parroquia' => 'El Sombrero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 135,
            ),
            434 => 
            array (
                'id' => 435,
                'parroquia' => 'Sosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 135,
            ),
            435 => 
            array (
                'id' => 436,
                'parroquia' => 'Las Mercedes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 136,
            ),
            436 => 
            array (
                'id' => 437,
                'parroquia' => 'Cabruta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 136,
            ),
            437 => 
            array (
                'id' => 438,
                'parroquia' => 'Santa Rita de Manapire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 136,
            ),
            438 => 
            array (
                'id' => 439,
                'parroquia' => 'Valle de la Pascua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 137,
            ),
            439 => 
            array (
                'id' => 440,
                'parroquia' => 'Espino',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 137,
            ),
            440 => 
            array (
                'id' => 441,
                'parroquia' => 'San José de Unare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 138,
            ),
            441 => 
            array (
                'id' => 442,
                'parroquia' => 'Zaraza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 138,
            ),
            442 => 
            array (
                'id' => 443,
                'parroquia' => 'San José de Tiznados',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 139,
            ),
            443 => 
            array (
                'id' => 444,
                'parroquia' => 'San Francisco de Tiznados',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 139,
            ),
            444 => 
            array (
                'id' => 445,
                'parroquia' => 'San Lorenzo de Tiznados',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 139,
            ),
            445 => 
            array (
                'id' => 446,
                'parroquia' => 'Ortiz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 139,
            ),
            446 => 
            array (
                'id' => 447,
                'parroquia' => 'Guayabal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 140,
            ),
            447 => 
            array (
                'id' => 448,
                'parroquia' => 'Cazorla',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 140,
            ),
            448 => 
            array (
                'id' => 449,
                'parroquia' => 'San José de Guaribe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 141,
            ),
            449 => 
            array (
                'id' => 450,
                'parroquia' => 'Uveral',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 141,
            ),
            450 => 
            array (
                'id' => 451,
                'parroquia' => 'Santa María de Ipire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 142,
            ),
            451 => 
            array (
                'id' => 452,
                'parroquia' => 'Altamira',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 142,
            ),
            452 => 
            array (
                'id' => 453,
                'parroquia' => 'El Calvario',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 143,
            ),
            453 => 
            array (
                'id' => 454,
                'parroquia' => 'El Rastro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 143,
            ),
            454 => 
            array (
                'id' => 455,
                'parroquia' => 'Guardatinajas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 143,
            ),
            455 => 
            array (
                'id' => 456,
                'parroquia' => 'Capital Urbana Calabozo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 143,
            ),
            456 => 
            array (
                'id' => 457,
                'parroquia' => 'Quebrada Honda de Guache',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 144,
            ),
            457 => 
            array (
                'id' => 458,
                'parroquia' => 'Pío Tamayo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 144,
            ),
            458 => 
            array (
                'id' => 459,
                'parroquia' => 'Yacambú',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 144,
            ),
            459 => 
            array (
                'id' => 460,
                'parroquia' => 'Fréitez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 145,
            ),
            460 => 
            array (
                'id' => 461,
                'parroquia' => 'José María Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 145,
            ),
            461 => 
            array (
                'id' => 462,
                'parroquia' => 'Catedral',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            462 => 
            array (
                'id' => 463,
                'parroquia' => 'Concepción',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            463 => 
            array (
                'id' => 464,
                'parroquia' => 'El Cují',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            464 => 
            array (
                'id' => 465,
                'parroquia' => 'Juan de Villegas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            465 => 
            array (
                'id' => 466,
                'parroquia' => 'Santa Rosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            466 => 
            array (
                'id' => 467,
                'parroquia' => 'Tamaca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            467 => 
            array (
                'id' => 468,
                'parroquia' => 'Unión',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            468 => 
            array (
                'id' => 469,
                'parroquia' => 'Aguedo Felipe Alvarado',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            469 => 
            array (
                'id' => 470,
                'parroquia' => 'Buena Vista',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            470 => 
            array (
                'id' => 471,
                'parroquia' => 'Juárez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 146,
            ),
            471 => 
            array (
                'id' => 472,
                'parroquia' => 'Juan Bautista Rodríguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 147,
            ),
            472 => 
            array (
                'id' => 473,
                'parroquia' => 'Cuara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 147,
            ),
            473 => 
            array (
                'id' => 474,
                'parroquia' => 'Diego de Lozada',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 147,
            ),
            474 => 
            array (
                'id' => 475,
                'parroquia' => 'Paraíso de San José',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 147,
            ),
            475 => 
            array (
                'id' => 476,
                'parroquia' => 'San Miguel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 147,
            ),
            476 => 
            array (
                'id' => 477,
                'parroquia' => 'Tintorero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 147,
            ),
            477 => 
            array (
                'id' => 478,
                'parroquia' => 'José Bernardo Dorante',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 147,
            ),
            478 => 
            array (
                'id' => 479,
                'parroquia' => 'Coronel Mariano Peraza ',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 147,
            ),
            479 => 
            array (
                'id' => 480,
                'parroquia' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 148,
            ),
            480 => 
            array (
                'id' => 481,
                'parroquia' => 'Anzoátegui',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 148,
            ),
            481 => 
            array (
                'id' => 482,
                'parroquia' => 'Guarico',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 148,
            ),
            482 => 
            array (
                'id' => 483,
                'parroquia' => 'Hilario Luna y Luna',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 148,
            ),
            483 => 
            array (
                'id' => 484,
                'parroquia' => 'Humocaro Alto',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 148,
            ),
            484 => 
            array (
                'id' => 485,
                'parroquia' => 'Humocaro Bajo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 148,
            ),
            485 => 
            array (
                'id' => 486,
                'parroquia' => 'La Candelaria',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 148,
            ),
            486 => 
            array (
                'id' => 487,
                'parroquia' => 'Morán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 148,
            ),
            487 => 
            array (
                'id' => 488,
                'parroquia' => 'Cabudare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 149,
            ),
            488 => 
            array (
                'id' => 489,
                'parroquia' => 'José Gregorio Bastidas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 149,
            ),
            489 => 
            array (
                'id' => 490,
                'parroquia' => 'Agua Viva',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 149,
            ),
            490 => 
            array (
                'id' => 491,
                'parroquia' => 'Sarare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 150,
            ),
            491 => 
            array (
                'id' => 492,
                'parroquia' => 'Buría',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 150,
            ),
            492 => 
            array (
                'id' => 493,
                'parroquia' => 'Gustavo Vegas León',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 150,
            ),
            493 => 
            array (
                'id' => 494,
                'parroquia' => 'Trinidad Samuel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            494 => 
            array (
                'id' => 495,
                'parroquia' => 'Antonio Díaz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            495 => 
            array (
                'id' => 496,
                'parroquia' => 'Camacaro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            496 => 
            array (
                'id' => 497,
                'parroquia' => 'Castañeda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            497 => 
            array (
                'id' => 498,
                'parroquia' => 'Cecilio Zubillaga',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            498 => 
            array (
                'id' => 499,
                'parroquia' => 'Chiquinquirá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            499 => 
            array (
                'id' => 500,
                'parroquia' => 'El Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
        ));
        \DB::table('parroquias')->insert(array (
            0 => 
            array (
                'id' => 501,
                'parroquia' => 'Espinoza de los Monteros',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            1 => 
            array (
                'id' => 502,
                'parroquia' => 'Lara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            2 => 
            array (
                'id' => 503,
                'parroquia' => 'Las Mercedes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            3 => 
            array (
                'id' => 504,
                'parroquia' => 'Manuel Morillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            4 => 
            array (
                'id' => 505,
                'parroquia' => 'Montaña Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            5 => 
            array (
                'id' => 506,
                'parroquia' => 'Montes de Oca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            6 => 
            array (
                'id' => 507,
                'parroquia' => 'Torres',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            7 => 
            array (
                'id' => 508,
                'parroquia' => 'Heriberto Arroyo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            8 => 
            array (
                'id' => 509,
                'parroquia' => 'Reyes Vargas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            9 => 
            array (
                'id' => 510,
                'parroquia' => 'Altagracia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 151,
            ),
            10 => 
            array (
                'id' => 511,
                'parroquia' => 'Siquisique',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 152,
            ),
            11 => 
            array (
                'id' => 512,
                'parroquia' => 'Moroturo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 152,
            ),
            12 => 
            array (
                'id' => 513,
                'parroquia' => 'San Miguel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 152,
            ),
            13 => 
            array (
                'id' => 514,
                'parroquia' => 'Xaguas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 152,
            ),
            14 => 
            array (
                'id' => 515,
                'parroquia' => 'Presidente Betancourt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 179,
            ),
            15 => 
            array (
                'id' => 516,
                'parroquia' => 'Presidente Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 179,
            ),
            16 => 
            array (
                'id' => 517,
                'parroquia' => 'Presidente Rómulo Gallegos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 179,
            ),
            17 => 
            array (
                'id' => 518,
                'parroquia' => 'Gabriel Picón González',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 179,
            ),
            18 => 
            array (
                'id' => 519,
                'parroquia' => 'Héctor Amable Mora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 179,
            ),
            19 => 
            array (
                'id' => 520,
                'parroquia' => 'José Nucete Sardi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 179,
            ),
            20 => 
            array (
                'id' => 521,
                'parroquia' => 'Pulido Méndez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 179,
            ),
            21 => 
            array (
                'id' => 522,
                'parroquia' => 'La Azulita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 180,
            ),
            22 => 
            array (
                'id' => 523,
                'parroquia' => 'Santa Cruz de Mora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 181,
            ),
            23 => 
            array (
                'id' => 524,
                'parroquia' => 'Mesa Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 181,
            ),
            24 => 
            array (
                'id' => 525,
                'parroquia' => 'Mesa de Las Palmas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 181,
            ),
            25 => 
            array (
                'id' => 526,
                'parroquia' => 'Aricagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 182,
            ),
            26 => 
            array (
                'id' => 527,
                'parroquia' => 'San Antonio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 182,
            ),
            27 => 
            array (
                'id' => 528,
                'parroquia' => 'Canagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 183,
            ),
            28 => 
            array (
                'id' => 529,
                'parroquia' => 'Capurí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 183,
            ),
            29 => 
            array (
                'id' => 530,
                'parroquia' => 'Chacantá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 183,
            ),
            30 => 
            array (
                'id' => 531,
                'parroquia' => 'El Molino',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 183,
            ),
            31 => 
            array (
                'id' => 532,
                'parroquia' => 'Guaimaral',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 183,
            ),
            32 => 
            array (
                'id' => 533,
                'parroquia' => 'Mucutuy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 183,
            ),
            33 => 
            array (
                'id' => 534,
                'parroquia' => 'Mucuchachí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 183,
            ),
            34 => 
            array (
                'id' => 535,
                'parroquia' => 'Fernández Peña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 184,
            ),
            35 => 
            array (
                'id' => 536,
                'parroquia' => 'Matriz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 184,
            ),
            36 => 
            array (
                'id' => 537,
                'parroquia' => 'Montalbán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 184,
            ),
            37 => 
            array (
                'id' => 538,
                'parroquia' => 'Acequias',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 184,
            ),
            38 => 
            array (
                'id' => 539,
                'parroquia' => 'Jají',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 184,
            ),
            39 => 
            array (
                'id' => 540,
                'parroquia' => 'La Mesa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 184,
            ),
            40 => 
            array (
                'id' => 541,
                'parroquia' => 'San José del Sur',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 184,
            ),
            41 => 
            array (
                'id' => 542,
                'parroquia' => 'Tucaní',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 185,
            ),
            42 => 
            array (
                'id' => 543,
                'parroquia' => 'Florencio Ramírez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 185,
            ),
            43 => 
            array (
                'id' => 544,
                'parroquia' => 'Santo Domingo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 186,
            ),
            44 => 
            array (
                'id' => 545,
                'parroquia' => 'Las Piedras',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 186,
            ),
            45 => 
            array (
                'id' => 546,
                'parroquia' => 'Guaraque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 187,
            ),
            46 => 
            array (
                'id' => 547,
                'parroquia' => 'Mesa de Quintero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 187,
            ),
            47 => 
            array (
                'id' => 548,
                'parroquia' => 'Río Negro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 187,
            ),
            48 => 
            array (
                'id' => 549,
                'parroquia' => 'Arapuey',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 188,
            ),
            49 => 
            array (
                'id' => 550,
                'parroquia' => 'Palmira',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 188,
            ),
            50 => 
            array (
                'id' => 551,
                'parroquia' => 'San Cristóbal de Torondoy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 189,
            ),
            51 => 
            array (
                'id' => 552,
                'parroquia' => 'Torondoy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 189,
            ),
            52 => 
            array (
                'id' => 553,
                'parroquia' => 'Antonio Spinetti Dini',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            53 => 
            array (
                'id' => 554,
                'parroquia' => 'Arias',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            54 => 
            array (
                'id' => 555,
                'parroquia' => 'Caracciolo Parra Pérez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            55 => 
            array (
                'id' => 556,
                'parroquia' => 'Domingo Peña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            56 => 
            array (
                'id' => 557,
                'parroquia' => 'El Llano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            57 => 
            array (
                'id' => 558,
                'parroquia' => 'Gonzalo Picón Febres',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            58 => 
            array (
                'id' => 559,
                'parroquia' => 'Jacinto Plaza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            59 => 
            array (
                'id' => 560,
                'parroquia' => 'Juan Rodríguez Suárez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            60 => 
            array (
                'id' => 561,
                'parroquia' => 'Lasso de la Vega',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            61 => 
            array (
                'id' => 562,
                'parroquia' => 'Mariano Picón Salas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            62 => 
            array (
                'id' => 563,
                'parroquia' => 'Milla',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            63 => 
            array (
                'id' => 564,
                'parroquia' => 'Osuna Rodríguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            64 => 
            array (
                'id' => 565,
                'parroquia' => 'Sagrario',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            65 => 
            array (
                'id' => 566,
                'parroquia' => 'El Morro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            66 => 
            array (
                'id' => 567,
                'parroquia' => 'Los Nevados',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 190,
            ),
            67 => 
            array (
                'id' => 568,
                'parroquia' => 'Andrés Eloy Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 191,
            ),
            68 => 
            array (
                'id' => 569,
                'parroquia' => 'La Venta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 191,
            ),
            69 => 
            array (
                'id' => 570,
                'parroquia' => 'Piñango',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 191,
            ),
            70 => 
            array (
                'id' => 571,
                'parroquia' => 'Timotes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 191,
            ),
            71 => 
            array (
                'id' => 572,
                'parroquia' => 'Eloy Paredes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 192,
            ),
            72 => 
            array (
                'id' => 573,
                'parroquia' => 'San Rafael de Alcázar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 192,
            ),
            73 => 
            array (
                'id' => 574,
                'parroquia' => 'Santa Elena de Arenales',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 192,
            ),
            74 => 
            array (
                'id' => 575,
                'parroquia' => 'Santa María de Caparo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 193,
            ),
            75 => 
            array (
                'id' => 576,
                'parroquia' => 'Pueblo Llano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 194,
            ),
            76 => 
            array (
                'id' => 577,
                'parroquia' => 'Cacute',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 195,
            ),
            77 => 
            array (
                'id' => 578,
                'parroquia' => 'La Toma',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 195,
            ),
            78 => 
            array (
                'id' => 579,
                'parroquia' => 'Mucuchíes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 195,
            ),
            79 => 
            array (
                'id' => 580,
                'parroquia' => 'Mucurubá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 195,
            ),
            80 => 
            array (
                'id' => 581,
                'parroquia' => 'San Rafael',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 195,
            ),
            81 => 
            array (
                'id' => 582,
                'parroquia' => 'Gerónimo Maldonado',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 196,
            ),
            82 => 
            array (
                'id' => 583,
                'parroquia' => 'Bailadores',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 196,
            ),
            83 => 
            array (
                'id' => 584,
                'parroquia' => 'Tabay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 197,
            ),
            84 => 
            array (
                'id' => 585,
                'parroquia' => 'Chiguará',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 198,
            ),
            85 => 
            array (
                'id' => 586,
                'parroquia' => 'Estánquez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 198,
            ),
            86 => 
            array (
                'id' => 587,
                'parroquia' => 'Lagunillas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 198,
            ),
            87 => 
            array (
                'id' => 588,
                'parroquia' => 'La Trampa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 198,
            ),
            88 => 
            array (
                'id' => 589,
                'parroquia' => 'Pueblo Nuevo del Sur',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 198,
            ),
            89 => 
            array (
                'id' => 590,
                'parroquia' => 'San Juan',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 198,
            ),
            90 => 
            array (
                'id' => 591,
                'parroquia' => 'El Amparo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 199,
            ),
            91 => 
            array (
                'id' => 592,
                'parroquia' => 'El Llano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 199,
            ),
            92 => 
            array (
                'id' => 593,
                'parroquia' => 'San Francisco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 199,
            ),
            93 => 
            array (
                'id' => 594,
                'parroquia' => 'Tovar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 199,
            ),
            94 => 
            array (
                'id' => 595,
                'parroquia' => 'Independencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 200,
            ),
            95 => 
            array (
                'id' => 596,
                'parroquia' => 'María de la Concepción Palacios Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 200,
            ),
            96 => 
            array (
                'id' => 597,
                'parroquia' => 'Nueva Bolivia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 200,
            ),
            97 => 
            array (
                'id' => 598,
                'parroquia' => 'Santa Apolonia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 200,
            ),
            98 => 
            array (
                'id' => 599,
                'parroquia' => 'Caño El Tigre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 201,
            ),
            99 => 
            array (
                'id' => 600,
                'parroquia' => 'Zea',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 201,
            ),
            100 => 
            array (
                'id' => 601,
                'parroquia' => 'Aragüita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 223,
            ),
            101 => 
            array (
                'id' => 602,
                'parroquia' => 'Arévalo González',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 223,
            ),
            102 => 
            array (
                'id' => 603,
                'parroquia' => 'Capaya',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 223,
            ),
            103 => 
            array (
                'id' => 604,
                'parroquia' => 'Caucagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 223,
            ),
            104 => 
            array (
                'id' => 605,
                'parroquia' => 'Panaquire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 223,
            ),
            105 => 
            array (
                'id' => 606,
                'parroquia' => 'Ribas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 223,
            ),
            106 => 
            array (
                'id' => 607,
                'parroquia' => 'El Café',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 223,
            ),
            107 => 
            array (
                'id' => 608,
                'parroquia' => 'Marizapa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 223,
            ),
            108 => 
            array (
                'id' => 609,
                'parroquia' => 'Cumbo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 224,
            ),
            109 => 
            array (
                'id' => 610,
                'parroquia' => 'San José de Barlovento',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 224,
            ),
            110 => 
            array (
                'id' => 611,
                'parroquia' => 'El Cafetal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 225,
            ),
            111 => 
            array (
                'id' => 612,
                'parroquia' => 'Las Minas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 225,
            ),
            112 => 
            array (
                'id' => 613,
                'parroquia' => 'Nuestra Señora del Rosario',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 225,
            ),
            113 => 
            array (
                'id' => 614,
                'parroquia' => 'Higuerote',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 226,
            ),
            114 => 
            array (
                'id' => 615,
                'parroquia' => 'Curiepe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 226,
            ),
            115 => 
            array (
                'id' => 616,
                'parroquia' => 'Tacarigua de Brión',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 226,
            ),
            116 => 
            array (
                'id' => 617,
                'parroquia' => 'Mamporal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 227,
            ),
            117 => 
            array (
                'id' => 618,
                'parroquia' => 'Carrizal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 228,
            ),
            118 => 
            array (
                'id' => 619,
                'parroquia' => 'Chacao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 229,
            ),
            119 => 
            array (
                'id' => 620,
                'parroquia' => 'Charallave',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 230,
            ),
            120 => 
            array (
                'id' => 621,
                'parroquia' => 'Las Brisas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 230,
            ),
            121 => 
            array (
                'id' => 622,
                'parroquia' => 'El Hatillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 231,
            ),
            122 => 
            array (
                'id' => 623,
                'parroquia' => 'Altagracia de la Montaña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 232,
            ),
            123 => 
            array (
                'id' => 624,
                'parroquia' => 'Cecilio Acosta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 232,
            ),
            124 => 
            array (
                'id' => 625,
                'parroquia' => 'Los Teques',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 232,
            ),
            125 => 
            array (
                'id' => 626,
                'parroquia' => 'El Jarillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 232,
            ),
            126 => 
            array (
                'id' => 627,
                'parroquia' => 'San Pedro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 232,
            ),
            127 => 
            array (
                'id' => 628,
                'parroquia' => 'Tácata',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 232,
            ),
            128 => 
            array (
                'id' => 629,
                'parroquia' => 'Paracotos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 232,
            ),
            129 => 
            array (
                'id' => 630,
                'parroquia' => 'Cartanal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 233,
            ),
            130 => 
            array (
                'id' => 631,
                'parroquia' => 'Santa Teresa del Tuy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 233,
            ),
            131 => 
            array (
                'id' => 632,
                'parroquia' => 'La Democracia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 234,
            ),
            132 => 
            array (
                'id' => 633,
                'parroquia' => 'Ocumare del Tuy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 234,
            ),
            133 => 
            array (
                'id' => 634,
                'parroquia' => 'Santa Bárbara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 234,
            ),
            134 => 
            array (
                'id' => 635,
                'parroquia' => 'San Antonio de los Altos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 235,
            ),
            135 => 
            array (
                'id' => 636,
                'parroquia' => 'Río Chico',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 236,
            ),
            136 => 
            array (
                'id' => 637,
                'parroquia' => 'El Guapo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 236,
            ),
            137 => 
            array (
                'id' => 638,
                'parroquia' => 'Tacarigua de la Laguna',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 236,
            ),
            138 => 
            array (
                'id' => 639,
                'parroquia' => 'Paparo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 236,
            ),
            139 => 
            array (
                'id' => 640,
                'parroquia' => 'San Fernando del Guapo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 236,
            ),
            140 => 
            array (
                'id' => 641,
                'parroquia' => 'Santa Lucía del Tuy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 237,
            ),
            141 => 
            array (
                'id' => 642,
                'parroquia' => 'Cúpira',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 238,
            ),
            142 => 
            array (
                'id' => 643,
                'parroquia' => 'Machurucuto',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 238,
            ),
            143 => 
            array (
                'id' => 644,
                'parroquia' => 'Guarenas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 239,
            ),
            144 => 
            array (
                'id' => 645,
                'parroquia' => 'San Antonio de Yare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 240,
            ),
            145 => 
            array (
                'id' => 646,
                'parroquia' => 'San Francisco de Yare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 240,
            ),
            146 => 
            array (
                'id' => 647,
                'parroquia' => 'Leoncio Martínez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 241,
            ),
            147 => 
            array (
                'id' => 648,
                'parroquia' => 'Petare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 241,
            ),
            148 => 
            array (
                'id' => 649,
                'parroquia' => 'Caucagüita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 241,
            ),
            149 => 
            array (
                'id' => 650,
                'parroquia' => 'Filas de Mariche',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 241,
            ),
            150 => 
            array (
                'id' => 651,
                'parroquia' => 'La Dolorita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 241,
            ),
            151 => 
            array (
                'id' => 652,
                'parroquia' => 'Cúa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 242,
            ),
            152 => 
            array (
                'id' => 653,
                'parroquia' => 'Nueva Cúa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 242,
            ),
            153 => 
            array (
                'id' => 654,
                'parroquia' => 'Guatire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 243,
            ),
            154 => 
            array (
                'id' => 655,
                'parroquia' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 243,
            ),
            155 => 
            array (
                'id' => 656,
                'parroquia' => 'San Antonio de Maturín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 258,
            ),
            156 => 
            array (
                'id' => 657,
                'parroquia' => 'San Francisco de Maturín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 258,
            ),
            157 => 
            array (
                'id' => 658,
                'parroquia' => 'Aguasay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 259,
            ),
            158 => 
            array (
                'id' => 659,
                'parroquia' => 'Caripito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 260,
            ),
            159 => 
            array (
                'id' => 660,
                'parroquia' => 'El Guácharo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 261,
            ),
            160 => 
            array (
                'id' => 661,
                'parroquia' => 'La Guanota',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 261,
            ),
            161 => 
            array (
                'id' => 662,
                'parroquia' => 'Sabana de Piedra',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 261,
            ),
            162 => 
            array (
                'id' => 663,
                'parroquia' => 'San Agustín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 261,
            ),
            163 => 
            array (
                'id' => 664,
                'parroquia' => 'Teresen',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 261,
            ),
            164 => 
            array (
                'id' => 665,
                'parroquia' => 'Caripe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 261,
            ),
            165 => 
            array (
                'id' => 666,
                'parroquia' => 'Areo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 262,
            ),
            166 => 
            array (
                'id' => 667,
                'parroquia' => 'Capital Cedeño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 262,
            ),
            167 => 
            array (
                'id' => 668,
                'parroquia' => 'San Félix de Cantalicio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 262,
            ),
            168 => 
            array (
                'id' => 669,
                'parroquia' => 'Viento Fresco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 262,
            ),
            169 => 
            array (
                'id' => 670,
                'parroquia' => 'El Tejero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 263,
            ),
            170 => 
            array (
                'id' => 671,
                'parroquia' => 'Punta de Mata',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 263,
            ),
            171 => 
            array (
                'id' => 672,
                'parroquia' => 'Chaguaramas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 264,
            ),
            172 => 
            array (
                'id' => 673,
                'parroquia' => 'Las Alhuacas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 264,
            ),
            173 => 
            array (
                'id' => 674,
                'parroquia' => 'Tabasca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 264,
            ),
            174 => 
            array (
                'id' => 675,
                'parroquia' => 'Temblador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 264,
            ),
            175 => 
            array (
                'id' => 676,
                'parroquia' => 'Alto de los Godos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            176 => 
            array (
                'id' => 677,
                'parroquia' => 'Boquerón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            177 => 
            array (
                'id' => 678,
                'parroquia' => 'Las Cocuizas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            178 => 
            array (
                'id' => 679,
                'parroquia' => 'La Cruz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            179 => 
            array (
                'id' => 680,
                'parroquia' => 'San Simón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            180 => 
            array (
                'id' => 681,
                'parroquia' => 'El Corozo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            181 => 
            array (
                'id' => 682,
                'parroquia' => 'El Furrial',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            182 => 
            array (
                'id' => 683,
                'parroquia' => 'Jusepín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            183 => 
            array (
                'id' => 684,
                'parroquia' => 'La Pica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            184 => 
            array (
                'id' => 685,
                'parroquia' => 'San Vicente',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 265,
            ),
            185 => 
            array (
                'id' => 686,
                'parroquia' => 'Aparicio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 266,
            ),
            186 => 
            array (
                'id' => 687,
                'parroquia' => 'Aragua de Maturín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 266,
            ),
            187 => 
            array (
                'id' => 688,
                'parroquia' => 'Chaguamal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 266,
            ),
            188 => 
            array (
                'id' => 689,
                'parroquia' => 'El Pinto',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 266,
            ),
            189 => 
            array (
                'id' => 690,
                'parroquia' => 'Guanaguana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 266,
            ),
            190 => 
            array (
                'id' => 691,
                'parroquia' => 'La Toscana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 266,
            ),
            191 => 
            array (
                'id' => 692,
                'parroquia' => 'Taguaya',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 266,
            ),
            192 => 
            array (
                'id' => 693,
                'parroquia' => 'Cachipo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 267,
            ),
            193 => 
            array (
                'id' => 694,
                'parroquia' => 'Quiriquire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 267,
            ),
            194 => 
            array (
                'id' => 695,
                'parroquia' => 'Santa Bárbara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 268,
            ),
            195 => 
            array (
                'id' => 696,
                'parroquia' => 'Barrancas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 269,
            ),
            196 => 
            array (
                'id' => 697,
                'parroquia' => 'Los Barrancos de Fajardo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 269,
            ),
            197 => 
            array (
                'id' => 698,
                'parroquia' => 'Uracoa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 270,
            ),
            198 => 
            array (
                'id' => 699,
                'parroquia' => 'Antolín del Campo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 271,
            ),
            199 => 
            array (
                'id' => 700,
                'parroquia' => 'Arismendi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 272,
            ),
            200 => 
            array (
                'id' => 701,
                'parroquia' => 'García',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 273,
            ),
            201 => 
            array (
                'id' => 702,
                'parroquia' => 'Francisco Fajardo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 273,
            ),
            202 => 
            array (
                'id' => 703,
                'parroquia' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 274,
            ),
            203 => 
            array (
                'id' => 704,
                'parroquia' => 'Guevara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 274,
            ),
            204 => 
            array (
                'id' => 705,
                'parroquia' => 'Matasiete',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 274,
            ),
            205 => 
            array (
                'id' => 706,
                'parroquia' => 'Santa Ana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 274,
            ),
            206 => 
            array (
                'id' => 707,
                'parroquia' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 274,
            ),
            207 => 
            array (
                'id' => 708,
                'parroquia' => 'Aguirre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 275,
            ),
            208 => 
            array (
                'id' => 709,
                'parroquia' => 'Maneiro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 275,
            ),
            209 => 
            array (
                'id' => 710,
                'parroquia' => 'Adrián',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 276,
            ),
            210 => 
            array (
                'id' => 711,
                'parroquia' => 'Juan Griego',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 276,
            ),
            211 => 
            array (
                'id' => 712,
                'parroquia' => 'Yaguaraparo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 276,
            ),
            212 => 
            array (
                'id' => 713,
                'parroquia' => 'Porlamar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 277,
            ),
            213 => 
            array (
                'id' => 714,
                'parroquia' => 'San Francisco de Macanao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 278,
            ),
            214 => 
            array (
                'id' => 715,
                'parroquia' => 'Boca de Río',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 278,
            ),
            215 => 
            array (
                'id' => 716,
                'parroquia' => 'Tubores',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 279,
            ),
            216 => 
            array (
                'id' => 717,
                'parroquia' => 'Los Baleales',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 279,
            ),
            217 => 
            array (
                'id' => 718,
                'parroquia' => 'Vicente Fuentes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 280,
            ),
            218 => 
            array (
                'id' => 719,
                'parroquia' => 'Villalba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 280,
            ),
            219 => 
            array (
                'id' => 720,
                'parroquia' => 'San Juan Bautista',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 281,
            ),
            220 => 
            array (
                'id' => 721,
                'parroquia' => 'Zabala',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 281,
            ),
            221 => 
            array (
                'id' => 722,
                'parroquia' => 'Capital Araure',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 283,
            ),
            222 => 
            array (
                'id' => 723,
                'parroquia' => 'Río Acarigua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 283,
            ),
            223 => 
            array (
                'id' => 724,
                'parroquia' => 'Capital Esteller',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 284,
            ),
            224 => 
            array (
                'id' => 725,
                'parroquia' => 'Uveral',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 284,
            ),
            225 => 
            array (
                'id' => 726,
                'parroquia' => 'Guanare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 285,
            ),
            226 => 
            array (
                'id' => 727,
                'parroquia' => 'Córdoba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 285,
            ),
            227 => 
            array (
                'id' => 728,
                'parroquia' => 'San José de la Montaña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 285,
            ),
            228 => 
            array (
                'id' => 729,
                'parroquia' => 'San Juan de Guanaguanare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 285,
            ),
            229 => 
            array (
                'id' => 730,
                'parroquia' => 'Virgen de la Coromoto',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 285,
            ),
            230 => 
            array (
                'id' => 731,
                'parroquia' => 'Guanarito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 286,
            ),
            231 => 
            array (
                'id' => 732,
                'parroquia' => 'Trinidad de la Capilla',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 286,
            ),
            232 => 
            array (
                'id' => 733,
                'parroquia' => 'Divina Pastora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 286,
            ),
            233 => 
            array (
                'id' => 734,
                'parroquia' => 'Monseñor José Vicente de Unda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 287,
            ),
            234 => 
            array (
                'id' => 735,
                'parroquia' => 'Peña Blanca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 287,
            ),
            235 => 
            array (
                'id' => 736,
                'parroquia' => 'Capital Ospino',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 288,
            ),
            236 => 
            array (
                'id' => 737,
                'parroquia' => 'Aparición',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 288,
            ),
            237 => 
            array (
                'id' => 738,
                'parroquia' => 'La Estación',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 288,
            ),
            238 => 
            array (
                'id' => 739,
                'parroquia' => 'Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 289,
            ),
            239 => 
            array (
                'id' => 740,
                'parroquia' => 'Payara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 289,
            ),
            240 => 
            array (
                'id' => 741,
                'parroquia' => 'Pimpinela',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 289,
            ),
            241 => 
            array (
                'id' => 742,
                'parroquia' => 'Ramón Peraza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 289,
            ),
            242 => 
            array (
                'id' => 743,
                'parroquia' => 'Papelón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 290,
            ),
            243 => 
            array (
                'id' => 744,
                'parroquia' => 'Caño Delgadito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 290,
            ),
            244 => 
            array (
                'id' => 745,
                'parroquia' => 'San Genaro de Boconoito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 291,
            ),
            245 => 
            array (
                'id' => 746,
                'parroquia' => 'Antolín Tovar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 291,
            ),
            246 => 
            array (
                'id' => 747,
                'parroquia' => 'San Rafael de Onoto',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 292,
            ),
            247 => 
            array (
                'id' => 748,
                'parroquia' => 'Santa Fe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 292,
            ),
            248 => 
            array (
                'id' => 749,
                'parroquia' => 'Thermo Morles',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 292,
            ),
            249 => 
            array (
                'id' => 750,
                'parroquia' => 'Santa Rosalía',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 293,
            ),
            250 => 
            array (
                'id' => 751,
                'parroquia' => 'Florida',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 293,
            ),
            251 => 
            array (
                'id' => 752,
                'parroquia' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 294,
            ),
            252 => 
            array (
                'id' => 753,
                'parroquia' => 'Concepción',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 294,
            ),
            253 => 
            array (
                'id' => 754,
                'parroquia' => 'San Rafael de Palo Alzado',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 294,
            ),
            254 => 
            array (
                'id' => 755,
                'parroquia' => 'Uvencio Antonio Velásquez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 294,
            ),
            255 => 
            array (
                'id' => 756,
                'parroquia' => 'San José de Saguaz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 294,
            ),
            256 => 
            array (
                'id' => 757,
                'parroquia' => 'Villa Rosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 294,
            ),
            257 => 
            array (
                'id' => 758,
                'parroquia' => 'Turén',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 295,
            ),
            258 => 
            array (
                'id' => 759,
                'parroquia' => 'Canelones',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 295,
            ),
            259 => 
            array (
                'id' => 760,
                'parroquia' => 'Santa Cruz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 295,
            ),
            260 => 
            array (
                'id' => 761,
                'parroquia' => 'San Isidro Labrador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 295,
            ),
            261 => 
            array (
                'id' => 762,
                'parroquia' => 'Mariño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 296,
            ),
            262 => 
            array (
                'id' => 763,
                'parroquia' => 'Rómulo Gallegos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 296,
            ),
            263 => 
            array (
                'id' => 764,
                'parroquia' => 'San José de Aerocuar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 297,
            ),
            264 => 
            array (
                'id' => 765,
                'parroquia' => 'Tavera Acosta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 297,
            ),
            265 => 
            array (
                'id' => 766,
                'parroquia' => 'Río Caribe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 298,
            ),
            266 => 
            array (
                'id' => 767,
                'parroquia' => 'Antonio José de Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 298,
            ),
            267 => 
            array (
                'id' => 768,
                'parroquia' => 'El Morro de Puerto Santo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 298,
            ),
            268 => 
            array (
                'id' => 769,
                'parroquia' => 'Puerto Santo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 298,
            ),
            269 => 
            array (
                'id' => 770,
                'parroquia' => 'San Juan de las Galdonas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 298,
            ),
            270 => 
            array (
                'id' => 771,
                'parroquia' => 'El Pilar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 299,
            ),
            271 => 
            array (
                'id' => 772,
                'parroquia' => 'El Rincón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 299,
            ),
            272 => 
            array (
                'id' => 773,
                'parroquia' => 'General Francisco Antonio Váquez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 299,
            ),
            273 => 
            array (
                'id' => 774,
                'parroquia' => 'Guaraúnos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 299,
            ),
            274 => 
            array (
                'id' => 775,
                'parroquia' => 'Tunapuicito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 299,
            ),
            275 => 
            array (
                'id' => 776,
                'parroquia' => 'Unión',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 299,
            ),
            276 => 
            array (
                'id' => 777,
                'parroquia' => 'Santa Catalina',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 300,
            ),
            277 => 
            array (
                'id' => 778,
                'parroquia' => 'Santa Rosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 300,
            ),
            278 => 
            array (
                'id' => 779,
                'parroquia' => 'Santa Teresa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 300,
            ),
            279 => 
            array (
                'id' => 780,
                'parroquia' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 300,
            ),
            280 => 
            array (
                'id' => 781,
                'parroquia' => 'Maracapana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 300,
            ),
            281 => 
            array (
                'id' => 782,
                'parroquia' => 'Libertad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 302,
            ),
            282 => 
            array (
                'id' => 783,
                'parroquia' => 'El Paujil',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 302,
            ),
            283 => 
            array (
                'id' => 784,
                'parroquia' => 'Yaguaraparo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 302,
            ),
            284 => 
            array (
                'id' => 785,
                'parroquia' => 'Cruz Salmerón Acosta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 303,
            ),
            285 => 
            array (
                'id' => 786,
                'parroquia' => 'Chacopata',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 303,
            ),
            286 => 
            array (
                'id' => 787,
                'parroquia' => 'Manicuare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 303,
            ),
            287 => 
            array (
                'id' => 788,
                'parroquia' => 'Tunapuy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 304,
            ),
            288 => 
            array (
                'id' => 789,
                'parroquia' => 'Campo Elías',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 304,
            ),
            289 => 
            array (
                'id' => 790,
                'parroquia' => 'Irapa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 305,
            ),
            290 => 
            array (
                'id' => 791,
                'parroquia' => 'Campo Claro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 305,
            ),
            291 => 
            array (
                'id' => 792,
                'parroquia' => 'Maraval',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 305,
            ),
            292 => 
            array (
                'id' => 793,
                'parroquia' => 'San Antonio de Irapa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 305,
            ),
            293 => 
            array (
                'id' => 794,
                'parroquia' => 'Soro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 305,
            ),
            294 => 
            array (
                'id' => 795,
                'parroquia' => 'Mejía',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 306,
            ),
            295 => 
            array (
                'id' => 796,
                'parroquia' => 'Cumanacoa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 307,
            ),
            296 => 
            array (
                'id' => 797,
                'parroquia' => 'Arenas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 307,
            ),
            297 => 
            array (
                'id' => 798,
                'parroquia' => 'Aricagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 307,
            ),
            298 => 
            array (
                'id' => 799,
                'parroquia' => 'Cogollar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 307,
            ),
            299 => 
            array (
                'id' => 800,
                'parroquia' => 'San Fernando',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 307,
            ),
            300 => 
            array (
                'id' => 801,
                'parroquia' => 'San Lorenzo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 307,
            ),
            301 => 
            array (
                'id' => 802,
            'parroquia' => 'Villa Frontado (Muelle de Cariaco)',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 308,
            ),
            302 => 
            array (
                'id' => 803,
                'parroquia' => 'Catuaro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 308,
            ),
            303 => 
            array (
                'id' => 804,
                'parroquia' => 'Rendón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 308,
            ),
            304 => 
            array (
                'id' => 805,
                'parroquia' => 'San Cruz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 308,
            ),
            305 => 
            array (
                'id' => 806,
                'parroquia' => 'Santa María',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 308,
            ),
            306 => 
            array (
                'id' => 807,
                'parroquia' => 'Altagracia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 309,
            ),
            307 => 
            array (
                'id' => 808,
                'parroquia' => 'Santa Inés',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 309,
            ),
            308 => 
            array (
                'id' => 809,
                'parroquia' => 'Valentín Valiente',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 309,
            ),
            309 => 
            array (
                'id' => 810,
                'parroquia' => 'Ayacucho',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 309,
            ),
            310 => 
            array (
                'id' => 811,
                'parroquia' => 'San Juan',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 309,
            ),
            311 => 
            array (
                'id' => 812,
                'parroquia' => 'Raúl Leoni',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 309,
            ),
            312 => 
            array (
                'id' => 813,
                'parroquia' => 'Gran Mariscal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 309,
            ),
            313 => 
            array (
                'id' => 814,
                'parroquia' => 'Cristóbal Colón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 310,
            ),
            314 => 
            array (
                'id' => 815,
                'parroquia' => 'Bideau',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 310,
            ),
            315 => 
            array (
                'id' => 816,
                'parroquia' => 'Punta de Piedras',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 310,
            ),
            316 => 
            array (
                'id' => 817,
                'parroquia' => 'Güiria',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 310,
            ),
            317 => 
            array (
                'id' => 818,
                'parroquia' => 'Andrés Bello',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 341,
            ),
            318 => 
            array (
                'id' => 819,
                'parroquia' => 'Antonio Rómulo Costa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 342,
            ),
            319 => 
            array (
                'id' => 820,
                'parroquia' => 'Ayacucho',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 343,
            ),
            320 => 
            array (
                'id' => 821,
                'parroquia' => 'Rivas Berti',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 343,
            ),
            321 => 
            array (
                'id' => 822,
                'parroquia' => 'San Pedro del Río',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 343,
            ),
            322 => 
            array (
                'id' => 823,
                'parroquia' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 344,
            ),
            323 => 
            array (
                'id' => 824,
                'parroquia' => 'Palotal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 344,
            ),
            324 => 
            array (
                'id' => 825,
                'parroquia' => 'General Juan Vicente Gómez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 344,
            ),
            325 => 
            array (
                'id' => 826,
                'parroquia' => 'Isaías Medina Angarita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 344,
            ),
            326 => 
            array (
                'id' => 827,
                'parroquia' => 'Cárdenas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 345,
            ),
            327 => 
            array (
                'id' => 828,
                'parroquia' => 'Amenodoro Ángel Lamus',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 345,
            ),
            328 => 
            array (
                'id' => 829,
                'parroquia' => 'La Florida',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 345,
            ),
            329 => 
            array (
                'id' => 830,
                'parroquia' => 'Córdoba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 346,
            ),
            330 => 
            array (
                'id' => 831,
                'parroquia' => 'Fernández Feo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 347,
            ),
            331 => 
            array (
                'id' => 832,
                'parroquia' => 'Alberto Adriani',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 347,
            ),
            332 => 
            array (
                'id' => 833,
                'parroquia' => 'Santo Domingo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 347,
            ),
            333 => 
            array (
                'id' => 834,
                'parroquia' => 'Francisco de Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 348,
            ),
            334 => 
            array (
                'id' => 835,
                'parroquia' => 'García de Hevia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 349,
            ),
            335 => 
            array (
                'id' => 836,
                'parroquia' => 'Boca de Grita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 349,
            ),
            336 => 
            array (
                'id' => 837,
                'parroquia' => 'José Antonio Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 349,
            ),
            337 => 
            array (
                'id' => 838,
                'parroquia' => 'Guásimos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 350,
            ),
            338 => 
            array (
                'id' => 839,
                'parroquia' => 'Independencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 351,
            ),
            339 => 
            array (
                'id' => 840,
                'parroquia' => 'Juan Germán Roscio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 351,
            ),
            340 => 
            array (
                'id' => 841,
                'parroquia' => 'Román Cárdenas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 351,
            ),
            341 => 
            array (
                'id' => 842,
                'parroquia' => 'Jáuregui',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 352,
            ),
            342 => 
            array (
                'id' => 843,
                'parroquia' => 'Emilio Constantino Guerrero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 352,
            ),
            343 => 
            array (
                'id' => 844,
                'parroquia' => 'Monseñor Miguel Antonio Salas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 352,
            ),
            344 => 
            array (
                'id' => 845,
                'parroquia' => 'José María Vargas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 353,
            ),
            345 => 
            array (
                'id' => 846,
                'parroquia' => 'Junín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 354,
            ),
            346 => 
            array (
                'id' => 847,
                'parroquia' => 'La Petrólea',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 354,
            ),
            347 => 
            array (
                'id' => 848,
                'parroquia' => 'Quinimarí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 354,
            ),
            348 => 
            array (
                'id' => 849,
                'parroquia' => 'Bramón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 354,
            ),
            349 => 
            array (
                'id' => 850,
                'parroquia' => 'Libertad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 355,
            ),
            350 => 
            array (
                'id' => 851,
                'parroquia' => 'Cipriano Castro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 355,
            ),
            351 => 
            array (
                'id' => 852,
                'parroquia' => 'Manuel Felipe Rugeles',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 355,
            ),
            352 => 
            array (
                'id' => 853,
                'parroquia' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 356,
            ),
            353 => 
            array (
                'id' => 854,
                'parroquia' => 'Doradas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 356,
            ),
            354 => 
            array (
                'id' => 855,
                'parroquia' => 'Emeterio Ochoa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 356,
            ),
            355 => 
            array (
                'id' => 856,
                'parroquia' => 'San Joaquín de Navay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 356,
            ),
            356 => 
            array (
                'id' => 857,
                'parroquia' => 'Lobatera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 357,
            ),
            357 => 
            array (
                'id' => 858,
                'parroquia' => 'Constitución',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 357,
            ),
            358 => 
            array (
                'id' => 859,
                'parroquia' => 'Michelena',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 358,
            ),
            359 => 
            array (
                'id' => 860,
                'parroquia' => 'Panamericano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 359,
            ),
            360 => 
            array (
                'id' => 861,
                'parroquia' => 'La Palmita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 359,
            ),
            361 => 
            array (
                'id' => 862,
                'parroquia' => 'Pedro María Ureña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 360,
            ),
            362 => 
            array (
                'id' => 863,
                'parroquia' => 'Nueva Arcadia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 360,
            ),
            363 => 
            array (
                'id' => 864,
                'parroquia' => 'Delicias',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 361,
            ),
            364 => 
            array (
                'id' => 865,
                'parroquia' => 'Pecaya',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 361,
            ),
            365 => 
            array (
                'id' => 866,
                'parroquia' => 'Samuel Darío Maldonado',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 362,
            ),
            366 => 
            array (
                'id' => 867,
                'parroquia' => 'Boconó',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 362,
            ),
            367 => 
            array (
                'id' => 868,
                'parroquia' => 'Hernández',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 362,
            ),
            368 => 
            array (
                'id' => 869,
                'parroquia' => 'La Concordia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 363,
            ),
            369 => 
            array (
                'id' => 870,
                'parroquia' => 'San Juan Bautista',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 363,
            ),
            370 => 
            array (
                'id' => 871,
                'parroquia' => 'Pedro María Morantes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 363,
            ),
            371 => 
            array (
                'id' => 872,
                'parroquia' => 'San Sebastián',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 363,
            ),
            372 => 
            array (
                'id' => 873,
                'parroquia' => 'Dr. Francisco Romero Lobo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 363,
            ),
            373 => 
            array (
                'id' => 874,
                'parroquia' => 'Seboruco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 364,
            ),
            374 => 
            array (
                'id' => 875,
                'parroquia' => 'Simón Rodríguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 365,
            ),
            375 => 
            array (
                'id' => 876,
                'parroquia' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 366,
            ),
            376 => 
            array (
                'id' => 877,
                'parroquia' => 'Eleazar López Contreras',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 366,
            ),
            377 => 
            array (
                'id' => 878,
                'parroquia' => 'San Pablo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 366,
            ),
            378 => 
            array (
                'id' => 879,
                'parroquia' => 'Torbes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 367,
            ),
            379 => 
            array (
                'id' => 880,
                'parroquia' => 'Uribante',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 368,
            ),
            380 => 
            array (
                'id' => 881,
                'parroquia' => 'Cárdenas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 368,
            ),
            381 => 
            array (
                'id' => 882,
                'parroquia' => 'Juan Pablo Peñalosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 368,
            ),
            382 => 
            array (
                'id' => 883,
                'parroquia' => 'Potosí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 368,
            ),
            383 => 
            array (
                'id' => 884,
                'parroquia' => 'San Judas Tadeo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 369,
            ),
            384 => 
            array (
                'id' => 885,
                'parroquia' => 'Araguaney',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 370,
            ),
            385 => 
            array (
                'id' => 886,
                'parroquia' => 'El Jaguito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 370,
            ),
            386 => 
            array (
                'id' => 887,
                'parroquia' => 'La Esperanza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 370,
            ),
            387 => 
            array (
                'id' => 888,
                'parroquia' => 'Santa Isabel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 370,
            ),
            388 => 
            array (
                'id' => 889,
                'parroquia' => 'Boconó',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            389 => 
            array (
                'id' => 890,
                'parroquia' => 'El Carmen',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            390 => 
            array (
                'id' => 891,
                'parroquia' => 'Mosquey',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            391 => 
            array (
                'id' => 892,
                'parroquia' => 'Ayacucho',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            392 => 
            array (
                'id' => 893,
                'parroquia' => 'Burbusay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            393 => 
            array (
                'id' => 894,
                'parroquia' => 'General Ribas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            394 => 
            array (
                'id' => 895,
                'parroquia' => 'Guaramacal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            395 => 
            array (
                'id' => 896,
                'parroquia' => 'Vega de Guaramacal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            396 => 
            array (
                'id' => 897,
                'parroquia' => 'Monseñor Jáuregui',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            397 => 
            array (
                'id' => 898,
                'parroquia' => 'Rafael Rangel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            398 => 
            array (
                'id' => 899,
                'parroquia' => 'San Miguel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            399 => 
            array (
                'id' => 900,
                'parroquia' => 'San José',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 371,
            ),
            400 => 
            array (
                'id' => 901,
                'parroquia' => 'Sabana Grande',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 372,
            ),
            401 => 
            array (
                'id' => 902,
                'parroquia' => 'Cheregüé',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 372,
            ),
            402 => 
            array (
                'id' => 903,
                'parroquia' => 'Granados',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 372,
            ),
            403 => 
            array (
                'id' => 904,
                'parroquia' => 'Arnoldo Gabaldón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 373,
            ),
            404 => 
            array (
                'id' => 905,
                'parroquia' => 'Bolivia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 373,
            ),
            405 => 
            array (
                'id' => 906,
                'parroquia' => 'Carrillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 373,
            ),
            406 => 
            array (
                'id' => 907,
                'parroquia' => 'Cegarra',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 373,
            ),
            407 => 
            array (
                'id' => 908,
                'parroquia' => 'Chejendé',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 373,
            ),
            408 => 
            array (
                'id' => 909,
                'parroquia' => 'Manuel Salvador Ulloa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 373,
            ),
            409 => 
            array (
                'id' => 910,
                'parroquia' => 'San José',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 373,
            ),
            410 => 
            array (
                'id' => 911,
                'parroquia' => 'Carache',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 374,
            ),
            411 => 
            array (
                'id' => 912,
                'parroquia' => 'La Concepción',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 374,
            ),
            412 => 
            array (
                'id' => 913,
                'parroquia' => 'Cuicas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 374,
            ),
            413 => 
            array (
                'id' => 914,
                'parroquia' => 'Panamericana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 374,
            ),
            414 => 
            array (
                'id' => 915,
                'parroquia' => 'Santa Cruz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 374,
            ),
            415 => 
            array (
                'id' => 916,
                'parroquia' => 'Escuque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 375,
            ),
            416 => 
            array (
                'id' => 917,
                'parroquia' => 'La Unión',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 375,
            ),
            417 => 
            array (
                'id' => 918,
                'parroquia' => 'Santa Rita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 375,
            ),
            418 => 
            array (
                'id' => 919,
                'parroquia' => 'Sabana Libre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 375,
            ),
            419 => 
            array (
                'id' => 920,
                'parroquia' => 'El Socorro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 376,
            ),
            420 => 
            array (
                'id' => 921,
                'parroquia' => 'Los Caprichos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 376,
            ),
            421 => 
            array (
                'id' => 922,
                'parroquia' => 'Antonio José de Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 376,
            ),
            422 => 
            array (
                'id' => 923,
                'parroquia' => 'Campo Elías',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 377,
            ),
            423 => 
            array (
                'id' => 924,
                'parroquia' => 'Arnoldo Gabaldón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 377,
            ),
            424 => 
            array (
                'id' => 925,
                'parroquia' => 'Santa Apolonia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 378,
            ),
            425 => 
            array (
                'id' => 926,
                'parroquia' => 'El Progreso',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 378,
            ),
            426 => 
            array (
                'id' => 927,
                'parroquia' => 'La Ceiba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 378,
            ),
            427 => 
            array (
                'id' => 928,
                'parroquia' => 'Tres de Febrero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 378,
            ),
            428 => 
            array (
                'id' => 929,
                'parroquia' => 'El Dividive',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 379,
            ),
            429 => 
            array (
                'id' => 930,
                'parroquia' => 'Agua Santa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 379,
            ),
            430 => 
            array (
                'id' => 931,
                'parroquia' => 'Agua Caliente',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 379,
            ),
            431 => 
            array (
                'id' => 932,
                'parroquia' => 'El Cenizo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 379,
            ),
            432 => 
            array (
                'id' => 933,
                'parroquia' => 'Valerita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 379,
            ),
            433 => 
            array (
                'id' => 934,
                'parroquia' => 'Monte Carmelo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 380,
            ),
            434 => 
            array (
                'id' => 935,
                'parroquia' => 'Buena Vista',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 380,
            ),
            435 => 
            array (
                'id' => 936,
                'parroquia' => 'Santa María del Horcón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 380,
            ),
            436 => 
            array (
                'id' => 937,
                'parroquia' => 'Motatán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 381,
            ),
            437 => 
            array (
                'id' => 938,
                'parroquia' => 'El Baño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 381,
            ),
            438 => 
            array (
                'id' => 939,
                'parroquia' => 'Jalisco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 381,
            ),
            439 => 
            array (
                'id' => 940,
                'parroquia' => 'Pampán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 382,
            ),
            440 => 
            array (
                'id' => 941,
                'parroquia' => 'Flor de Patria',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 382,
            ),
            441 => 
            array (
                'id' => 942,
                'parroquia' => 'La Paz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 382,
            ),
            442 => 
            array (
                'id' => 943,
                'parroquia' => 'Santa Ana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 382,
            ),
            443 => 
            array (
                'id' => 944,
                'parroquia' => 'Pampanito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 383,
            ),
            444 => 
            array (
                'id' => 945,
                'parroquia' => 'La Concepción',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 383,
            ),
            445 => 
            array (
                'id' => 946,
                'parroquia' => 'Pampanito II',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 383,
            ),
            446 => 
            array (
                'id' => 947,
                'parroquia' => 'Betijoque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 384,
            ),
            447 => 
            array (
                'id' => 948,
                'parroquia' => 'José Gregorio Hernández',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 384,
            ),
            448 => 
            array (
                'id' => 949,
                'parroquia' => 'La Pueblita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 384,
            ),
            449 => 
            array (
                'id' => 950,
                'parroquia' => 'Los Cedros',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 384,
            ),
            450 => 
            array (
                'id' => 951,
                'parroquia' => 'Carvajal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 385,
            ),
            451 => 
            array (
                'id' => 952,
                'parroquia' => 'Campo Alegre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 385,
            ),
            452 => 
            array (
                'id' => 953,
                'parroquia' => 'Antonio Nicolás Briceño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 385,
            ),
            453 => 
            array (
                'id' => 954,
                'parroquia' => 'José Leonardo Suárez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 385,
            ),
            454 => 
            array (
                'id' => 955,
                'parroquia' => 'Sabana de Mendoza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 386,
            ),
            455 => 
            array (
                'id' => 956,
                'parroquia' => 'Junín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 386,
            ),
            456 => 
            array (
                'id' => 957,
                'parroquia' => 'Valmore Rodríguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 386,
            ),
            457 => 
            array (
                'id' => 958,
                'parroquia' => 'El Paraíso',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 386,
            ),
            458 => 
            array (
                'id' => 959,
                'parroquia' => 'Andrés Linares',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 387,
            ),
            459 => 
            array (
                'id' => 960,
                'parroquia' => 'Chiquinquirá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 387,
            ),
            460 => 
            array (
                'id' => 961,
                'parroquia' => 'Cristóbal Mendoza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 387,
            ),
            461 => 
            array (
                'id' => 962,
                'parroquia' => 'Cruz Carrillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 387,
            ),
            462 => 
            array (
                'id' => 963,
                'parroquia' => 'Matriz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 387,
            ),
            463 => 
            array (
                'id' => 964,
                'parroquia' => 'Monseñor Carrillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 387,
            ),
            464 => 
            array (
                'id' => 965,
                'parroquia' => 'Tres Esquinas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 387,
            ),
            465 => 
            array (
                'id' => 966,
                'parroquia' => 'Cabimbú',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 388,
            ),
            466 => 
            array (
                'id' => 967,
                'parroquia' => 'Jajó',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 388,
            ),
            467 => 
            array (
                'id' => 968,
                'parroquia' => 'La Mesa de Esnujaque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 388,
            ),
            468 => 
            array (
                'id' => 969,
                'parroquia' => 'Santiago',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 388,
            ),
            469 => 
            array (
                'id' => 970,
                'parroquia' => 'Tuñame',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 388,
            ),
            470 => 
            array (
                'id' => 971,
                'parroquia' => 'La Quebrada',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 388,
            ),
            471 => 
            array (
                'id' => 972,
                'parroquia' => 'Juan Ignacio Montilla',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 389,
            ),
            472 => 
            array (
                'id' => 973,
                'parroquia' => 'La Beatriz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 389,
            ),
            473 => 
            array (
                'id' => 974,
                'parroquia' => 'La Puerta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 389,
            ),
            474 => 
            array (
                'id' => 975,
                'parroquia' => 'Mendoza del Valle de Momboy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 389,
            ),
            475 => 
            array (
                'id' => 976,
                'parroquia' => 'Mercedes Díaz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 389,
            ),
            476 => 
            array (
                'id' => 977,
                'parroquia' => 'San Luis',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 389,
            ),
            477 => 
            array (
                'id' => 978,
                'parroquia' => 'Caraballeda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            478 => 
            array (
                'id' => 979,
                'parroquia' => 'Carayaca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            479 => 
            array (
                'id' => 980,
                'parroquia' => 'Carlos Soublette',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            480 => 
            array (
                'id' => 981,
                'parroquia' => 'Caruao Chuspa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            481 => 
            array (
                'id' => 982,
                'parroquia' => 'Catia La Mar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            482 => 
            array (
                'id' => 983,
                'parroquia' => 'El Junko',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            483 => 
            array (
                'id' => 984,
                'parroquia' => 'La Guaira',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            484 => 
            array (
                'id' => 985,
                'parroquia' => 'Macuto',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            485 => 
            array (
                'id' => 986,
                'parroquia' => 'Maiquetía',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            486 => 
            array (
                'id' => 987,
                'parroquia' => 'Naiguatá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            487 => 
            array (
                'id' => 988,
                'parroquia' => 'Urimare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 390,
            ),
            488 => 
            array (
                'id' => 989,
                'parroquia' => 'Arístides Bastidas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 391,
            ),
            489 => 
            array (
                'id' => 990,
                'parroquia' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 392,
            ),
            490 => 
            array (
                'id' => 991,
                'parroquia' => 'Chivacoa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 407,
            ),
            491 => 
            array (
                'id' => 992,
                'parroquia' => 'Campo Elías',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 407,
            ),
            492 => 
            array (
                'id' => 993,
                'parroquia' => 'Cocorote',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 408,
            ),
            493 => 
            array (
                'id' => 994,
                'parroquia' => 'Independencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 409,
            ),
            494 => 
            array (
                'id' => 995,
                'parroquia' => 'José Antonio Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 410,
            ),
            495 => 
            array (
                'id' => 996,
                'parroquia' => 'La Trinidad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 411,
            ),
            496 => 
            array (
                'id' => 997,
                'parroquia' => 'Manuel Monge',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 412,
            ),
            497 => 
            array (
                'id' => 998,
                'parroquia' => 'Salóm',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 413,
            ),
            498 => 
            array (
                'id' => 999,
                'parroquia' => 'Temerla',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 413,
            ),
            499 => 
            array (
                'id' => 1000,
                'parroquia' => 'Nirgua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 413,
            ),
        ));
        \DB::table('parroquias')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'parroquia' => 'San Andrés',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 414,
            ),
            1 => 
            array (
                'id' => 1002,
                'parroquia' => 'Yaritagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 414,
            ),
            2 => 
            array (
                'id' => 1003,
                'parroquia' => 'San Javier',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 415,
            ),
            3 => 
            array (
                'id' => 1004,
                'parroquia' => 'Albarico',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 415,
            ),
            4 => 
            array (
                'id' => 1005,
                'parroquia' => 'San Felipe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 415,
            ),
            5 => 
            array (
                'id' => 1006,
                'parroquia' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 416,
            ),
            6 => 
            array (
                'id' => 1007,
                'parroquia' => 'Urachiche',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 417,
            ),
            7 => 
            array (
                'id' => 1008,
                'parroquia' => 'El Guayabo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 418,
            ),
            8 => 
            array (
                'id' => 1009,
                'parroquia' => 'Farriar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 418,
            ),
            9 => 
            array (
                'id' => 1010,
                'parroquia' => 'Isla de Toas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 441,
            ),
            10 => 
            array (
                'id' => 1011,
                'parroquia' => 'Monagas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 441,
            ),
            11 => 
            array (
                'id' => 1012,
                'parroquia' => 'San Timoteo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 442,
            ),
            12 => 
            array (
                'id' => 1013,
                'parroquia' => 'General Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 442,
            ),
            13 => 
            array (
                'id' => 1014,
                'parroquia' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 442,
            ),
            14 => 
            array (
                'id' => 1015,
                'parroquia' => 'Marcelino Briceño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 442,
            ),
            15 => 
            array (
                'id' => 1016,
                'parroquia' => 'Pueblo Nuevo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 442,
            ),
            16 => 
            array (
                'id' => 1017,
                'parroquia' => 'Manuel Guanipa Matos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 442,
            ),
            17 => 
            array (
                'id' => 1018,
                'parroquia' => 'Ambrosio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 443,
            ),
            18 => 
            array (
                'id' => 1019,
                'parroquia' => 'Carmen Herrera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 443,
            ),
            19 => 
            array (
                'id' => 1020,
                'parroquia' => 'La Rosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 443,
            ),
            20 => 
            array (
                'id' => 1021,
                'parroquia' => 'Germán Ríos Linares',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 443,
            ),
            21 => 
            array (
                'id' => 1022,
                'parroquia' => 'San Benito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 443,
            ),
            22 => 
            array (
                'id' => 1023,
                'parroquia' => 'Rómulo Betancourt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 443,
            ),
            23 => 
            array (
                'id' => 1024,
                'parroquia' => 'Jorge Hernández',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 443,
            ),
            24 => 
            array (
                'id' => 1025,
                'parroquia' => 'Punta Gorda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 443,
            ),
            25 => 
            array (
                'id' => 1026,
                'parroquia' => 'Arístides Calvani',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 443,
            ),
            26 => 
            array (
                'id' => 1027,
                'parroquia' => 'Encontrados',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 444,
            ),
            27 => 
            array (
                'id' => 1028,
                'parroquia' => 'Udón Pérez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 444,
            ),
            28 => 
            array (
                'id' => 1029,
                'parroquia' => 'Moralito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 445,
            ),
            29 => 
            array (
                'id' => 1030,
                'parroquia' => 'San Carlos del Zulia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 445,
            ),
            30 => 
            array (
                'id' => 1031,
                'parroquia' => 'Santa Cruz del Zulia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 445,
            ),
            31 => 
            array (
                'id' => 1032,
                'parroquia' => 'Santa Bárbara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 445,
            ),
            32 => 
            array (
                'id' => 1033,
                'parroquia' => 'Urribarrí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 445,
            ),
            33 => 
            array (
                'id' => 1034,
                'parroquia' => 'Carlos Quevedo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 446,
            ),
            34 => 
            array (
                'id' => 1035,
                'parroquia' => 'Francisco Javier Pulgar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 446,
            ),
            35 => 
            array (
                'id' => 1036,
                'parroquia' => 'Simón Rodríguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 446,
            ),
            36 => 
            array (
                'id' => 1037,
                'parroquia' => 'Guamo-Gavilanes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 446,
            ),
            37 => 
            array (
                'id' => 1038,
                'parroquia' => 'La Concepción',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 448,
            ),
            38 => 
            array (
                'id' => 1039,
                'parroquia' => 'San José',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 448,
            ),
            39 => 
            array (
                'id' => 1040,
                'parroquia' => 'Mariano Parra León',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 448,
            ),
            40 => 
            array (
                'id' => 1041,
                'parroquia' => 'José Ramón Yépez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 448,
            ),
            41 => 
            array (
                'id' => 1042,
                'parroquia' => 'Jesús María Semprún',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 449,
            ),
            42 => 
            array (
                'id' => 1043,
                'parroquia' => 'Barí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 449,
            ),
            43 => 
            array (
                'id' => 1044,
                'parroquia' => 'Concepción',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 450,
            ),
            44 => 
            array (
                'id' => 1045,
                'parroquia' => 'Andrés Bello',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 450,
            ),
            45 => 
            array (
                'id' => 1046,
                'parroquia' => 'Chiquinquirá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 450,
            ),
            46 => 
            array (
                'id' => 1047,
                'parroquia' => 'El Carmelo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 450,
            ),
            47 => 
            array (
                'id' => 1048,
                'parroquia' => 'Potreritos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 450,
            ),
            48 => 
            array (
                'id' => 1049,
                'parroquia' => 'Libertad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 451,
            ),
            49 => 
            array (
                'id' => 1050,
                'parroquia' => 'Alonso de Ojeda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 451,
            ),
            50 => 
            array (
                'id' => 1051,
                'parroquia' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 451,
            ),
            51 => 
            array (
                'id' => 1052,
                'parroquia' => 'Eleazar López Contreras',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 451,
            ),
            52 => 
            array (
                'id' => 1053,
                'parroquia' => 'Campo Lara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 451,
            ),
            53 => 
            array (
                'id' => 1054,
                'parroquia' => 'Bartolomé de las Casas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 452,
            ),
            54 => 
            array (
                'id' => 1055,
                'parroquia' => 'Libertad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 452,
            ),
            55 => 
            array (
                'id' => 1056,
                'parroquia' => 'Río Negro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 452,
            ),
            56 => 
            array (
                'id' => 1057,
                'parroquia' => 'San José de Perijá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 452,
            ),
            57 => 
            array (
                'id' => 1058,
                'parroquia' => 'San Rafael',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 453,
            ),
            58 => 
            array (
                'id' => 1059,
                'parroquia' => 'La Sierrita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 453,
            ),
            59 => 
            array (
                'id' => 1060,
                'parroquia' => 'Las Parcelas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 453,
            ),
            60 => 
            array (
                'id' => 1061,
                'parroquia' => 'Luis de Vicente',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 453,
            ),
            61 => 
            array (
                'id' => 1062,
                'parroquia' => 'Monseñor Marcos Sergio Godoy',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 453,
            ),
            62 => 
            array (
                'id' => 1063,
                'parroquia' => 'Ricaurte',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 453,
            ),
            63 => 
            array (
                'id' => 1064,
                'parroquia' => 'Tamare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 453,
            ),
            64 => 
            array (
                'id' => 1065,
                'parroquia' => 'Antonio Borjas Romero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            65 => 
            array (
                'id' => 1066,
                'parroquia' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            66 => 
            array (
                'id' => 1067,
                'parroquia' => 'Cacique Mara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            67 => 
            array (
                'id' => 1068,
                'parroquia' => 'Carracciolo Parra Pérez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            68 => 
            array (
                'id' => 1069,
                'parroquia' => 'Cecilio Acosta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            69 => 
            array (
                'id' => 1070,
                'parroquia' => 'Cristo de Aranza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            70 => 
            array (
                'id' => 1071,
                'parroquia' => 'Coquivacoa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            71 => 
            array (
                'id' => 1072,
                'parroquia' => 'Chiquinquirá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            72 => 
            array (
                'id' => 1073,
                'parroquia' => 'Francisco Eugenio Bustamante',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            73 => 
            array (
                'id' => 1074,
                'parroquia' => 'Idelfonzo Vásquez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            74 => 
            array (
                'id' => 1075,
                'parroquia' => 'Juana de Ávila',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            75 => 
            array (
                'id' => 1076,
                'parroquia' => 'Luis Hurtado Higuera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            76 => 
            array (
                'id' => 1077,
                'parroquia' => 'Manuel Dagnino',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            77 => 
            array (
                'id' => 1078,
                'parroquia' => 'Olegario Villalobos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            78 => 
            array (
                'id' => 1079,
                'parroquia' => 'Raúl Leoni',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            79 => 
            array (
                'id' => 1080,
                'parroquia' => 'Santa Lucía',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            80 => 
            array (
                'id' => 1081,
                'parroquia' => 'Venancio Pulgar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            81 => 
            array (
                'id' => 1082,
                'parroquia' => 'San Isidro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 454,
            ),
            82 => 
            array (
                'id' => 1083,
                'parroquia' => 'Altagracia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 455,
            ),
            83 => 
            array (
                'id' => 1084,
                'parroquia' => 'Faría',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 455,
            ),
            84 => 
            array (
                'id' => 1085,
                'parroquia' => 'Ana María Campos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 455,
            ),
            85 => 
            array (
                'id' => 1086,
                'parroquia' => 'San Antonio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 455,
            ),
            86 => 
            array (
                'id' => 1087,
                'parroquia' => 'San José',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 455,
            ),
            87 => 
            array (
                'id' => 1088,
                'parroquia' => 'Donaldo García',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 456,
            ),
            88 => 
            array (
                'id' => 1089,
                'parroquia' => 'El Rosario',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 456,
            ),
            89 => 
            array (
                'id' => 1090,
                'parroquia' => 'Sixto Zambrano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 456,
            ),
            90 => 
            array (
                'id' => 1091,
                'parroquia' => 'San Francisco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 457,
            ),
            91 => 
            array (
                'id' => 1092,
                'parroquia' => 'El Bajo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 457,
            ),
            92 => 
            array (
                'id' => 1093,
                'parroquia' => 'Domitila Flores',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 457,
            ),
            93 => 
            array (
                'id' => 1094,
                'parroquia' => 'Francisco Ochoa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 457,
            ),
            94 => 
            array (
                'id' => 1095,
                'parroquia' => 'Los Cortijos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 457,
            ),
            95 => 
            array (
                'id' => 1096,
                'parroquia' => 'Marcial Hernández',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 457,
            ),
            96 => 
            array (
                'id' => 1097,
                'parroquia' => 'Santa Rita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 458,
            ),
            97 => 
            array (
                'id' => 1098,
                'parroquia' => 'El Mene',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 458,
            ),
            98 => 
            array (
                'id' => 1099,
                'parroquia' => 'Pedro Lucas Urribarrí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 458,
            ),
            99 => 
            array (
                'id' => 1100,
                'parroquia' => 'José Cenobio Urribarrí',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 458,
            ),
            100 => 
            array (
                'id' => 1101,
                'parroquia' => 'Rafael Maria Baralt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 459,
            ),
            101 => 
            array (
                'id' => 1102,
                'parroquia' => 'Manuel Manrique',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 459,
            ),
            102 => 
            array (
                'id' => 1103,
                'parroquia' => 'Rafael Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 459,
            ),
            103 => 
            array (
                'id' => 1104,
                'parroquia' => 'Bobures',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 460,
            ),
            104 => 
            array (
                'id' => 1105,
                'parroquia' => 'Gibraltar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 460,
            ),
            105 => 
            array (
                'id' => 1106,
                'parroquia' => 'Heras',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 460,
            ),
            106 => 
            array (
                'id' => 1107,
                'parroquia' => 'Monseñor Arturo Álvarez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 460,
            ),
            107 => 
            array (
                'id' => 1108,
                'parroquia' => 'Rómulo Gallegos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 460,
            ),
            108 => 
            array (
                'id' => 1109,
                'parroquia' => 'El Batey',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 460,
            ),
            109 => 
            array (
                'id' => 1110,
                'parroquia' => 'Rafael Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 461,
            ),
            110 => 
            array (
                'id' => 1111,
                'parroquia' => 'La Victoria',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 461,
            ),
            111 => 
            array (
                'id' => 1112,
                'parroquia' => 'Raúl Cuenca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 461,
            ),
            112 => 
            array (
                'id' => 1113,
                'parroquia' => 'Sinamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 447,
            ),
            113 => 
            array (
                'id' => 1114,
                'parroquia' => 'Alta Guajira',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 447,
            ),
            114 => 
            array (
                'id' => 1115,
                'parroquia' => 'Elías Sánchez Rubio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 447,
            ),
            115 => 
            array (
                'id' => 1116,
                'parroquia' => 'Guajira',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 447,
            ),
            116 => 
            array (
                'id' => 1117,
                'parroquia' => 'Altagracia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            117 => 
            array (
                'id' => 1118,
                'parroquia' => 'Antímano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            118 => 
            array (
                'id' => 1119,
                'parroquia' => 'Caricuao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            119 => 
            array (
                'id' => 1120,
                'parroquia' => 'Catedral',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            120 => 
            array (
                'id' => 1121,
                'parroquia' => 'Coche',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            121 => 
            array (
                'id' => 1122,
                'parroquia' => 'El Junquito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            122 => 
            array (
                'id' => 1123,
                'parroquia' => 'El Paraíso',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            123 => 
            array (
                'id' => 1124,
                'parroquia' => 'El Recreo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            124 => 
            array (
                'id' => 1125,
                'parroquia' => 'El Valle',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            125 => 
            array (
                'id' => 1126,
                'parroquia' => 'La Candelaria',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            126 => 
            array (
                'id' => 1127,
                'parroquia' => 'La Pastora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            127 => 
            array (
                'id' => 1128,
                'parroquia' => 'La Vega',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            128 => 
            array (
                'id' => 1129,
                'parroquia' => 'Macarao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            129 => 
            array (
                'id' => 1130,
                'parroquia' => 'San Agustín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            130 => 
            array (
                'id' => 1131,
                'parroquia' => 'San Bernardino',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            131 => 
            array (
                'id' => 1132,
                'parroquia' => 'San José',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            132 => 
            array (
                'id' => 1133,
                'parroquia' => 'San Juan',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            133 => 
            array (
                'id' => 1134,
                'parroquia' => 'San Pedro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            134 => 
            array (
                'id' => 1135,
                'parroquia' => 'Santa Rosalía',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            135 => 
            array (
                'id' => 1136,
                'parroquia' => 'Santa Teresa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            136 => 
            array (
                'id' => 1137,
            'parroquia' => 'Sucre (Catia)',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
            137 => 
            array (
                'id' => 1138,
                'parroquia' => '23 de enero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_municipio' => 462,
            ),
        ));
        
        
    }
}