<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kcu extends Model
{
    protected $table = "kcus";

    protected $fillable = [
      'name','slug'
    ];

    public function Kanwil()
    {
      return $this->belongsTo('App\Kanwil');
    }

    public function Kcp()
    {
      return $this->hasMany('App\Kcp');
    }
}
