<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Junior extends Model
{

    use HasFactory;
    // Relacion ISA Operador Junior
    public function operator() :BelongsTo{
        return $this->belongsTo(Operator::class);
    }
}
