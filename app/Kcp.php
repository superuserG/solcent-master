<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kcp extends Model
{
  protected $table = "kcps";

  protected $fillable = [
    'name','slug'
  ];

  public function Kcu()
  {
    return $this->belongsTo('App\Kcu');
  }
}
