<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['service_id','name','slug'];

    public function SubCategory()
    {
      return $this->hasMany('App\SubCategory');
    }
    public function Service()
    {
      return $this->belongsTo('App\Service');
    }
}
