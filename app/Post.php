<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
      'agentName','formID','domain','guestName','jobTitle','kanwil','ku','kp','type','status','cat_1','cat_2','title',
      'question','res','ref'
    ];
}
