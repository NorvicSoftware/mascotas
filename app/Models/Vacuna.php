<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vacuna extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'fecha_aplicacion',
        'proxima_dosis',
        'veterinario',
        'mascota_id',
    ];

    protected function casts(): array
    {
        return [
            'fecha_aplicacion' => 'date',
            'proxima_dosis' => 'date',
        ];
    }

    public function mascota(): BelongsTo
    {
        return $this->belongsTo(Mascota::class);
    }
}
