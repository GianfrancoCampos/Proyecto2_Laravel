<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['numero_documento','tipo_documento','nombre','apellidos','calle','numero_domicilio','cod_postal'];

    // Relacion Contacto - Call
    public function calls() : HasMany {
        return $this->hasMany(Call::class);//A un contacto le pueden hacer varias llamadas
}

}
