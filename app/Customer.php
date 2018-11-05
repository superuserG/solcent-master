<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;
class Customer extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $primaryKey = "iduser";
    public $incrementing = false;
    public $keyType = "string";

    protected $fillable =
    [
      'idcustomer',
      'iduser',
      'NIP',
      'status',
    ];

    protected $hidden =
    [
      'iduser','idcustomer'
    ];

    public function user()
    {
      return $this->hasOne('App\User', 'iduser');
    }
}
