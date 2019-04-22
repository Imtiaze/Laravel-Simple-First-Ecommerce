<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [''];

    public $timestamps = false;

    public function products(){
        return $this->hasMany(Product::class);
    }
}
