<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Producto extends Model
{
  use HasFactory;
  public function productoCompra(): HasMany
  {
    return $this->hasMany(CompraDetalle::class);
  }
  public function productoVenta(): HasMany
  {
    return $this->hasMany(VentaDetalle::class);
  }
  public function condicion(): BelongsTo
  {
    return $this->belongsTo(CondicionVenta::class);
  }
  public function marca(): BelongsTo
  {
    return $this->belongsTo(Marca::class);
  }
}
