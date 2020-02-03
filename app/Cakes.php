<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cakes extends Model
{
    protected $table = 'cakes';
    public $timestamps = true;
    /*

class Modelo extends Model
{
    protected $table = 'models';
    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::Class);
    }

    public function products()
    {
        return $this->hasMany(Product::Class,'model_id','id');
    }
}
    */
}
