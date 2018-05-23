<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kanwil extends Model
{
    protected $table = "kanwils";
    protected $fillable = [
      'name','slug'
    ];
}
