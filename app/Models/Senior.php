<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Senior extends Model
{
    use HasFactory;
    // Relacion ISA Operador Senior
    public function operator() :BelongsTo{
        return $this->belongsTo(Operator::class);
    }
    // Relacion Senior - Reclamo 1-N
    public function claims() :HasMany{
        return $this->hasMany(Claim::class);
    }


}
