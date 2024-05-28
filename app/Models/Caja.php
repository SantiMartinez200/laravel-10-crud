<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Caja extends Model
{
    use HasFactory;
    protected $fillable =[
      'usuario_id',
      'monto_inicial',
      'monto_final'
    ];
    
  public function cajaHaber(): HasMany
  {
    return $this->hasMany(Compra::class);
  }
  public function cajaDebe(): HasMany
  {
    return $this->hasMany(Venta::class);
  }

  public function usuarioCaja(): BelongsTo{
    return $this->belongsTo(User::class);
  }
}
