<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'properties' => 'array'
    ];

    public function subject()
    {
        return $this->morphTo();
    }
}
