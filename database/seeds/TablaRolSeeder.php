<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;


class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [
            'administrador',
            'editor',
            'supervisor'
        ]; //hacemos el array con los distintos roles
        foreach($rols as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,  //Insertamos los roles en la tabla de la base de datos
                'created_at' => Carbon::now()->format('Y-m-d H:i:s') //Creamos la funcion de formato ahora
                ]);
                
                

        }
    }
}