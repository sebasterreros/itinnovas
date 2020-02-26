<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'rol',
            'permiso',
            'usuario',
            'usuario_rol'
        ]); //truncamos las tablas 
        $this->call(TablaRolSeeder::class); //Llama a la clase de TablaRolSeeder y ejecuta el metodo run
        $this->call(TablaPermisoSeeder::class);// Llama a la clase de TablaPermisoSeeder y ejecuta el metodo run

    }

    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); //seteamos las claves foraneas en 0 para que no tenga problema
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate(); 
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Se vuelve a habilitar las llaves foraneas en la base de datos
    }
}
