<?php

use Illuminate\Database\Seeder;

class crearPublicaciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //php artisan db:seed --class=crearPublicaciones
          $publicaciones = array(
            array('title' => 'a','description' => '','pathImagePreview' => '','idCategory' => '1'),
            array('title' => 'b','description' => '','pathImagePreview' => '','idCategory' => '1'),
            array('title' => 'c','description' => '','pathImagePreview' => '','idCategory' => '1'),
            array('title' => 'd','description' => '','pathImagePreview' => '','idCategory' => '1'),
            array('title' => 'e','description' => '','pathImagePreview' => '','idCategory' => '1'),
            array('title' => 'f','description' => '','pathImagePreview' => '','idCategory' => '1'),
          );
          DB::table('publication')->insert($publicaciones);

            
    }
}
