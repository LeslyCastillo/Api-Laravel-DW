<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "producto";
    protected $atributes = [
        'id_producto',
        'codigo_producto',
        'descripcion',
        'precio'

    ];

    protected $primaryKey = "id_producto";

    //definimos la estructura de la tabla producto
}
