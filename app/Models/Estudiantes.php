<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;
use App\Models\Curso;

class Estudiantes extends Model
{
    /** @use HasFactory<\Database\Factories\EstudiantesFactory> */


    use HasFactory;
    protected $fillable = ["estudiante_id", "nombre", "telefono", "ingreso"];
    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }
}
