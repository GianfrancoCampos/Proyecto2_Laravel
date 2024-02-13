<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = ['numero_documento','id_coordinador','tipo_documento','nombre','apellido','fecha_ingreso'];

    // Relacion reflexiva Operador - Cordinador
    public function coordinator() :BelongsTo{
        return $this->belongsTo(Operator::class);
    }
    public function operators() :HasMany{
        return $this->hasMany(Operator::class, 'id_coordinador');//Operadores
    }

    // Relacion Operador - Junior 1-1
    public function junior() :HasOne{
        return $this->hasOne(Junior::class);
    }
    // Relacion Operdaor - Senior 1-1
    public function senior() :HasOne{
        return $this->hasOne(Senior::class);
    }
    public function calls() : HasMany{
        return $this->hasMany(Call::class); //

    }

    //relacion reflexiva 




}
