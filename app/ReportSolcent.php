<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ReportSolcent extends Model
{
  use SoftDeletes;
protected $dates = ['deleted_at'];
protected $primaryKey = "WO_ID";
public $incrementing = false;
public $keyType = "string";

protected $fillable =
[
  'WO_ID','NIP','Nama','Category_1','Category_2','Category_3','Summary','Notes',
  'Resolution','Reference','Status','Type','Wilayah','Site_Group','Site','Assignee'
];

protected $hidden =
[
  'sid','WO_ID'
];
}
