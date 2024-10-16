<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sale extends Model
{
    use HasFactory;

protected $fillable = [
        'producto_id',
        'cliente_id',
        'cantidad',
        'precio_venta',
    ];

    public function producto()
    {
        return $this->belongsTo(productos::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Clientes::class);
    }

    use SoftDeletes;

    protected $dates = ['deleted_at'];
}