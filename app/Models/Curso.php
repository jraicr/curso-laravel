<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'description', 'category']; // Permite los campos puestos y ¿el resto serian protegidos?
    protected $guarded = ['status']; // Protege el campo status e ignora los demas

    /**
     * Esta propiedad provocaría que Laravel ignore la convención
     * y el modelo Curso trataría de administrar la tabla "users"
     * */

    // protected $table = "users";
}
