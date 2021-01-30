<?php

namespace Modules\Country\Models;


use Eloquent;

class Country extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'key',
    ];
}
