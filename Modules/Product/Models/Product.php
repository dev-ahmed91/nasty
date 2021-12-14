<?php

namespace Modules\Product\Models;


use App\Constants\Statuses;
use Eloquent;
use Modules\Category\Models\Category;

class Product extends Eloquent
{

    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'description', 'image', 'category_id'
    ];

    protected $appends = [
        'statusLabel'
    ];

    protected $with = [
        'category'
    ];

    public function getStatusLabelAttribute()
    {
        return Statuses::getLabel($this->status);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
