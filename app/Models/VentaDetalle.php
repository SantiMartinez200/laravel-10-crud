<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VentaDetalle extends Model
{
  use HasFactory;
  public function venta(): BelongsTo //
  {
    return $this->belongsTo(Venta::class);
  }

  public function caja(): BelongsTo
  {
    return $this->belongsTo(Caja::class);
  }

  public function clienteVenta(): BelongsTo //
  {
    return $this->belongsTo(Cliente::class);
  }
  public function productoVentaDetalle(): BelongsTo //
  {
    return $this->belongsTo(Producto::class);
  }

  public function proveedorVentaDetalle(): BelongsTo //
  {
    return $this->belongsTo(Proveedor::class);
  }

  public function aromaVentaDetalle(): BelongsTo //
  {
    return $this->belongsTo(Aroma::class);
  }
}
