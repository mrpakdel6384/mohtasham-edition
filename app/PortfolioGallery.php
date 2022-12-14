<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioGallery extends Model
{
    protected $fillable = [
        'image',
        'alt',
    ];

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
