<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estudiantes;
use App\Models\Curso;
class RegistroCursos extends Model
{
    /** @use HasFactory<\Database\Factories\RegistroCursosFactory> */
    use HasFactory;
    protected $fillable = ["curso_id"];


    public function estudiante(){
        return $this->belongsTo(Estudiantes::class);
    }

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
