<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carritocompras extends Model
{
    protected $table = 'carritocompras';
    protected $fillable = ['descripcion','id_categoria', 'imagen', 'nombre', 'precio'];
}
