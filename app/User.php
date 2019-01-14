<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, HasRoles;
    use SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $dates=['deleted_at'];
     protected $primaryKey="iduser";
     public $incrementing=false;
     public $keyType="string";

     protected $fillable = [
        'name', 'email', 'password','username','role','iduser','nip','kanwil','kcu','kcukcp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
