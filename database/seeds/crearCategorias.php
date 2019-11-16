<?php

use Illuminate\Database\Seeder;

class crearCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ejecutar seed
        //php artisan db:seed --class=crearCategorias
          $categorias = array(
            array('title' =>   'IND', 'description' => 'Individual'),
            array('title' =>   'COL', 'description' => 'Colaborativo'),
          );
          DB::table('category')->insert($categorias);
    }
}
