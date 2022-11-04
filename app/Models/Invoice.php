<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Invoice
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @mixin \Eloquent
 */
class Invoice extends Model
{
    use HasFactory;

    public function items(){
        return $this->hasMany(InvoceItem::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
