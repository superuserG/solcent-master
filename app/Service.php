<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $table = "services";

    protected $fillable = ['service','slug'];

    public function Category()
    {
      return $this->hasMany('App\Category');
    }
}
