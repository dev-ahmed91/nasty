<?php

namespace Modules\Category\Models;


use Eloquent;
use Mail;
use Modules\Category\Constants\CategoryStatus;

class Category extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image', 'parent_id', 'price'
    ];

    protected $with = ['parent'];

    protected $appends = [
        'statusLabel'
    ];

    public function getStatusLabelAttribute()
    {
        return CategoryStatus::getLabel($this->status);
    }

    public function getImageAttribute()
    {
        return $this->attributes['image'] ? $this->attributes['image'] : '/assets/images/logo.png';
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
