<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Claim extends Model
{
    use HasFactory;

    protected $fillable = ['numero'];
    
    // Relacion Senior - Reclamos 1-N
    public function senior() :BelongsTo{
        return $this->belongsTo(Senior::class);
    }

// Relación Reclamo - Estado N-1
public function state() :BelongsTo {
    return $this->belongsTo(State::class, 'cod_estado');
}


    public function comments() : HasMany{
        return $this->hasMany(Comment::class); //
        
    }
}
