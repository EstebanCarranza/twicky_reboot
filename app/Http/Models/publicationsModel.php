<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class publicationsModel extends Model
{
    //
    public $id;
    public $title;
    public $description;
    public $pathImagePreview;
    public $idCategory;
    public $path;
    public $created_at;
    public $updated_at;

    public function __construct(){}
}
