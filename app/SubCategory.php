<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = "sub_categories";

    protected $fillable = [
      'category_id','subcatname','subcatslug'
    ];

    public function Category()
    {
      return $this->belongsTo('App\Category');
    }


}
