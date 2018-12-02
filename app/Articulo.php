<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['descripcion','id_categoria', 'imagen', 'nombre', 'precio'];

}
