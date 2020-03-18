<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class publicationsModel extends Model
{
    //Tabla de la base de datos
    protected $table = 'publication';
    //Llave primaria de la base de datos
    protected $primaryKey = 'id';
    //Campos de la tabla en la base de datos
    protected $fillable = ['id','title','description','pathImagePreview','idCategory','path','created_at','updated_at','release_date'];
}
