<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $fillable = ['fecha_prestamo', 'fecha_devolucion', 'ID_Libro', 'ID_Usuario'];


    public function libro()
    {
        return $this->belongsTo(Libro::class, 'ID_Libro');
    }


    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'ID_Usuario');
    }
}
