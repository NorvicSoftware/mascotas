<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Refugio extends Model
{
    use HasFactory;
    protected $table = 'refugios';
    protected $fillable = ['nombre', 'ciudad', 'direccion', 'telefono', 'encargado'];

    public function mascotas(): HasMany {
        return $this->hasMany(Mascota::class);
    }
    
}
