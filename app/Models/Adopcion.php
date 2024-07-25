<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Adopcion extends Model
{
    use HasFactory;
    protected $table = 'adopciones';
    protected $fillable = ['fecha', 'mascota_id', 'persona_id'];

    public function mascota(): BelongsTo{
        return $this->belongsTo(Mascota::class);
    }

    public function persona():BelongsTo{
        return $this->belongsTo(Persona::class);
    }


}
