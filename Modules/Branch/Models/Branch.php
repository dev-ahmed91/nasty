<?php

namespace Modules\Branch\Models;


use Eloquent;

class Branch extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
