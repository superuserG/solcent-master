<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = "sub_categories";

    protected $fillable = [
      'name','slug'
    ];

    public function Category()
    {
      return $this->belongsTo('App\Category');
    }


}
