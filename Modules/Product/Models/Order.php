<?php

namespace Modules\Product\Models;

use App\Models\User;
use App\Notification\Admin\NewOrder;
use Eloquent;
use Modules\Product\Constants\OrderType;

class Order extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'phone', 'total', 'delivery_fees', 'confirmed_at', 'delivered_at', 'address', 'status', 'type',
    ];

    protected $with = ['products'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products')->withPivot('id', 'name', 'price', 'quantity');
    }


    protected $appends = [
        'typeLabel'
    ];

    public function getTypeLabelAttribute()
    {
        return OrderType::getLabel($this->type);
    }

    public static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            $admin = User::query()->where('email', '=','Marwanmaro010oo@gmail.com')->first();
            $admin->notify(new NewOrder($model));
        });
    }
}
