<?php

namespace Modules\Product\Models;


use App\Constants\Statuses;
use Eloquent;
use Modules\Branch\Models\Branch;
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
        'name', 'price', 'description', 'image', 'category_id', 'stock'
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

    public function stocks()
    {
        return $this->belongsToMany(Branch::class, 'stocks')->withPivot('id', 'quantity');
    }

    public function branchStock($branch)
    {
        return (int) $this->stocks()->where('branch_id', $branch)->sum('stocks.quantity');
    }

    public function refreshStock()
    {
        $this->stock = $this->stocks()->sum('stocks.quantity');

        $this->save();
    }
}
