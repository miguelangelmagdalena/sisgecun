<?php

use Illuminate\Database\Seeder;

class MunicipiosTableCustomizationsSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('municipios')->delete();
        
        \DB::table('municipios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'municipio' => 'Alto Orinoco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'municipio' => 'Atabapo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'municipio' => 'Atures',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'municipio' => 'Autana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'municipio' => 'Manapiare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'municipio' => 'Maroa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'municipio' => 'Río Negro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'municipio' => 'Anaco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            8 => 
            array (
                'id' => 9,
                'municipio' => 'Aragua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            9 => 
            array (
                'id' => 10,
                'municipio' => 'Manuel Ezequiel Bruzual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            10 => 
            array (
                'id' => 11,
                'municipio' => 'Diego Bautista Urbaneja',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            11 => 
            array (
                'id' => 12,
                'municipio' => 'Fernando Peñalver',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            12 => 
            array (
                'id' => 13,
                'municipio' => 'Francisco Del Carmen Carvajal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'municipio' => 'General Sir Arthur McGregor',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'municipio' => 'Guanta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            15 => 
            array (
                'id' => 16,
                'municipio' => 'Independencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            16 => 
            array (
                'id' => 17,
                'municipio' => 'José Gregorio Monagas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'municipio' => 'Juan Antonio Sotillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'municipio' => 'Juan Manuel Cajigal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            19 => 
            array (
                'id' => 20,
                'municipio' => 'Libertad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            20 => 
            array (
                'id' => 21,
                'municipio' => 'Francisco de Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            21 => 
            array (
                'id' => 22,
                'municipio' => 'Pedro María Freites',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            22 => 
            array (
                'id' => 23,
                'municipio' => 'Píritu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'municipio' => 'San José de Guanipa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            24 => 
            array (
                'id' => 25,
                'municipio' => 'San Juan de Capistrano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            25 => 
            array (
                'id' => 26,
                'municipio' => 'Santa Ana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            26 => 
            array (
                'id' => 27,
                'municipio' => 'Simón Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'municipio' => 'Simón Rodríguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 2,
            ),
            28 => 
            array (
                'id' => 29,
                'municipio' => 'Achaguas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 3,
            ),
            29 => 
            array (
                'id' => 30,
                'municipio' => 'Biruaca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 3,
            ),
            30 => 
            array (
                'id' => 31,
                'municipio' => 'Muñóz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 3,
            ),
            31 => 
            array (
                'id' => 32,
                'municipio' => 'Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 3,
            ),
            32 => 
            array (
                'id' => 33,
                'municipio' => 'Pedro Camejo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 3,
            ),
            33 => 
            array (
                'id' => 34,
                'municipio' => 'Rómulo Gallegos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 3,
            ),
            34 => 
            array (
                'id' => 35,
                'municipio' => 'San Fernando',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 3,
            ),
            35 => 
            array (
                'id' => 36,
                'municipio' => 'Atanasio Girardot',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            36 => 
            array (
                'id' => 37,
                'municipio' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            37 => 
            array (
                'id' => 38,
                'municipio' => 'Camatagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            38 => 
            array (
                'id' => 39,
                'municipio' => 'Francisco Linares Alcántara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            39 => 
            array (
                'id' => 40,
                'municipio' => 'José Ángel Lamas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            40 => 
            array (
                'id' => 41,
                'municipio' => 'José Félix Ribas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            41 => 
            array (
                'id' => 42,
                'municipio' => 'José Rafael Revenga',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            42 => 
            array (
                'id' => 43,
                'municipio' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            43 => 
            array (
                'id' => 44,
                'municipio' => 'Mario Briceño Iragorry',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            44 => 
            array (
                'id' => 45,
                'municipio' => 'Ocumare de la Costa de Oro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            45 => 
            array (
                'id' => 46,
                'municipio' => 'San Casimiro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            46 => 
            array (
                'id' => 47,
                'municipio' => 'San Sebastián',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            47 => 
            array (
                'id' => 48,
                'municipio' => 'Santiago Mariño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            48 => 
            array (
                'id' => 49,
                'municipio' => 'Santos Michelena',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            49 => 
            array (
                'id' => 50,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            50 => 
            array (
                'id' => 51,
                'municipio' => 'Tovar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            51 => 
            array (
                'id' => 52,
                'municipio' => 'Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            52 => 
            array (
                'id' => 53,
                'municipio' => 'Zamora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 4,
            ),
            53 => 
            array (
                'id' => 54,
                'municipio' => 'Alberto Arvelo Torrealba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            54 => 
            array (
                'id' => 55,
                'municipio' => 'Andrés Eloy Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            55 => 
            array (
                'id' => 56,
                'municipio' => 'Antonio José de Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            56 => 
            array (
                'id' => 57,
                'municipio' => 'Arismendi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            57 => 
            array (
                'id' => 58,
                'municipio' => 'Barinas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            58 => 
            array (
                'id' => 59,
                'municipio' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            59 => 
            array (
                'id' => 60,
                'municipio' => 'Cruz Paredes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            60 => 
            array (
                'id' => 61,
                'municipio' => 'Ezequiel Zamora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            61 => 
            array (
                'id' => 62,
                'municipio' => 'Obispos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            62 => 
            array (
                'id' => 63,
                'municipio' => 'Pedraza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            63 => 
            array (
                'id' => 64,
                'municipio' => 'Rojas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            64 => 
            array (
                'id' => 65,
                'municipio' => 'Sosa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 5,
            ),
            65 => 
            array (
                'id' => 66,
                'municipio' => 'Caroní',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            66 => 
            array (
                'id' => 67,
                'municipio' => 'Cedeño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            67 => 
            array (
                'id' => 68,
                'municipio' => 'El Callao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            68 => 
            array (
                'id' => 69,
                'municipio' => 'Gran Sabana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            69 => 
            array (
                'id' => 70,
                'municipio' => 'Heres',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            70 => 
            array (
                'id' => 71,
                'municipio' => 'Piar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            71 => 
            array (
                'id' => 72,
            'municipio' => 'Angostura (Raúl Leoni)',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            72 => 
            array (
                'id' => 73,
                'municipio' => 'Roscio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            73 => 
            array (
                'id' => 74,
                'municipio' => 'Sifontes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            74 => 
            array (
                'id' => 75,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            75 => 
            array (
                'id' => 76,
                'municipio' => 'Padre Pedro Chien',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 6,
            ),
            76 => 
            array (
                'id' => 77,
                'municipio' => 'Bejuma',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            77 => 
            array (
                'id' => 78,
                'municipio' => 'Carlos Arvelo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            78 => 
            array (
                'id' => 79,
                'municipio' => 'Diego Ibarra',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            79 => 
            array (
                'id' => 80,
                'municipio' => 'Guacara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            80 => 
            array (
                'id' => 81,
                'municipio' => 'Juan José Mora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            81 => 
            array (
                'id' => 82,
                'municipio' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            82 => 
            array (
                'id' => 83,
                'municipio' => 'Los Guayos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            83 => 
            array (
                'id' => 84,
                'municipio' => 'Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            84 => 
            array (
                'id' => 85,
                'municipio' => 'Montalbán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            85 => 
            array (
                'id' => 86,
                'municipio' => 'Naguanagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            86 => 
            array (
                'id' => 87,
                'municipio' => 'Puerto Cabello',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            87 => 
            array (
                'id' => 88,
                'municipio' => 'San Diego',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            88 => 
            array (
                'id' => 89,
                'municipio' => 'San Joaquín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            89 => 
            array (
                'id' => 90,
                'municipio' => 'Valencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 7,
            ),
            90 => 
            array (
                'id' => 91,
                'municipio' => 'Anzoátegui',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 8,
            ),
            91 => 
            array (
                'id' => 92,
                'municipio' => 'Tinaquillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 8,
            ),
            92 => 
            array (
                'id' => 93,
                'municipio' => 'Girardot',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 8,
            ),
            93 => 
            array (
                'id' => 94,
                'municipio' => 'Lima Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 8,
            ),
            94 => 
            array (
                'id' => 95,
                'municipio' => 'Pao de San Juan Bautista',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 8,
            ),
            95 => 
            array (
                'id' => 96,
                'municipio' => 'Ricaurte',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 8,
            ),
            96 => 
            array (
                'id' => 97,
                'municipio' => 'Rómulo Gallegos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 8,
            ),
            97 => 
            array (
                'id' => 98,
                'municipio' => 'San Carlos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 8,
            ),
            98 => 
            array (
                'id' => 99,
                'municipio' => 'Tinaco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 8,
            ),
            99 => 
            array (
                'id' => 100,
                'municipio' => 'Antonio Díaz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 9,
            ),
            100 => 
            array (
                'id' => 101,
                'municipio' => 'Casacoima',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 9,
            ),
            101 => 
            array (
                'id' => 102,
                'municipio' => 'Pedernales',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 9,
            ),
            102 => 
            array (
                'id' => 103,
                'municipio' => 'Tucupita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 9,
            ),
            103 => 
            array (
                'id' => 104,
                'municipio' => 'Acosta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            104 => 
            array (
                'id' => 105,
                'municipio' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            105 => 
            array (
                'id' => 106,
                'municipio' => 'Buchivacoa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            106 => 
            array (
                'id' => 107,
                'municipio' => 'Cacique Manaure',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            107 => 
            array (
                'id' => 108,
                'municipio' => 'Carirubana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            108 => 
            array (
                'id' => 109,
                'municipio' => 'Colina',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            109 => 
            array (
                'id' => 110,
                'municipio' => 'Dabajuro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            110 => 
            array (
                'id' => 111,
                'municipio' => 'Democracia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            111 => 
            array (
                'id' => 112,
                'municipio' => 'Falcón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            112 => 
            array (
                'id' => 113,
                'municipio' => 'Federación',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            113 => 
            array (
                'id' => 114,
                'municipio' => 'Jacura',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            114 => 
            array (
                'id' => 115,
                'municipio' => 'José Laurencio Silva',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            115 => 
            array (
                'id' => 116,
                'municipio' => 'Los Taques',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            116 => 
            array (
                'id' => 117,
                'municipio' => 'Mauroa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            117 => 
            array (
                'id' => 118,
                'municipio' => 'Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            118 => 
            array (
                'id' => 119,
                'municipio' => 'Monseñor Iturriza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            119 => 
            array (
                'id' => 120,
                'municipio' => 'Palmasola',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            120 => 
            array (
                'id' => 121,
                'municipio' => 'Petit',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            121 => 
            array (
                'id' => 122,
                'municipio' => 'Píritu',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            122 => 
            array (
                'id' => 123,
                'municipio' => 'San Francisco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            123 => 
            array (
                'id' => 124,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            124 => 
            array (
                'id' => 125,
                'municipio' => 'Tocópero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            125 => 
            array (
                'id' => 126,
                'municipio' => 'Unión',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            126 => 
            array (
                'id' => 127,
                'municipio' => 'Urumaco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            127 => 
            array (
                'id' => 128,
                'municipio' => 'Zamora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 10,
            ),
            128 => 
            array (
                'id' => 129,
                'municipio' => 'Camaguán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            129 => 
            array (
                'id' => 130,
                'municipio' => 'Chaguaramas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            130 => 
            array (
                'id' => 131,
                'municipio' => 'El Socorro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            131 => 
            array (
                'id' => 132,
                'municipio' => 'José Félix Ribas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            132 => 
            array (
                'id' => 133,
                'municipio' => 'José Tadeo Monagas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            133 => 
            array (
                'id' => 134,
                'municipio' => 'Juan Germán Roscio',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            134 => 
            array (
                'id' => 135,
                'municipio' => 'Julián Mellado',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            135 => 
            array (
                'id' => 136,
                'municipio' => 'Las Mercedes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            136 => 
            array (
                'id' => 137,
                'municipio' => 'Leonardo Infante',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            137 => 
            array (
                'id' => 138,
                'municipio' => 'Pedro Zaraza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            138 => 
            array (
                'id' => 139,
                'municipio' => 'Ortíz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            139 => 
            array (
                'id' => 140,
                'municipio' => 'San Gerónimo de Guayabal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            140 => 
            array (
                'id' => 141,
                'municipio' => 'San José de Guaribe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            141 => 
            array (
                'id' => 142,
                'municipio' => 'Santa María de Ipire',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            142 => 
            array (
                'id' => 143,
                'municipio' => 'Sebastián Francisco de Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 11,
            ),
            143 => 
            array (
                'id' => 144,
                'municipio' => 'Andrés Eloy Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 12,
            ),
            144 => 
            array (
                'id' => 145,
                'municipio' => 'Crespo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 12,
            ),
            145 => 
            array (
                'id' => 146,
                'municipio' => 'Iribarren',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 12,
            ),
            146 => 
            array (
                'id' => 147,
                'municipio' => 'Jiménez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 12,
            ),
            147 => 
            array (
                'id' => 148,
                'municipio' => 'Morán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 12,
            ),
            148 => 
            array (
                'id' => 149,
                'municipio' => 'Palavecino',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 12,
            ),
            149 => 
            array (
                'id' => 150,
                'municipio' => 'Simón Planas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 12,
            ),
            150 => 
            array (
                'id' => 151,
                'municipio' => 'Torres',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 12,
            ),
            151 => 
            array (
                'id' => 152,
                'municipio' => 'Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 12,
            ),
            152 => 
            array (
                'id' => 179,
                'municipio' => 'Alberto Adriani',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            153 => 
            array (
                'id' => 180,
                'municipio' => 'Andrés Bello',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            154 => 
            array (
                'id' => 181,
                'municipio' => 'Antonio Pinto Salinas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            155 => 
            array (
                'id' => 182,
                'municipio' => 'Aricagua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            156 => 
            array (
                'id' => 183,
                'municipio' => 'Arzobispo Chacón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            157 => 
            array (
                'id' => 184,
                'municipio' => 'Campo Elías',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            158 => 
            array (
                'id' => 185,
                'municipio' => 'Caracciolo Parra Olmedo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            159 => 
            array (
                'id' => 186,
                'municipio' => 'Cardenal Quintero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            160 => 
            array (
                'id' => 187,
                'municipio' => 'Guaraque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            161 => 
            array (
                'id' => 188,
                'municipio' => 'Julio César Salas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            162 => 
            array (
                'id' => 189,
                'municipio' => 'Justo Briceño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            163 => 
            array (
                'id' => 190,
                'municipio' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            164 => 
            array (
                'id' => 191,
                'municipio' => 'Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            165 => 
            array (
                'id' => 192,
                'municipio' => 'Obispo Ramos de Lora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            166 => 
            array (
                'id' => 193,
                'municipio' => 'Padre Noguera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            167 => 
            array (
                'id' => 194,
                'municipio' => 'Pueblo Llano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            168 => 
            array (
                'id' => 195,
                'municipio' => 'Rangel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            169 => 
            array (
                'id' => 196,
                'municipio' => 'Rivas Dávila',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            170 => 
            array (
                'id' => 197,
                'municipio' => 'Santos Marquina',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            171 => 
            array (
                'id' => 198,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            172 => 
            array (
                'id' => 199,
                'municipio' => 'Tovar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            173 => 
            array (
                'id' => 200,
                'municipio' => 'Tulio Febres Cordero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            174 => 
            array (
                'id' => 201,
                'municipio' => 'Zea',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 13,
            ),
            175 => 
            array (
                'id' => 223,
                'municipio' => 'Acevedo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            176 => 
            array (
                'id' => 224,
                'municipio' => 'Andrés Bello',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            177 => 
            array (
                'id' => 225,
                'municipio' => 'Baruta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            178 => 
            array (
                'id' => 226,
                'municipio' => 'Brión',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            179 => 
            array (
                'id' => 227,
                'municipio' => 'Buroz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            180 => 
            array (
                'id' => 228,
                'municipio' => 'Carrizal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            181 => 
            array (
                'id' => 229,
                'municipio' => 'Chacao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            182 => 
            array (
                'id' => 230,
                'municipio' => 'Cristóbal Rojas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            183 => 
            array (
                'id' => 231,
                'municipio' => 'El Hatillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            184 => 
            array (
                'id' => 232,
                'municipio' => 'Guaicaipuro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            185 => 
            array (
                'id' => 233,
                'municipio' => 'Independencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            186 => 
            array (
                'id' => 234,
                'municipio' => 'Lander',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            187 => 
            array (
                'id' => 235,
                'municipio' => 'Los Salias',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            188 => 
            array (
                'id' => 236,
                'municipio' => 'Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            189 => 
            array (
                'id' => 237,
                'municipio' => 'Paz Castillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            190 => 
            array (
                'id' => 238,
                'municipio' => 'Pedro Gual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            191 => 
            array (
                'id' => 239,
                'municipio' => 'Plaza',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            192 => 
            array (
                'id' => 240,
                'municipio' => 'Simón Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            193 => 
            array (
                'id' => 241,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            194 => 
            array (
                'id' => 242,
                'municipio' => 'Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            195 => 
            array (
                'id' => 243,
                'municipio' => 'Zamora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 14,
            ),
            196 => 
            array (
                'id' => 258,
                'municipio' => 'Acosta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            197 => 
            array (
                'id' => 259,
                'municipio' => 'Aguasay',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            198 => 
            array (
                'id' => 260,
                'municipio' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            199 => 
            array (
                'id' => 261,
                'municipio' => 'Caripe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            200 => 
            array (
                'id' => 262,
                'municipio' => 'Cedeño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            201 => 
            array (
                'id' => 263,
                'municipio' => 'Ezequiel Zamora',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            202 => 
            array (
                'id' => 264,
                'municipio' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            203 => 
            array (
                'id' => 265,
                'municipio' => 'Maturín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            204 => 
            array (
                'id' => 266,
                'municipio' => 'Piar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            205 => 
            array (
                'id' => 267,
                'municipio' => 'Punceres',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            206 => 
            array (
                'id' => 268,
                'municipio' => 'Santa Bárbara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            207 => 
            array (
                'id' => 269,
                'municipio' => 'Sotillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            208 => 
            array (
                'id' => 270,
                'municipio' => 'Uracoa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 15,
            ),
            209 => 
            array (
                'id' => 271,
                'municipio' => 'Antolín del Campo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            210 => 
            array (
                'id' => 272,
                'municipio' => 'Arismendi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            211 => 
            array (
                'id' => 273,
                'municipio' => 'García',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            212 => 
            array (
                'id' => 274,
                'municipio' => 'Gómez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            213 => 
            array (
                'id' => 275,
                'municipio' => 'Maneiro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            214 => 
            array (
                'id' => 276,
                'municipio' => 'Marcano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            215 => 
            array (
                'id' => 277,
                'municipio' => 'Mariño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            216 => 
            array (
                'id' => 278,
                'municipio' => 'Península de Macanao',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            217 => 
            array (
                'id' => 279,
                'municipio' => 'Tubores',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            218 => 
            array (
                'id' => 280,
                'municipio' => 'Villalba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            219 => 
            array (
                'id' => 281,
                'municipio' => 'Díaz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 16,
            ),
            220 => 
            array (
                'id' => 282,
                'municipio' => 'Agua Blanca',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            221 => 
            array (
                'id' => 283,
                'municipio' => 'Araure',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            222 => 
            array (
                'id' => 284,
                'municipio' => 'Esteller',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            223 => 
            array (
                'id' => 285,
                'municipio' => 'Guanare',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            224 => 
            array (
                'id' => 286,
                'municipio' => 'Guanarito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            225 => 
            array (
                'id' => 287,
                'municipio' => 'Monseñor José Vicente de Unda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            226 => 
            array (
                'id' => 288,
                'municipio' => 'Ospino',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            227 => 
            array (
                'id' => 289,
                'municipio' => 'Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            228 => 
            array (
                'id' => 290,
                'municipio' => 'Papelón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            229 => 
            array (
                'id' => 291,
                'municipio' => 'San Genaro de Boconoíto',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            230 => 
            array (
                'id' => 292,
                'municipio' => 'San Rafael de Onoto',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            231 => 
            array (
                'id' => 293,
                'municipio' => 'Santa Rosalía',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            232 => 
            array (
                'id' => 294,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            233 => 
            array (
                'id' => 295,
                'municipio' => 'Turén',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 17,
            ),
            234 => 
            array (
                'id' => 296,
                'municipio' => 'Andrés Eloy Blanco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            235 => 
            array (
                'id' => 297,
                'municipio' => 'Andrés Mata',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            236 => 
            array (
                'id' => 298,
                'municipio' => 'Arismendi',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            237 => 
            array (
                'id' => 299,
                'municipio' => 'Benítez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            238 => 
            array (
                'id' => 300,
                'municipio' => 'Bermúdez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            239 => 
            array (
                'id' => 301,
                'municipio' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            240 => 
            array (
                'id' => 302,
                'municipio' => 'Cajigal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            241 => 
            array (
                'id' => 303,
                'municipio' => 'Cruz Salmerón Acosta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            242 => 
            array (
                'id' => 304,
                'municipio' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            243 => 
            array (
                'id' => 305,
                'municipio' => 'Mariño',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            244 => 
            array (
                'id' => 306,
                'municipio' => 'Mejía',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            245 => 
            array (
                'id' => 307,
                'municipio' => 'Montes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            246 => 
            array (
                'id' => 308,
                'municipio' => 'Ribero',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            247 => 
            array (
                'id' => 309,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            248 => 
            array (
                'id' => 310,
                'municipio' => 'Valdéz',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 18,
            ),
            249 => 
            array (
                'id' => 341,
                'municipio' => 'Andrés Bello',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            250 => 
            array (
                'id' => 342,
                'municipio' => 'Antonio Rómulo Costa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            251 => 
            array (
                'id' => 343,
                'municipio' => 'Ayacucho',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            252 => 
            array (
                'id' => 344,
                'municipio' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            253 => 
            array (
                'id' => 345,
                'municipio' => 'Cárdenas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            254 => 
            array (
                'id' => 346,
                'municipio' => 'Córdoba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            255 => 
            array (
                'id' => 347,
                'municipio' => 'Fernández Feo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            256 => 
            array (
                'id' => 348,
                'municipio' => 'Francisco de Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            257 => 
            array (
                'id' => 349,
                'municipio' => 'García de Hevia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            258 => 
            array (
                'id' => 350,
                'municipio' => 'Guásimos',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            259 => 
            array (
                'id' => 351,
                'municipio' => 'Independencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            260 => 
            array (
                'id' => 352,
                'municipio' => 'Jáuregui',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            261 => 
            array (
                'id' => 353,
                'municipio' => 'José María Vargas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            262 => 
            array (
                'id' => 354,
                'municipio' => 'Junín',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            263 => 
            array (
                'id' => 355,
                'municipio' => 'Libertad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            264 => 
            array (
                'id' => 356,
                'municipio' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            265 => 
            array (
                'id' => 357,
                'municipio' => 'Lobatera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            266 => 
            array (
                'id' => 358,
                'municipio' => 'Michelena',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            267 => 
            array (
                'id' => 359,
                'municipio' => 'Panamericano',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            268 => 
            array (
                'id' => 360,
                'municipio' => 'Pedro María Ureña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            269 => 
            array (
                'id' => 361,
                'municipio' => 'Rafael Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            270 => 
            array (
                'id' => 362,
                'municipio' => 'Samuel Darío Maldonado',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            271 => 
            array (
                'id' => 363,
                'municipio' => 'San Cristóbal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            272 => 
            array (
                'id' => 364,
                'municipio' => 'Seboruco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            273 => 
            array (
                'id' => 365,
                'municipio' => 'Simón Rodríguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            274 => 
            array (
                'id' => 366,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            275 => 
            array (
                'id' => 367,
                'municipio' => 'Torbes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            276 => 
            array (
                'id' => 368,
                'municipio' => 'Uribante',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            277 => 
            array (
                'id' => 369,
                'municipio' => 'San Judas Tadeo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 19,
            ),
            278 => 
            array (
                'id' => 370,
                'municipio' => 'Andrés Bello',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            279 => 
            array (
                'id' => 371,
                'municipio' => 'Boconó',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            280 => 
            array (
                'id' => 372,
                'municipio' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            281 => 
            array (
                'id' => 373,
                'municipio' => 'Candelaria',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            282 => 
            array (
                'id' => 374,
                'municipio' => 'Carache',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            283 => 
            array (
                'id' => 375,
                'municipio' => 'Escuque',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            284 => 
            array (
                'id' => 376,
                'municipio' => 'José Felipe Márquez Cañizalez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            285 => 
            array (
                'id' => 377,
                'municipio' => 'Juan Vicente Campos Elías',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            286 => 
            array (
                'id' => 378,
                'municipio' => 'La Ceiba',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            287 => 
            array (
                'id' => 379,
                'municipio' => 'Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            288 => 
            array (
                'id' => 380,
                'municipio' => 'Monte Carmelo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            289 => 
            array (
                'id' => 381,
                'municipio' => 'Motatán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            290 => 
            array (
                'id' => 382,
                'municipio' => 'Pampán',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            291 => 
            array (
                'id' => 383,
                'municipio' => 'Pampanito',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            292 => 
            array (
                'id' => 384,
                'municipio' => 'Rafael Rangel',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            293 => 
            array (
                'id' => 385,
                'municipio' => 'San Rafael de Carvajal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            294 => 
            array (
                'id' => 386,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            295 => 
            array (
                'id' => 387,
                'municipio' => 'Trujillo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            296 => 
            array (
                'id' => 388,
                'municipio' => 'Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            297 => 
            array (
                'id' => 389,
                'municipio' => 'Valera',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 20,
            ),
            298 => 
            array (
                'id' => 390,
                'municipio' => 'Vargas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 21,
            ),
            299 => 
            array (
                'id' => 391,
                'municipio' => 'Arístides Bastidas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            300 => 
            array (
                'id' => 392,
                'municipio' => 'Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            301 => 
            array (
                'id' => 407,
                'municipio' => 'Bruzual',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            302 => 
            array (
                'id' => 408,
                'municipio' => 'Cocorote',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            303 => 
            array (
                'id' => 409,
                'municipio' => 'Independencia',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            304 => 
            array (
                'id' => 410,
                'municipio' => 'José Antonio Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            305 => 
            array (
                'id' => 411,
                'municipio' => 'La Trinidad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            306 => 
            array (
                'id' => 412,
                'municipio' => 'Manuel Monge',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            307 => 
            array (
                'id' => 413,
                'municipio' => 'Nirgua',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            308 => 
            array (
                'id' => 414,
                'municipio' => 'Peña',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            309 => 
            array (
                'id' => 415,
                'municipio' => 'San Felipe',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            310 => 
            array (
                'id' => 416,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            311 => 
            array (
                'id' => 417,
                'municipio' => 'Urachiche',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            312 => 
            array (
                'id' => 418,
                'municipio' => 'José Joaquín Veroes',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 22,
            ),
            313 => 
            array (
                'id' => 441,
                'municipio' => 'Almirante Padilla',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            314 => 
            array (
                'id' => 442,
                'municipio' => 'Baralt',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            315 => 
            array (
                'id' => 443,
                'municipio' => 'Cabimas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            316 => 
            array (
                'id' => 444,
                'municipio' => 'Catatumbo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            317 => 
            array (
                'id' => 445,
                'municipio' => 'Colón',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            318 => 
            array (
                'id' => 446,
                'municipio' => 'Francisco Javier Pulgar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            319 => 
            array (
                'id' => 447,
                'municipio' => 'Páez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            320 => 
            array (
                'id' => 448,
                'municipio' => 'Jesús Enrique Losada',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            321 => 
            array (
                'id' => 449,
                'municipio' => 'Jesús María Semprún',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            322 => 
            array (
                'id' => 450,
                'municipio' => 'La Cañada de Urdaneta',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            323 => 
            array (
                'id' => 451,
                'municipio' => 'Lagunillas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            324 => 
            array (
                'id' => 452,
                'municipio' => 'Machiques de Perijá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            325 => 
            array (
                'id' => 453,
                'municipio' => 'Mara',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            326 => 
            array (
                'id' => 454,
                'municipio' => 'Maracaibo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            327 => 
            array (
                'id' => 455,
                'municipio' => 'Miranda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            328 => 
            array (
                'id' => 456,
                'municipio' => 'Rosario de Perijá',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            329 => 
            array (
                'id' => 457,
                'municipio' => 'San Francisco',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            330 => 
            array (
                'id' => 458,
                'municipio' => 'Santa Rita',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            331 => 
            array (
                'id' => 459,
                'municipio' => 'Simón Bolívar',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            332 => 
            array (
                'id' => 460,
                'municipio' => 'Sucre',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            333 => 
            array (
                'id' => 461,
                'municipio' => 'Valmore Rodríguez',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 23,
            ),
            334 => 
            array (
                'id' => 462,
                'municipio' => 'Libertador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'id_estado' => 24,
            ),
        ));
        
        
    }
}