<?php

namespace Modules\Doctor\Models;


use App\Constants\Statuses;
use Eloquent;

class Doctor extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'branch', 'description', 'image'
    ];

    protected $appends = [
        'statusLabel'
    ];

    public function getStatusLabelAttribute()
    {
        return Statuses::getLabel($this->status);
    }
}
