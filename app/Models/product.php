<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modelo Eloquent para Productos
 *
 * Define las propiedades y relaciones del producto.
 */
class Product extends Model
{
    // Tabla asociada (por convención es products)
    protected $table = 'products';

    // Los campos que se pueden asignar masivamente
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
    ];
}