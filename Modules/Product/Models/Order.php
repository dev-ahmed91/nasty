<?php

namespace Modules\Product\Models;


use Eloquent;

class Order extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'phone', 'total', 'delivery_fees', 'confirmed_at', 'delivered_at', 'address', 'status',
    ];

    protected $with = ['products'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('id', 'name', 'price', 'quantity');
    }
}
