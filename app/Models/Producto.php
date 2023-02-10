<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $primaryKey = "cod";
    public $incrementing = false;
    protected $keyType = "string";

    public $timestamps = false;

    protected $fillable=['cod', 'nombre', 'nombre_corto', 'descripcion', 'pvp', 'familia'];
}
