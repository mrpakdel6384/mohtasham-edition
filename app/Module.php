<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'status',
        'category_module_id'
    ];


    public function categoryModule()
    {
        return $this->belongsTo(CategoryModule::class);
    }

    public function site_requests()
    {
        return $this->belongsToMany(SiteRequest::class);
    }

}
