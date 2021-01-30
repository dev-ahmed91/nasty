<?php

namespace Modules\Setting\Models;


use Eloquent;

class Setting extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'key', 'value',
    ];
}
