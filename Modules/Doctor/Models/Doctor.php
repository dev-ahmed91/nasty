<?php

namespace Modules\Doctor\Models;


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
}
