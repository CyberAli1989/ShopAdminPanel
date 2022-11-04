<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\InvoceItem
 *
 * @property-read \App\Models\Invoice|null $invoce
 * @property-read \App\Models\Product|null $product
 * @method static \Illuminate\Database\Eloquent\Builder|InvoceItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoceItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|InvoceItem query()
 * @mixin \Eloquent
 */
class InvoceItem extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function invoce()
    {
        return $this->belongsTo(Invoice::class);
    }
}
