<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = ['nombre', 'direccion ','correo_electronico', 'numero_telefono'];


    public function prestamos()
    {
        return $this->hasMany(Prestamo::class, 'ID_usuario');
    }
}
