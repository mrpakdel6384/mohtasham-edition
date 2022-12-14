<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
      'resnumber',
      'status',
    ];

    public function payment()
    {
        return $this->belongsTo(Order::class);
    }
}
