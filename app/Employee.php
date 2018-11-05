<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Employee extends Model
{
    //
    use SoftDeletes;
  protected $dates = ['deleted_at'];
  protected $primaryKey = "idemployee";
  public $incrementing = false;
  public $keyType = "string";

  protected $fillable =
  [
    'idemployee','nip','domain','guestname','jobtitle','kanwil','kcu','type','status'
  ];

  protected $hidden =
  [
    'sid','idemployee'
  ];

}
