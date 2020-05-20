<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected  $fillable = [
      'name','last_name','code','email'
    ];

    protected $hidden = [
        'password'
    ];


    public function promotion(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Promotion::class);
    }
}
