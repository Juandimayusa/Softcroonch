<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\proveedores;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        proveedores::insert([
            [ 
                'Nombre' => 'Postobon',
                'Email' => 'Postobon@hotmail.com',
                'Nit' => '23-41479',
                'Telefono' => '3053676453',
                'Direccion' => 'calle 21 n 34'

            ],
            [ 
                'Nombre' => 'Coca-Cola',
                'Email' => 'Cocacola@hotmail.com',
                'Nit' => '23-414500',
                'Telefono' => '3118372825',
                'Direccion' => 'calle 12 n 43'

            ]
        ]);
    }
}
