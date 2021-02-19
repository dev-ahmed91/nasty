<?php

namespace Modules\Lead\Models;


use Eloquent;

class Lead extends Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'branch'
    ];

    /**
     * The attributes that are appended.
     *
     * @var array
     */
    protected $appends = [
        'sentLabel'
    ];

    public function getSentLabelAttribute()
    {
        return $this->sent ? 'Sent' : 'Pending';
    }

}
