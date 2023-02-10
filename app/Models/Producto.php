<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'nombre_tabla';

    protected $primaryKey="otro_nombre";
    public $incrementing=false;
    protected $keyType="string";

    public $timestamps = false;//Por defecto true

    const CREATED_AT = 'fecha_creacion';  //por defecto created_at
    const UPDATED_AT = 'ultima_actualizacion';//por defecto updated_at

    protected $dateFormat = 'U';

    protected $connection = 'otra_conexión';
}
